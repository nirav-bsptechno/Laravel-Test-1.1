<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?php if(empty($SEOTitleDescription)): ?>
        <?php echo $__env->make('partial.header.seo-content',array('title'=>'This is title.','description'=>'This is description'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php else: ?>
        <?php echo $__env->make('partial.header.seo-content',$SEOTitleDescription, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>

    <?php
    $resources_path = Config::get('constant.RESOURCES_LOCATION');
    ?>
    <link rel="stylesheet" href="<?php echo e($resources_path); ?>assets/theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e($resources_path); ?>assets/fontawesome-free-5.1.0-web/css/all.css">
    <link rel="stylesheet" href="<?php echo e($resources_path); ?>assets/theme/css/style.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(Config::get('constant.JWL_FAVICON_URL16')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(Config::get('constant.JWL_FAVICON_URL32')); ?>">
    
    <!--<link rel="stylesheet/less" href="css/style.less">-->

    <?php echo $__env->yieldContent('seoSchemaContent'); ?>
</head>
<body>
<!-- Include Header section -->
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>
<!-- Include Footer Section -->
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo e($resources_path); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo e($resources_path); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e($resources_path); ?>assets/js/less.min.js"></script>
<script src="<?php echo e($resources_path); ?>assets/js/bsp_script.js"></script>
<script src="<?php echo e($resources_path); ?>assets/js/sweetalert.min.js"></script>
<script src="<?php echo e($resources_path); ?>assets/js/jquery.min.js"></script>


<?php echo $__env->yieldContent('footerjs'); ?>

</body>
</html>