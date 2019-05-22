<?php
/**
 * Created by PhpStorm.
 * Author: wxuns <wxuns@wxuns.cn>
 * Link: http://wxuns.cn
 * Date: 2018/8/5
 * Time: 15:45.
 */
class UserController extends BaseController
{
    /**
     * 登录
     * @return bool
     */
    public function loginAction()
    {
        $request = Request($this->getRequest());
        unset($request->csrf_token);
        $rules = [
            'username' => 'required|min:5',
            'password' => 'required|digits_between:6,12'
        ];
        $validator = $this->factory->make((array)$request, $rules);
        if ($validator->passes()) {
            //通过
            $user = DB::table('users')
                ->where('username',$request->username)
                ->orwhere('mobile',$request->username)
                ->orwhere('email',$request->username)
                ->where('status',1)->first();
            if ($user&&$user->password == md5('wxuns'.$request->password)){
                unset($user->password);
                \Tool\Session::set('user',$user);
                echo json_encode(['status'=>0,'message'=>'登录成功']);
            }else{
                echo json_encode(['status'=>402,'message'=>'账号不存在']);
            }
        } else {
            //未通过
            //输出错误消息
            echo json_encode(['status'=>401,'message'=> $validator->messages()->all()[0]]); // 或者 $validator->errors();
        }
        return false;
    }
    public function signupAction()
    {
        $hello = new \Tool\Hello();
        echo $hello->world();

        return false;
    }
}
