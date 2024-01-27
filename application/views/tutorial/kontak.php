<style>
    .nav-sidebar { 
        width: 100%;
        padding: 8px 0; 
        border-right: 1px solid #ddd;
    }
    .nav-sidebar a {
        color: #333;
        -webkit-transition: all 0.08s linear;
        -moz-transition: all 0.08s linear;
        -o-transition: all 0.08s linear;
        transition: all 0.08s linear;
        border-radius: 0; 
    }
    .nav-sidebar .active a { 
        cursor: default;
        background-color: #428bca; 
        color: #fff;
        text-shadow: 1px 1px 1px #666; 
    }
    .nav-sidebar .active a:hover {
        background-color: #428bca;   
    }
    .nav-sidebar .text-overflow a,
    .nav-sidebar .text-overflow .media-body {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis; 
    }
    .box-categories .fa-ul > li > * {
        line-height: inherit;
        margin: 0;
    }
</style>


<div class="col-md-12" style="padding-top: 15px;">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li class="active">Kontak Kami</li>
        </ol>
    </div>
    <div class="col-md-12">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.639263606456!2d106.84074326419841!3d-6.179017545526604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f448592704af%3A0xb8eb139cff64200b!2sInstitut+Penulis+Indonesia!5e0!3m2!1sid!2sid!4v1553826419591!5m2!1sid!2sid" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
    <div class="col-md-12">
        <h2><i class="fa fa-comments-o"></i> Kritik &amp; Saran pengembangan</h2>
        <p>Kirimkan saran dan kritik membangun agar pelayanan <?= $aplikasi->singkatan_unit ?> menjadi lebih baik. Silahkan email kami di :</p>
        <p><strong><a href="mailto:<?= $aplikasi->alamat_email ?>"><?= $aplikasi->alamat_email ?></a></strong></p>
        <h2><i class="fa fa-support"></i> Perlu bantuan</h2>
        <p>Dengan senang hati kami akan membantu anda apabila ada kesulitan dalam pengoperasian aplikasi ini. Temukan FAQ di <a href="<?= base_url() . 'faq-lsp' ?>">Halaman ini</a>. Jika anda masih kesulitan, hubungi kami di WA:</p>
        <p><strong><?= $aplikasi->sms_center?></strong></p>
    </div>
</div>


