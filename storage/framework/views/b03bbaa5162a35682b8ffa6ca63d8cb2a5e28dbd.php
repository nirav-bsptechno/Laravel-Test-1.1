<?php
/**
 * Created by PhpStorm.
 * User: Ankit Patel
 * Date: 19-07-2018
 * Time: 5:18 PM
 */
?>
<?php if(isset($catalogue_list) and !empty($catalogue_list)): ?>
<!--Single catalog Start-->
<?php $__currentLoopData = $catalogue_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('partial.catalogue.catalogueSingle',array($single_catalogue), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--Single catalog End-->
<?php endif; ?>