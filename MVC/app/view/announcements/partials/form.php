<form class="form" action=<?=$this->postAction?> method="post">

    <div><?=$this->displayErrors ?></div>
    <!-- HIIIIIIIIIIIIIIIIIIIIIIIIIII -->
    <?= input_block('text','Topic','topic',$this->contact->topic,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
    <?= input_block('text','Content','content',$this->contact->content,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
    <?= input_block('text','Urban Council','uc',$this->contact->uc,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>


    <div class = "col-md-12 text-right">
        <a href="<?=PROOT?>contacts" class="btn btn-default"> Cancel </a>

    <?= submitBlock('Save',['class'=>'btn btn-primary']) ?>

    </div>

</form>