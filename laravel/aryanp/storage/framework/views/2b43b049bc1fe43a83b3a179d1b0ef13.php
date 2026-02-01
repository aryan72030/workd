<?php $__env->startSection('title'); ?>

     <?php echo e(__('Product')); ?>


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
                            <span class="d-block m-t-5">use class <code>table</code> inside table element</span>

                            <form action="" id="data" method="post" enctype="multipart/form-data">
                                <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Add product</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="card">

                                                        <div class="card-body">
                                                            <input type="hidden" name="id" id="pid" value="">

                                                            <div class="form-group">
                                                                <label class="form-label">Enter title</label>
                                                                <input type="text" name="title" value="" class="form-control" placeholder="Enter title" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Enter Price </label>
                                                                <input type="number" name="price" class="form-control" placeholder="Enter title" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="form-label" for="exampleSelect1">Select category</label>
                                                                <select class="form-select" name="category">
                                                                    <option value="">select category</option>
                                                                    <option value="Food">Food</option>
                                                                    <option value="Electronics">Electronics</option>
                                                                    <option value="Automotive">Automotive</option>
                                                                    <option value="Chemicals">Chemicals</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label class="form-label" for="exampleTextarea">Description</label>
                                                                <textarea class="form-control" name="description" rows="3" required></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="demo-input-file" class="col-form-label">File</label>
                                                                <input class="form-control" type="file"  name="image" id="demo-input-file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn  btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" id="save" class="btn  btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn  btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter">add</button>

                            </form>


                            <!-- <a href="create.php" class="btn  btn-primary">add</a> -->
                        </div>

                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="pc-dt-simple">
                                    <thead>

                                        <tr>
                                            <th>title</th>
                                            <th>Description</th>
                                            <th>price</th>
                                            <th>category</th>
                                            <th>image</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ans">

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
<?php echo $__env->make('masterpage.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\aryanp\resources\views/products/product.blade.php ENDPATH**/ ?>