<?php $this->load->view('page_header')?>
<?php 
echo $qty;
?>
		<div class="mainProfile">
		<table>
			<tr class="profile">
				<td><img class="icon" src="<?= base_url('assets/IMG/user.png')?>"></td>
				<td colspan="2"><h1 id="userName"><?= $this->session->userdata('nama')?></h1></td>
				
			</tr>
			<tr class="profile">
				<td>
					<img class="icon" src="<?= base_url('assets/IMG/alamat.png')?>">
				</td>
				<td colspan="2">
					<h3 id="userAddress"><?= $this->session->userdata('alamat')?></h2>
				</td>
			</tr>
			<tr class="profile">
				<td>
					<img class="icon" src="<?= base_url('assets/IMG/telp.png')?>">
				</td>
				<td>
					<h3 id="userPhone"><?= $this->session->userdata('notelp')?></h2>
				</td>
			</tr>
		</table>

		
	</div>

		<div style="margin-left: 64px; margin-top: 24px;">
		<div style="font-size: 24px;">Barang yang dipesan</div>
	</div>
	<div class="mainProfile d-flex flex-row" style="margin-top: 12px;">
		<div class="p-2"><img  src="<?= base_url('assets/img/').$foto?>" style="width: 150px; height: 150px;"></div>
		<div class="p-2 flex-column">
		<h1 style="color: #00A896;"><?= $nama_brg?></h1>
		<div style="margin-left: 10px;">
		<h4>Harga : Rp. <?= $harga_brg?></h4>
		<h4>Qty : <?= $qty?></h4>
		</div>
		</div>
	</div>
	<div style="">
		<div style="font-size: 24px; margin-left: 64px; margin-top: 24px;">Pilih Kurir</div>
		<div class="mainProfile" style="margin-top: 12px;">	
		

				<div class="form-group">
		  <select class="form-control" id="sel1">
		    <option>JNE (1 Hari Rp.11000)</option>
		    <option>JNE (2 Hari Rp.9000)</option>
		    <option>J&T (1 Hari Rp.11000)</option>
		    <option>J&T (1 Hari Rp.7000)</option>
		  </select>
		</div>
		</div>

	</div>
	<div style="background: #F1F1F1;">
		
	<div class="container" style="margin-top: 24px;">
		<div style="padding: 24px;"><h5>Total Harga :</h5></div>
		<h1 style="font-size: 32px; position: relative; bottom: 32px; left: 16px; color: #00A896;">Rp.<?= $total_hrg?></h1>
		<div style="position: relative; bottom: 24px;"><button type="button" class="btnEdit" style="position: absolute; right: 0px; bottom: 24px; width: 150px;">Bayar</button></div>
	</div>
	</div>

			