<form class="form" action=<?=$this->postAction?> method="post">

	<div><?=$this->displayErrors ?></div>
	<!-- HIIIIIIIIIIIIIIIIIIIIIIIIIII -->
	<?= input_block('text','Name','name',$this->contact->name,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
		<?= input_block('text','Contact','contact',$this->contact->contact,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>

	<div class = "col-md-12 text-right">
		<a href="<?=PROOT?>uc" class="btn btn-default"> Cancel </a>

	<?= submitBlock('Save',['class'=>'btn btn-primary']) ?>

	</div>

</form>