<!DOCTYPE html>
<html>
<head>
	<title>YAHMI Application template</title>
</head>
<body>
	<h1>YAHMI application boiler plate</h1>
	
	<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<p>Use YAHMI application development framework and enjoy the eco system.</p>
	<div class="container">
            <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>

<?php /**PATH /Users/inspire/Sites/research/yahmi-app/resources/views/layouts/main_layout.blade.php ENDPATH**/ ?>