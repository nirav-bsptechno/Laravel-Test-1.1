<?php
/**
 * Created by PhpStorm.
 * User: Ankit Patel
 * Date: 18-07-2018
 * Time: 6:31 PM
 */
?>
<meta name="robots" content="index, follow">
<title><?php echo e($title); ?></title>
<meta name="description" content="<?php echo e($description); ?>">
<link rel="canonical" href="<?php echo e(Request::url()); ?>" />

<meta property="og:title" content="<?php echo e($title); ?>" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="<?php echo e(Request::root()); ?>"/>
<?php if(Config::get('constant.YOUTUBE_URL') !=''): ?>
<meta property="og:video" content="<?php echo e(Config::get('constant.YOUTUBE_URL')); ?>"/>
<?php endif; ?>
<meta property="og:description" content="<?php echo e($description); ?>"/>
<meta name="google-site-verification" content="<?php echo e(Config::get('constant.JWL_GOOGLE_SITE_VERIFICATION_CONTENT')); ?>"/>

<meta name="twitter:card" content="summary" />
<meta property="og:image" content="<?php if(isset($product_image) && !empty($product_image)){echo $product_image;}else{?><?php echo e($_SESSION['business_logo_250']); ?><?php echo e($_SESSION['business_basic']->bd_biz_logo); ?><?php }?>
"/>
<meta property="og:locale" content="en_US" />
<meta property="og:site_name" content="<?php echo e(Request::root()); ?>"/>


<meta name="twitter:title" content="<?php echo e($title); ?>" >
<meta name="twitter:description" content="<?php echo e($description); ?>">
<meta name="twitter:image" content="<?php if(isset($product_image) && !empty($product_image)){echo $product_image;}else{?><?php echo e($_SESSION['business_logo_250']); ?><?php echo e($_SESSION['business_basic']->bd_biz_logo); ?><?php }?>">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(Config::get('constant.JWL_ANALYTIC_ID')); ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '<?php echo e(Config::get('constant.JWL_ANALYTIC_ID')); ?>');
</script>



