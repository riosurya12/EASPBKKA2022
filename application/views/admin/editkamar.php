<div class="page-header">
	<h3>Ubah Gedung</h3>
</div>
<?php foreach($kamar as $k){ ?>
<form action="<?php echo base_url().'admin/update_kamar' ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Tipe Nama Gedung</label>
		<select name="id_tipe" class="form-control">
			<option value="<?php echo $k->id_tipe; ?>"><?php echo $k->tipe_kamar; ?></option>
			<?php foreach($tipekamar as $t){ ?>
			<option value="<?php echo $t->id_tipe; ?>"><?php echo $t->tipe_kamar; ?></option>
			<?php } ?>
		</select>
		<?php echo form_error('id_tipe'); ?>
	</div>

	<div class="form-group">
		<label>Nama Gedung</label>
		<input type="hidden" name="id" value="<?php echo $k->id_kamar; ?>">
		<input class="form-control" type="text" name="nama_kamar" value="<?php echo $k->nama_kamar; ?>">
		<?php echo form_error('nama_kamar'); ?>
	</div>

	<div class="form-group">
		<label>Nomor Gedung</label>
		<input class="form-control" type="text" name="no_kamar" value="<?php echo $k->no_kamar; ?>">
		<?php echo form_error('no_kamar'); ?>
	</div>

	<div class="form-group">
		<label>Tipe Ruangan</label>
		<select name="tipe_kasur" class="form-control">
			<option <?php if($k->tipe_kasur == "Standad Room"){echo "selected='selected'";} echo $k->tipe_kasur; ?> value="Single Bed">Standard Room</option>
			<option <?php if($k->tipe_kasur == "Hall Room"){echo "selected='selected'";} echo $k->tipe_kasur; ?> value="Twin Bed">Hall Room</option>
			<option <?php if($k->tipe_kasur == "Ball Room"){echo "selected='selected'";} echo $k->tipe_kasur; ?> value="Double Bed">Ball Room</option>
		</select>
		<?php echo form_error('tipe_kasur'); ?>
	</div>

	<div class="form-group">
		<label>Harga Ruangan Gedung</label>
		<input class="form-control" type="text" name="harga_kamar" value="<?php echo $k->harga_kamar; ?>">
		<?php echo form_error('harga_kamar'); ?>
	</div>

	<div class="form-group">
		<label>Lokasi</label>
		<select name="lokasi" class="form-control">
			<option <?php if($k->lokasi == "Lantai 1"){echo "selected='selected'";} echo $k->lokasi; ?> value="Lantai 1">Lantai 1</option>
			<option <?php if($k->lokasi == "Lantai 2"){echo "selected='selected'";} echo $k->lokasi; ?> value="Lantai 2">Lantai 2</option>
			<option <?php if($k->lokasi == "Lantai 3"){echo "selected='selected'";} echo $k->lokasi; ?> value="Lantai 3">Lantai 3</option>
		</select>
		<?php echo form_error('lokasi'); ?>
	</div>

	<div class="form-group">
		<label>Status Ruangan Gedung</label>
		<select name="status_kamar" class="form-control">
			<option <?php if($k->status_kamar == "1"){echo "selected='selected'";} echo $k->status_kamar; ?> value="1">Tersedia</option>
			<option <?php if($k->status_kamar == "0"){echo "selected='selected'";} echo $k->status_kamar; ?> value="0">Isi</option>
		</select>
		<?php echo form_error('status_kamar'); ?>
	</div>

	<dir class="form-group">
		<label>Foto Ruangan Gedung</label>
		<?php
			if(isset($k->gambar)){
				echo '<input type="hidden" name="old_pict" value="'.$k->gambar.'">';
				echo '<img src="'.base_url().'assets/upload/'.$k->gambar.'" width="30%">';
			}
		?>
		<input name="fotokamar" type="file" class="form-control">
	</dir>

	<div class="form-group">
		<input type="submit" value="Perbaharui" class="btn btnprimary">
	</div>
</form>
<?php } ?>