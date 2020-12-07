<section class="section">
          <div class="section-header">
            <h1>Artikel</h1>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
              <div class="card">
                <div class="card-header">
                  <h4> Form Artikel</h4>
                </div>
                <div class="card-body">
                    <form action="/artikel/saveAdd" method="POST"  enctype="multipart/form-data">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="judul">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                      <div class="col-sm-12 col-md-7">
                        <select name="id_kategori" class="form-control">
                          <?php foreach ($kategori as $row) { ?>
                           
                          <option value="<?= $row['id_kategori'];?>"><?=  $row['kategori'];?></option>
                         <?php  } ?>
                        </select>

                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" name="isi"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar" id="customFile">
                          <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <input type="submit" value="Simpan" class="btn btn-primary">
                      </div>
                    </div>
                    </form>
                </div>
              </div>
              </div>
            </div>
          </div>