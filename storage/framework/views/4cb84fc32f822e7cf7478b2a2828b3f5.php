<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo e(Route::currentRouteName()); ?></title>	
    <link rel="shortcut icon" type="image/x-icon"  href="asset/peticon.png">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flexslider.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/chosen.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/mystyles.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/color-01.css')); ?>">

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="assets/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="assets/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="assets/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="assets/images/lang-fra.png" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="assets/images/lang-can.png" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li>
								
								<?php if(Route::has('login')): ?>
									<?php if(auth()->guard()->check()): ?>
										<?php if(Auth::user()->utype === 'ADM'): ?>
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account(<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
													</li>
													<li class="menu-item">
														<a title="Categories" href="<?php echo e(route('admin.categories')); ?>">Categories</a>
													</li>
													<li class="menu-item">
														<a title="Products" href="<?php echo e(route('admin.product')); ?>">All Products</a>
													</li>
													<li class="menu-item">
														<a title="Contact Messages" href="<?php echo e(route('admin.contact')); ?>">Contact Messages</a>
													</li>
													<li class="menu-item">
														<a href="<?php echo e(route('admin.homecategories')); ?>" title="Manage Home Categories">Manage Home Categories</a>
													</li>
													<li class="menu-item">
														<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
													</li>
													<form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
														<?php echo csrf_field(); ?>
								
													</form>
												</ul>
											</li>
										<?php else: ?>
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account(<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
													</li>
													<li class="menu-item">
														<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
													</li>
													<form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
														<?php echo csrf_field(); ?>
								
													</form>
												</ul>
											</li>
										<?php endif; ?>
								<?php else: ?> 
									<li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('login')); ?>">Login</a></li>
									<li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('register')); ?>">Register</a></li>
								<?php endif; ?>
							<?php endif; ?>
						
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="<?php echo e(asset('asset/petlogo.png')); ?>" alt="logo"></a>
							</div>

						<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header-search-component')->html();
} elseif ($_instance->childHasBeenRendered('qPuq1L3')) {
    $componentId = $_instance->getRenderedChildComponentId('qPuq1L3');
    $componentTag = $_instance->getRenderedChildComponentTagName('qPuq1L3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qPuq1L3');
} else {
    $response = \Livewire\Livewire::mount('header-search-component');
    $html = $response->html();
    $_instance->logRenderedChild('qPuq1L3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

						<div class="wrap-icon right-section">
							
							<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('wishlist-count-component')->html();
} elseif ($_instance->childHasBeenRendered('pWEJYAJ')) {
    $componentId = $_instance->getRenderedChildComponentId('pWEJYAJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('pWEJYAJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pWEJYAJ');
} else {
    $response = \Livewire\Livewire::mount('wishlist-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('pWEJYAJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

							<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-count-component')->html();
} elseif ($_instance->childHasBeenRendered('r3YbIWt')) {
    $componentId = $_instance->getRenderedChildComponentId('r3YbIWt');
    $componentTag = $_instance->getRenderedChildComponentTagName('r3YbIWt');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('r3YbIWt');
} else {
    $response = \Livewire\Livewire::mount('cart-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('r3YbIWt', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
							
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				
				<!-- Mainbar -->

				<div class="mainbar">
					<ul class="navbarr">
					<?php if(Route::currentRouteName()=='PET.com.bd'): ?>
						<li><a class="active" href="/">Home</a></li>
						<?php else: ?>
							<li><a href="/">Home</a></li>
						<?php endif; ?>
						<?php if(Route::currentRouteName()=='product.shop'): ?>
						<li><a class="active" href="/shop">All Products</a></li>
						<?php else: ?>
							<li><a href="/shop">All Products</a></li>
						<?php endif; ?>
						<?php if(Route::currentRouteName()=='blog'): ?>
						<li><a class="active" href="/blog">Grooming</a></li>
						<?php else: ?>
							<li><a href="/blog">Grooming</a></li>
						<?php endif; ?>
                         
						<?php if(Route::currentRouteName()=='adopt'): ?>
						<li><a class="active" href="/adopt">Adopt</a></li>
						<?php else: ?>
							<li><a href="/adopt">Adopt</a></li>
						<?php endif; ?>

					
						 <?php if(Route::currentRouteName()=='vet'): ?>
						<li><a class="active" href="/vet">Vet Finder</a></li>
						<?php else: ?> 
						<li><a href="/vet">Vet Finder</a></li>
						 <?php endif; ?> 

						<?php if(Route::currentRouteName()=='aboutUs'): ?>
						<li><a class="active" href="/about-us">About Us</a></li>
						<?php else: ?>
							<li><a href="/about-us">About Us</a></li>
						<?php endif; ?>
						<?php if(Route::currentRouteName()=='contact'): ?>
						<li><a class="active" href="/contact-us">Contact Us</a></li>
						<?php else: ?>
							<li><a href="/contact-us">Contact Us</a></li>
						<?php endif; ?>
						<?php if(Route::currentRouteName()=='product.cart'): ?>
						<li><a class="active" href="/cart">Cart</a></li>
						<?php else: ?>
							<li><a href="/cart">Cart</a></li>
						<?php endif; ?>
						<?php if(Route::currentRouteName()=='checkout'): ?>
						<li><a class="active" href="/checkout">Checkout</a></li>
						<?php else: ?>
							<li><a href="/checkout">Checkout</a></li>
						<?php endif; ?>
						
					</ul>
		
				</div>

				   <!-- <div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="/blog" class="link-term mercado-item-title">Blogs</a>
								</li>
								<li class="menu-item">
									<a href="/about-us" class="link-term mercado-item-title">About US</a>
								</li>
								<li class="menu-item">
									<a href="/contact-us" class="link-term mercado-item-title">Contact Us</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Checkout</a>
								</li>								
							</ul>
						</div>
					</div> -->
			</div>
		</div>
	</header>

	<?php echo e($slot); ?>


	
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Fulbarigate,Khulna</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+123) 111 789 - (+123) 656 888</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">contact@PET.com.bd</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Hot Line</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Call Us toll Free</span>
										<b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Sign up for newsletter</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">My Account</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">My Account</a></li>
												<li class="menu-item"><a href="#" class="link-term">Brands</a></li>
												<li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Infomation</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="/contact-us" class="link-term">Contact Us</a></li>
												<li class="menu-item"><a href="#" class="link-term">Returns</a></li>
												<li class="menu-item"><a href="/contact-us" class="link-term">Site Map</a></li>
												<li class="menu-item"><a href="#" class="link-term">Specials</a></li>
												<li class="menu-item"><a href="#" class="link-term">Order History</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">We Using Safe Payments:</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="asset/payment-gateway.png" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Social network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Dowload App</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="asset/app-store.png" alt="apple store" width="128" height="36"></figure></a></li>
											<li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="asset/play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="coppy-right-box" style="margin-top: 15px">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2023 PET.com.bd. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>								
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="<?php echo e(asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.flexslider.js')); ?>"></script>
	
	<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/functions.js')); ?>"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.js" integrity="sha512-UOJe4paV6hYWBnS0c9GnIRH8PLm2nFK22uhfAvsTIqd3uwnWsVri1OPn5fJYdLtGY3wB11LGHJ4yPU1WFJeBYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php echo \Livewire\Livewire::scripts(); ?>


	<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\PetShop\resources\views/layouts/base.blade.php ENDPATH**/ ?>