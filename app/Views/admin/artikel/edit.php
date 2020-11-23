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
                    <form action="/artikel/update" method="POST">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $artikel['id']; ?>" >
                        <input type="text" class="form-control" name="judul" value="<?php echo $artikel['judul']; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" name="isi"><?php echo $artikel['isi'];?></textarea>
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