<?php

class AnnouncementsController extends Controller

{
    public function __construct($controller , $action)
    {
        parent::__construct($controller , $action);
        $this->view->setLayout('defaultlay');
        $this->load_model('Announcements');
        //dnd($this->load_model('Contacts'));
    }



    public function indexAction()
    {
        $contacts = $this->AnnouncementsModel->findByUserId(currentUser()->id,['order'=>'topic']);
        // dnd($contact);
        // dnd($contacts);fname
        if($contacts)
    {
        $this->view->contacts=$contacts;
        // dnd("jkjj");
        // dnd($this->view);
        $this->view->render('announcements/index');
    }


    }

    public function addAction()
    {   
        $contact = new Announcements();
        $validation = new Validate();
        if($_POST)
        {
            $contact->assign($_POST);   //form validation
            // dnd($contact->assign($_POST));
        $validation->check($_POST,Announcements::$addValidation);

            
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

                Router::redirect('announcements');
            }
            
            
        }
        // else
        // {

        //  dnd("jkj");
        // }
        $this->view->displayErrors=$validation->displayErrors();
        $this->view->contact = $contact;
        $this->view->postAction=PROOT.'announcements'.DS.'add';
        // dnd($this->view->postAction);
        $this->view->render('announcements/add');
    }


  public function detailsAction($id)
  {
    // dnd($id);
    $contact = $this->AnnouncementsModel->findByIdAndUserId((int)$id,currentUser()->id);//cast is a security to check its a number
    // dnd($contact);
    if(!$contact){
      Router::redirect('announcements');//no contact
    }
    $this->view->contact = $contact;
    $this->view->render('announcements/details');
  }


  public function editAction($id)
  {
    // dnd($id);
    $validation = new Validate();
    $contact = $this->AnnouncementsModel->findByIdAndUserId((int)$id,currentUser()->id);

    if(!$contact) Router::redirect('announcements');

    if($_POST)
    {
            $contact->assign($_POST);   //form validation
            // dnd($contact->assign($_POST));
        $validation->check($_POST,Announcements::$addValidation);

            
            // dnd($_POST);
            
            if($validation->passed())
            { 
            // dnd($contact->deleted);
                // $contact->assign($_POST);
                // dnd()
            // dnd($contact->save());
                $contact->save();

                Router::redirect('announcements');
            }
        }

    $this->view->displayErrors=$validation->displayErrors();
    $this->view->contact = $contact;
    $this->view->postAction = PROOT . 'announcements' . DS . 'edit' . DS . $contact->id;
    $this->view->render('announcements/edit');
  }

  public function deleteAction($id){
    $contact = $this->AnnouncementsModel->findByIdAndUserId((int)$id,currentUser()->id);//cast is a security to check its a number
    // dnd($contact);
    if($contact){
      $contact->delete(); 
      // Session::addMsg('success','Contact has been deleted.');
    }
    Router::redirect('announcements');
  }

 }