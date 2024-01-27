<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $aplikasi->singkatan_unit ?> - Uji Kompetensi Online</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="index, follow" />
        <meta name="description" content="Home - <?= $aplikasi->nama_unit ?>" />
        <meta name="keywords" content="<?= $aplikasi->singkatan_unit ?>, <?= $aplikasi->nama_unit ?>" />
        <meta http-equiv="Copyright" content="mitrabuanasolusindo" />
        <meta name="author" content="Roy Buana" />
        <meta http-equiv="imagetoolbar" content="no" />
        <meta name="language" content="Indonesia" />
        <meta name="revisit-after" content="7" />
        <meta name="webcrawlers" content="all" />
        <meta name="rating" content="general" />
        <meta name="spiders" content="all" /> 

        <!-- Social Media Meta -->
        <meta property="place:location:latitude" content="13.062616" /> <!-- Silahkan disesuaikan -->
        <meta property="place:location:longitude" content="80.229508" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:street_address" content="Cimanggis Elok B12" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:locality" content="City Name" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:postal_code" content="ZIP Code" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:country_name" content="Indonesia" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:email" content="info@mbs.web.id" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:phone_number" content="085329489247" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:website" content="http://sertifikasi.lsppenuliseditor.id" />

        <meta property="og:type" content="article" /> <!-- Card type bisa di ganti article, website, blog dan profile -->
        <meta property="profile:first_name" content="Roy" /> <!-- Silahkan disesuaikan -->
        <meta property="profile:last_name" content="Buana" /> <!-- Silahkan disesuaikan -->
        <meta property="profile:username" content="Facebook_Username" /> <!-- Silahkan disesuaikan -->
        <meta property="og:title" content="Home - <?= $aplikasi->singkatan_unit ?>" />
        <meta property="og:description" content="<?= $aplikasi->nama_unit ?>" />
        <meta property="og:image" content="http://sertifikasi.lsppenuliseditor.id/favicon.ico" />
        <meta property="og:url" content="http://sertifikasi.lsppenuliseditor.id/" />
        <meta property="og:site_name" content="<?= $aplikasi->singkatan_unit ?>" />
        <meta property="fb:admins" content="Facebook_ID" /> <!-- Silahkan disesuaikan -->

        <meta name="twitter:card" content="summary" />  <!-- Card type jangan di ganti -->
        <meta name="twitter:site" content="<?= $aplikasi->singkatan_unit ?>" />
        <meta name="twitter:title" content="Home - <?= $aplikasi->singkatan_unit ?>" />
        <meta name="twitter:description" content="<?= $aplikasi->nama_unit ?>" />
        <meta name="twitter:creator" content="Twitter_Username" /> <!-- Silahkan disesuaikan -->
        <meta name="twitter:image:src" content="http://sertifikasi.lsppenuliseditor.id/favicon.ico" />
        <meta name="twitter:domain" content="http://sertifikasi.lsppenuliseditor.id/" />

        <meta itemprop="name" content="Home - <?= $aplikasi->singkatan_unit ?>" />
        <meta itemprop="description" content="<?= $aplikasi->nama_unit ?>" />
        <meta itemprop="image" content="http://sertifikasi.lsppenuliseditor.id/favicon.ico" />

        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width" />
        <script src="<?php echo base_url() ?>assets/js/jquery.v2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstraps/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstraps/bootbox.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/public/login.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/public/bootstrap-datepicker.js" type="text/javascript"></script>

        <script type="text/javascript">
            var base_url = "<?php echo base_url() ?>";
        </script>
        <link href='<?php echo base_url() ?>favicon.ico' rel='icon' type='image/x-icon'/>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstraps/font-awesome.min.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datepicker.css" type="text/css"/>

        <style>
            .bg_white {
                background: white;
            }
            #custom-bootstrap-menu.navbar-default .navbar-brand {
                color: white;
            }
            #custom-bootstrap-menu.navbar-default {
                font-size: 14px;
                background-color: #00365a;
                border-width: 0px;
                border-radius: 0px;
                margin-bottom: -0.5px;
            }
            #custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
                color: rgba(242, 237, 237, 1);
                background-color: rgba(248, 248, 248, 0);
            }
            #custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
            #custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
                color: #fff;/*rgba(51, 51, 51, 1);*/
                font-weight: bold;
                background-color: rgba(108, 235, 255, 0.36);
                /*background-color: rgba(215, 197, 44, 0.9);*/
                /*background-color: rgba(17, 5, 242, 1);*/
            }
            #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
            #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
            #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
                color: rgba(85, 85, 85, 1);
                background-color: rgba(231, 231, 231, 1);
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle {
                border-color: #ddd;
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
            #custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
                background-color: #ddd;
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
                background-color: #888;
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
            #custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
                background-color: #0190e0;
            }
        </style>
    </head>
    <body>
        <div class="modal fade bs-modal" role="dialog" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-2">
                                    <label class="control-label labeled-form" for="inputUsername">Username</label>
                                </div>
                                <div class="col-xs-10 tooltip-wide">
                                    <div class="input-group merged">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-xs"></i></span>
                                        <input type="text" class="form-control login-control" aria-describedby="basic-addon1" name="inputUsername" id="inputUsername">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-2">
                                    <label class="control-label labeled-form" for="inputPassword">Password</label>
                                </div>
                                <div class="col-xs-10 tooltip-wide">
                                    <div class="input-group merged">
                                        <span class="input-group-addon" id="basic-addon2"><i class="fa fa-key fa-xs"></i></span>
                                        <input type="password" class="form-control login-control" aria-describedby="basic-addon2" name="inputPassword" id="inputPassword" onkeypress="if (event.keyCode == 13)
                                                    login_click();">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success disabled" id="btn-login">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 5px; width: 100%;">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 5px;" >
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4" style="text-align: right; " >
                        <a class="icon facebook" href="#">
                            <i class="fa fa-facebook"> <?= $aplikasi->singkatan_unit ?> &nbsp;</i>
                        </a>
                        <a class="icon twitter" href="#">
                            <i class="fa fa-whatsapp"> <?= $aplikasi->sms_center ?></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header"><a class="navbar-brand" href="<?= base_url() ?>"><?= $aplikasi->singkatan_unit ?></a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse navbar-menubuilder">
                                <ul class="nav navbar-nav navbar-left">
                                    <li><a href="<?= base_url() ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                          <li><a href="<?= base_url().'asesi/view/0'?>">Pemegang Sertifikat</a></li>
                                          <li><a href="<?= base_url().'asesor/view/0'?>">Asesor Kompetensi</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?= base_url().'uji_kompetensi'?>">
                                            <i class="glyphicon glyphicon-saved"></i> Uji Sertifikasi
                                        </a>
                                    </li>
                                    <!-- <li><a href="<?= base_url().'sertifikasi/konfirmasi_pembayaran'?>"><i class="glyphicon glyphicon-money"></i> Konfirmasi Pembayaran</a></li> -->
                                    <li><a href="<?= base_url() . 'faq-lsp' ?>"><i class="glyphicon glyphicon-book"></i> FAQ</a></li>
                                    <li><a href="<?= base_url() . 'kontak-lsp' ?>"><i class="glyphicon glyphicon-envelope"></i> Kontak</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><button style="margin-top: 9px;" type="button" class="btn btn-info" id="login-btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-fg fa-user"></i> Login</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function login_click() {
                        $('#btn-login').click();
                    }
                </script>
