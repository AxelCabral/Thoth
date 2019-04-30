<input type="hidden" id="id_project" value="<?= $project->get_id(); ?>">
<div class="card">
	<div class="card-header">
		<h4> Members at <?= $project->get_title() ?></h4>
	</div>
	<div class="card-body">
		<div class="col-md-6">
			<h5> Add Members</h5>
			<div class="form-group">
				<label for="add_user">E-mail </label>
				<select id="add_email_user" class="form-control">
					<option value=""></option>
					<?php foreach ($users as $user) { ?>
						<option value="<?= $user->get_email() ?>"><?= $user->get_email() ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="add_level_user">Level </label>
				<select id="add_level_user" class="form-control">
					<option value=""></option>
					<?php foreach ($levels as $level) { ?>
						<option value="<?= $level ?>"><?= $level ?></option>
					<?php } ?>
				</select>
			</div>
			<button class="btn btn-success" type="button" onclick="add_research()"><span
					class="fas fa-plus"></span>
			</button>
		</div>
		<br>
		<h6>Members</h6>
		<table id="table_members" class="table table-responsive-sm">
			<caption>List of members</caption>
			<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Level</th>
			<th>Delete</th>
			</thead>
			<tbody>
			<?php foreach ($project->get_members() as $mem) { ?>
				<tr>
					<td><?= $mem->get_name(); ?></td>
					<td><?= $mem->get_email(); ?></td>
					<td>
						<select class="form-control" onchange="edit_level(this)">
							<?php
							foreach ($levels as $level) {
								$selected = "";
								if ($level == $mem->get_level()) {
									$selected = "selected";
								}
								?>
								<option <?= $selected ?>
									value="<?= $level ?>"><?= $level ?></option>
							<?php } ?>
						</select>
					</td>
					<td>
						<button class="btn btn-danger"
								onClick="delete_member($(this).parents('tr'))">
							<span class="far fa-trash-alt"></span>
						</button>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
