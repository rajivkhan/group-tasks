<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0">Groups</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('groups.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="write name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Slug:</label>
                                    <input type="text" class="form-control" name="slug" placeholder="slug">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description:</label>
                            <textarea id="w3review" rows="5" class="form-control" name="description"></textarea>
                        </div>
                        <div class="text-right">
                            <a href="<?php echo e(route('groups.index')); ?>" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel10/resources/views/groups/create.blade.php ENDPATH**/ ?>