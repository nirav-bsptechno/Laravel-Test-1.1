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
                                <!--Cateloge details start-->
                                <div class="row border-top">
                                    <div class="col-12 text-gray catalog-details">
                                        <div class="row  justify-content-center p-3">
                                            <div class="col-auto text-uppercase justify-content-center">
                                                <h3>catalog</h3>
                                            </div>
                                            <!-- Force next columns to break to new line -->
                                            <div class="w-100"></div>
                                            <div class="border-dark border col-auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        </div>
                                        <input type="hidden" value="<?php echo e($cat_count); ?>" id="cat_count">
                                        <div class="row" id="catalogue_list">
                                            <!--Single catalog Start-->

                                            <?php if(isset($catalogue_list_view['catalogue_list']) and !empty($catalogue_list_view['catalogue_list'])): ?>
                                                <?php $__currentLoopData = $catalogue_list_view['catalogue_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo $__env->make('partial.catalogue.catalogueSingle',array($single_catalogue), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <!--Single catalog End-->

                                        </div>
                                        <div class="row justify-content-center p-3">
                                            <div class="col-auto">
                                                <button onclick="load_more_catalogue_list();" class="btn btn-themacolor-border pl-5 pr-5 text-uppercase">View
                                                    all
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Cateloge details end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startSection('footerjs'); ?>
    <script type="text/javascript">
        function load_more_catalogue_list(){
            var cat_count = $('#cat_count').val();
            $.ajax({
                url: '<?php echo route('catalogue_list_load_more'); ?>',
                type: 'POST',
                data: {
                    'start': cat_count,
                    '_token': '<?php echo csrf_token();?>'
                },
                success: function (response) {
                    if(response.success != 'FALSE') {
                        var cat_count = $('#cat_count').val();
                        var c_count = parseInt(response.cat_count) + parseInt(cat_count);
                        $('#cat_count').val(c_count);
                        $("#catalogue_list").append(response.catalogue_list_view);
                    }else{
                        swal({
                            type: 'error',
                            title: 'Error',
                            text: 'No More Record Found'
                        });
                    }
                }
            });
        }

    </script>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>