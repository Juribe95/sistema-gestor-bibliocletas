<?php $__env->startSection('title','about'); ?>

<?php $__env->startSection('content'); ?>

	<h1>about</h1>

	<ul>
		
		<?php if(isset($portafolio)): ?>

			<?php $__currentLoopData = $portafolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portafolioItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<li> <?php echo e($portafolioItem['title']); ?> </li>
				
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		 <?php else: ?>

			<li>no hay datos para mostrar</li>
		 <?php endif; ?>

	</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layaout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sgb\resources\views/about.blade.php ENDPATH**/ ?>