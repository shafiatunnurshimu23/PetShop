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
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/RoboticsShop/resources/views/layouts/dashboard.blade.php ENDPATH**/ ?>