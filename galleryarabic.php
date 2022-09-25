<?php
$pagg = 7;
include "inc.php";
?>
<section class="portfolio-section-two sec-gallery">
    <div class="auto-container">
        <div class="row isotope-block">

            <?php
            $prodpram = array();
            $products2 = $core->getmGallery($prodpram);
            if ($products2 != null)
                for ($ii = 0; $ii < count($products2); $ii++) {
            ?>
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="cp-box">
                        <div class="project-box-layout1">
                            <div class="item-img">
                                <img src="images/<?= $products2[$ii]['image'] ?>" alt="project-thumb">
                                <div class="hover-icon-wrap">
                                    <a href="images/<?= $products2[$ii]['image'] ?>" class="hover-icon lightbox-image" data-fancybox="gallery">
                                        <i class="fal fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</section>

<?php
include "inc/footer.php";
?>