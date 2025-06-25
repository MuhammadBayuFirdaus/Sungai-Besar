<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
    <title>Document</title>
  </head>
  <body>
    <footer class="pt-5 pb-3 mt-5" style="letter-spacing:1px;">
    <div class="container">
        <div class="row text-start">
            <!-- Logo dan Deskripsi -->
            <div class="col-md-3 mb-4">
                <img src="<?php echo e(asset('img/logo Sungai Besar Pendek.png')); ?>" alt="Logo" class="mb-3">
            </div>
            <div class="col-md-3 mb-4">
                <h6 class="mb-3">Berita</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="mb-2">Kategori 1</a></li>
                    <li><a href="#" class="mb-2">Kategori 2</a></li>
                    <li><a href="#" class="mb-2">Kategori 3</a></li>
                    <li><a href="#" class="mb-2">Kategori 4</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h6 class="mb-3">Kegiatan</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="mb-2">Kategori 1</a></li>
                    <li><a href="#" class="mb-2">Kategori 2</a></li>
                    <li><a href="#" class="mb-2">Kategori 3</a></li>
                    <li><a href="#" class="mb-2">Kategori 4</a></li>
                </ul>
            </div>
            <!-- Kontak -->
            <div class="col-md-3 mb-4">
                <h6 class="mb-3">Informasi</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="mb-2">Redaksi</a></li>
                    <li><a href="#" class="mb-2">Kontak</a></li>
                    <li><a href="#" class="mb-2">Ketentuan Layanan</a></li>
                </ul>
            </div>
        </div>
        <hr class="border-light opacity-25">
        <div class="text-center small mt-3">
            &copy; <?php echo e(date('Y')); ?> Sungai Besar. All rights reserved.
        </div>
    </div>
</footer>
  </body>
</html><?php /**PATH C:\xampp\htdocs\Sungai Besar\Sungai-Besar\resources\views/footer.blade.php ENDPATH**/ ?>