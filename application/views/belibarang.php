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

	<div class="mainProfile">
		<img id="userAddress" src="<?= base_url('assets/img/').$foto?>" style="width: 250px;">
		<h1 id="userName"><?= $nama_brg?></h1>
		<h5 id="userAddress">Harga : Rp. <?= $harga_brg?></h5>
		<h5 id="userAddress">Qty : <?= $qty?></h5>
		<h5 id="userPhone">Total Harga : <?= $total_hrg?></h5>
		
	</div>