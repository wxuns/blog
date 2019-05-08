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
    public function addAction()
    {
        $this->getView()->display('admin/article/addarticle');
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
