<?php $__env->startSection('title'); ?>
    <?php echo e(__('Employess')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainConten'); ?>
    <section class="dash-container">
        <div class="dash-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h4 class="m-b-10">Basic Tables</h4>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Table</li>
                                <li class="breadcrumb-item">Basic Tables</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Basic Table</h5>
                            <span class="d-block m-t-5">use class <code>table</code> inside table
                                element</span>
                                 <?php if (app('laratrust')->hasPermission('create_blog')) : ?>
                                          <a href="<?php echo e(url('create')); ?>" class="btn  btn-primary">add</a>
                                  <?php endif; // app('laratrust')->permission ?>
                        
                        </div>
                        
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>contect</th>
                                            <th>role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($data->name); ?></td>
                                                <td><?php echo e($data->email); ?></td>
                                                <td><?php echo e($data->contect); ?></td>
                                                <td><?php echo e($data->role); ?></td>

                                                <td><img style="width: 100px;" src=""></td>
                                                <td>

                                                   

                                                   <?php if (app('laratrust')->hasPermission('edit_blog')) : ?>
                                                        <a href="<?php echo e(url('edit/' . $data->id)); ?>"
                                                            class="btn btn-gradient-info">update</a>
                                                    <?php endif; // app('laratrust')->permission ?>
                                               
                                                    <?php if (app('laratrust')->hasPermission('delete_blog')) : ?>
                                                        <a href="<?php echo e(url('delete/' . $data->id)); ?>"
                                                            class="btn btn-gradient-danger">delete</a>
                                                    <?php endif; // app('laratrust')->permission ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masterpage.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\aryanp\resources\views/employess/employes.blade.php ENDPATH**/ ?>