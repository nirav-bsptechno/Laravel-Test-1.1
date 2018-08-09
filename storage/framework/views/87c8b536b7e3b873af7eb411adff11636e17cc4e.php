<?php
/**
 * Created by PhpStorm.
 * User: Ankit Patel
 * Date: 30-07-2018
 * Time: 11:48 AM
 */
?>

<?php if(isset($_SESSION['business_basic']->social_accounts) && $_SESSION['business_basic']->social_accounts !=''): ?>
<div class="row">
    <div class="col-12 p-3 headerSocial text-gray text-center">
        <?php $__currentLoopData = $_SESSION['business_basic']->social_accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($single_account->bsa_title == 'Facebook'): ?>
                <a href="<?php echo e($single_account->bsa_site_url); ?>" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
            <?php endif; ?>
            <?php if($single_account->bsa_title == 'Linkedin'): ?>
                    <a href="<?php echo e($single_account->bsa_site_url); ?>" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
            <?php endif; ?>
            <?php if($single_account->bsa_title == 'Twitter'): ?>
                    <a href="<?php echo e($single_account->bsa_site_url); ?>" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
            <?php endif; ?>
            <?php if($single_account->bsa_title == 'Google'): ?>
                    <a href="<?php echo e($single_account->bsa_site_url); ?>" target="_blank"><i class="fab fa-google-plus-g fa-2x"></i></a>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?>

