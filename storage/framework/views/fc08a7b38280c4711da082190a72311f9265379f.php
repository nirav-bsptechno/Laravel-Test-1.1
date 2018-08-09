<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <script type="text/javascript" charset="utf-8" id="zm-extension"/>
    <url>
        <?php $__currentLoopData = $catalogue_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <url>
                <loc><?php echo e($url); ?>products/<?php echo e($page->bcat_slug); ?></loc>
                <lastmod><?php
                    $add_date =$page->bcat_add_date;
                    echo date('Y-m-d', $add_date);
                    ?></lastmod>
            </url>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <changefreq>daily</changefreq>

        <priority>0.9</priority>

    </url>

</urlset>