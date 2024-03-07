
<div class="row">
	<div class="col-md-12">
		<?php if($errors->any()): ?>
		    <div class="alert alert-danger alert-dismissable">
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
		<?php endif; ?>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<?php if(session()->has('messageType')): ?>
			<div class="alert alert-<?php echo e(session()->get('messageType')); ?> alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<?php echo e(session()->get('message')); ?>

			</div>
		<?php endif; ?>
	</div>
</div>


<?php /**PATH /opt/lampp/htdocs/laravel10/resources/views/layouts/messages.blade.php ENDPATH**/ ?>