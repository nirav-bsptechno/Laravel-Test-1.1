<div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <div class="row">
            <div class="container-fluid">
                <div class="row pt-3 pb-3 bg-white">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="<?php echo e($business_logo.$business_data->bd_biz_logo); ?>" alt="Sonarka - Vidhi Jewels"
                                                 class="rounded img-fluid">
                                        </div>
                                        <div class="col-12 text-gray">
                                            <?php if(Config::get('constant.JWL_FOOTER_TITLE') != ''): ?>
                                            <strong>
                                                <?php echo e(Config::get('constant.JWL_FOOTER_TITLE')); ?>

                                            </strong>
                                            <?php endif; ?>

                                            <p>
                                                <?php if(Config::get('constant.JWL_FOOTER_DESCRIPTION') != ''): ?>
                                                <?php echo e(Config::get('constant.JWL_FOOTER_DESCRIPTION')); ?>

                                                <?php else: ?>
                                                    <?php echo e($business_data->bd_business_description); ?>

                                                <?php endif; ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row email-sign-up">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 text-uppercase text-gray">
                                                    <h3>Sign up for our news latter</h3>
                                                </div>
                                                <!-- Force next columns to break to new line -->
                                                <div class="w-100"></div>
                                                <div class="border-dark border col-1 ml-3">&nbsp;</div>
                                            </div>
                                            
                                                <div class="row">
                                                    <div class="col-12 pt-3 pb-3">
                                                        <div class="input-group mb-3" id="div_email">
                                                            <input type="Email" id="text_subscribe_email" required=""  class="form-control"
                                                                   placeholder="Enter Your Email Address"
                                                                   aria-label="Recipient's username"
                                                                   aria-describedby="button-addon2 ">
                                                            <div class="input-group-append">
                                                                <button onclick="fun_scribe_email()" class="btn btn-lg btn-outline-secondary pl-4 pr-4"
                                                                         type="button" id="button-addon2"><i
                                                                            class="far fa-paper-plane"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    <?php if((Config::get('constant.JWL_PACKAGE_NAME')) !=''): ?>
                                                        <a href="https://play.google.com/store/apps/details?id=<?php echo e(Config::get('constant.JWL_PACKAGE_NAME')); ?>" target="_blank">
                                                    <?php else: ?>
                                                        <a href="<?php echo e(route('comming_soon')); ?>" target="_blank">
                                                    <?php endif; ?>
                                                        <img src="<?php echo e(Config::get('constant.RESOURCES_LOCATION')); ?>assets/theme/img/icon/jb_available_app_on_google_play.svg"
                                                             alt="Android App on Google Play" class="img-fluid">
                                                    </a>

                                                </div>
                                                <div class="col-6">
                                                    <a href="<?php echo e(route('comming_soon')); ?>">
                                                        <img src="<?php echo e(Config::get('constant.RESOURCES_LOCATION')); ?>assets/theme/img/icon/jb_available_app_on_app_store.svg"
                                                             alt="Avaliable On the App store" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Social Accounts Start-->
                                            <?php echo $__env->make('partial.social-accounts.footerSocial', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <!-- Social Accounts End-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--footer row 1 with gray back ground Start-->
                <div class="row bg-gray">
                    <div class="container">
                        <div class="row justify-content-between header1">
                            <div class="col-12 col-md-6 text-gray text-center text-md-left">
                                <i class="far fa-copyright"></i>&nbsp;<?php echo e(Config::get('constant.JWL_FOOTER_COPYRIGHT_CONTENT')); ?> All rights reserved
                                <a href="https://www.jewelxy.com/terms" target="_blank">(Terms of Use)</a>
                            </div>
                            <div class="col-12 col-md-6 p-2 p-md-0 headerSocial text-gray text-center text-md-right">
                                Developed & Managed by<a href="https://www.jewelxy.com/" target="_blank">Jewelxy</a>

                            </div>
                        </div>

                    </div>
                </div>
                <!--Header row 1 with gray back ground End-->

            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    function fun_scribe_email(){

        var email = document.getElementById('text_subscribe_email').value;
        var flag = 0;
        if(email ==''){
            flag++;
            sweetAlert("Oops...", "Please provide your email Address!", "error");
        }

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email.match(mailformat))
        {
            $("#div_email").removeClass('has-error');
            $("#msg_email").html("");
        }else{
            flag++;
            sweetAlert("Oops...", "Invalide your email Address!", "error");
        }

        if(flag == 0) {

            $.ajax({
                url: '<?php echo route('scribe_email');?>',
                data: {'email': email,'_token': '<?php echo csrf_token();?>'},
                type: 'POST',
                success: function (result) {
                    $obj=JSON.parse(result);
                    if($obj['success']=='TRUE') {
                        swal("Success","Successfully Subscribe email", "success");
                        $('#text_subscribe_email').val('');
                    }else{
                        sweetAlert("Oops...", $obj['message'], "error");
                    }
                }
            });
        }
    }
</script>