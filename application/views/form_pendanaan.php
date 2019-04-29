<?php $this->load->view('page_header')?>
<body>
    
    <?php foreach($umkm as $u) {?>
    <table style="margin-top:100px; margin-left:20px; margin-right: 20px; margin-bottom: 50px">
        <tr>
            <td style="text-align: center;width:25%">   
            <img src="<?=base_url('assets/img/')?><?= $u['foto_umkm']?>" width="455" height="450" id="thumb" style="border-radius: 20px">
                <h2 style="margin-top:5px"><strong><?= $u['nama_umkm']?></strong></h2>
                <h4 style = "color:grey">by <?= $u['nama_pemilik']?></h4>
                <p class="card-text"><?= $u['deskripsi_umkm']?></p>
                <?php
                    $ci =& get_instance();
                    $ci->load->model('M_umkm');
                    $data = $ci->M_umkm->get_each_umkm_funding($u['id_umkm']);
                    foreach($data as $d){
                ?>
                <div class="progress" style="height: 25px;width: 100%">
                    <div class="progress-bar" role="progressbar" style="background-color: #00c396;width: <?= ($d['jumlah_funding']/$u['butuh_dana'])*100?>%" aria-valuenow="<?= $d['jumlah_funding']?>" aria-valuemin="0" aria-valuemax="<?= $u['butuh_dana']?>"></div>
                </div>
                <p style="padding-right: 4px;font-size:14px;margin-bottom:10px;">Rp. <strong><span style="color: #00c396;"><?= $d['jumlah_funding']?></span></strong> dari Rp. <?= $u['butuh_dana']?>
                 <span style="font-size:14px;font-weight: bold;margin-bottom:50px;">dana terkumpul</span></p>
                <?php }?>
            </td>
            <td style="">   
                <div class="login">
                <form method="post" action="<?= site_url('umkm_control/taruh_dana/')?><?= $u['id_umkm']?>">
                    <div class="txt-login">Form Pendanaan</div>

                    <input type="text" class="form-control" name="id" hidden value="<?= $this->session->userdata('id')?>"/>

                    <div class="email">Nama Pendana<br>
                        <input type="text" class="form-control" name="nama" value="<?= $this->session->userdata('nama')?>" disabled/>
                    </div>

                    <div class="email">Jumlah Nominal<br>
                        <input type="text" class="form-control" name="jumlah_funding"/>
                    </div>   
                    <br>
                    <input type="submit" name="register" value="Submit Dana"/>
                </form>
                </div>
            </td>
        </tr>
    </table>
    <?php }?>
</body>
</html>