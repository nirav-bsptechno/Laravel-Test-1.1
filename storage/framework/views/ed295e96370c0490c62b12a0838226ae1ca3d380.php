<?php
/**
 * Created by PhpStorm.
 * User: Ankit Patel
 * Date: 30-07-2018
 * Time: 9:50 AM
 */
?>

<?php if(isset($_SESSION['business_basic']->social_accounts) && $_SESSION['business_basic']->social_accounts !=''): ?>
<div class="col-auto p-0 headerSocial text-gray">
    <?php $__currentLoopData = $_SESSION['business_basic']->social_accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($single_account->bsa_title == 'Facebook'): ?>
        <a href="<?php echo e($single_account->bsa_site_url); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <?php endif; ?>
    <?php if($single_account->bsa_title == 'Linkedin'): ?>
        <a href="<?php echo e($single_account->bsa_site_url); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    <?php endif; ?>
    <?php if($single_account->bsa_title == 'Twitter'): ?>
        <a href="<?php echo e($single_account->bsa_site_url); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
    <?php endif; ?>
    <?php if($single_account->bsa_title == 'Google'): ?>
        <a href="<?php echo e($single_account->bsa_site_url); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>
    <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>