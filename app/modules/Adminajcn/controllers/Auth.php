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
        $parent = DB::table('range')->where('parent_id',0)->select('id','name')->get();

        $this->getView()->display('admin/addrange',['parent'=>$parent,'csrf'=>Csrf::generate('csrf_token')]);
        return false;
    }
}
