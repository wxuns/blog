<?php

class ArticleController extends BaseController
{
    public function articlelistAction()
    {
        $this->getView()->display('admin/article/list');
        return false;
    }
    public function articleclassAction()
    {
        $this->getView()->display('admin/article/classlist');
        return false;
    }
    public function addAction()
    {
        $this->getView()->display('admin/article/addarticle');
        return false;
    }
    public function addclassAction()
    {
        $this->getView()->display('admin/article/addclass');
        return false;
    }
}
