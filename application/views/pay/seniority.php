<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Barème d'ancienneté </div>
		<div class="tools">
			<a href="javascript:;" class="collapse"> </a>
			<a href="#seniority" data-toggle="modal" class="config"> </a>
			<a href="javascript:;" class="reload"> </a>
			<a href="javascript:;" class="remove"> </a>
		</div>
	</div>
	<div class="portlet-body">
		<div class="table-responsive">
			<table class="text-center table table-striped table-hover table-bordered" id="sample_editable_1">
				<thead>
					<tr>
						<th class="text-center"> Tranche </th>
						<th class="text-center"> Taux </th>
						<th class="text-center"> Edit </th>
						<th class="text-center"> Delete </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($query->result() as $value): ?>
					<tr>
						<td><?= $value->sen_year; ?> ans</td>
						<td class="center"><?= $value->sen_rate; ?> %</td>
						<td>
							<a class="edit" href="javascript:;"> Modifier </a>
						</td>
						<td>
							<a class="edit" href="javascript:;"> Supprimier </a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view('modals/seniority.php'); ?>
