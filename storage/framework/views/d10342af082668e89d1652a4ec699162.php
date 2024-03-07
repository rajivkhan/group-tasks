<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Users</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="<?php echo e(route('users.create')); ?>" class="btn add-btn"><i class="fa fa-plus"></i> Add User</a>
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th class="text-nowrap">Join Date</th>
                            <th class="text-right no-sort">Action</th>

                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>

                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                    <a href="#"><?php echo e($user->name); ?> <span>Web Designer</span></a>
                                </h2>
                            </td>
                            <td><?php echo e($user->username); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->mobile); ?></td>
                            <td>1 Jan 2013</td>
                            <td class="text-right">
                                <div style="display: inline-block;">
                                    <a href="<?php echo e(route('users.edit', ['user' => $user->id])); ?>" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                </div>
                                <div style="display: inline-block;">
                                    <form action="<?php echo e(route('users.destroy', ['user' => $user->id])); ?>" method="post" enctype="multipart-form/data">
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel10/resources/views/users/index.blade.php ENDPATH**/ ?>