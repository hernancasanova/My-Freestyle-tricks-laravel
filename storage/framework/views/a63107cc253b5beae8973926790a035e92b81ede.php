<?php $__env->startSection('content'); ?>
<center><h1>Form to register a new trick</h1></center>
<div id="FormRegister">
	<form action="/tricks" method="POST">
		<?php echo csrf_field(); ?>
		<b>Name:</b> <input type="text" name="name"><br>
		<b>Initials:</b> <input type="text" name="initials"><!--br>
		Style: <select name="style" id="selecStyle">
			<option value="lower">lower</option>
			<option value="upper">upper</option>
			<option value="sitdown">sitdown</option>
			<option value="groundmove">groundmove</option>
		</select--><br>
		<b>Style:</b> <input type="text" name="style"><br>
		<b>Description:</b> <input type="text" name="description" ><br>
		<button type="submit" class="btn btn-success">Register</button>
	</form>
</div>		
<?php $__env->stopSection(); ?>	


	
<?php echo $__env->make('inicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hernan Casanova\Desktop\pruebas\laravel\MVF2\MVF\resources\views//create.blade.php ENDPATH**/ ?>