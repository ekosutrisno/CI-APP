<section class="x-one-x">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                  Form Tambah Data Mahasiswa
               </div>
               <div class="card-body">
                  <form action="" method="post">
                     <div class="form-group">
                        <label class="" for="nama">Nama</label>
                        <input class="form-control" type="text" id="nama" name="nama" autocomplete="off">
                        <small class="form-text text-danger font-italic"><?= form_error('nama'); ?></small>
                     </div>
                     <div class="form-group">
                        <label class="" for="npm">NPM</label>
                        <input class="form-control" type="text" id="npm" name="npm" autocomplete="off">
                        <small class="form-text text-danger font-italic"><?= form_error('npm'); ?></small>
                     </div>
                     <div class="form-group">
                        <label class="" for="email">Email</label>
                        <input class="form-control" type="text" id="email" name="email" autocomplete="off">
                        <small class="form-text text-danger font-italic"><?= form_error('email'); ?></small>
                     </div>
                     <div class="form-group">
                        <label for="jurusan">Example select</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                           <option value="Pendidikan Matematika ">Pendidikan Matematika</option>
                           <option value="Pendidikan Biologi">Pendidikan Biologi</option>
                           <option value="Pendidikan Kimia">Pendidikan Kimia</option>
                           <option value="Pendidikan Fisika">Pendidikan Fisika </option>
                           <option value="Pendidikan Olahraga">Pendidikan Olahraga</option>
                        </select>
                     </div>
                     <button type="submit" name="tambah" id="tambah" class="btn btn-primary float-right">Tambah Data</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>