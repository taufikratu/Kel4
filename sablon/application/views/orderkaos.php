<div class="content" style="margin-left: 25px;">
      <div class="row">
      <?php foreach ($bajupolos as $key)
                  {?>
        <div class="col-sm-6 col-md-3">
          <h5 class="text-center"><?php echo $key['namabaju']?></h5>
          <img class="Kanan" src=<?php echo base_url('assets/polos/'.$key['gambar'])?>>
          <p class="text-center">Rp.<?php echo number_format($key['hargas'],2,',','.')?></p>
          <p class="text-center"  ><a href="" class="btn btn-primary">Beli</a></p>
        </div>
        <?php }?>
        </div>
    </div> <!-- / section -->
</div>