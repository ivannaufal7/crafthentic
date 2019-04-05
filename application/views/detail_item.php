<?php $this->load->view('page_header')?>

	<section class="item">
			<img src="<?= base_url('assets/img/product1.jpg')?>" width="455" height="450" id="thumb">
			<div class="thumbnail-title">
			<h2>Hijabb Ellysha Eve </h2>
			<fieldset class="rating">
   			 	<span class="fa fa-star" id="checked"></span>
<span class="fa fa-star" id="checked"></span>
<span class="fa fa-star" id="checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
			</fieldset><br>
			<h3>Rp. 150.000</h3>
      <form id='myform' method='POST' action='#'>
          <input type='button' value='-' class='qtyminus btn btn-login' field='quantity' />
          <input type='text' name='quantity' value='1' class='qty' />
          <input type='button' value='+' class='qtyplus btn btn-login' field='quantity' />
      </form>
			<button id="belibrg">Beli Barang</button><br>
			<button id="keranjang">+ Tambah Keranjang</button>
		</div>
	</section>
	<div class="mini-img">
			<img src="<?= base_url('assets/img/product1.jpg')?>" width="110" height="100" id="product1">
			<img src="<?= base_url('assets/img/product2.jpg')?>" width="110" height="100" id="product2">
			<img src="<?= base_url('assets/img/product3.jpg')?>" width="110" height="100" id="product3">
			<img src="<?= base_url('assets/img/product4.jpg')?>" width="110" height="100" id="product4">
		</div>
	<section class="tabulasi">
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Deskripsi</button>
		  <button class="tablinks" onclick="openCity(event, 'Paris')">Statistik Penjualan</button>
		  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Ulasan Barang</button>
		</div>

		<div id="London" class="tabcontent">
		  <p>Exclusive Gelang Kulit Hitam dengan buckle black Doff Titanium stainless steel anti karat.<br><br>

			Warna Kulit Black Gotham,
			Warna Buckle Black Doff / Matte.<br><br>

			Warna sangat Elegan dan Mewah,
			Membuat kesan Istimewa dan Tampan bagi siapapun yg memakainya.<br><br>

			AWAS HARGA Kulit Moscow Armani Tidak Murah, jadi jangan tergiur dengan yang Harga Murah.
			Model bisa sama, Tapi Kualitas BEDA.<br><br>

			**Karena Kualitas selalu sebanding dengan Harga**<br><br>

			Material;
			- Kulit Moscow Armani original yang sudah melalui proses treatment sehingga tahan Air, Sabun, dan panas terik matahari.
			Jadi aman dipakai saat mandi dan dipakai sehari hari tanpa lepas pakai.<br><br>

			Size ready S M L XL 
		</p>
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
	 <section class="produk">
        <h3>Barang Terkait</h3>
        <div class="text-right lihat-semua"><a href="#">Lihat Semua</a></div>
        <div class="row item-produk">
              <div class="card" style="width:300px">
                <img class="card-img-top img-fluid" src="<?= base_url('assets/img/slide2.png')?>" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="<?= base_url('assets/img/slide2.png')?>" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="<?= base_url('assets/img/slide2.png')?>" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="<?= base_url('assets/img/slide2.png')?>" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            
            </div>
    </section>    
</body>
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

    $(document).ready(function(){
       $("#product1").click(function(){
         $("#thumb").attr("src", "<?= base_url('assets/img/product1.jpg')?>");
       });
       $("#product2").click(function(){
         $("#thumb").attr("src", "<?= base_url('assets/img/product2.jpg')?>");
       });
       $("#product3").click(function(){
         $("#thumb").attr("src", "<?= base_url('assets/img/product3.jpg')?>");
       });
       $("#product4").click(function(){
         $("#thumb").attr("src", "<?= base_url('assets/img/product4.jpg')?>");
       });

       $('.qtyplus').click(function(e){
            var quantity = parseInt($('.qty').val());
                
                $('.qty').val(quantity + 1);
            
        });

        $('.qtyminus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('.qty').val());
                if(quantity>0){
                $('.qty').val(quantity - 1);
                }
        });

        var qt = 0;
        $("#belibrg").click(function(){
          qt += parseInt($(".qty").val());
          $(".cart-badge").show();
          $(".cart-badge").append(parseInt(qt));
        });

    });
</script>