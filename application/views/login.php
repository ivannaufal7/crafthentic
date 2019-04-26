<html>
<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
</head>
<body>
    <div class="col-lg-12 body">
        <div class="boundary">
            <img src="<?= base_url('assets/img/login-bg.png')?>" height="100%" width="600px">
            <div class="top-left logo-white"><a href="<?= site_url('home/index')?>"><img src="<?= base_url('assets/img/logo-white.png')?>" width="250px"></a></div>
            <div class="top-left intro">Halo, <br> Selamat datang di CRAFTHENTIC</div>
        </div>
        <div class="login">
            <form method="post" action="<?= base_url('index.php/login_control/login')?>">
                <div class="txt-login">Log In</div>
                <div class="email">Email<br>
                <input type="email" name="email" id="email"/>
                </div>
                
                <div class="password">Password<br>
                <input type="password" name="pass" id="pass"/>
                </div>
                <br>
                <input type="submit" name="login" id="login" value="Log In"/>
                <br>
                <a href="<?= base_url('index.php/register_control/index')?>" class="link">Belum punya akun klik disini?</a>
            </form>
        </div>
    </div>
</body>
</html>