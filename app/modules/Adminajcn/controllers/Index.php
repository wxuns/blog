<?php

class IndexController extends BaseController
{
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
	public function homeAction()
	{
		$this->getView()->display('admin/home');
		return false;
	}
}
