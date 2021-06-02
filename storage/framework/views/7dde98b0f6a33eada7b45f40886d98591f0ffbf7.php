<?php $__env->startSection('isi'); ?>

	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $isi_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<div id="post-header" class="page-header">
			<div class="page-header-bg" style="
			background-image: url( <?php echo e(asset($isi_post->gambar)); ?> );" 

			data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="category.html"><?php echo e($isi_post->category->name); ?></a>
						</div>
						<h1><?php echo e($isi_post->judul); ?></h1>
						<ul class="post-meta">
							<li><a href="author.html"><?php echo e($isi_post->users->name); ?></a></li>
							<li><?php echo e($isi_post->created_at); ?></li>
						
							<!-- <li><i class="fa fa-eye"></i> 807</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<div class="col-md-8 hot-post-left">
	<br>
		<div class="section-row">



		<?php echo $isi_post->content; ?>


		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_blog.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUGASAKHIRADLAN\resources\views/blog/isi_post.blade.php ENDPATH**/ ?>