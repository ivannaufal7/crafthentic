<html>
<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/slick-theme.css')?>"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/slick.min.js')?>"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".slide").slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        });
      });
    </script>
    <title>Crafthentic</title>
</head>
<body class="home">
    <div class="col-lg-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" role="navigation">
    <!-- <div class="container"> -->
        <a class="navbar-brand" href="<?= base_url('index.php/Home')?>"><img src="<?= base_url('assets/img/logo.png')?>" width="128"/></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav menu">
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>


                <li class="nav-item"><form class="form" role="form"><div class="form-group"><input type="search" class="form-control form-control-md" style="width: 500px;" placeholder="Cari barang disini" data-toggle="dropdown" /></div></form></li>
                <li class="nav-item"><a href="<?= base_url('index.php/cart_control')?>" class="nav-link">  <i class="material-icons">shopping_cart</i>
</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="material-icons">mail</i></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="material-icons">notifications</i></a></li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="dropdown order-1">
                    <a href="<?= base_url('index.php/login_control')?>" class="btn btn-login" >Login</a>
                </li>
            </ul>
        </div>
    <!-- </div> -->
</nav>