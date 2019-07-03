<!-- DataTales Example -->
<div class="card shadow mb-4">
<?php foreach ($user as $key)
                  {?>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Telepon</th>
                      <th>Pertanyaan</th>
                      <th>Jawaban</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $key['nama']?></td>
                      <td><?php echo $key['email']?></td>
                      <td><?php echo $key['password']?></td>
                      <td><?php echo $key['telp']?></td>
                      <td><?php echo $key['pertanyaan']?></td>
                      <td><?php echo $key['jawaban']?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <?php }?>
          </div>