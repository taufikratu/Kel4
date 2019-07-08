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

                        <form action="<?php echo base_url('Register/tambah_user') ?>" method="post" enctype="multipart/form-data" >
                     
                            
                           <!--  <div class="form-group">
                                <label for="nis">ID USER</label>
                                <input class="form-control "
                                 type="text" name="iduser" placeholder="- isi disini -" />
                                
                            </div> -->

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

                            <button class="btn btn-success" type="submit">REGIST</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

                

                


