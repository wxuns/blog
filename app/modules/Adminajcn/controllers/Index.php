<?php

class IndexController extends BaseController
{
	public function indexAction()
	{
		$this->getView()->display('admin/index');
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
