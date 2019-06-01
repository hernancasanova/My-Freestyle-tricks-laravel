<?php $__env->startSection('content'); ?>
		<div id="TrickDescription">
			<h3>Details of trick</h3>
			<article>
				<form action="/tricks/<?php echo e($trick->id); ?>" method="POST">
					<?php echo csrf_field(); ?>
					<?php echo method_field('PATCH'); ?>
					<b>Trick: </b><?php echo e($trick->id); ?><br>
					<b>Name: </b><input type="text" name="name" value="<?php echo e($trick->name); ?>" placeholder="Name"><br>
					<b>Initials: </b><input type="text" name="initials" value="<?php echo e($trick->initials); ?>" placeholder="Initials"><br>
					<b>Style: </b><input type="text" name="style" value="<?php echo e($trick->style); ?>" placeholder="Style"><br>
					<b>Description: </b><input type="text" name="description" value="<?php echo e($trick->description); ?>" placeholder="Description"><br>
					<button type="submit" class="btn btn-success mt-1">Save trick</button>
				</form>
				<form action="/tricks/<?php echo e($trick->id); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<?php echo method_field('DELETE'); ?>
						<button class="btn btn-danger mt-1" type="submit">Delete trick</button>
				</form>
			</article>
		</div>
		<div id="VideoTrick">
			<video width="100%" height="100%" controls>
				<source src="/videos/<?php echo e($trick->initials); ?>.wmv" type="video/mp4">
			</video>
		</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\projects\laravel\MVF2\MVF\resources\views/show.blade.php ENDPATH**/ ?>