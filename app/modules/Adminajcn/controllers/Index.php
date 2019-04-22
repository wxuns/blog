<?php

class IndexController extends BaseController
{
	public function indexAction()
	{
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
		$this->getView()->display('admin/index',['rangelist'=>$rangelist]);
		return false;
	}
	public function testAction()
	{
		$this->getView()->display('admin/test');
		return false;
	}
	public function homeAction()
	{
		$this->getView()->display('admin/home');
		return false;
	}
}
