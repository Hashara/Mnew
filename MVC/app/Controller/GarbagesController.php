<?php

class GarbagesController extends Controller
{
    public function __construct($controller , $action)
    {
        parent::__construct($controller , $action);
        $this->view->setLayout('defaultlay');
        $this->load_model('Garbage');
        //dnd($this->load_model('Contacts'));
    }



    public function indexAction()
    {
        $contacts = $this->GarbageModel->findByUserId(currentUser()->id,['order'=>'name']);
        // dnd($contacts);fname
        // dnd($contacts);
        $this->view->contacts=$contacts;
        // dnd($contacts);
        $this->view->render('garbages/index');
    }

    public function addAction()
    {   
        $contact = new Garbage();
        $validation = new Validate();
        if($_POST)
        {
            $contact->assign($_POST);   //form validation
            // dnd($contact->assign($_POST));
        $validation->check($_POST,Garbage::$addValidation);

            
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

                Router::redirect('garbages');
            }
            
            
        }
        // else
        // {

        //  dnd("jkj");
        // }
        $this->view->displayErrors=$validation->displayErrors();
        $this->view->contact = $contact;
        $this->view->postAction=PROOT.'garbages'.DS.'add';
        // dnd($this->view->postAction);
        $this->view->render('garbages/add');
    }


  public function detailsAction($id)
  {
    // dnd($id);
    $contact = $this->GarbageModel->findByIdAndUserId((int)$id,currentUser()->id);//cast is a security to check its a number
    // dnd($contact);
    if(!$contact){
      Router::redirect('garbages');//no contact
    }
    $this->view->contact = $contact;
    $this->view->render('garbages/details');
  }


  public function editAction($id)
  {
    // dnd($id);
    $validation = new Validate();
    $contact = $this->GarbageModel->findByIdAndUserId((int)$id,currentUser()->id);

    if(!$contact) Router::redirect('garbages');

    if($_POST)
    {
            $contact->assign($_POST);   //form validation
            // dnd($contact->assign($_POST));
        $validation->check($_POST,Garbage::$addValidation);

            
            // dnd($_POST);
            
            if($validation->passed())
            { 
            // dnd($contact->deleted);
                // $contact->assign($_POST);
                // dnd()
            // dnd($contact->save());
                $contact->save();

                Router::redirect('garbages');
            }
        }

    $this->view->displayErrors=$validation->displayErrors();
    $this->view->contact = $contact;
    $this->view->postAction = PROOT . 'garbages' . DS . 'edit' . DS . $contact->id;
    $this->view->render('garbages/edit');
  }

  public function deleteAction($id){
    $contact = $this->GarbageModel->findByIdAndUserId((int)$id,currentUser()->id);//cast is a security to check its a number
    // dnd($contact);
    if($contact){
      $contact->delete(); 
      // Session::addMsg('success','Contact has been deleted.');
    }
    Router::redirect('garbages');
  }

 }