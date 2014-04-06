<div class="row">
	<div class="col-md-12">
		<div class="row" style="border:1px solid yellow;">
			<div class="col-md-12">
				<div class="col-md-8">Slide Show</div>
				<div class="col-md-4">Agenda</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-8">
					<?php foreach ($data as $model) : ?>
						<div class="col-md-8">
							<?php echo $model->title; ?>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="col-md-4">Article</div>
			</div>
		</div>
	</div>
</div>
