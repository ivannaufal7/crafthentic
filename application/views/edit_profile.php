<?php $this->load->view('page_header')?>

<?php foreach($user as $u) {?>
<div class="login" style="margin-top:100px">
    <form method="post" action="<?= site_url('profil_control/edit_profil')?>">
        <div class="txt-login">Edit Profile</div>

        <input type="text" class="form-control" name="id_pengguna" hidden value="<?= $u['id_pengguna']?>"/>  

        <div class="email">Nama<br>
            <input type="text" class="form-control" name="nama" value="<?= $u['nama']?>"/>
        </div>

        <div class="email">Email<br>
            <input type="email" class="form-control" name="email" value="<?= $u['email']?>"/>
        </div>
        
        <div class="email">No.Telp<br>
            <input type="text" class="form-control" name="notelp" value="<?= $u['notelp']?>"/>
        </div>
      
        <div class="email">Alamat<br>
            <textarea name="alamat" class="form-control"><?= $u['alamat']?></textarea>
        </div>
        <br>
        <input type="submit" name="btnEdit" value="Sumbit Change"/>
    </form>
</div>
<?php }?>