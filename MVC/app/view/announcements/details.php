<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-8 col-md-offset-2 well">
	<a href="<?=PROOT?>contacts" class="btn btn-xs btn-default"> Back</a>
	<h2 class="text-center"><?=$this->contact->topic?></h2>
	<div class="col-md-6">
		<p><strong><pre> Content :  </strong><?=$this->contact->content?></pre></p>
		<p><strong><pre> Urban Council :  </strong><?=$this->contact->uc?></pre></p>
	</div>

</div>

<?php $this->end(); ?>