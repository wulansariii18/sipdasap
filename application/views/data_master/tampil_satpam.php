<section class="content-header">
	<h1>Data Satpam</h1>
</section>

<section class="content">
	<ol class="breadcrumb" style="background-color: #f9f9f9; padding: 10px; border-radius: 5px;">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url('Satpam/insert')?>" class="btn btn-primary">
				<i class="fa fa-plus"></i> Tambah Data
			</a>
			<a href="<?php echo base_url('Satpam/print_satpam') ?>" class="btn btn-info">
				<i class="fa fa-print"></i> Print
			</a>
		</li>
	</ol>
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Satpam</h3>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<div style="overflow-x: auto;">
							<table id="satpamTable" class="table table-striped table-bordered table-hover" style="width:100%;">
								<thead class="thead-dark" style="background-color: #4F81BD; color: white;">
									<tr>
										<th style="text-align: center;">NIK</th>
										<th style="text-align: center;">NAMA</th>
										<th style="text-align: center;">TGL LAHIR</th>
										<th style="text-align: center;">ALAMAT</th>
										<th style="text-align: center;">NO TELP</th>
										<th style="text-align: center;">JABATAN</th>
										<th style="text-align: center;">TGL PEREKRUTAN</th>
										<th style="text-align: center;">PENDIDIKAN TERAKHIR</th>
										<th style="text-align: center;">AREA</th>
										<th style="text-align: center;">AKSI</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($satpam as $data): ?>
										<tr>
											<td><?php echo $data->nik ?></td>
											<td><?php echo $data->nama ?></td>
											<td><?php echo $data->tgl_lahir ?></td>
											<td><?php echo $data->alamat ?></td>
											<td><?php echo $data->no_telp ?></td>
											<td><?php echo $data->jabatan ?></td>
											<td><?php echo $data->tgl_perekrutan ?></td>
											<td><?php echo $data->pendidikan_terakhir ?></td>
											<td><?php echo $data->area; ?> <!-- Menampilkan nama area --></td>
											<td>
												<a href="<?php echo base_url('Satpam/edit/' . $data->id_satpam); ?>">
													<button type="button" class="btn btn-primary btn-xs">Edit</button>
												</a>
												<a href="<?php echo base_url('Satpam/delete/' . $data->id_satpam); ?>">
													<button type="button" class="btn btn-danger btn-xs">Delete</button>
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>

					<div>
						<?php echo $this->session->flashdata('pesan'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
