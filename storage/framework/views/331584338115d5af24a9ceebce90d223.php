<div>

<main id="main">

	<div class="container">

		<div class="wrap-breadcrumb">
			<ul>
				<li class="item-link"><a href="#" class="link">home</a></li>
				<li class="item-link"><span>Adopt</span></li>
			</ul>
		</div>
		<div class="row">
			<div >

				<div class="banner-shop">
					<a href="#" class="banner-link">
						<figure><img src="<?php echo e(asset('asset/banner/adoptbanner')); ?>.png" alt="" style="width:100%; height: 390px;"></figure>
					</a>
				</div>

				<div class="wrap-shop-control">

					<h1 class="shop-title">Adopt a Pet</h1>

					<div class="wrap-right">



						<div class="sort-item product-per-page">
							<select name="post-per-page" class="use-chosen" wire:model="pagesize">
								<option value="6" selected="selected">6 per page</option>
								<option value="8">8 per page</option>
								<option value="10">10 per page</option>
                                <option value="12">12 per page</option>
								
							</select>
						</div>

						<div class="change-display-mode">
							<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
							<a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
						</div>

					</div>

				</div><!--end wrap shop control-->


   
   
    


    

     <div class="row">
					
					<ul class="product-list grid-products equal-container">
						<?php $__currentLoopData = $adopts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adopt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										
                                        <a href="<?php echo e(route('adopt.details', ['slug'=>$adopt->slug])); ?>" title="<?php echo e($adopt->name); ?>">
											<figure><img src="<?php echo e(asset('asset/adopt')); ?>/<?php echo e($adopt->image); ?>.png" alt="<?php echo e($adopt->name); ?>" style="width:330px;height:300px;"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span><?php echo e($adopt->name); ?></span></a>
                                        <div class="wrap-price"><span class="product-price"><?php echo e($adopt->code); ?></span></div>
                                        
										<a href="<?php echo e(route('adopt.details', ['slug'=>$adopt->slug])); ?>" class="btn add-to-cart" >Details</a>
										
									</div>
								</div>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>

				</div>

    


 <div class="wrap-pagination-info">
					<?php echo e($adopts->links()); ?>

					


				</div>

</div>
</div><!--end main products area-->
</div><!--end row-->

	</div><!--end container-->

</main>
<?php /**PATH C:\xampp\htdocs\PetShop\resources\views/livewire/adopt-component.blade.php ENDPATH**/ ?>