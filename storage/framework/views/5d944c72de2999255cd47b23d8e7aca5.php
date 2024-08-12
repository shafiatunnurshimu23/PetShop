
<section id="blog-details">
<div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Blog</span></li>
                <li class="item-link"><span>blog detail</span></li>
            </ul>
        </div>
        <h1><?php echo e($blog->name); ?></h1>
        <h5><?php echo e($blog->created_at); ?></h5>
        <h5>--by <?php echo e($blog->writer); ?></h5>
        <div class="blog-box">
            <div class="blog-img">
                <img src="<?php echo e(asset('asset/blog')); ?>/<?php echo e($blog->image); ?>.webp" alt="">
            </div>
            <div class="blog-details">
                <h3>
                Spring Vibe
                </h3>
                <p>
                <?php echo e($blog->description); ?>

                    </p>
            </div>
        </div>
        <div class="blog-box">
                <p>
                <?php echo e($blog->description); ?>

                    </p>
           
            
        </div>
        



        



    </section><?php /**PATH C:\xampp\htdocs\OnlineFashionStore\resources\views/livewire/details-blog.blade.php ENDPATH**/ ?>