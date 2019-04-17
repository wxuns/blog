<?php

class AuthController extends BaseController
{
    public function rangeAction()
    {
        $this->getView()->display('admin/range');
        return false;
    }
}
