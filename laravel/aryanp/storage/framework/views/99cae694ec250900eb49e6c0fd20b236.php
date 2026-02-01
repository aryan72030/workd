<?php $__env->startSection('title'); ?>
    create emplyess
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainConten'); ?>
    <section class="dash-container">
        <div class="dash-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h4 class="m-b-10">Form Employees</h4>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Form Components</li>
                                <li class="breadcrumb-item">Form Validation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Form Employees</h5>
                        </div>
                        <div class="card-body">
                            <form class="validate-me" action="<?php echo e(url('role/update')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($data->id); ?>" id="">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-lg-end">name</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="<?php echo e($data->name); ?>" name="name" >
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-lg-end">Permission</label>
                                    <div class="col-lg-6">
                                        <?php $__currentLoopData = $premision; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="permission[]"
                                                    id="checkbox-1" value="<?php echo e($dis->name); ?>" <?php echo e(in_array($dis->name,$chekpr) ? 'checked' : ''); ?>>
                                                <label class="form-check-label" for="checkbox-1">
                                                    <?php echo e($dis->name); ?>

                                                </label>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-4 col-form-label"></div>
                                    <div class="col-lg-6">
                                        <input type="submit" name="save" class="btn btn-primary" value="update">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- [ Form Validation ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masterpage.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\aryanp\resources\views\roles\edit.blade.php ENDPATH**/ ?>