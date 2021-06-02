<?php $__env->startSection('sub-judul','Tambah Tag'); ?>
<?php $__env->startSection('content'); ?>

  <?php if(count($errors)>0): ?>
  	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  	<div class="alert alert-danger" role="alert">
      <?php echo e($error); ?>

	</div>  		
  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>

  <?php if(Session::has('success')): ?>
  	<div class="alert alert-success" role="alert">
      <?php echo e(Session('success')); ?>

	</div> 
  	
  <?php endif; ?>

  <form action="<?php echo e(route('tag.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <div class="form-group">
      <label>Tag</label>
      <input type="text" class="form-control" name="name">
  </div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Tag</button>
  </div>

  </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUGASAKHIRADLAN\resources\views/admin/tag/create.blade.php ENDPATH**/ ?>