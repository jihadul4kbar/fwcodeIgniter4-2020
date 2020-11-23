<section class="section">
          <div class="section-header">
            <h1>User</h1>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
              <div class="card">
                <div class="card-header">
                  <h4> Form User</h4>
                </div>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <div class="card-body">
                    <form action="/user/saveAdd" method="POST">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama_lengkap">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="username" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="password" name="password" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Level</label>
                      <div class="col-sm-12 col-md-7">
                        <select name="level" class="form-control">
                        	<option value="Administrator">Administrator</option>
                        	<option value="Editor">Editor</option>
                        	<option value="Author">Author</option>
                        </select>
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