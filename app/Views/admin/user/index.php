        <section class="section">
          <div class="section-header">
            <h1><?php echo $judul;?></h1>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
              <div class="card">
                <div class="card-header">
                  <h4>Daftar User</h4>
                  <div class="card-header-action">
                    <a href="<?php base_url();?>/user/add" class="btn btn-primary">Tambah </a>
                  </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th width="20px">No</th>
                      <th>Nama Lengkap</th>
                      <th>Username</th>
                      <th>Level</th>
                      <th width="200px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (! empty($user) && is_array($user)) :
                      $no=1; 
                      foreach ($user as $row): ?>                   
                    <tr>
                      <td><?= $no++;?></td>
                      <td><?= esc($row['nama_lengkap']);?></td>
                      <td><?= esc($row['username']);?></td>
                      <td><?= esc($row['level']);?></td>
                      <td>
                        <a href="/user/edit/<?php echo $row['iduser'];?>">Edit</a> | 
                        <a href="/user/delete/<?php echo $row['iduser'];?>">Hapus</a></td>
                    </tr>
                    <?php  endforeach ?>
                    <?php else : ?>
                     <tr>
                       <td colspan="5" class="text-center">Tidak Ada User </td>
                     </tr>
                     <?php endif?>
                  </tbody>
                </table>
                </div>
              </div>

              </div>
            </div>
          </div>