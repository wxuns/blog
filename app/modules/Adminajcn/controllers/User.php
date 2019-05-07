<?php

class UserController extends BaseController
{
    public function loginAction()
    {
        Tool\Session::del('user');
        $request = Request($this->getRequest());
        if ($request){
            $user = DB::table('users')->where('username',$request->username)
                ->orwhere('mobile',$request->username)
                ->orwhere('email',$request->username)
                ->where('status',1)->first();
            if ($user&&$user->password == md5('wxuns'.$request->password)){
                unset($user->password);
                \Tool\Session::set('user',$user);
                echo json_encode(['status'=>1,'msg'=>'登录成功']);
            }else{
                echo json_encode(['status'=>400,'msg'=>'账号不存在']);
            }

            return false;
        }
        $this->getView()->display('admin/login',['csrf'=>Csrf::generate('csrf_token')]);
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

    /**
     * 添加用户
     * @return bool
     */
    public function adduserAction()
    {
        $request = Request($this->getRequest());
        if ($request){
            unset($request->csrf_token);
            $request->password = md5('wxuns'.$request->password);
            DB::table('users')->insert((array)$request);
            echo json_encode(['status'=>1,'msg'=>'用户添加成功']);
            return false;
        }
        $this->getView()->display('admin/adduser',[
            'csrf'=>Csrf::generate('csrf_token'),
            'auth'=>DB::table('auth')->select('id','rolename')->get()
        ]);
        return false;
    }

    /**
     * 修改用户信息
     * @return bool
     */
    public function edituserAction()
    {
        $request = Request($this->getRequest());
        if(isset($request->id)){
            $usermsg = DB::table('users')->where('id',$request->id)->first();
            $this->getView()->display('admin/adduser',[
                'csrf'=>Csrf::generate('csrf_token'),
                'auth'=>DB::table('auth')->select('id','rolename')->get(),
                'usermsg'=>$usermsg
            ]);
        }else{
            unset($request->csrf_token);
            if (!$request->password)
                unset($request->password);
            else
                $request->password = md5('wxuns'.$request->password);
            DB::table('users')->where('id',$_GET['id'])->update((array)$request);
            echo json_encode(['status'=>1,'msg'=>'用户信息修改成功']);
        }
        return false;
    }

    /**
     * 封号
     * @return bool
     */
    public function deluserAction()
    {
        $id = Request($this->getRequest())->id;
        $status = DB::table('users')->where('id',$id)->value('status');
        if (DB::table('users')->where('id',$id)->update(['status'=>!$status])){
            echo json_encode(['status'=>1,'msg'=>'状态修改成功']);
        }
        return false;
    }
    /**
     * 获取用户列表
     * @return bool
     */
    public function getlistAction()
    {
        $request = Request($this->getRequest());
        $data = DB::table('users')
            ->skip(($request->page-1)*$request->limit)
            ->take($request->limit)
            ->join('auth','auth.id','=','users.auth')
            ->select('users.id','users.username','users.mobile','users.email','users.nick','users.pic','users.status','users.intro','auth.rolename')
            ->orderBy('id','desc')
            ->get();
        echo json_encode(['code'=>0,'msg'=>'','count'=>DB::table('users')->count(),'data'=>$data]);
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
        echo json_encode(['code'=>0,'msg'=>'','count'=>DB::table('auth')->count(),'data'=>$auth]);
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
