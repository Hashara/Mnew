<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-8 col-md-offset-2 well">
	<a href="<?=PROOT?>suggestions" class="btn btn-xs btn-default"> Back</a>

	<div class="col-md-6">
		<p><strong><pre> Topic :  </strong><?=$this->contact->topic?></pre></p>
		<p><strong><pre> Content :  </strong><?=$this->contact->content?></pre></p>
		<p><strong><pre> Date :  </strong><?=$this->contact->date?></pre></p>

	</div>
	<div class="col-md-6">

	</div>
</div>

<?php $this->end(); ?>