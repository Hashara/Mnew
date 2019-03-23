<?php $this->setSiteTitle($this->contact->displayName()); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>

<div class="col-md-8 col-md-offset-2 well">
	<a href="<?=PROOT?>garbages" class="btn btn-xs btn-default"> Back</a>
	<div class="col-md-6">
		<p><strong><pre> Place :  </strong><?=$this->contact->name?></pre></p>
		<p><strong><pre> Date :  </strong><?=$this->contact->date?></pre></p>
		<p><strong><pre> Gather Amount :  </strong><?=$this->contact->plus?></pre></p>
		<p><strong><pre> Sale Amount :  </strong><?=$this->contact->sale?></pre></p>
	</div>
</div>

<?php $this->end(); ?>