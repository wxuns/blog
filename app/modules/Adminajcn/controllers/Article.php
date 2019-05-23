<?php

class ArticleController extends BaseController
{
    public function articlelistAction()
    {
        $this->getView()->display('admin/article/list');
        return false;
    }
    public function articleclassAction()
    {
        $this->getView()->display('admin/article/classlist');
        return false;
    }

    /**
     * 添加文章
     * @return bool
     */
    public function addAction()
    {
        $auth = DB::table('users')
            ->where('users.id',\Tool\Session::get('user')->id)
            ->join('auth','auth.id','=','users.auth')
            ->select('auth.id','auth.star')->first();
        $range = DB::table('auth')
            ->where('star','<',$auth->star)
            ->select('id')->get()->toArray();
        $limit = $auth->id;
        foreach ($range as $value){
            if ($value->id != $auth->id){
                $limit .= ','.$value->id;
            }
        }
        $class = DB::table('article_class')
            ->whereIn('auth',explode(',',$limit))
            ->select('id','classname')->get();
        $this->getView()->display('admin/article/addarticle',[
            'csrf' => Csrf::generate('csrf_token'),
            'class'=>$class
        ]);
        return false;
    }
    /**
     * 添加文章
     */
    public function addarticleAction()
    {
        $request = Request($this->getRequest());
        unset($request->csrf_token);
        $rules = [
            'title' => 'required|min:5',
            'class_id' => 'required|numeric',
            'keyword'=>'required',
            'content'=>'required'
        ];
        $validator = $this->factory->make((array)$request, $rules);

        //判断验证是否通过
        if ($validator->passes()) {
            //通过
            $request->author = $this->user->id;
            $request->time = date('Y-m-d H:i:s');
            $request->last_time = date('Y-m-d H:i:s');
            $request = (array)$request;
            unset($request['editormd-image-file']);
            if (DB::table('article')->insert($request)){
                echo json_encode(['status'=>0,'message'=>'添加成功']);
            }
        } else {
            //未通过
            //输出错误消息
            echo json_encode(['status'=>402,'message'=> $validator->messages()->all()[0]]); // 或者 $validator->errors();
        }
        return false;
    }

    /**
     * 添加文章
     * @return bool
     */
    public function getlistAction()
    {
        $request = Request($this->getRequest());
        $data = DB::table('article')
            ->skip(($request->page-1)*$request->limit)
            ->take($request->limit)
            ->join('users','users.id','=','article.author')
            ->join('article_class','article_class.id','=','article.class_id')
            ->select('article.*','users.username','article_class.classname')
            ->orderBy('id','desc')
            ->get();
        echo json_encode(['code'=>0,'msg'=>'','count'=>DB::table('article')->count(),'data'=>$data]);
        return false;
    }

    /**
     * 修改文章
     * @return bool
     */
    public function editAction()
    {
        $request = Request($this->getRequest());
        $auth = DB::table('users')
            ->where('users.id',$this->user->id)
            ->join('auth','auth.id','=','users.auth')
            ->select('auth.id','auth.star')->first();
        $range = DB::table('auth')
            ->where('star','<',$auth->star)
            ->select('id')->get()->toArray();
        $limit = $auth->id;
        foreach ($range as $value){
            if ($value->id != $auth->id){
                $limit .= ','.$value->id;
            }
        }
        $class = DB::table('article_class')
            ->whereIn('auth',explode(',',$limit))
            ->select('id','classname')->get();
        //文章详情
        $article = DB::table('article')
            ->where('id',$request->id)
            ->first();
        $this->getView()->display('admin/article/addarticle',[
            'csrf' => Csrf::generate('csrf_token'),
            'class'=>$class,
            'article'=>$article
        ]);
        return false;
    }

    /**
     * 修改文章api
     * @return bool
     */
    public function editarticleapiAction()
    {
        $request = Request($this->getRequest());
        unset($request->csrf_token);
        $rules = [
            'title' => 'required|min:5',
            'class_id' => 'required|numeric',
            'keyword'=>'required',
            'content'=>'required'
        ];
        $validator = $this->factory->make((array)$request, $rules);

        //判断验证是否通过
        if ($validator->passes()) {
            //通过
            $request->author = $this->user->id;
            $request->last_time = date('Y-m-d H:i:s');
            if (DB::table('article')->where('id',$_GET['id'])->update((array)$request)){
                echo json_encode(['status'=>0,'message'=>'修改成功']);
            }
        } else {
            //未通过
            //输出错误消息
            echo json_encode(['status'=>402,'message'=> $validator->messages()->all()[0]]); // 或者 $validator->errors();
        }
        return false;
    }
    public function delarticleAction()
    {
        $id = Request($this->getRequest())->id;
        $status = DB::table('article')->where('id',$id)->value('status');
        if (DB::table('article')->where('id',$id)->update(['status'=>!$status])){
            echo json_encode(['status'=>1,'msg'=>'状态修改成功']);
        }
        return false;
    }
    /**
     * 获得类别api
     * @return bool
     */
    public function getclassAction()
    {
        $request = Request($this->getRequest());
        $data = DB::table('article_class')
            ->skip(($request->page-1)*$request->limit)
            ->take($request->limit)
            ->join('auth','auth.id','=','article_class.auth')
            ->select('article_class.*','auth.rolename')
            ->orderBy('id','desc')
            ->get();
        echo json_encode(['code'=>0,'msg'=>'','count'=>DB::table('article_class')->count(),'data'=>$data]);
        return false;
    }
    /**
     * 添加分类
     * @return bool
     */
    public function addclassAction()
    {
        $request = Request($this->getRequest());
        if ($request) {
            $request->time = date('Y-m-d H:i:s');
            unset($request->csrf_token);
            DB::table('article_class')->insert((array)$request);
            echo json_encode(['status'=>1,'msg'=>'分类添加成功']);
        }else{
            $this->getView()->display('admin/article/addclass', [
                'csrf' => Csrf::generate('csrf_token'),
                'auth' => DB::table('auth')->select('id', 'rolename')->get()
            ]);
        }
        return false;
    }

    /**
     * 编辑类别
     * @return bool
     */
    public function classeditAction()
    {
        $request = Request($this->getRequest());
        if (!isset($request->id)) {
            unset($request->csrf_token);
            DB::table('article_class')->where('id',$_GET['id'])->update((array)$request);
            echo json_encode(['status'=>1,'msg'=>'分类修改成功']);
        }else{
            $this->getView()->display('admin/article/addclass', [
                'csrf' => Csrf::generate('csrf_token'),
                'auth' => DB::table('auth')->select('id', 'rolename')->get(),
                'class'=> DB::table('article_class')->where('id', $request->id)->first()
            ]);
        }
        return false;
    }

    /**
     * 删除类别
     * @return bool
     */
    public function delclassAction()
    {
        $id = Request($this->getRequest())->id;
        $status = DB::table('article_class')->where('id',$id)->value('status');
        if (DB::table('article_class')->where('id',$id)->update(['status'=>!$status])){
            echo json_encode(['status'=>1,'msg'=>'状态修改成功']);
        }
        return false;
    }
    public function websiteAction()
    {
        $this->getView()->display('admin/article/website', [
            'csrf' => Csrf::generate('csrf_token')
        ]);
        return false;
    }
}
