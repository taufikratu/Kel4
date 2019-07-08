        <link rel="stylesheet" href="https://www.gemscool.com/assets/css/min.css.php?css=account&amp;v=2019052215"> 
<section id="Login">
    <div class="container">
        <div class="row row-content">
            <br>
            <div class="col-xs-12">
                <div class="text-center">
            
    </div>          </div>
        </div>
        <div class="row row-content">
            <div class="col-xs-12">
                    
                <h2 class="section-title"><span>LUPA PASSWORD</span></h2>
                <div class="common-box-shadow"> 
                    <div class="col-xs-10 col-xs-offset-1">
                        <br>
                        <form class="form-horizontal" action="<?php echo base_url('index.php/Log_lp/aksi_login');?>" method="post" role="form">
                            <div class="form-group">
                                <label for="nis">EMAIL</label>
                                <input class="form-control "
                                 type="text" name="email" placeholder="- isi disini -" />
                                    
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
                                <div class="col-xs-2">
                                    
                                </div>
                            </div>
                            
                                    <div class="col-xs-6 no-gap">
                                        <div class="col-xs-1 no-gap">
                                           
                                        </div>
                                        <div class="col-xs-11">
                                            
                                            <!-- <input type="hidden" name="email" id="email"> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center pb-10">
                                <button type="submit" name="submit" class="btn btn-primary submit mb-4">CARI PASSWORD</a></button>
                            </p>
                          
                            
                                <a href="register">
                                <button class="text-right pb-50" class="btn btn-primary submit mb-4"></i>silahkan daftar !</a></button>
                            
                                    <br><br>
                                </div>
                            </div>      
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>