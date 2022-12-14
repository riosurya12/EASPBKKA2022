<div class="page-header">
	<h3>Gedung atau Ruangan Baru</h3>
</div>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata())
	{
		echo "<div class='alert alert-danger alert-message'>";
		echo $this->session->flashdata('alert');
		echo "</div>";
	}
?>
<form action="<?php echo base_url().'admin/tambah_kamar_act' ?>" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label>Tipe Ruangan</label>
		<select name="id_tipe" class="form-control">
			<option value="">-Pilih Tipe Ruangan-</option>
			<?php foreach($tipekamar as $t){ ?>
			<option value="<?php echo $t->id_tipe; ?>"><?php echo $t->tipe_kamar; ?></option>
			<?php } ?>
		</select>
		<?php echo form_error('id_tipe'); ?>
	</div>

	<div class="form-group">
		<label>Nama Gedung</label>
		<input type="text" name="nama_kamar" class="form-control">
		<?php echo form_error('nama_kamar'); ?>
	</div>

	<div class="form-group">
		<label>Nomor Ruangan</label>
		<input type="text" name="no_kamar" class="form-control">
	</div>

	<div class="form-group">
		<label>Tipe Ruangan</label>
		<select name="tipe_kasur" class="form-control">
			<option value="">-Pilih Tipe Ruangan-</option>
			<option value="Single Bed">Standard Room</option>
			<option value="Twin Bed">Hall Room</option>
			<option value="Double Bed">Ball Room</option>
		</select>
	</div>

	<div class="form-group">
		<label>Harga Sewa Gedung</label>
		<input type="text" name="harga_kamar" class="form-control">
	</div>

	<div class="form-group">
		<label>Lokasi</label>
		<select name="lokasi" class="form-control">
			<option value="">-Pilih Lokasi Ruangan-</option>
			<option value="Lantai 1">Lantai 1</option>
			<option value="Lantai 2">Lantai 2</option>
		</select>
	</div>

	<div class="form-group">
		<label>Status Gedung dan Ruangan</label>
		<select name="status_kamar" class="form-control">
			<option value="1">Tersedia</option>
			<option value="0">Isi</option>
		</select>
		<?php echo form_error('status_kamar'); ?>
	</div>

	<div class="form-group">
		<label>Foto Ruangan</label>
		<input name="fotokamar" type="file" class="form-control">	
	</div>
	
	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btnprimary">
	</div>
</div>
</form>