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
}
