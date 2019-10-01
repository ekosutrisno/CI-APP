<section class="x-one-x">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                  Form Ubah Data Mahasiswa
               </div>
               <div class="card-body">
                  <form action="" method="post">
                     <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                     <div class="form-group">
                        <label class="" for="nama">Nama</label>
                        <input class="form-control" type="text" id="nama" name="nama" autocomplete="off" value="<?= $mahasiswa['nama']; ?>">
                        <small class="form-text text-danger font-italic"><?= form_error('nama'); ?></small>
                     </div>
                     <div class="form-group">
                        <label class="" for="npm">NPM</label>
                        <input class="form-control" type="text" id="npm" name="npm" autocomplete="off" value="<?= $mahasiswa['npm']; ?>">
                        <small class="form-text text-danger font-italic"><?= form_error('npm'); ?></small>
                     </div>
                     <div class="form-group">
                        <label class="" for="email">Email</label>
                        <input class="form-control" type="text" id="email" name="email" autocomplete="off" value="<?= $mahasiswa['email']; ?>">
                        <small class="form-text text-danger font-italic"><?= form_error('email'); ?></small>
                     </div>
                     <div class="form-group">
                        <label for="jurusan">Example select</label>
                        <select class="form-control" id="jurusan" name="jurusan">

                           <?php foreach ($jurusan as $jrs) : ?>
                              <?php if ($jrs == $mahasiswa['jurusan']) : ?>
                                 <option value="<?= $jrs; ?>" selected><?= $jrs; ?></option>
                              <?php else : ?>
                                 <option value="<?= $jrs; ?>"><?= $jrs; ?></option>
                              <?php endif; ?>
                           <?php endforeach; ?>
                        </select>
                     </div>
                     <button type="submit" name="tambah" id="tambah" class="btn btn-primary float-right">Ubah Data</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>