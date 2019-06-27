<!-- DataTales Example -->

<div class="card shadow mb-4">
<?php foreach ($bajuproduk as $key)
                  {?>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Baju Produk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead> 
                    <tr>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th>Tipe</th>
                      <th>Gambar</th>
                      <th>Ukuran S</th>
                      <th>Ukuran M</th>
                      <th>Ukuran L</th>
                      <th>Ukuran XL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $key['namabaju']?></td>
                      <td><?php echo $key['deskripsi']?></td>
                      <td><?php echo $key['tipe']?></td>
                      <td><img src=<?php echo base_url('assets/produk/'.$key['gambar'])?> width="100%" height="100px"></td>
                      <td>Rp.<?php echo number_format($key['hargas'],2,',','.')?></td>
                      <td>Rp.<?php echo number_format($key['hargam'],2,',','.')?></td>
                      <td>Rp.<?php echo number_format($key['hargal'],2,',','.')?></td>
                      <td>Rp.<?php echo number_format($key['hargaxl'],2,',','.')?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <?php }?>
          </div>