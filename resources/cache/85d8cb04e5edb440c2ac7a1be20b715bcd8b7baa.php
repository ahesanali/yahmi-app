Hello, <?php echo e($name); ?>.

<?php echo e(config('app.php','app_name')); ?>


 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($product['product_name']); ?></li>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php $__currentLoopData = $price_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$price_list_entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($price_list_entry); ?></li>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <form action="/research/phpkit/catalogue/addName" method="POST">
 	Name: <input type="text" name="first_name">
 	<input type="submit">
 </form>