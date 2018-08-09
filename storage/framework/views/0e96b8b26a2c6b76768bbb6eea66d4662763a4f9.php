<?php
/**
 * Created by PhpStorm.
 * User: Ankit Patel
 * Date: 28-07-2018
 * Time: 12:03 PM
 */
?>
<!-- Catalogue single -->

<?php if(isset($single_catalogue) and !empty($single_catalogue)): ?>
<div class="col-12 col-md-3">
    <a href="<?php echo e(route('web_biz_catalogue_product_list',[$single_catalogue->bcat_slug])); ?>">
        <div class="row">
            <div class="col-12 text-center">
                <div class="row m-0">
                    <?php $__currentLoopData = $single_catalogue->cat_attachment_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6 p-1">
                        <img src="<?php echo e($cat_img); ?>"
                             alt="Product Image" class="img-fluid rounded border">
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
            <div class="col-12 pt-2 text-center">
                <h4><?php echo e($single_catalogue->bcat_title); ?></h4>
            </div>
        </div>
    </a>
</div>
<?php endif; ?>