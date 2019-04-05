<?php $this->load->view('page_header')?>

	<div class="mainProfile">
		<table>
			<tr class="profile">
				<td><img class="icon" src="IMG/user.png"></td>
				<td colspan="2"><h1 id="userName">Elisabeth Marbun</h1></td>
				
			</tr>
			<tr class="profile">
				<td>
					<img class="icon" src="IMG/alamat.png">
				</td>
				<td colspan="2">
					<h3 id="userAddress">Jalan Telekomunikasi No. 1 Bandung</h2>
				</td>
			</tr>
			<tr class="profile">
				<td>
					<img class="icon" src="IMG/telp.png">
				</td>
				<td>
					<h3 id="userPhone">0888 8888 8888</h2>
				</td>
				<td><button type="button" class="btnEdit">Edit Profile</td>
			</tr>
		</table>

		
	</div>

	<section class="tabulasi tab-profile">
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Wishlist</button>
		  <button class="tablinks" onclick="openCity(event, 'Paris')">Transaksi</button>
		  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Ulasan Barang</button>
		</div>

		<div id="London" class="tabcontent">
		 <section class="produk Wishlist-profile">
        <div class="row item-produk">
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
              </div>
            
            </div>
    </section>    
		</div>

		<div id="Paris" class="tabcontent">
		  <h3>Paris</h3>
		  <p>Paris is the capital of France.</p> 
		</div>

		<div id="Tokyo" class="tabcontent">
		  <h3>Tokyo</h3>
		  <p>Tokyo is the capital of Japan.</p>
		</div>

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