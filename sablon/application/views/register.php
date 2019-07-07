<<<<<<< HEAD
        <link rel="stylesheet" href="https://www.gemscool.com/assets/css/min.css.php?css=account&amp;v=2019052215">     
<script type="text/javascript">

$(document).ready(function() {

});

</script>   
    
<section id="register-section">
    <div class="container">
        <div class="ads_google" style="margin-left:-150px;margin-top:200px;position: absolute;">
            <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- gemscool_member_left_120x600 -->
            <ins class="adsbygoogle" style="display:inline-block;width:120px;height:600px" data-ad-client="ca-pub-8139500882325932" data-ad-slot="4424435531" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:120px;background-color:transparent;"><ins id="aswift_0_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:120px;background-color:transparent;"><iframe width="120" height="600" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0px;width:120px;height:600px;" __idm_frm__="56"></iframe></ins></ins></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div class="row row-content">
            <br>
            <div class="col-xs-12">
                <div class="text-center">
            <script>get_ads_log('view', 'WEB', '9009', '189', '100');</script>
        <a href="https://www.gemscool.com/berita/read/2019/03/20/17628/news.html" onclick="get_ads_log('click', 'WEB', '9009', '189', '100')">
        </a>
    </div>          </div>
        </div>
        <div class="row row-content">
            <div class="col-xs-12">
                    
                <h2 class="section-title"><span>Register</span></h2>
                <div class="common-box-shadow"> 
                    <div class="col-xs-10 col-xs-offset-1">
                        <br>
                        <form class="form-horizontal" id="frmRegister" name="frmRegister" action="" method="post" role="form">
                            <input type="hidden" id="checkID" name="checkID" value="N">
                            <input type="hidden" name="ip" value="115.178.254.157">
                            <div class="form-group">
                            <form action="<?php echo base_url('index.php/member/c_daftar/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data" style="margin-left: 30px;">
                                <h4 class="col-xs-3 no-gap-form">Nama Pengguna</h4>
                                <div class="col-xs-7">
                                    <input class="form-control" id="Nama Pengguna" name="Nama Pengguna" value="" type="text" placeholder="Nama Pengguna" empty_check="true" min_byte_length="6">
                                    <p class="p_konfirmasi" id="idMessage"></p>
                                </div>
                                <div class="col-xs-2">
                                </div>
                            </div>
                        
=======
<!DOCTYPE html>
<html lang="en">

<head>
  <title>REGISTRASI AKUN</title>
  
</head>

<body class="animsition">
    <div class="page-wrapper">
      

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
          

            <!-- WELCOME-->
            <section class="welcome p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-5">REGISTRASI
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->
                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('Home') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url('index.php/Register/tambah_user') ?>" method="post" enctype="multipart/form-data" >
                     
                            
                           <!--  <div class="form-group">
                                <label for="nis">ID USER</label>
                                <input class="form-control "
                                 type="text" name="iduser" placeholder="- isi disini -" />
                                
                            </div> -->

>>>>>>> 7264eab1eb3f030bb328af84c94f7b88fcb61396
                            <div class="form-group">
                                <label for="nis">EMAIL</label>
                                <input class="form-control "
                                 type="text" name="email" placeholder="- isi disini -" />
                                
                            </div>

                            <div class="form-group">
                                <label for="nisn">PASSWORD</label>
                                <input class="form-control "
                                 type="password" name="password" placeholder="- isi disini -" />
                                
                            </div>

                            <div class="form-group">
                                <label for="nama">NAMA</label>
                                <textarea class="form-control"
                                 type="text" name="nama" placeholder="- isi disini -"></textarea>
                                
                            </div>

                            <div class="form-group">
                                <label for="jk">TELEPON</label>
                                <textarea class="form-control"
                                 type="number" name="telp" placeholder="- isi disini -"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="jawaban">PERTANYAAN</label>
                               <br>
                                <select name=pertanyaan id="pilihan">
                                    <option value="Apa nama hewan peliharaan anda?"> Apa nama hewan peliharaan anda? </option>
                                    <option value="Apakah warna kesukaan anda?"> apakah warna kesukaan anda? </option>
                                    <option value="Siapakah nama ibu kandung anda?"> Siapakah nama ibu kandung anda? </option>
                                    <option value="Apa nama buku favorit anda?"> Apa nama buku favorit anda? </option>
                                    <option value="Siapa nama musisi favorit anda?"> Siapa nama musisi favorit anda? </option>
                               </select>
                            </div>

                            <div class="form-group">
                                <label for="jawaban">JAWABAN</label>
                                <textarea class="form-control"
                                 type="text" name="jawaban" placeholder="- isi disini -"></textarea>
                            </div>

                            <button class="btn btn-success" type="submit">REGISTER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

                

                                    



