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
        $limit = '';
        foreach ($range as $value){
            $limit .= $limit==''?$value->id:(','.$value->id);
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
}
