<?php

class AuthController extends BaseController
{
    public function rangeAction()
    {
        $this->getView()->display('admin/range');
        return false;
    }
    public function addRangeAction()
    {

        $request = Request($this->getRequest());
        if($request){
            unset($request->csrf_token);
            if (DB::table('range')->insert((array)$request)){
                echo json_encode(['status'=>1,'msg'=>'新的权限添加成功']);
            }
            return false;
        }
        $parent = DB::table('range')->where('parent_id',0)->select('id','name')->get();

        $this->getView()->display('admin/addrange',['parent'=>$parent,'csrf'=>Csrf::generate('csrf_token')]);
        return false;
    }
}
