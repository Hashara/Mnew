<?php $this->setSiteTitle('Edit Uc'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-8 col-md-offset-2 well">

 -->	
 <h2 class="text-center"><?=$this->contact->displayName()?></h2>
 <?= $this->partial('ucs','form')?>

</div>

<?php $this->end(); ?>