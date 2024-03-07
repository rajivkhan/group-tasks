<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Groups</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Groups</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="<?php echo e(route('groups.create')); ?>" class="btn add-btn"><i class="fa fa-plus"></i> Add group</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    <?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>

                            <td><?php echo e($group->name); ?></td>
                            <td><?php echo e($group->slug); ?></td>
                            <td><?php echo e($group->description); ?></td>

                            <td class="text-right">
                                <div style="display: inline-block;">
                                    <a href="<?php echo e(route('groups.edit', ['group' => $group->id])); ?>" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                </div>
                                <div style="display: inline-block;">
                                    <form action="<?php echo e(route('groups.destroy', ['group' => $group->id])); ?>" method="post" enctype="multipart-form/data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/group-tasks/resources/views/groups/index.blade.php ENDPATH**/ ?>