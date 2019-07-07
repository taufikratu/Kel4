<!DOCTYPE html>
<html lang="en">

<head>
    <title>CARI DATA (SISWA)</title>
      
       
</head>

            

    <body>
        <div class="card-header">
            <h3>PASSWORD ANDA</h3>
            <hr>
            <div>
                        <a href="<?php echo site_url('index.php/Home') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
                        <form action="<?php echo base_url('index.php/Log_lp/result/')?>" action="GET">
                <div class="form-group">
                    
                    <label for="cari">Password</label>
                  

            <input type="text" name="cari" value=" <?php echo $this->session->userdata('email'); ?>" ></input>


                </div>
                <input class="btn btn-primary" type="submit" value="cari">
            </form>
        </div>
    </body>
</html>
