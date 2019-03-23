
<?php $this->setSiteTitle("Company Names"); ?>
<?php $this->start('body'); ?>
<h1 class ="text-center red"> My Contacts </h1>
<table class="table table-striped table-condensed table-bordered">
	<thead>
		<th>Website</th>
		<th> Company Name</th>
		<th> Contact Number</th>
		<th> Email</th>
		<th> Address</th>
		<th></th>
	</thead>
	<body>
		<?php foreach($this->contacts as $contact): ?>

			<tr>
				<td>
					<a 
					href="<?=PROOT?>company/details/<?=$contact->id?>">
					<?= $contact->website; ?>
					</a>
				</td>
				<td><?= $contact->name; ?></td>
				<td><?= $contact->contact; ?></td>
				<td><?= $contact->email; ?></td>
				<td><?= $contact->address; ?></td>
				<td><a href="<?=PROOT?>company/edit/<?=$contact->id?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> Edit </a>

				<a href="<?=PROOT?>company/delete/<?=$contact->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure to Delete <?=$contact->displayName()?>')){return false;}"><i class="glyphicon glyphicon-remove"></i> Delete </a></td>
			</tr>

		<?php endforeach; ?>
	</body>
</table>
<?php $this->end(); ?>

