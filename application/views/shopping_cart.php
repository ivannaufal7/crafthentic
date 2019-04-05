<?php $this->load->view('page_header')?>
<section class="container info-pembeli">
	<h3>Alamat Pengiriman</h3>
	<div class="mainProfile">
		<table>
			<tr class="profile">
				<td><img class="icon" src="<?= base_url('assets/img/user.png')?>"></td>
				<td colspan="2"><h1 id="userName">Elisabeth Marbun</h1></td>
				
			</tr>
			<tr class="profile">
				<td>
					<img class="icon" src="<?= base_url('assets/img/alamat.png')?>">
				</td>
				<td colspan="2">
					<h3 id="userAddress">Jalan Telekomunikasi No. 1 Bandung</h2>
				</td>
			</tr>
			<tr class="profile">
				<td>
					<img class="icon" src="<?= base_url('assets/img/telp.png')?>">
				</td>
				<td>
					<h3 id="userPhone">0888 8888 8888</h2>
				</td>
				<td><button type="button" class="btnEdit">Edit Profile</td>
			</tr>
		</table>

		
	</div>
</section>
</div>
</body>
</html>