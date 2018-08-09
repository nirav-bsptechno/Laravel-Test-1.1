<?php $__env->startSection('banner'); ?>
    <?php echo $__env->make('partial.header.banner-partial', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


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

                            <?php if(Config::get('constant.JWL_YOUTUBE_SECTION') == 1): ?>
                                <?php echo $__env->make('partial.home-video.homeVideo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php else: ?>
                            <!--Business details and about company start-->
                            <div class="row p-md-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 text-gray biz-details">
                                    <div class="row pt-3">
                                        <div class="col-sm-4 col-lg-5">
                                            <h3>Nature Of Business: </h3>
                                        </div>
                                        <div class="col-sm-8 col-lg-7">
                                            <h2><?php echo e($business_data->bd_all_nature_of_business); ?></h2>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-sm-4 col-lg-5">
                                            <h3>Dealing in: </h3>
                                        </div>
                                        <div class="col-sm-8 col-lg-7">
                                            <h2><?php echo e($business_data->bd_all_categories); ?></h2>
                                        </div>
                                    </div>

                                    <?php if($business_data->bd_product_count !=0): ?>
                                    <div class="row pt-3">
                                        <div class="col-sm-4 col-lg-5">
                                            <h3>Total Products: </h3>
                                        </div>
                                        <div class="col-sm-8 col-lg-7">
                                            <h2><?php echo e($business_data->bd_product_count); ?></h2>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <?php if(isset($business_data->bd_gemstone_count)): ?>

                                    <div class="row pt-3">
                                        <div class="col-sm-4 col-lg-5">
                                            <h3>Total Gemstones: </h3>
                                        </div>
                                        <div class="col-sm-8 col-lg-7">
                                            <h2><?php echo e($business_data->bd_gemstone_count); ?></h2>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <div class="row pt-3">
                                        <div class="col-sm-4 col-lg-5">
                                            <h3>Established in: </h3>
                                        </div>
                                        <div class="col-sm-8 col-lg-7">
                                            <h2><?php echo e($business_data->bd_established_year); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                    <p class="text-gray">
                                        <span><?php echo e($business_data->bd_business_description); ?></span>
                                    </p>
                                </div>
                            </div>
                            <!--Business details and about company end-->
                            <?php endif; ?>

                            <!--Product details start-->
                            <div class="row border-top">
                                <div class="col-12 text-gray product-details">
                                    <div class="row  justify-content-center p-3">
                                        <div class="col-auto text-uppercase justify-content-center">
                                            <h3>Products</h3>
                                        </div>
                                        <!-- Force next columns to break to new line -->
                                        <div class="w-100"></div>
                                        <div class="border-dark border col-1">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                    <!-- display Product block -->
                                        <?php if(isset($product_list_view['product_list']) and !empty($product_list_view['product_list'])): ?>

                                            <?php $__currentLoopData = $product_list_view['product_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo $__env->make('partial.product.productSingle',array($single_product), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
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
                                    <div class="row">
                                        <?php echo $__env->make('partial.catalogue.catalogue',$catalogue_list_view, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>
                                    <div class="row justify-content-center p-3">
                                        <div class="col-auto">
                                            <a href="<?php echo e(route('catalogue_list')); ?>" class="btn btn-themacolor-border pl-5 pr-5 text-uppercase">View
                                                all
                                            </a>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerjs'); ?>
    <!--welcome message and Video end-->
    <script type="text/javascript">
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: 'auto',
                width: 'auto',
                videoId: '<?php echo e(Config::get('constant.JWL_YOUTUBE_ID')); ?>',
                playerVars:{
                    autoplay:1,
                    rel:0,
                    loop:1,
                    enablejsapi:1
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStop': stopVideo,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            //event.target.playVideo();
            $('#player').addClass('myVideo embed-responsive-item');
            $('#player').removeAttr("height");
            $('#player').removeAttr("width");
        }

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done = false;
        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
                // setTimeout(stopVideo, 6000);
                done = true;
            }
            else if(event.data == YT.PlayerState.ENDED){
                rePlay();
                done = false;
            }
        }
        function stopVideo() {
            rePlay();
        }
        function rePlay() {
            //done = false;
            player.stopVideo();
            player.playVideo();
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>