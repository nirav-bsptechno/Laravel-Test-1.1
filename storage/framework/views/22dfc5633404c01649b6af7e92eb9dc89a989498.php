<!--Single Product Start-->

<?php if(isset($product_list) and !empty($product_list)): ?>

    <?php $__currentLoopData = $product_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_product_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    $single_product = (object)$single_product_list;
    ?>
    <div class="col-12 col-md-3">
        <a href="<?php echo e(route('comming_soon')); ?>">
            <div class="row">
                <div class="col-12 text-center">
                    <?php if(isset($single_product->bpr_image) && !empty($single_product->bpr_image)){
                        $image = $product_img_location.$single_product->bpr_image;
                    }else{
                        $image = $product_default_img_location;
                    } ?>
                    <img src="<?php echo e($image); ?>" alt="Product Image"
                         class="img-fluid rounded border">
                </div>
                <div class="col-12 p-2 text-center">
                    <h4><?php echo e($single_product->bpr_pr_title); ?></h4>
                </div>
            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<!--Single Product End-->