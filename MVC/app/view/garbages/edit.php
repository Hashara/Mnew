<?php $this->setSiteTitle('Edit Garbage Details'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-8 col-md-offset-2 well">
<!-- 	<a href="<?=PROOT?>contacts" class="btn btn-xs btn-default"> Back</a>
 -->	
 <h2 class="text-center"><?=$this->contact->displayName()?></h2>
 <?= $this->partial('garbages','form')?>
	<!-- <div class="col-md-6">


<?php $this->end(); ?>