	
<?php $__env->startSection('isi'); ?>
<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="<?php echo e(asset('frontend/img/hot-post-1.jpg')); ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Sport</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">Olahraga dapat membugarkan badan & baik untuk kesehatan</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Adam Rizki</a></li>
								<li>20 April 2021</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="<?php echo e(asset('frontend/img/hot-post-2.jpg')); ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Artis Langsung turun ke lapangan untuk menyakikan sebuah lagu</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Rifqi Malik</a></li>
								<li>12 Mei 2021</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="<?php echo e(asset('frontend/img/hot-post-3.jpg')); ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Fashion</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Outfit anak muda hits jaman sekarang & kekinian</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">Putri Ayu</a></li>
								<li>27 February 2021</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
	
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post_terbaru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="<?php echo e(route('blog.isi', $post_terbaru->slug )); ?>"><img src="<?php echo e($post_terbaru->gambar); ?>" alt="" style="height: 200px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#"><?php echo e($post_terbaru->category->name); ?></a>
									</div>
									<h3 class="post-title"><a href="#"><?php echo e($post_terbaru->judul); ?></a></h3>
									<ul class="post-meta">
										<li><a href="#"><?php echo e($post_terbaru->users->name); ?></a></li>
										<li><?php echo e($post_terbaru->created_at->diffForHumans()); ?></li>
									</ul>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
					</div>
					<!-- /row -->

	
				</div>
				
		
		
			<!-- /row -->
<?php $__env->stopSection(); ?>





<?php echo $__env->make('template_blog.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUGASAKHIRADLAN\resources\views/blog.blade.php ENDPATH**/ ?>