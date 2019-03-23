<form class="form" action=<?=$this->postAction?> method="post">

    <div><?=$this->displayErrors ?></div>
    <!-- HIIIIIIIIIIIIIIIIIIIIIIIIIII -->
    <?= input_block('text','Company Name','name',$this->contact->name,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
    <?= input_block('text','Contact Number','contact',$this->contact->contact,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
    <?= input_block('text','Email','email',$this->contact->email,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
    <?= input_block('text','Address','address',$this->contact->address,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
    <?= input_block('text','Web Site','website',$this->contact->website,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>


    <div class = "col-md-12 text-right">
        <a href="<?=PROOT?>company" class="btn btn-default"> Cancel </a>

    <?= submitBlock('Save',['class'=>'btn btn-primary']) ?>

    </div>

</form>