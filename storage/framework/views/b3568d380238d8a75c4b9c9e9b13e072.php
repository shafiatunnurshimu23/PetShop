<!--main area-->
<main id="main" class="main-site">
    <style>
        .regprice{
            font-weight: 300;
            font-size: 13px !important;
            color: #aaaaaa !important;
            text-decoration: line-through;
            padding-left: 10px;
        }
    </style>

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Adopt</span></li>
                <li class="item-link"><span>detail</span></li>
            </ul>
        </div>
        
        <style>
            .product-wish{
                position: absolute;
                top: 10%;
                left: 0;
                z-index: 99;
                right: 30px;
                text-align: right;
                padding-top: 0;
            }
            .product-wish .fa{
                color: #cbcbcb;
                font-size: 24px;
            }

            .product-wish .fa:hover{
                color: #1A2C4D;
            }

            .fill-heart{
                color: #1A2C4D !important;
            }

        </style>

        <div class="row">
            <div class=" main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                          <ul >

                            <li data-thumb="<?php echo e(asset('asset/adopt')); ?>/<?php echo e($adopt->image); ?>.png" >
                                <img src="<?php echo e(asset('asset/adopt')); ?>/<?php echo e($adopt->image); ?>.png" alt="<?php echo e($adopt->name); ?>" style="width:570px;height:550px;" />
                            </li>

                          </ul>
                        </div>
                    </div>
                    <div class="detail-info" style="padding-top:100px;">
                        
                        <h2 class="product-name"><?php echo e($adopt->name); ?></h2>
                        <div >
                         <h2 class="product-name"> <?php echo e($adopt->slug); ?></h2> 
                        </div>
                        <div class="short-desc">
                            <?php echo e($adopt->short_description); ?>

                        </div>
                        <div >
                         <h4>Code -  <?php echo e($adopt->code); ?></h4> 
                        </div>
                        
                        <div class="short-desc">Gender-
                            <?php echo e($adopt->Gender); ?>

                        </div>
                        <div class="wrap-social">
                            <a class="link-socail" href="#"><img src="<?php echo e(asset('assets/images/social-list.png')); ?>" alt=""></a>
                        </div>
                        
                        
                        
                        <div class="wrap-butons">
                            <a href="/contact-us" class="btn add-to-cart" >Adopt</a>
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            
                            <a href="#add_infomation" class="tab-control-item active">Addtional Infomation</a>
                            <a href="#description" class="tab-control-item ">description</a>
                        </div>
                        <div class="tab-contents">
                            
                            <div class="tab-content-item active" id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                    <tr>
                                            <th>Code :</th><td class="product_dimensions"><?php echo e($adopt->code); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Name :</th><td class="product_weight"><?php echo e($adopt->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Age :</th><td class="product_dimensions"><?php echo e($adopt->age); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Gender :</th><td class="product_dimensions"><?php echo e($adopt->Gender); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Color :</th><td class="product_dimensions"><?php echo e($adopt->color); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Behavior :</th><td class="product_dimensions">Not harmfull,Friendly with other cats and children.</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-content-item " id="description">
                                <?php echo e($adopt->description); ?>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

                 
              

            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Some more cats</h3>
                    <div class="row">
					
					<ul class="product-list grid-products equal-container">
						<?php $__currentLoopData = $related_adopts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r_adopt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										
                                        <a href="<?php echo e(route('adopt.details', ['slug'=>$r_adopt->slug])); ?>" title="<?php echo e($r_adopt->name); ?>">
											<figure><img src="<?php echo e(asset('asset/adopt')); ?>/<?php echo e($r_adopt->image); ?>.png" alt="<?php echo e($r_adopt->name); ?>" style="width:250px;height:220px;"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span><?php echo e($r_adopt->name); ?></span></a>
                                        <div class="wrap-price"><span class="product-price"><?php echo e($r_adopt->code); ?></span></div>
                                        
                                        
										<a href="<?php echo e(route('adopt.details', ['slug'=>$r_adopt->slug])); ?>" class="btn add-to-cart" >Details</a>
										
									</div>
								</div>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>

				</div>

                </div>
            </div>

        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area--><?php /**PATH C:\xampp\htdocs\PetShop\resources\views/livewire/details-adopt.blade.php ENDPATH**/ ?>