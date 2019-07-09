<?php echo form_open_multipart('Produkkaos/detail');?>
<div class="content" style="margin-left: 25px;">
      <div class="row">
      <?php foreach ($bajuproduk as $key)
                  {?>
        <div class="col-sm-6 col-md-3">
          <h5 class="text-center"><?php echo $key['namabaju']?></h5>
          <img class="Kanan" src=<?php echo base_url('assets/produk/'.$key['gambar'])?>>
          <p class="text-center">Rp.<?php echo number_format($key['hargas'],2,',','.')?></p>
          <p class="text-center"  ><button type="submit"class="btn btn-primary">Beli</button></p>
        </div>
        <?php }?>
        </div>
    </div> <!-- / section -->
</div>