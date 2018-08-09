<?php
/**
 * Created by PhpStorm.
 * User: Ankit Patel
 * Date: 30-07-2018
 * Time: 4:04 PM
 */
?>

<?php $__env->startSection('seoSchemaContent'); ?>
    <script type='application/ld+json'><?php echo $SEOProductDetailsBreadcrumbList; ?></script>
    <script type='application/ld+json'><?php echo $SEOSchemaCode; ?></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="container">
                        <div class="row pt-3 pb-3">
                            <div class="col-12 bg-white">
                                <div class="row pt-3 pb-3 product text-dark-gray">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2><?php echo e($product_details->bpr_pr_title); ?></h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <!--Demo Of slider start-->
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <!--Carousel Wrapper-->
                                                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                                                    <!--Slides-->
                                                                    <div class="carousel-inner" role="listbox">

                                                                        <?php
                                                                        $i=0;
                                                                        ?>
                                                                        <?php $__currentLoopData = $product_details->product_attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_attachnment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div
                                                                        <?php if($i == 0): ?>
                                                                        class="carousel-item active"
                                                                        <?php else: ?>
                                                                        class="carousel-item"
                                                                        <?php endif; ?>
                                                                        >
                                                                            <?php
                                                                            $i++;
                                                                            ?>
                                                                            <img src="<?php echo e($product_details->product_location); ?><?php echo e($single_attachnment->bpa_attachment); ?>" alt="<?php echo e($product_details->bpr_pr_title); ?>" class="img-fluid rounded border">
                                                                        </div>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div>
                                                                    <!--/.Slides-->
                                                                    <!--Controls-->
                                                                    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                                                        <i class="fas fa-chevron-left fa-2x text-dark-gray" aria-hidden="true"></i>
                                                                        <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                                                        <i class="fas fa-chevron-right fa-2x text-dark-gray" aria-hidden="true"></i>
                                                                        <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                    <!--/.Controls-->
                                                                    <ol class="carousel-indicators mt-3 ml-0 mr-0">
                                                                        <?php
                                                                        $i=0;
                                                                        ?>
                                                                        <?php $__currentLoopData = $product_details->product_attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_attachnment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li data-target="#carousel-thumb" data-slide-to="<?php echo e($i); ?>"
                                                                            <?php if($i == 0): ?>
                                                                                    class="active"
                                                                                <?php else: ?>
                                                                                     class=""
                                                                                    <?php endif; ?>
                                                                                    >
                                                                                <?php
                                                                                $i++;
                                                                                ?>
                                                                                >

                                                                            <img src="<?php echo e($product_details->product_location); ?><?php echo e($single_attachnment->bpa_attachment); ?>" alt="<?php echo e($product_details->bpr_pr_title); ?>" class="img-fluid rounded border">
                                                                        </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </ol>
                                                                </div>
                                                                <!--/.Carousel Wrapper-->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-7 text-gray">
                                                        <?php if(isset($product_details->bpr_price) && $product_details->bpr_price !=''): ?>
                                                        <div class="row">
                                                            <div class="col-md-12  pt-3">
                                                                <h3 class="price"><?php echo e($product_details->bpr_price); ?>/- <?php echo e($product_details->bpr_currency_short_code); ?></h3>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>
                                                        <div class="row pt-3" >
                                                            <div class="col-md-6">
                                                                <a href="<?php echo e(route('contact_us')); ?>" class="btn btn-themacolor-border col-12 text-uppercase product-action"><i class="fas fa-info-circle" ></i>&nbsp;&nbsp; Send Inquiry</a>
                                                            </div>
                                                            <?php
                                                            $mobile = Config::get('constant.JWL_PRIMARY_MOBILE');
                                                            ?>
                                                            <?php if(isset($business_data->mobile) && !empty($business_data->mobile) && empty($mobile)): ?>
                                                                <?php
                                                                $mobile = $business_data->mobile;
                                                                ?>
                                                            <?php endif; ?>
                                                            <div class="col-md-6 mt-3 mt-sm-0 mb-sm-0 mb-2">
                                                                <a href="tel:<?php echo e($mobile); ?>" class="btn btn-themacolor col-12 product-action"><i class="fas fa-phone fa-rotate-90" ></i>&nbsp;&nbsp; Call Now  +91 -<?php echo e($mobile); ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row  justify-content-start p-3">
                                                                    <div class="col-auto p-0 text-uppercase justify-content-start">
                                                                        <h4>Product Information</h4>
                                                                    </div>
                                                                    <!-- Force next columns to break to new line -->
                                                                    <div class="w-100"></div>
                                                                    <div class="border-dark border col-1">&nbsp;</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        Category:
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <?php echo e($product_details->bpr_all_categories); ?>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        Product MOQ:
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <?php echo e($product_details->bpr_moq); ?> <?php echo e($product_details->bpr_moq_unit_title); ?>.
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        Product Code:
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <?php echo e($product_details->bpr_product_code); ?>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        Product Family:
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <?php echo e($product_details->bpr_product_family); ?>

                                                                    </div>
                                                                </div>
                                                                <!--<div class="row">
                                                                    <div class="col-md-6">
                                                                        Metal:
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        Gold
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        Gender:
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        Ladies
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        Style:
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        Machine cut
                                                                    </div>
                                                                </div>-->
                                                            </div>
                                                            <?php if(isset($product_details->managed_attr_value) && !empty($product_details->managed_attr_value)): ?>
                                                            <?php $__currentLoopData = $product_details->managed_attr_value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-md-6">
                                                                <div class="row  justify-content-start p-3">
                                                                    <div class="col-auto p-0 text-uppercase justify-content-start">
                                                                        <h4><?php echo e($key); ?> Information</h4>
                                                                    </div>

                                                                    <!-- Force next columns to break to new line -->
                                                                    <div class="w-100"></div>
                                                                    <div class="border-dark border col-1">&nbsp;</div>
                                                                </div>
                                                                <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ke=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <?php echo e(explode(':',$ke)[0]); ?> :
                                                                    </div>
                                                                    <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php
                                                                    $temp = 0;
                                                                    $temp++;
                                                                    ?>
                                                                    <?php if(explode(':',$ke)[1] == "File"): ?>
                                                                        <span>
                                                                            <img class="myImg" src="<?php echo e($v); ?>" style="margin:5px 5px 5px 5px !important;" alt="Jewelxy Image" width="60" height="60">
                                                                            <?php if(($temp % 2) == 0): ?>
                                                                            <br>
                                                                            <?php endif; ?>
                                                                             </span>
                                                                       <?php else: ?>
                                                                        <div class="col-md-7">
                                                                            <?php echo e($v); ?>

                                                                        </div>

                                                                    <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3">
                            <div class="col-md-12 bg-white">
                                <!--Product details start-->
                                <div class="row">
                                    <div class="col-12 text-gray product-details">
                                        <div class="row  justify-content-center p-3">
                                            <div class="col-auto text-uppercase justify-content-center">
                                                <h3>Recent Products</h3>
                                            </div>
                                            <!-- Force next columns to break to new line -->
                                            <div class="w-100"></div>
                                            <div class="border-dark border col-1">&nbsp;</div>
                                        </div>
                                        <div class="row">
                                            <!--Single Product Start-->
                                            <?php if(isset($product_list_view['product_list']) and !empty($product_list_view['product_list'])): ?>

                                                <?php $__currentLoopData = $product_list_view['product_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo $__env->make('partial.product.productSingle',array($single_product), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <!--Single Product End-->
                                        </div>
                                        <div class="row justify-content-center p-3">
                                            <div class="col-auto">
                                                <a href="<?php echo e(route('product_list')); ?>" class="btn btn-themacolor-border pl-5 pr-5 text-uppercase">View
                                                    all
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product details end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>