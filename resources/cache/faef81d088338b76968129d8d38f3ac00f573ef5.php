<?php $__env->startSection('content'); ?>
 	<?php $__currentLoopData = $book_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        <li><?php echo e($book); ?></li>
	 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
<?php $__env->stopSection(); ?>	 
<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/inspire/Sites/research/yahmi-app/views/home/index.blade.php ENDPATH**/ ?>