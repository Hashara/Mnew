<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-8 col-md-offset-2 well">
	<a href="<?=PROOT?>company" class="btn btn-xs btn-default"> Back</a>
	<h2 class="text-center"><?=$this->contact->name?></h2>
	<div class="col-md-6">
		<p><strong><pre> Email :  </strong><?=$this->contact->email?></pre></p>
		<p><strong><pre> Contact Number :  </strong><?=$this->contact->contact?></pre></p>
		<p><strong><pre> Address :  </strong><?=$this->contact->address?></pre></p>
		<p><strong><pre> Web Site :  </strong><?=$this->contact->website?></pre></p>
	</div>
	<div class="col-md-6">

	</div>
</div>

<?php $this->end(); ?>