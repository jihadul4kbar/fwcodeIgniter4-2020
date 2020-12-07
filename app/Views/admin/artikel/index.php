        <section class="section">
          <div class="section-header">
            <h1>Artikel</h1>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
              <div class="card">
                <div class="card-header">
                  <h4>Daftar Artikel</h4>
                  <div class="card-header-action">
                    <a href="<?php base_url();?>/artikel/add" class="btn btn-primary">Tambah </a>
                  </div>
                </div>
                <h4><?php  echo $msg; ?></h4>
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th width="20px">No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th width="200px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (! empty($artikel) && is_array($artikel)) :
                      $no=1; 
                      foreach ($artikel as $row): ?>                   
                    <tr>
                      <td><?= $no++;?></td>
                      <td><?= esc($row['judul']);?></td>
                      <td><?= esc($row['kategori']);?><br> <small><?= esc($row['keterangan']);?></small> </td>
                      <td>
                        <a class="btn btn-primary" href="/artikel/edit/<?php echo $row['id'];?>"> <i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="/artikel/delete/<?php echo $row['id'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?'"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <?php  endforeach ?>
                    <?php else : ?>
                     <tr>
                       <td colspan="3" class="text-center">Tidak Ada Artikel </td>
                     </tr>
                     <?php endif?>
                  </tbody>
                </table>
                </div>
              </div>

              </div>
            </div>
          </div>