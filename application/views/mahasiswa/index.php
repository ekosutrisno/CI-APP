<section class="x-one-x">
   <div class="container">
      <div class="row">
         <!-- section 1 -->
         <div class="col-md-6">

            <?php if ($this->session->flashdata('flash')) : ?>
               <div class="row mt-3">
                  <div class="col-md">
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Mahasiswa<strong> berhasil </strong><?= $this->session->flashdata('flash'); ?>!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                  </div>
               </div>
            <?php endif; ?>

            <div class="row mt-3">
               <div class="col-md">
                  <a href=" <?= base_url(); ?>mahasiswa/tambah " class="btn btn-primary">Tambah Data Mahasiswa</a>
               </div>
            </div>

            <div class="row mt-3">
               <div class="col-md">
                  <form action="" method="post">
                     <div class="input-group mt-2">
                        <input type="text" class="form-control" placeholder="Tuliskan pencarian..." id="keyword" name="keyword" autocomplete="off">
                        <div class="input-group-append">
                           <button type="submit" class="btn btn-primary" id="cari" name="cari">Cari</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>

            <div class="row mt-3">
               <div class="col-md">
                  <h3 class="text-white">Daftar Mahasiswa</h3>

                  <?php if (empty($mahasiswa)) : ?>
                     <div class="alert alert-danger">Data Mahasiswa tidak ditemukan!</div>
                  <?php endif; ?>

                  <ul class="list-group">
                     <?php foreach ($mahasiswa as $mhs) : ?>
                        <li class="list-group-item">
                           <?= $mhs['nama']; ?>
                           <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Yakin akan menghapus data mahasiswa?');">hapus</a>
                           <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-2">ubah</a>
                           <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-2">detail</a>
                        </li>
                     <?php endforeach; ?>
                  </ul>
               </div>
            </div>
         </div>

         <!-- section 2 -->
         <div class="col-md-6">
            <div class="row mt-5">
            </div>
         </div>
      </div>
   </div>
</section>