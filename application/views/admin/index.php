<div class="page-header">
	<h3>Dashboard</h3>
</div>
<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphiconfolder-open"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_hotel->get_data('kamar')->num_rows(); ?></b></font>
						</div>
						<div><b>Jumlah Gedung Yang Terdaftar</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/kamar' ?>">
				<div class="panel-footer">
					<span class="pull-left">Klik Lebih Rinci</span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphiconuser"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_hotel->get_data('pelanggan')->num_rows(); ?></b></font>
						</div>
						<div><b>Jumlah Pengguna yang Terdaftar</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/pelanggan' ?>">
				<div class="panel-footer">
					<span class="pull-left">Klik Lebih Rinci</span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphiconsort"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_hotel->edit_data(array('status_penyewaan'=>0),'transaksi')->num_rows(); ?></b></font>
						</div>
						<div><b>Sewa Gedung Belum Selesai</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/penyewaan'; ?>">
				<div class="panel-footer">
					<span class="pull-left">Klik Lebih Rinci</span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphiconok"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<font size="18"><b><?php echo $this->m_hotel->edit_data(array('status_penyewaan'=>1),'transaksi')->num_rows(); ?></b></font>
						</div>
						<div><b>Sewa Gedung Telah Selesai</b></div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/penyewaan'; ?>">
				<div class="panel-footer">
					<span class="pull-left">Klik Lebih Rinci</span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
			</div>
		</div>
	</div>
		
	<hr>
		
	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title" style="font-size: 18px; font-weight: bold;"><i class="glyphicon glyphicon-bed"></i> Gedung</h3>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<?php foreach($kamar as $k){ ?>
							<a href="#" class="list-group-item">
								<span class="badge"><?php if($k->status_kamar == 1){echo "Tersedia";}else{echo "Isi";}?></span>
								<i class="glyphicon glyphiconuser"></i> <?php echo $k->nama_kamar; ?>
							</a>
						<?php } ?>
					</div>
					<div class="text-right">
						<a href="<?php echo base_url().'admin/kamar' ?>">Lihat Semua Gedung <i class="glyphicon glyphicon-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title" style="font-size: 18px; font-weight: bold;"><i class="glyphicon glyphicon-user"></i> Pelanggan Gedung Terbaru</h3>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<?php foreach($pelanggan as $p){ ?>
							<a href="#" class="list-group-item">
								<span class="badge"><?php echo $p->gender; ?></span>
								<i class="glyphicon glyphiconuser"></i> <?php echo $p->nama_pelanggan; ?>
							</a>
							<?php } ?>
					</div>
					<div class="text-right">
						<a href="<?php echo base_url().'admin/pelanggan' ?>">Lihat Semua Pengguna Gedung <i class="glyphicon glyphicon-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title" style="font-size: 18px; font-weight: bold;"><i class="glyphicon glyphicon-credit-card"></i> Sewa Gedung Terakhir</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered tablehover table-striped">
							<thead>
								<tr>
									<th>Tgl. Proses</th>
									<th>Tgl. Pemakaian Gedung</th>
									<th>Tgl. Selesai Pakai Gedung</th>
									<th>Tgl. Akhir Pemakaian Gedung</th>
									<th>Total Pembayaran Gedung</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach($penyewaan as $py){
								?>
								<tr>
									<td><?php echo date('d/m/Y',strtotime($py->tgl_bayar)); ?></td>
									<td><?php echo date('d/m/Y',strtotime($py->tgl_cekin)); ?></td>
									<td><?php echo date('d/m/Y',strtotime($py->tgl_cekout)); ?></td>
									<td><?php echo date('d/m/Y',strtotime($py->tgl_extend)); ?></td>
									<td><?php echo "Rp.".number_format($py->total_extend).",-"; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<div class="text-right">
						<a href="<?php echo base_url().'admin/penyewaan' ?>">Lihat Semua Transaksi <i class="glyphicon glyphicon-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->