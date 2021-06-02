<!-- SECTION -->
<?php echo $__env->make('template_blog.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="section">
		<!-- container -->
		<div class="container">
						<!-- row -->
			<div id="hot-post" class="row hot-post">
				
				<?php echo $__env->yieldContent('isi'); ?>
				
				<?php echo $__env->make('template_blog.widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	

		</div>
	</div>
	
	<?php echo $__env->make('template_blog.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUGASAKHIRADLAN\resources\views/template_blog/content.blade.php ENDPATH**/ ?>