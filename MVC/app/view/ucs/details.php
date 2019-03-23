<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-8 col-md-offset-2 well">
	<a href="<?=PROOT?>contacts" class="btn btn-xs btn-default"> Back</a>
	<h2 class="text-center"><?=$this->contact->displayaddName()?></h2>
	<div class="col-md-6">
		<p><strong><pre> Name :  </strong><?=$this->contact->name?></pre></p>
		<p><strong><pre> Contact :  </strong><?=$this->contact->contact?></pre></p>

	</div>
</div>

<?php $this->end(); ?>