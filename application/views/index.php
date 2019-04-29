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
        <div class="row item-danai">
            <?php foreach($umkm as $u){?>
            <div class="card" style="width:300px">
                <img class="card-img-top img-fluid" src="<?= base_url('assets/img/')?><?= $u['foto_umkm']?>" alt="Card image" style="width:100%;height:39%">
                <div class="card-body">
                  <h4 class="card-title"><?= $u['nama_umkm']?></h4>
                  <p class="card-text"><?= $u['deskripsi_umkm']?></p>
                  <p class="card-text">Membutuhkan dana sebesar</p>
                  <?php
                    $ci =& get_instance();
                    $ci->load->model('M_umkm');
                    $data = $ci->M_umkm->get_each_umkm_funding($u['id_umkm']);
                    foreach($data as $d){
                  ?>
                  <div class="progress" style="height: 15px;">
                    <div class="progress-bar" role="progressbar" style="background-color: #00c396;width: <?= ($d['jumlah_funding']/$u['butuh_dana'])*100?>%" aria-valuenow="<?= $d['jumlah_funding']?>" aria-valuemin="0" aria-valuemax="<?= $u['butuh_dana']?>"></div>
                  </div>
                  <p style="padding-right: 4px;font-size:14px;margin-bottom:10px;">Rp. <strong><span style="color: #00c396;"><?= $d['jumlah_funding']?></span></strong> dari Rp. <?= $u['butuh_dana']?>
                  <span style="font-size:14px;font-weight: bold;margin-bottom:50px;">dana terkumpul</span></p>
                  <?php if($this->session->userdata('id')==FALSE){?>
                    <a href="<?= site_url('login_control/index')?>" class="btn" style="background-color: #00c396; color:white;">Danai Sekarang</a>
                  <?php } else{?>
                    <a href="<?= base_url('index.php/umkm_control/detil_umkm/')?><?= $u['id_umkm']?>" class="btn" style="background-color: #00c396; color:white;">Danai Sekarang</a>
                  <?php }?>
                </div>
                <?php }?>
            </div>   
            <?php }?>   
        </div>
    </section>    
    <section class="produk">
        <h3>Produk UMKM</h3>
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