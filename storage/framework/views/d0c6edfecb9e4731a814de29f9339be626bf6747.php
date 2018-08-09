<?php $__env->startSection('seoSchemaContent'); ?>
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

                                <!--Product details start-->
                                <div class="row">
                                    <div class="col-12 text-gray product-details">
                                        <div class="row  justify-content-center p-3">
                                            <div class="col-auto text-uppercase justify-content-center">
                                                <h3>Products</h3>
                                            </div>
                                            <!-- Force next columns to break to new line -->
                                            <div class="w-100"></div>
                                            <div class="border-dark border col-1">&nbsp;</div>
                                        </div>
                                        <input type="hidden" value="<?php echo e($product_count); ?>" id="product_count">
                                        <div class="row" id="product_list">

                                            <!--Single Product Start-->
                                            <?php if(isset($product_list_view['product_list']) and !empty($product_list_view['product_list'])): ?>
                                                <?php $__currentLoopData = $product_list_view['product_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo $__env->make('partial.product.productSingle',array($single_product), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                                            <!--Single Product End-->
                                            <!--Single Product End-->
                                        </div>

                                        <div class="row justify-content-center p-3">
                                            <div class="col-auto">
                                                <button onclick="load_more_product_list();" class="btn btn-themacolor-border pl-5 pr-5 text-uppercase">View
                                                    all
                                                </button>
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

<?php $__env->startSection('footerjs'); ?>
    <script type="text/javascript">
        function load_more_product_list(){
            var product_count = $('#product_count').val();
            $.ajax({
                url: '<?php echo route('product_list_load_more'); ?>',
                type: 'POST',
                data: {
                    'start': product_count,
                    '_token': '<?php echo csrf_token();?>'
                },
                success: function (response) {
                    if(response.success != 'FALSE') {
                        var product_count = $('#product_count').val();
                        var p_count = parseInt(response.product_count) + parseInt(product_count);
                        $('#product_count').val(p_count);
                        $("#product_list").append(response.product_list_view);
                    }else{
                        swal({
                            type: 'error',
                            itle: 'Error',
                            text: 'No More Record Found'
                        });

                    }
                }
            });
        }

    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>