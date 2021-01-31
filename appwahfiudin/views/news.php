<div class="container app-content">
	<div class="">
		<div class="row mt-4 mb-4">
			<?php foreach ($berita as $val): ?>
	        <div class="col-sm-3 d-flex align-items-stretch">
			    <div class="card">
			        <img src="<?php echo base_url('assets/'); ?>data/images/favicon.jpg" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title"><a href=<?php echo $val->url; ?>> <?php echo $val->title; ?></a></h5>
						<a href=<?php echo $val->url; ?>><button type="button" class="btn btn-dark">Read More</button></a>
					</div>
					<div class="card-footer">
						<small class="text-muted">Last updated <?php echo date("d M Y", time()); ?></small>
					</div>
			    </div>
			</div>
			<br>
	        <?php endforeach ?>
		</div>
	</div>
</div>