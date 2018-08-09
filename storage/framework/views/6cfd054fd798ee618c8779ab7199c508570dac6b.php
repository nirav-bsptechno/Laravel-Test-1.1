<?php
/**
* Created by PhpStorm.
* User: Ankit Patel
* Date: 18-07-2018
* Time: 6:27 PM
*/ ?>
<!--Banner section start-->
<div class="row bg-white">
    <div class="col-md-12 p-0">
        <img src="<?php echo e(Config::get('constant.JWL_BANNER_IMAGE_URL_LARGE')); ?>" alt="large" class="img-fluid d-none d-lg-block">
        <img src="<?php echo e(Config::get('constant.JWL_BANNER_IMAGE_URL_MEDIUM')); ?>" alt="medium" class="img-fluid d-none d-md-block d-lg-none">
        <img src="<?php echo e(Config::get('constant.JWL_BANNER_IMAGE_URL_SMALL')); ?>" alt="small" class="img-fluid d-none d-sm-block d-md-none">
        <img src="<?php echo e(Config::get('constant.JWL_BANNER_IMAGE_URL_EXTRA_SMALL')); ?>" alt="extra_small" class="img-fluid d-block d-sm-none">
    </div>
</div>
<!--Banner section end-->