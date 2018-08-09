<?php
/**
 * Created by PhpStorm.
 * User: Ankit Patel
 * Date: 28-07-2018
 * Time: 11:42 AM
 */
?>

<!--Single Product Start-->
<?php if(isset($single_product) and !empty($single_product)): ?>
   <div class="col-6 col-md-3 col-sm-4">
        <a href="<?php echo e(route('web_get_product_details',[$single_product->bpr_slug])); ?>">
        <div class="row">
            <div class="col-12 text-center">

                <?php if(isset($single_product->bpr_image) && !empty($single_product->bpr_image)): ?>
                    <?php
                    $image = Config::get('constant.PRODUCT_IMAGE').Config::get('constant.IMAGE_SIZE_360').$single_product->bpr_image;
                    ?>
                <?php else: ?>
                    <?php
                    $image =  Config::get('constant.DEFULT_PRODUCT_IMAGE');
                    ?>
                <?php endif; ?>
                <img src="<?php echo e($image); ?>" alt="<?php echo e($single_product->bpr_pr_title); ?>"
                     class="img-fluid rounded border">
            </div>
            <div class="col-12 p-2 text-center">
                <h4><?php echo e($single_product->bpr_pr_title); ?></h4>
            </div>
        </div>
    </a>
   </div>
<?php endif; ?>
<!--Single Product End-->