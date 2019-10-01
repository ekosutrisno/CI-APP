<section class="x-one-x">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                  Detail Mahasiswa
               </div>
               <div class="card-body">
                  <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                  <h6 class="card-title  text-muted "><?= $mahasiswa['email']; ?></h6>
                  <p class="card-text font-weight-bold"><?= $mahasiswa['npm']; ?></p>
                  <h3 class="card-text"><?= $mahasiswa['jurusan']; ?></h3>
                  <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary float-right mt-2">Kembali kedaftar mahasiswa</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>