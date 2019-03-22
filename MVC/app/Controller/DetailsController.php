<?php
class DetailsController extends Controller
{
	public function __construct($Controller,$action)
	{
		parent::__construct($Controller,$action);
		$this->view->setLayout('defaultlay');
	}

	public function indexAction()
	{
		$this->view->render('details/index');
	}
}
?>