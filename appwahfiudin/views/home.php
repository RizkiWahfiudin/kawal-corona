<div class="container app-content">
	<div class="">
		<div class="jumbotron">
			<div class="container">
				<br><h1 class="display-3 text-center">Corona Virus | INDONESIA</h1>
				<center><button type="button" onclick="redirectPage(1)" class="btn btn-info">Berita Covid-19</button>
				<button type="button" onclick="redirectPage(2)" class="btn btn-warning">Daftar Rumah Sakit Rujukan</button>
				<button type="button" onclick="redirectPage(3)" class="btn btn-danger">Grafik</button></center>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<div class="card bg-danger img-card box-primary-shadow">
					<div class="card-body">
						<div class="d-flex">
							<div class="text-white">
								<p class="text-white mb-0">TOTAL POSITIF</p>
								<h2 class="mb-0 number-font"><?php echo number_format($total_kasus); ?></h2>
								<p class="text-white mb-0">ORANG</p>
							</div>
							<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>uploads/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<div class="card bg-success img-card box-secondary-shadow">
					<div class="card-body">
						<div class="d-flex">
							<div class="text-white">
								<p class="text-white mb-0">TOTAL SEMBUH</p>
								<h2 class="mb-0 number-font"><?php echo number_format($total_sembuh); ?></h2>
								<p class="text-white mb-0">ORANG</p>
							</div>
							<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>uploads/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<div class="card  bg-secondary img-card box-success-shadow">
					<div class="card-body">
						<div class="d-flex">
							<div class="text-white">
								<p class="text-white mb-0">TOTAL MENINGGAL</p>
								<h2 class="mb-0 number-font"><?php echo number_format($total_meninggal); ?></h2>
								<p class="text-white mb-0">ORANG</p>
							</div>
							<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>uploads/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<h6><center>Update Terakhir : <?php echo $last_update; ?></center></h6>

		<div class="row row-cards">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
				<div class="card">
					<div class="card-header ">
						<h3 class="card-title">Data Kasus Covid-19 Di Indonesia Berdasarkan Provinsi</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive service">
							<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
								<thead>
									<tr>
										<th class="atasbro">No.</th>
										<th class="atasbro">Provinsi</th>
										<th class="atasbro">Presentase (Skala Nasional)</th>
										<th class="atasbro">Positif</th>
										<th class="atasbro">Sembuh</th>
										<th class="atasbro">Meninggal</th>
										<th class="atasbro">Dirawat</th>
										<!-- <th></th> -->
									</tr>
								</thead>
								<tbody>
									<?php for($i=0;$i<34;$i++) { ?>
									<tr>
										<td></td>
										<td><?php echo $total_provinsi->list_data[$i]->key; ?></td>
										<td><?php echo number_format($total_provinsi->list_data[$i]->doc_count, 2); ?> %</td>
										<td><?php echo number_format($total_provinsi->list_data[$i]->jumlah_kasus); ?></td>
										<td><?php echo number_format($total_provinsi->list_data[$i]->jumlah_sembuh); ?></td>
										<td><?php echo number_format($total_provinsi->list_data[$i]->jumlah_meninggal); ?></td>
										<td><?php echo number_format($total_provinsi->list_data[$i]->jumlah_dirawat); ?></td>
										<!-- <td><button type="button" onclick="" class="btn btn-info" data-toggle="modal" data-target="#detail">Detail</button></td> -->
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function redirectPage($value) {
		if($value == 1) window.location = window.location.href+'news';
		if($value == 2) window.location = window.location.href+'hospital';
		if($value == 3) window.location = window.location.href+'grafik';
	}
</script>