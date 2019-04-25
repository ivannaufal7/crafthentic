<html>
<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
</head>
<body>
    <div class="col-lg-12 body">
        <div class="boundary">
            <img src="<?= base_url('assets/img/login-bg.png')?>" height="100%" width="600px">
            <div class="top-left logo-white"><img src="<?= base_url('assets/img/logo-white.png')?>" width="250px"></div>
            <div class="top-left intro">Halo, <br> Selamat datang di CRAFTHENTIC</div>
        </div>
        <div class="login">
            <form method="post" action="<?= base_url('index.php/Register_control/daftarAkun')?>">
                <div class="txt-login">Register</div>
                <div class="email">Nama<br>
                <input type="text" class="form-control" name="nama"/>
                </div>

                <div class="email">Email<br>
                <input type="email" class="form-control" name="email"/>
                </div>
                
                <div class="password">Password<br>
                <input type="password" class="form-control" name="pass"/>
                </div>

                <div class="password">No.Telp<br>
                <input type="text" class="form-control" name="notelp"/>
                </div>
      
                <div class="email">Alamat<br>
                <textarea name="alamat" class="form-control"></textarea>
                </div>
                <br>
                <input type="submit" name="register" value="Register"/>
            </form>
        </div>
    </div>
</body>
</html>