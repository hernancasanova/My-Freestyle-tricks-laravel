<?php $__env->startSection('content'); ?>
		<div id="TricksDescription">
			<h3>List of tricks</h3>
			<?php $__currentLoopData = $tricks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trick): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<article>
					<b>Trick: </b><?php echo e($trick->id); ?><br>
					<b>Name: </b><?php echo e($trick->name); ?><br>
					<b>Initials: </b><?php echo e($trick->initials); ?><br>
					<b>Style: </b><?php echo e($trick->style); ?><br>
					<b>Description: </b><?php echo e($trick->description); ?><br>
					<form action="/tricks/<?php echo e($trick->id); ?>" method="GET">
						<button class="btn btn-success">Edit</button>
					</form>
					<button class="btn btn-primary">See trick</button>
				</article>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		</div>
		<div id="VideoTrick">
			<video width="100%" height="100%" controls>
				<source src="/videos/akim.mp4" type="video/mp4">
			</video>
		</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\projects\laravel\MVF2\MVF\resources\views/tricks.blade.php ENDPATH**/ ?>