
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <header>

                <!--Header row 1 with gray back ground Start-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row justify-content-between header1">
                                <div class="col-auto p-0 text-gray">
                                    <?php if((Config::get('constant.JWL_PACKAGE_NAME')) !=''): ?>
                                    <a href="https://play.google.com/store/apps/details?id=<?php echo e(Config::get('constant.JWL_PACKAGE_NAME')); ?>" target="_blank"><i class="fas fa-mobile-alt"></i>
                                    <?php else: ?>
                                    <a href="<?php echo e(route('comming_soon')); ?>" target="_blank"><i class="fas fa-mobile-alt"></i>
                                    <?php endif; ?>    &nbsp;Download App
                                    </a>
                                </div>
                                <!-- Social Accounts Start. -->
                                <?php echo $__env->make('partial.social-accounts.headerSocial', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <!-- Social Accounts End. -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Header row 1 with gray back ground End-->

                <!--Logo, call to action Header 2 start-->
                <div class="row bg-white">
                    <div class="container">
                        <div class="row header2">
                            <div class="col-lg-auto col-md-12 pl-sm-0 pr-0 text-lg-left text-center">
                                <a href="<?php echo e(route('business_details')); ?>">

                                    <img src="<?php echo e($business_logo.$business_data->bd_biz_logo); ?>" class="rounded img-fluid border"
                                         alt="Sonarka Logo">
                                </a>
                            </div>
                            <div class="col-lg-10">
                                <div class="row head-content">
                                    <div class="col offset-lg-1 pl-sm-0 pr-0 col-md-12  mt-3 mt-sm-0 title text-lg-left text-center">
                                        <h1><?php echo e($business_data->bd_business_name); ?></h1>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col offset-lg-1 pl-sm-0 pr-0 col-md-12 text-gray title text-lg-left text-center">
                                        <h2>
                                            <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; <?php echo e($business_data->bd_city); ?>, <?php echo e($business_data->bd_state); ?>

                                        </h2>
                                    </div>
                                </div>
                                <div class="row border-top ">
                                    <div class="col-11 offset-lg-1">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6 text-gray text-lg-left text-center">
                                                <?php
                                                $mobile = Config::get('constant.JWL_PRIMARY_MOBILE');
                                                ?>
                                                <?php if(isset($business_data->mobile) && !empty($business_data->mobile) && empty($mobile)): ?>
                                                    <?php
                                                    $mobile = $business_data->mobile;
                                                    ?>
                                                <?php endif; ?>
                                                <a href="tel:<?php echo e($mobile); ?>">
                                                    <div class="row pt-3">
                                                        <div class="col-auto pl-sm-0 pr-0">
                                                            <img src="<?php echo e(Config::get('constant.RESOURCES_LOCATION')); ?>assets/theme/img/icon/phone.svg" class="contact-icon" alt="Phone">
                                                        </div>
                                                        <div class="col-9 col-sm-10 title">

                                                            <h3>Call Us +91-<?php echo e($mobile); ?> </h3>
                                                            <h4><?php echo e(Config::get('constant.JWL_OPENING_HOURS')); ?></h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-md-6 text-gray text-lg-left text-center">
                                                <?php
                                                $email = Config::get('constant.JWL_PRIMARY_EMAIL');
                                                ?>
                                                <?php if(isset($business_data->email) && !empty($business_data->email) && empty($email)): ?>
                                                    <?php
                                                    $email = $business_data->email;
                                                    ?>
                                                <?php endif; ?>
                                                <a href="mailto:<?php echo e($email); ?>">
                                                    <div class="row pt-3">
                                                        <div class="col-auto pl-sm-0 pr-0">
                                                            <img src="<?php echo e(Config::get('constant.RESOURCES_LOCATION')); ?>assets/theme/img/icon/mail.svg" class="contact-icon" alt="mail">
                                                        </div>
                                                        <div class="col-9 col-sm-10 title">
                                                            <h3><?php echo e($email); ?> </h3>
                                                            <h4>ASK THE EXPERT</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-2 d-md-none d-none text-center d-lg-block p-sm-0 pt-md-3">
                                                <a href="<?php echo e(route('contact_us')); ?>" class="btn btn-themacolor">SEND INQUIRY</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Logo, call to action Header 2 end-->

              <?php echo $__env->yieldContent('banner'); ?>

                <?php $current_route =  Route::currentRouteName();  ?>

                <!--Navigation header start-->
                 <div class="row bg-gray" id="navbar">
                    <div class="col">
                        <ul class="nav nav-pills justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($current_route=='business_details' ? 'active' : ''); ?>" href="<?php echo e(route('business_details')); ?>">
                                    <h3>Home</h3>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($current_route=='product_list' ? 'active' : ''); ?>" href="<?php echo e(route('product_list')); ?>">
                                    <h3>Products</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($current_route=='catalogue_list' ? 'active' : ''); ?>" href="<?php echo e(route('catalogue_list')); ?>"><h3>Catalogs</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e($current_route=='contact_us' ? 'active' : ''); ?>" href="<?php echo e(route('contact_us')); ?>"><h3>Contact us</h3></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Navigation header end-->
            </header>
        </div>
    </div>
</div>
