<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>

        <style>
            body::-webkit-scrollbar{
                display: none;
            }
        </style>
    </head>
    <body>

        
        <?php echo $__env->make("nav", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container-md my-4">
            <div class="d-flex justify-content-center">
                <h2 >MANAGEMENT ITEM</h2>
            </div>

            <div class="d-flex justify-content-end my-2">
                <button type="button" class="btn btn-success">ADD ITEM</button>
            </div>

            <div class="">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Satuan</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Pensil</td>
                            <td>20000</td>
                            <td>50</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    <button class="btn btn-info px-4">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    </body>
</html>
<?php /**PATH E:\Php\masterBarangUts\resources\views/listbarang.blade.php ENDPATH**/ ?>