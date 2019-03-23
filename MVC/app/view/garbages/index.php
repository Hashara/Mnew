
<?php $this->setSiteTitle("Garbages"); ?>
<?php $this->start('body'); ?>
<h1 class ="text-center red"> Details </h1>
<table class="table table-striped table-condensed table-bordered">
	<thead>
		<th> Place</th>
		<th> Date</th>
		<th> Amount of Gather gabages</th>
		<th> Amount of sales gabages</th>
		<th></th>
	</thead>
	<body>
		<?php foreach($this->contacts as $contact): ?>
			
			<tr>
				<td>
					<a 
					href="<?=PROOT?>garbages/details/<?=$contact->id?>">
					<?= $contact->name; ?>
					</a>
				</td>
				<td><?= $contact->date; ?></td>
				<td><?= $contact->plus; ?></td>
				<td><?= $contact->sale; ?></td>
				<td><a href="<?=PROOT?>garbages/edit/<?=$contact->id?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> Edit </a>

				<a href="<?=PROOT?>garbages/delete/<?=$contact->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure to Delete <?=$contact->displayName()?>')){return false;}"><i class="glyphicon glyphicon-remove"></i> Delete </a></td>
			</tr>

		<?php endforeach; ?>
	</body>
</table>
<?php $this->end(); ?>




?>

