
<?php $this->setSiteTitle("Contacts"); ?>
<?php $this->start('body'); ?>
<h1 class ="text-center red"> My Requests </h1>
<table class="table table-striped table-condensed table-bordered">
	<thead>
		<th> Name</th>
		<th> Contact</th>
		<th> Bin</th>
		<th> Address</th>
		<th></th>
	</thead>
	<body>
		<?php foreach($this->contacts as $contact): ?>

			<tr>
				<td>
					<a 
					href="<?=PROOT?>requests/details/<?=$contact->id?>">
					<?= $contact->displayName(); ?>
					</a>
				</td>
				<td><?= $contact->contact; ?></td>
				<td><?= $contact->bin; ?></td>
				<td><?= $contact->address; ?></td>
				<td><a href="<?=PROOT?>requests/edit/<?=$contact->id?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> Edit </a>

				<a href="<?=PROOT?>requests/delete/<?=$contact->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure to Delete <?=$contact->displayName()?>')){return false;}"><i class="glyphicon glyphicon-remove"></i> Delete </a></td>
			</tr>

		<?php endforeach; ?>
	</body>
</table>
<?php $this->end(); ?>

