<?php

class CompanyController extends Controller
{
    public function __construct($controller , $action)
    {
        parent::__construct($controller , $action);
        $this->view->setLayout('defaultlay');
        $this->load_model('Company');
        //dnd($this->load_model('Contacts'));
    }



    public function indexAction()
    {
        $contacts = $this->CompanyModel->findByUserId(currentUser()->id,['order'=>'name']);
        // dnd($contacts);fname
        $this->view->contacts=$contacts;
        $this->view->render('companys/index');
    }

    public function addAction()
    {   
        $contact = new Company();
        $validation = new Validate();
        if($_POST)
        {
            $contact->assign($_POST);   //form validation
            // dnd($contact->assign($_POST));
        $validation->check($_POST,Company::$addValidation);

            
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

                Router::redirect('company');
            }
            
            
        }
        // else
        // {

        //  dnd("jkj");
        // }
        $this->view->displayErrors=$validation->displayErrors();
        $this->view->contact = $contact;
        $this->view->postAction=PROOT.'company'.DS.'add';
        // dnd($this->view->postAction);
        $this->view->render('companys/add');
    }


  public function detailsAction($id)
  {
    // dnd($id);
    $contact = $this->CompanyModel->findByIdAndUserId((int)$id,currentUser()->id);//cast is a security to check its a number
    // dnd($contact);
    if(!$contact){
      Router::redirect('company');//no contact
    }
    $this->view->contact = $contact;
    $this->view->render('companys/details');
  }


  public function editAction($id)
  {
    // dnd($id);
    $validation = new Validate();
    $contact = $this->CompanyModel->findByIdAndUserId((int)$id,currentUser()->id);

    if(!$contact) Router::redirect('company');

    if($_POST)
    {
            $contact->assign($_POST);   //form validation
            // dnd($contact->assign($_POST));
        $validation->check($_POST,Company::$addValidation);

            
            // dnd($_POST);
            
            if($validation->passed())
            { 
            // dnd($contact->deleted);
                // $contact->assign($_POST);
                // dnd()
            // dnd($contact->save());
                $contact->save();

                Router::redirect('company');
            }
        }

    $this->view->displayErrors=$validation->displayErrors();
    $this->view->contact = $contact;
    $this->view->postAction = PROOT . 'company' . DS . 'edit' . DS . $contact->id;
    $this->view->render('companys/edit');
  }

  public function deleteAction($id){
    $contact = $this->CompanyModel->findByIdAndUserId((int)$id,currentUser()->id);//cast is a security to check its a number
    // dnd($contact);
    if($contact){
      $contact->delete(); 
      // Session::addMsg('success','Contact has been deleted.');
    }
    Router::redirect('company');
  }

 }