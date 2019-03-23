<?php $this->setSiteTitle('Edit Requests'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-8 col-md-offset-2 well">
<!-- 	<a href="<?=PROOT?>contacts" class="btn btn-xs btn-default"> Back</a>
 -->	
 <h2 class="text-center"><?=$this->contact->displayName()?></h2>
 <?= $this->partial('requests','form')?>
	<!-- <div class="col-md-6">

	</div>
	<div class="col-md-6">

	</div>
</div> -->

<?php $this->end(); ?>