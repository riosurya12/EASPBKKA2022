<div class="page-header">
	<h3>Data Gedung</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_kamar'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Gedung Baru</a>
<br/><br/>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Tampak Foto Gedung</th>
				<th>Jenis Ruangan</th>
				<th>No. Ruangan Gedung</th>
				<th>Tipe Gedung</th>
				<th>Harga Sewa Gedung</th>
				<th>Lokasi</th>
				<th>Status Penggunaan Gedung</th>
				<th>Ubah/Hapus</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($kamar as $k){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><img src="<?php echo base_url().'/assets/upload/'.$k->gambar; ?>" width="100" height="70" alt="gambar tidak tersedia"></td>
				<td><?php echo $k->nama_kamar ?></td>
				<td><?php echo $k->no_kamar ?></td>
				<td><?php echo $k->tipe_kasur ?></td>
				<td><?php echo "Rp. ".number_format($k->harga_kamar).",-" ?></td>
				<td><?php echo $k->lokasi ?></td>
				<td>
					<?php
						if($k->status_kamar == "1"){
							echo "Tersedia";
						}else if($k->status_kamar == "0"){
							echo "Isi";
						}
					?>
				</td>
				<td nowrap="nowrap">
					<a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_kamar/'.$k->id_kamar; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
					<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_kamar/'.$k->id_kamar; ?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>