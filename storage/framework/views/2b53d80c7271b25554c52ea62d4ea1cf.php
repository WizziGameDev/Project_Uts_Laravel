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
                <a href="<?php echo e(route('list-barang.create')); ?>" class="btn btn-success">ADD ITEM</a>
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
                        <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($barang->kode_barang); ?></td>
                                <td><?php echo e($barang->nama_barang); ?></td>
                                <td><?php echo e($barang->harga_barang); ?></td>
                                <td><?php echo e($barang->description_barang); ?></td>
                                <td><?php echo e($barang->satuan->nama_satuan); ?></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href=""
                                           class="btn btn-outline-info btn-sm me-2">Detail</a>
                                        <a href=""
                                           class="btn btn-outline-success btn-sm me-2">Edit</a>
                                        <form action="<?php echo e(route('list-barang.destroy', ['barang' => $barang])); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="btn btn-outline-danger btn-sm me-2">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    </body>
</html>
<?php /**PATH E:\Php\masterBarangUts\resources\views/barang/listbarang.blade.php ENDPATH**/ ?>