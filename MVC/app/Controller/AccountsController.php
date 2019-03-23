<?php

class AccountsController extends Controller
{
	public function __construct($controller , $action)
	{
		parent::__construct($controller , $action);
		$this->view->setLayout('defaultlay');
		$this->load_model('Users');
		//dnd($this->load_model('Contacts'));
	}


  public function indexAction()
  {
    // $account = $this->AccountsModel->findByUserId(currentUser()->id);
    $account=currentUser();
    // dnd(findByUserId(currentUser()->id,['order'=>'lname, fname']));
    // dnd($account);
    $this->view->account=$account;
    $this->view->render('accounts/index');
  }

  public function detailsAction($id)
  {
    // dnd($id);
    $account = currentUser();//cast is a security to check its a number
    // dnd($contact);
    if(!$account){
      Router::redirect('accounts');//no contact
    }
    $this->view->account = $account;
    $this->view->render('accounts/details');
  }

    public function deleteAction($id)
   {
    $account = currentUser();
    $id=$account->id;
    // dnd($id);
    // $account->logout();
    
    $account = $this->UsersModel->delete($id);
    // dnd($account->deleted);
    // echo '5';
    // dnd($id);
    // dnd($account->logout());
// dnd(currentUser());
    //cast is a security to check its a number
    // dnd($account);
    
    // if($account){
    //   $account->delete(); 
      // Session::addMsg('success','Contact has been deleted.');
   // }
    Router::redirect('register/logout');
  }


  public function editAction($id)
  {
    // dnd($id);
    $validation = new Validate();
    $account = currentUser();
    // dnd($contact->fname);

    if(!$account) Router::redirect('accounts');

    if($_POST)
    {
      $account->assign($_POST); //form validation
      // dnd($contact->assign($_POST));
    $validation->check($_POST,[
            'username' => [
                'display' => "Username",
                'required' => true
            ],
            'password' => [
                'display' => "Password",
                'required' => true
                
            ]
        ]);

      
      // dnd($_POST);
      
      if($validation->passed())
      { 
      // dnd($contact->deleted);
        // $contact->assign($_POST);
        // dnd()
      // dnd($contact->save());
        $account->save();

        Router::redirect('accounts');
      }
    }

    $this->view->displayErrors=$validation->displayErrors();
    $this->view->account = $account;
    // $this->view->postAction = PROOT . 'register' . DS . 'edit' . DS . $account->id;
    $this->view->render('accounts/edit');
  }



 }

 ?>