<?php

class UserController extends BaseController 
{
    public function loginAction()
    {
        $this->getView()->display('admin/login');
        return false;
    }
    /**
     * 用户管理
     * @return bool
     */
    public function userlistAction()
    {
        $this->getView()->display('admin/userlist');
        return false;
    }

    public function adduserAction()
    {
        $this->getView()->display('admin/adduser');
        return false;
    }
    /**
     * 角色管理
     * @return bool
     */
    public function userroleAction()
    {
        $this->getView()->display('admin/userrole');
        return false;
    }

    /**
     * 角色管理api
     * @return bool
     */
    public function roleapiAction()
    {
        $request = Request($this->getRequest());
        $auth = DB::table('auth')->skip(($request->page-1)*$request->limit)->take($request->limit)->get();
        echo json_encode(['code'=>0,'msg'=>'','count'=>1,'data'=>$auth]);
        return false;
    }

    /**
     * 添加角色
     * @return bool
     */
    public function addroleAction()
    {
        $request = Request($this->getRequest());
        if ($request){
            unset($request->csrf_token);
            $request->time = date('Y-m-d H:i:s');
            if(DB::table('auth')->insert((array)$request)){
                echo json_encode(['status'=>1,'msg'=>'角色添加成功']);
            }
            return false;
        }
        $this->getView()->display('admin/addrole',['csrf'=>Csrf::generate('csrf_token')]);
        return false;
    }

    /**
     * 修改角色权限
     * @return bool
     */
    public function editroleAction()
    {
        $request = Request($this->getRequest());
        if (count((array)$request)>1){
            unset($request->csrf_token);
            $request->time = date('Y-m-d H:i:s');
            if(DB::table('auth')->where('id',$_GET['id'])->update((array)$request)){
                echo json_encode(['status'=>1,'msg'=>'角色修改成功']);
            }
            return false;
        }
        $auth = DB::table('auth')->where('id',$request->id)->first();
        $this->getView()->display('admin/addrole',['csrf'=>Csrf::generate('csrf_token'),'auth'=>$auth]);
        return false;
    }
}