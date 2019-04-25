<?php $this->load->view('page_header')?>
<div class="container" style="margin-top: 100px;">
	<?php echo form_open_multipart('Uploadbrg_control/do_upload');?>
<?php error_reporting(0); echo $error?>
		<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" name="nama_brg" class="form-control">
		</div>
		<div class="form-group">
			<label>Harga Barang</label>
			<input type="text" name="harga_brg" class="form-control">
		</div>
		<div class="form-group">
			<label>Deskripsi</label>
			<input type="text" name="deskripsi" class="form-control">
		</div>
		<div class="form-group">
			<label>Kategori</label>
			<select class="form-control" name="kategori_brg">
		      <option value="Fashion Pria">Fashion Pria</option>
		      <option value="Fashion Wanita">Fashion Wanita</option>
		      <option value="Souvernir">Souvernir</option>
		      <option value="Makanan & Minuman">Makanan & Minuman</option>
		    </select>
		</div>
		<div class="form-group">
			<label>Upload Barang</label>
			<input type="file" class="form-control-file" name="userfile">
		</div>
		<div class="form-group">
			<input type="submit" name="kirim" class="btn btn-success" value="Upload">
		</div>
</div>