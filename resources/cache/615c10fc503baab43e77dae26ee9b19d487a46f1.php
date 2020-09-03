<?php $__env->startSection('content'); ?>
	<h2>Edit</h2>
	<p>Title Id, <?php echo e($title_id); ?>.</p>
	<p>Project Id, <?php echo e($project_id); ?>.</p>
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/inspire/Sites/research/yahmi-app/views/catalogue/edit.blade.php ENDPATH**/ ?>