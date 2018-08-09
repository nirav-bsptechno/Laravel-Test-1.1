<?php
/**
 * Created by PhpStorm.
 * User: Ankit Patel
 * Date: 26-07-2018
 * Time: 4:28 PM
 */
?>
<!--With Youytube section start -->
<!--welcome message and Video start-->
<div class="row p-md-3">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-gray biz-details">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                <h4 class="text-left">
                   <?php echo e(Config::get('constant.JWL_YOUTUBE_TITLE')); ?>

                </h4>
                <p class="text-left mt-2">
                    <?php echo e(Config::get('constant.JWL_YOUTUBE_SUBTITLE')); ?>

                </p>
            </div>


            <div class="col-sm-12 col-md-6 col-lg-6 p-0 mb-3  mt-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <!--Video iframe Start-->
                    <div id="player"></div>
                    <!-- Video iframe End -->
                </div>
            </div>
        </div>
    </div>

</div>
