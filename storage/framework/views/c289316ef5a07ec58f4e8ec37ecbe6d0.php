<div>

<main id="main">

	<div class="container">

		<div class="wrap-breadcrumb">
			<ul>
				<li class="item-link"><a href="#" class="link">home</a></li>
				<li class="item-link"><span>Grooming</span></li>
			</ul>
		</div>
		<div class="row">
			<div >

				<div class="banner-shop">
					<a href="#" class="banner-link">
						<figure><img src="<?php echo e(asset('asset/banner/bb')); ?>.webp" alt="" style="width:100%; height: 3in;"></figure>
					</a>
				</div>

				<div class="wrap-shop-control">

					<h1 class="shop-title">Grooming</h1>

					<div class="wrap-right">



						<div class="sort-item product-per-page">
							<select name="post-per-page" class="use-chosen" wire:model="pagesize">
								<option value="4" selected="selected">4 per page</option>
								<option value="5">5 per page</option>
								<option value="3">3 per page</option>
								<option value="2">2 per page</option>
								
							</select>
						</div>

						<div class="change-display-mode">
							<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
							<a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
						</div>

					</div>

				</div><!--end wrap shop control-->


   
   
    


     <section id="blog">
       <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="blog-box">
            <div class="blog-img">
                <img src="<?php echo e(asset('asset/blog')); ?>/<?php echo e($blog->image); ?>.jpg" alt="<?php echo e($blog->name); ?>">
            </div>
            <div class="blog-details">
                <h1><?php echo e($blog->name); ?></h4>
                
        <h5>--by <?php echo e($blog->writer); ?></h5>
                <p><?php echo e($blog->short_description); ?></p>
                <a href="<?php echo e(route('blog.details',['slug'=>$blog->slug])); ?>">Read more</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       

     </section>

    


 <div class="wrap-pagination-info">
					<?php echo e($blogs->links()); ?>

					


				</div>

</div>
</div><!--end main products area-->
</div><!--end row-->

	</div><!--end container-->

</main>
<?php /**PATH C:\xampp\htdocs\PetShop\resources\views/livewire/blog-component.blade.php ENDPATH**/ ?>