<?php

class IndexController extends BaseController
{
    /**
     * 主页
     * @return bool
     */
	public function indexAction()
	{
	    $user = \Tool\Session::get('user');
	    if (!$user){
            $this->redirect('/login/');
        }
	    //目录菜单
        $rangelist = DB::table('range')->get();
        foreach($rangelist as $k=>$v){
            if ($v->parent_id > 0){
                foreach ($rangelist as $key=>$value){
                    if ($value->id == $v->parent_id){
                        if (isset($rangelist[$key]->level)){
                            array_push($rangelist[$key]->level,$v);
                        }else{
                            $rangelist[$key]->level[] = $v;
                        }
                        unset($rangelist[$k]);
                    }
                }
            }
        }
		$this->getView()->display('admin/index',[
		    'rangelist'=>$rangelist,
            'user'=>\Tool\Session::get('user')
        ]);
		return false;
	}

    /**
     * 获得菜单
     * @return bool
     */
	public function getmenuAction()
	{
        //目录菜单
        $rangelist = DB::table('range')->where('status',1)->get();
        foreach($rangelist as $k=>$v){
            if ($v->parent_id > 0){
                foreach ($rangelist as $key=>$value){
                    if ($value->id == $v->parent_id){
                        if (isset($rangelist[$key]->level)){
                            array_push($rangelist[$key]->level,$v);
                        }else{
                            $rangelist[$key]->level[] = $v;
                        }
                        unset($rangelist[$k]);
                    }
                }
            }
        }
        echo json_encode($rangelist);
		return false;
	}

    /**
     * 控制台
     * @return bool
     */
	public function homeAction()
	{
		$this->getView()->display('admin/home');
		return false;
	}
	public function writemenuAction()
    {
        $config = new \Yaf\Config\Ini(APPLICATION_PATH.'/conf/adminajcn.ini', ini_get('yaf.environ'));
        foreach($config->routes as $value){
            if(!DB::table('range')->where('path',trim($value->match,'/'))->exists()){
                DB::table('range')->insert([
                    'icon'=>'',
                    'path'=>trim($value->match,'/'),
                    'name'=>'test'
                ]);
                var_dump($value->match);
            }
        }
        return false;
    }

    /**
     * 图片上传api
     * @return bool
     * @throws Exception
     */
    public function uploadimgAction()
    {
        $file = $_FILES['editormd-image-file'];
        $type = explode('/',$file['type']);
        if($type[0]=='image'&&$file['error']==0&&$file['size']<=10485760){
            $key = '/' . $_GET['type'] . '/' . date('Y/m/') . md5(time()) . '.' . $type[1];
            $local_path = $_FILES['editormd-image-file']['tmp_name'];
            $result = $this->ossUpload($key,$local_path);
            if ($result){
                echo json_encode([
                    'success'=>1,
                    'message'=>'上传成功',
                    'url'=>str_replace('wxuns-1251014182.cos.ap-beijing.myqcloud.com','images.wxuns.cn',$result['ObjectURL'])
                ]);
            }else{
                echo json_encode([
                    'success'=>0,
                    'message'=>'上传失败'
                ]);
            }
        }else{
            throw new Exception('not image.');
        }

        return false;
    }
}
