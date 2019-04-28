<?php $this->load->view('page_header')?>

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

				<td><a href="<?= site_url('profil_control/edit/')?><?= $this->session->userdata('id_pengguna')?>" ><button  style="margin-right:40px;" type="button" class="btnEdit">Edit Profile</button><a></td>
			</tr>
		</table>

		
	</div>

	<section class="tabulasi tab-profile">
		<div class="tab">
      <button class="tablinks" onclick="openCity(event, 'barangsaya')" id="defaultOpen">Barang Saya</button>
		  <button class="tablinks" onclick="openCity(event, 'wishlist')" id="defaultOpen">Wishlist</button>
		  <button class="tablinks" onclick="openCity(event, 'transaksi')">Transaksi</button>
		  <button class="tablinks" onclick="openCity(event, 'ulasan')">Ulasan Barang</button>
		</div>

		<div id="barangsaya" class="tabcontent">
		 <section class="produk Wishlist-profile">
        <div class="row item-produk">
        <?php error_reporting(0); foreach ($barang as $row) {?>
          <div class="card" style="width:280px">
                <img class="card-img-top img-fluid" src="<?= base_url('assets/img/').$row->foto_brg?>" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4><?= $row->nama_brg?></h4>
                  <span class="badge badge-primary"><?= $row->kategori_brg?></span>
                  <h4 class="text-success" style="margin-top: 12px;">Rp.<?= $row->harga_brg?></h4>
                  <div>
                    <a href="<?= site_url('uploadbrg_control/edit_barang/')?><?= $row->id_brg?>" class="btn btn-info">Edit</a>
                    <a href="<?= base_url('index.php/home/deleteBrg/').$row->id_brg?>" class="btn btn-danger">Delete</a>
                  </div>
                </div>
              </div>
        <?php } ?>
              <!-- <div class="card" style="width:280px">
                <img class="card-img-top img-fluid" src="img/slide2.png" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            <div class="card" style="width:280px">
                <img class="card-img-top" src="img/slide2.png" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            <div class="card" style="width:280px">
                <img class="card-img-top" src="img/slide2.png" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            <div class="card" style="width:280px">
                <img class="card-img-top" src="img/slide2.png" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
              <div class="card" style="width:280px">
                <img class="card-img-top img-fluid" src="img/slide2.png" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            <div class="card" style="width:280px">
                <img class="card-img-top" src="img/slide2.png" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            <div class="card" style="width:280px">
                <img class="card-img-top" src="img/slide2.png" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            <div class="card" style="width:280px">
                <img class="card-img-top" src="img/slide2.png" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> -->
            
            </div>
    </section>    
		</div>

		<!-- <div id="wishlist" class="tabcontent">
		  <h3>Paris</h3>
		  <p>Paris is the capital of France.</p> 
		</div>

		<div id="transaksi" class="tabcontent">
		  <h3>Tokyo</h3>
		  <p>Tokyo is the capital of Japan.</p>
		</div>

    <div id="ulasan" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div> -->
	</section>

<script>
		function openCity(evt, cityName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " active";
		}
		document.getElementById("defaultOpen").click();
</script>

</body>
</html>