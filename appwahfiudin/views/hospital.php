<div class="container app-content">
	<div class="">
		<div class="row row-cards mt-4">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
				<div class="card">
					<div class="card-header ">
						<h3 class="card-title">Daftar Rumah Sakit Rujukan COVID-19 Di Indonesia</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive service">
							<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
								<thead>
									<tr>
										<th class="atasbro">No.</th>
										<th class="atasbro">Nama Rumah Sakit</th>
										<th class="atasbro">Alamat</th>
										<th class="atasbro">No. Telepon</th>
										<th class="atasbro">Provinsi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($rumah_sakit as $q){ ?>
									<tr>
										<td></td>
										<td><?php echo $q->name; ?></td>
										<td><?php echo $q->address; ?></td>
										<td><?php echo $q->phone; ?></td>
										<td><?php echo $q->province; ?></td>
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