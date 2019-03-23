<?php $this->setSiteTitle($this->request->displayName()); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-8 col-md-offset-2 well">
	<a href="<?=PROOT?>requests" class="btn btn-xs btn-default"> Back</a>
	<h2 class="text-center"><?=$this->request->displayName()?></h2>
	<div class="col-md-6">
		<p><strong><pre> Contact :  </strong><?=$this->request->contact?></pre></p>
		<p><strong><pre> Bin :  </strong><?=$this->request->bin?></pre></p>
		<p><strong><pre> Address :  </strong><?=$this->request->address?></pre></p>
	</div>
</div>

<?php $this->end(); ?>