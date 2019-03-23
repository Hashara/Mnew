
<?php $this->setSiteTitle("Ucs"); ?>
<?php $this->start('body'); ?>
<h1 class ="text-center red"> My Contacts </h1>
<table class="table table-striped table-condensed table-bordered">
	<thead>
		<th> Name</th>
		<th> Contact</th>

		<th></th>
	</thead>
	<body>
		<?php foreach($this->contacts as $contact): ?>

			<tr>
				<td>
					<a 
					href="<?=PROOT?>uc/details/<?=$contact->id?>">
					<?= $contact->displayName(); ?>
					</a>
				</td>
				<td><?= $contact->contact; ?></td>

				<td><a href="<?=PROOT?>uc/edit/<?=$contact->id?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> Edit </a>

				<a href="<?=PROOT?>uc/delete/<?=$contact->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure to Delete <?=$contact->displayName()?>')){return false;}"><i class="glyphicon glyphicon-remove"></i> Delete </a></td>
			</tr>

		<?php endforeach; ?>
	</body>
</table>
<?php $this->end(); ?>

