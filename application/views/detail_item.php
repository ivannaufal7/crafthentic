<?php $this->load->view('page_header')?>

<?php foreach ($detail as $row) {?>

	<section class="item">
			<img src="<?= base_url('assets/img/').$row->foto_brg?>" width="455" height="450" id="thumb">
			<div class="thumbnail-title">
			<h2><?= $row->nama_brg?> </h2>
			<h3>Rp.<?= $row->harga_brg?></h3>
      <?php if($this->session->userdata('nama')!=FALSE) { ?>
      <form id='myform' method='POST' action='<?= base_url('index.php/detailitem_control/belibrg/').$row->id_brg?>'>
          <input type='button' value='-' class='qtyminus btn btn-login' field='quantity' />
          <input type='text' name='qty' value='1' class='qty' />
          <input type='button' value='+' class='qtyplus btn btn-login' field='quantity' />
          <input type="submit" id="belibrg">Beli Barang</input><br>
      </form>
      <?php } else { ?>
      <form id='myform' method='POST' action='<?= site_url('login_control/index')?>'>
          <input type='button' value='-' class='qtyminus btn btn-login' field='quantity' />
          <input type='text' name='qty' value='1' class='qty' />
          <input type='button' value='+' class='qtyplus btn btn-login' field='quantity' />
          <input type="submit" id="belibrg">Beli Barang</input><br>
      </form>
      <?php } ?>
			
			<button id="keranjang">+ Tambah Keranjang</button>
		</div>
	</section>
  <?php }?>
	<section class="tabulasi">
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Deskripsi</button>
		  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Ulasan Barang</button>
		</div>

		<div id="London" class="tabcontent">
		  <p><?= $row->deskripsi?></p>
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