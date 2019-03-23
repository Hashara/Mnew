<form class="form" action=<?=$this->postAction?> method="post">

	<div><?=$this->displayErrors ?></div>
	<!-- HIIIIIIIIIIIIIIIIIIIIIIIIIII -->
	<?= input_block('text','Place','name',$this->contact->name,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
	<?= input_block('date','Date','date',$this->contact->date,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
	<?= input_block('text','Gather Amount','plus',$this->contact->plus,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
	<?= input_block('text','Sale Amount','sale',$this->contact->sale,['class'=>'form-control'],['class'=>'form-group col-md-6']) ?>
	
	<div class = "col-md-12 text-right">
		<a href="<?=PROOT?>garbages" class="btn btn-default"> Cancel </a>

	<?= submitBlock('Save',['class'=>'btn btn-primary']) ?>

	</div>

</form>