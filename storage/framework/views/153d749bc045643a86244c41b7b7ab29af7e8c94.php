<?php $__env->startSection('sub-judul','Post'); ?>
<?php $__env->startSection('content'); ?>

    <?php if(Session::has('success')): ?>
  	<div class="alert alert-success" role="alert">
      <?php echo e(Session('success')); ?>

	</div> 
	<?php endif; ?>

	<a href="<?php echo e(route('post.create')); ?>" class="btn btn-info btn-sm">Tambah Post</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Post</th>
				<th>Kategori</th>
				<th>Daftar Tags</th>
				<th>Creator</th>
				<th>Thumbnail</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result => $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($result + $post->firstitem()); ?></td>
				<td><?php echo e($hasil->judul); ?></td>
				<td><?php echo e($hasil->category->name); ?></td>
				<td><?php $__currentLoopData = $hasil->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<ul>
						<h6><span class="badge badge-info"><?php echo e($tag->name); ?></span></h6>
					</ul>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
				</td>
				<td><?php echo e($hasil->users->name); ?></td>
				<td><img src="<?php echo e(asset( $hasil->gambar )); ?>" class="img-fluid" style="width:100px"></td>
				<td>
					<form action="<?php echo e(route('post.destroy', $hasil->id )); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<?php echo method_field('delete'); ?>
					<a href="<?php echo e(route('post.edit', $hasil->id )); ?>" class="btn btn-primary btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</tbody>
	</table>
	<?php echo e($post->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUGASAKHIRADLAN\resources\views/admin/post/index.blade.php ENDPATH**/ ?>