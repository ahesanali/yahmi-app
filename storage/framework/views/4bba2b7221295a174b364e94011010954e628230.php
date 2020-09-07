
<?php $__env->startSection('content'); ?>
	<h2>Title List</h2>
	<p>Hello, <?php echo e($name); ?>.</p>
	
	<p>Appliction directory:<?php echo e(config('app.php','app_dir')); ?></p>

	 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        <li><?php echo e($product['product_name']); ?></li>
	 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 <?php $__currentLoopData = $price_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$price_list_entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        <li><?php echo e($price_list_entry); ?></li>
	 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 <form action="<?php echo e(route('catalogue.post-add-title')); ?>" method="POST">
	 	Name: <input type="text" name="first_name">
	 	<input type="submit">
	 </form>
<?php $__env->stopSection(); ?>	 
<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/inspire/Sites/research/yahmi-app/resources/views/catalogue/titles.blade.php ENDPATH**/ ?>