<?php $this->setSiteTitle("Add Announcement"); ?>
<?php $this->start('body'); ?>

<div class="col-md-8 col-md-offset-2 well">
	<h2 class="text-center"> Add a Announcement </h2>
	<?php $this->partial('announcements','form'); ?>
</div>

<?php $this->end(); ?>