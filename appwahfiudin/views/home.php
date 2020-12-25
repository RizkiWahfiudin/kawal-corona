<!--app-content open-->
<div class="container app-content">
	<div class="">
		<div class="jumbotron">
			<div class="container">
				<br><h1 class="display-3 text-center">KAWAL CORONA</h1>
				<p class="lead m-0 text-center">Live Data Indonesia</p>
			</div>
		</div>
		<!-- PAGE-HEADER END -->

		<!-- ROW-1 OPEN -->
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<div class="card bg-danger img-card box-primary-shadow">
					<div class="card-body">
						<div class="d-flex">
							<div class="text-white">
								<p class="text-white mb-0">TOTAL POSITIF</p>
								<h2 class="mb-0 number-font"><?php echo $total_indonesia[0]->positif; ?></h2>
								<p class="text-white mb-0">ORANG</p>
							</div>
							<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>uploads/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
						</div>
					</div>
				</div>
			</div><!-- COL END -->
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<div class="card bg-success img-card box-secondary-shadow">
					<div class="card-body">
						<div class="d-flex">
							<div class="text-white">
								<p class="text-white mb-0">TOTAL SEMBUH</p>
								<h2 class="mb-0 number-font"><?php echo $total_indonesia[0]->sembuh; ?></h2>
								<p class="text-white mb-0">ORANG</p>
							</div>
							<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>uploads/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
						</div>
					</div>
				</div>
			</div><!-- COL END -->
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<div class="card  bg-secondary img-card box-success-shadow">
					<div class="card-body">
						<div class="d-flex">
							<div class="text-white">
								<p class="text-white mb-0">TOTAL MENINGGAL</p>
								<h2 class="mb-0 number-font"><?php echo $total_indonesia[0]->meninggal; ?></h2>
								<p class="text-white mb-0">ORANG</p>
							</div>
							<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>uploads/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
						</div>
					</div>
				</div>
			</div><!-- COL END -->
		</div>
		<!-- ROW-1 CLOSED -->
		<h6><center>Update Terakhir : <?php echo $last_update; ?></center></h6>

		<!-- ROW-3 OPEN -->
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
										<th class="atasbro">Positif</th>
										<th class="atasbro">Sembuh</th>
										<th class="atasbro">Meninggal</th>
										
									</tr>
								</thead>
								<tbody>
									<?php foreach($total_provinsi as $q){ ?>
									<tr>
										<td></td>
										<td><?php echo $q->attributes->Provinsi; ?></td>
										<td><?php echo number_format($q->attributes->Kasus_Posi); ?></td>
										<td><?php echo number_format($q->attributes->Kasus_Semb); ?></td>
										<td><?php echo number_format($q->attributes->Kasus_Meni); ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div><!-- COL END -->
		</div>
		<!-- ROW-3 CLOSED -->
		</div>
	</div>
	<!-- CONTAINER CLOSED -->
</div>