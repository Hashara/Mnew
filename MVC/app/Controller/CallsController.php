<?php
class CallsController extends Controller
{
	public function __construct($Controller,$action)
	{
		parent::__construct($Controller,$action);
		$this->view->setLayout('defaultlay');
	}

	public function indexAction()
	{
		$this->view->render('call/index');
	}
}
?>