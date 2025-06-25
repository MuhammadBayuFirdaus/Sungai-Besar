<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/dashBoard.css')); ?>">
    <title>Muhammadiyah Ranting Sungai Besar</title>
</head>
<body>

    <?php echo $__env->make('navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Daftar Berita -->
    <div class="container my-5">
        <h2 class="mb-4">Berita Terkini</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                <a href="#">
                <img src="<?php echo e(asset('img/Default.png')); ?>" class="card-img-top" alt="Politik">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge mb-0 me-2">Politik</span>
                            <span class="tanggal" style="">17 Juni 2025</span>
                        </div>
                        <h5 class="card-title">Judul Berita Politik</h5>
                        <p class="card-text">Ringkasan berita politik terbaru hari ini...</p>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                <a href="#">
                <img src="<?php echo e(asset('img/Default.png')); ?>" class="card-img-top" alt="Politik">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge mb-0 me-2">Politik</span>
                            <span class="tanggal" style="">17 Juni 2025</span>
                        </div>
                        <h5 class="card-title">Judul Berita Politik</h5>
                        <p class="card-text">Ringkasan berita politik terbaru hari ini...</p>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                <a href="#">
                <img src="<?php echo e(asset('img/Default.png')); ?>" class="card-img-top" alt="Politik">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge mb-0 me-2">Politik</span>
                            <span class="tanggal" style="">17 Juni 2025</span>
                        </div>
                        <h5 class="card-title">Judul Berita Politik</h5>
                        <p class="card-text">Ringkasan berita politik terbaru hari ini...</p>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                <a href="#">
                <img src="<?php echo e(asset('img/Default.png')); ?>" class="card-img-top" alt="Politik">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge mb-0 me-2">Politik</span>
                            <span class="tanggal" style="">17 Juni 2025</span>
                        </div>
                        <h5 class="card-title">Judul Berita Politik</h5>
                        <p class="card-text">Ringkasan berita politik terbaru hari ini...</p>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                <a href="#">
                <img src="<?php echo e(asset('img/Default.png')); ?>" class="card-img-top" alt="Politik">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge mb-0 me-2">Politik</span>
                            <span class="tanggal" style="">17 Juni 2025</span>
                        </div>
                        <h5 class="card-title">Judul Berita Politik</h5>
                        <p class="card-text">Ringkasan berita politik terbaru hari ini...</p>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                <a href="#">
                <img src="<?php echo e(asset('img/Default.png')); ?>" class="card-img-top" alt="Politik">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge mb-0 me-2">Politik</span>
                            <span class="tanggal" style="">17 Juni 2025</span>
                        </div>
                        <h5 class="card-title">Judul Berita Politik</h5>
                        <p class="card-text">Ringkasan berita politik terbaru hari ini...</p>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
    
    <?php echo $__env->make('footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\Sungai Besar\Sungai-Besar\resources\views/beritaTerkini.blade.php ENDPATH**/ ?>