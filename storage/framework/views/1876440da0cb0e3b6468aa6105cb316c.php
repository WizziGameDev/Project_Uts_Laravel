<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-evenly" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white me-3" href="<?php echo e(route('welcome')); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white ms-3" href="#">List Barang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container text-center my-5">
            <h1 class="mb-4">WELCOME TO MANAGEMENT ITEM</h1>
            <img class="img-thumbnail" style="width: 50%" src="<?php echo e(Vite::asset('resources/images/Barang.jpg')); ?>" alt="image">
        </div>

        <div class="container d-flex justify-content-evenly align-items-center py-5">
            <div>
                <h3>INTRODUCTION</h3>
                <pre>Name   : Ricky Adam Saputra <br>Study  : Information System <br>Class  : IS 05 01 <br>Course : Pemrograman Framework
                </pre>
            </div>
            <div>
                <img class="img-thumbnail" style="width: 300px" src="<?php echo e(Vite::asset('resources/images/profilekuu.png')); ?>" alt="image">
            </div>
        </div>

        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    </body>
</html>
<?php /**PATH E:\Php\masterBarangUts\resources\views/welcome.blade.php ENDPATH**/ ?>