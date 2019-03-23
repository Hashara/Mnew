<?php

class RequestsController extends Controller
{
	public function __construct($controller , $action)
	{
		parent::__construct($controller , $action);
		$this->view->setLayout('defaultlay');
		$this->load_model('Request');
		//dnd($this->load_model('Contacts'));
	}



	public function indexAction()
	{
		$contacts = $this->RequestModel->findByUserId(currentUser()->id,['order'=>'name']);
		// dnd($contacts);fname
		$this->view->contacts=$contacts;
		$this->view->render('requests/index');
	}

	public function addAction()
	{	
		$contact = new Request();
		$validation = new Validate();
		if($_POST)
		{
			$contact->assign($_POST);	//form validation
			// dnd($contact->assign($_POST));
		$validation->check($_POST,Request::$addValidation);

			
			// dnd($_POST);
			
			if($validation->passed())
			{ 
			$contact->user_id =currentUser()->id;
			// dnd(currentUser()->id);
				// dnd("klk");
				// dnd($contact->assign($_POST));
			$contact->deleted=0;
			// dnd($contact->deleted);
				// $contact->assign($_POST);
				// dnd()
			// dnd($contact->save());
				$contact->save();

				Router::redirect('requests');
			}
			
			
		}
		// else
		// {

		// 	dnd("jkj");
		// }
		$this->view->displayErrors=$validation->displayErrors();
		$this->view->contact = $contact;
		$this->view->postAction=PROOT.'requests'.DS.'add';
		// dnd($this->view->postAction);
		$this->view->render('requests/add');
	}


  public function detailsAction($id)
  {
  	// dnd($id);
    $contact = $this->RequestModel->findByIdAndUserId((int)$id,currentUser()->id);//cast is a security to check its a number
    // dnd($contact);
    if(!$contact){
      Router::redirect('requests');//no contact
    }
    $this->view->contact = $contact;
    $this->view->render('requests/details');
  }


  public function editAction($id)
  {
  	// dnd($id);
  	$validation = new Validate();
    $contact = $this->RequestModel->findByIdAndUserId((int)$id,currentUser()->id);

    if(!$contact) Router::redirect('requests');

    if($_POST)
    {
			$contact->assign($_POST);	//form validation
			// dnd($contact->assign($_POST));
		$validation->check($_POST,Request::$addValidation);

			
			// dnd($_POST);
			
			if($validation->passed())
			{ 
			// dnd($contact->deleted);
				// $contact->assign($_POST);
				// dnd()
			// dnd($contact->save());
				$contact->save();

				Router::redirect('requests');
			}
		}

    $this->view->displayErrors=$validation->displayErrors();
    $this->view->contact = $contact;
    $this->view->postAction = PROOT . 'requests' . DS . 'edit' . DS . $contact->id;
    $this->view->render('requests/edit');
  }

  public function deleteAction($id){
    $contact = $this->RequestModel->findByIdAndUserId((int)$id,currentUser()->id);//cast is a security to check its a number
    // dnd($contact);
    if($contact){
      $contact->delete(); 
      // Session::addMsg('success','Contact has been deleted.');
    }
    Router::redirect('requests');
  }

 }