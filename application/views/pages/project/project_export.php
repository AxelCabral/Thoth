<div class="card">
	<div class="text-center card-header">
		<h4><?= $project->get_title(); ?></h4>
		<input type="hidden" id="id_project" value="<?= $project->get_id(); ?>">
		<a href="<?= base_url('open/' . $project->get_id()) ?>"
		   class="btn form-inline btn-outline-primary opt">Overview</a>

		<a href="<?= base_url('planning/' . $project->get_id()) ?>"
		   class="btn form-inline btn-outline-primary opt">Planning</a>

		<?php if ($this->session->level == "4") { ?>
			<a href="<?= base_url('study_selection_adm/' . $project->get_id()) ?>"
			   class="btn form-inline btn-outline-primary opt">Conducting</a>
		<?php } else { ?>
			<a href="<?= base_url('conducting/' . $project->get_id()) ?>"
			   class="btn form-inline btn-outline-primary opt">Conducting</a>
		<?php } ?>
		<a href="<?= base_url('reporting/' . $project->get_id()) ?>"
		   class="btn form-inline btn-outline-primary opt">Reporting</a>
		<?php
		if ($project->get_planning() == 100) {
			?>
			<a href="<?= base_url('export/' . $project->get_id()) ?>"
			   class="btn form-inline btn-outline-primary opt">Export</a>
			<?php
		}
		?>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<div class="form-inline">
					<span class="fab fa-markdown opt fa-2x"></span>
					<h5>Latex</h5>
				</div>
				<br>
				<div class="text-center">
					<?php
					if ($project->get_planning() == 100) {
						?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="true" type="checkbox" id="check_planning"
								   value="Planning">
							<label class="form-check-label" for="check_planning">Planning</label>
						</div>
						<?php
					}
					if ($project->get_import() == 100) {
						?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="true" type="checkbox" id="check_import"
								   value="Import">
							<label class="form-check-label" for="check_import">Import Studies</label>
						</div>
						<?php
					}
					if ($project->get_selection() > 0) {
						?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="true" type="checkbox" id="check_selection"
								   value="Selection">
							<label class="form-check-label" for="check_selection">Study Selection</label>
						</div>
						<?php
					}
					if ($project->get_quality() > 0) {
						?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="true" type="checkbox" id="check_quality"
								   value="Quality">
							<label class="form-check-label" for="check_quality">Quality Assessment</label>
						</div>
						<?php
					}
					if ($project->get_extraction() > 0) {
						?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="true" type="checkbox" id="check_extraction"
								   value="Extraction">
							<label class="form-check-label" for="check_extraction">Data Extraction</label>
						</div>
						<?php
					}
					if ($project->get_extraction() == 100) {
						?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="true" type="checkbox" id="check_report"
								   value="Report">
							<label class="form-check-label" for="check_report">Report</label>
						</div>
						<?php
					}
					?>
					<br>
					<br>
					<form action="https://www.overleaf.com/docs" method="post" target="_blank">
						<textarea rows="20" class="form-control" name="snip"><?= $latex ?></textarea>
						<br>
						<button type="submit" class="btn btn-success opt">New Project in Overleaf <i
								class="far fa-plus-square"></i></button>
					</form>
				</div>
			</div>
			<?php
			if ($project->get_import() == 100) {
			?>
			<div class="col-md-6">
				<div class="form-inline">
					<span class="fas fa-book opt fa-2x"></span>
					<h5>BibTex</h5>
				</div>
				<br>
				<div class="text-center">
					<?php
					if ($project->get_import() == 100) {
						?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="true" type="checkbox" id="check_import_bib"
								   value="Import">
							<label class="form-check-label" for="check_import_bib">Import Studies</label>
						</div>
						<?php
					}
					if ($project->get_selection() > 0) {
						?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="true" type="checkbox" id="check_selection_bib"
								   value="Selection">
							<label class="form-check-label" for="check_selection_bib">Study Selection</label>
						</div>
						<?php
					}
					if ($project->get_quality() > 0) {
						?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="true" type="checkbox" id="check_quality_bib"
								   value="Quality">
							<label class="form-check-label" for="check_quality_bib">Quality Assessment</label>
						</div>
						<?php
					}
					if ($project->get_extraction() > 0) {
						?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" checked="true" type="checkbox" id="check_extraction_bib"
								   value="Extraction">
							<label class="form-check-label" for="check_extraction_bib">Data Extraction</label>
						</div>
						<?php
					}
					?>
					<br>
					<br>
					<br>
					<textarea rows="20" class="form-control" id="bib_tex"><?= $latex ?></textarea>
					<br>
					<a class="btn-success btn" id="export_bib"  href="" download="Bib.bib" onclick="export_bib();">Download
						BibTex <i class="fas fa-download"></i>
					</a>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</div>
