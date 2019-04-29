<?php $this->load->view('page_header')?>
    <section class="row slide">
        <div class="col-6"><img class="img-fluid slide-img" src="<?= base_url('assets/img/slide1.png')?>" /></div>
        <div class="col-6"><img class="img-fluid slide-img" src="<?= base_url('assets/img/slide2.png')?>" /></div>  
        <div class="col-6"><img class="img-fluid slide-img" src="<?= base_url('assets/img/slide1.png')?>" /></div>
        <div class="col-6"><img class="img-fluid slide-img" src="<?= base_url('assets/img/slide2.png')?>" /></div>
        <div class="col-6"><img class="img-fluid slide-img" src="<?= base_url('assets/img/slide1.png')?>" /></div>
        <div class="col-6"><img class="img-fluid slide-img" src="<?= base_url('assets/img/slide2.png')?>" /></div>
        <div class="col-6"><img class="img-fluid slide-img" src="<?= base_url('assets/img/slide1.png')?>" /></div>
        <div class="col-6"><img class="img-fluid slide-img" src="<?= base_url('assets/img/slide2.png')?>" /></div>
    </section>
        
    <section class="danai">
        <h3>Mulai Mendanai</h3>  
        <div class="text-right lihat-semua"><a href="#">Lihat Semua</a></div>
        <div class="row item-danai">
            <?php foreach($umkm as$u){?>
            <div class="card" style="width:300px">
                <img class="card-img-top img-fluid" src="<?= base_url('assets/img/slide2.png')?>" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title"><?= $u['nama_umkm']?></h4>
                  <p class="card-text"><?= $u['deskripsi_umkm']?></p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            <?php }?>
    </section>    
    <section class="produk">
        <h3>Produk UMKM</h3>
        <div class="text-right lihat-semua"><a href="#">Lihat Semua</a></div>
        <div class="row item-produk">
            

            <?php 
            if(!empty($barang)){
            foreach ($barang as $row) {?>
            <a href="<?= base_url('index.php/Detailitem_control/detailbrg/').$row->id_brg?>" class="link-item">
              <div class="card" style="width:300px">
                <img class="card-img-top img-fluid" src="<?= base_url('assets/img/').$row->foto_brg?>" alt="Card image" style="width:100%; height: 250px;">
                <div class="card-body">
                  <h4 class="card-title"><?= $row->nama_brg?></h4>
                  <span class="badge badge-primary"><?= $row->kategori_brg?></span>
                  <h4 class="text-success" style="margin-top: 12px;">Rp.<?= $row->harga_brg?></h4>
                </div>
              </div>
              </a>
            <?php
          }} else {?>
              <div style="width:100%;">
                <h5 style="text-align: center;">Belum Ada Barang</h5> 
              </div> 
          <?php }?>
            </div>
      </section>
</body>
</html>