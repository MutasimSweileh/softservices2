<?php
$pagg = 1;
include "inc.php";
/*
$lang : get form  inc.php  = arabic || english;
$plang : get form  inc.php for  php file name  = arabic || "";
$clang : get form  inc.php for column name  =  _arabic || "" ;
*/
?>
<section class="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-box-layout5">
                    <div class="item-img">
                        <img src="images/about2.jpg" alt="thumb">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-box-layout4 pl-lg-5">
                    <div class="tag-line"><?= getTitle("about" . $plang) ?> </div>
                    <h2 class="item-title"><?= $alt ?></h2>

                    <?= getValue('home_text', $lang) ?>
                    <div class="action-area">
                        <a href="<?= $core->getPageUrl("about" . $plang) ?>" class="btn-fill-sm bg-accent btn-slide-hover text-primarytext"> <?= getTitle("about" . $plang) ?><i class="fal fa-angle-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Team Area Start Here -->
<section class="section-bubble-4 sec-services">

    <div class="shape-acrt"></div>
    <div class="shape-acrb"></div>

    <div class="container">
        <div class="heading-layout1">
            <h2><?= getTitle("services" . $plang) ?></h2>
        </div>
        <div class="owl-carousel services-slider custom-nav">

            <?php
            $products = $core->getservices(array("special" => 1));
            if ($products)
                for ($i = 0; $i < count($products); $i++) {
                    if ($products[$i]["level"])
                        continue;
                    $link = $core->getPageUrl(array($products[$i]['id'], $products[$i]['name' . $clang]), "services" . $plang);

            ?>
                <div class="ser-block">
                    <div class="team-box-layout3">
                        <div class="item-img">
                            <img src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>">
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="<?= $link ?>" title=""><?= $products[$i]["name" . $clang] ?></a></h3>
                        </div>
                    </div>
                </div>
            <? } ?>

        </div>
    </div>
</section>
<!-- Team Area End Here -->




<section class="sec-why">


    <div class="container">

        <div class="heading-layout1">
            <h2><?= plang('لماذا تختار شركة سوفت سيرفيس !', 'Why choose Soft Service?') ?></h2>
        </div>

        <div class="row">
            <div class="col-md-3 col-6 text-center">
                <div class="box-why">
                    <div class="img"><img src="https://taskty.com/images/cell/hassppy.png" width="100" /></div>
                    <h3><?= plang('اكتر من 4000 عميل سعيد', 'More than 4000 happy customers') ?></h3>
                </div>
            </div>
            <div class="col-md-3 col-6 text-center">
                <div class="box-why">
                    <div class="img"><img src="https://taskty.com/images/cell/grnn.png" width="100" /></div>
                    <h3><?= plang('اكتر من 600 عامل مضمون', 'More than 600 workers guaranteed') ?></h3>
                </div>
            </div>
            <div class="col-md-3 col-6 text-center">
                <div class="box-why">
                    <div class="img"><img src="https://taskty.com/images/cell/100fdf.png" width="100" /></div>
                    <h3><?= plang('ضمان الجودة و تنفيذ احترافى', 'Quality assurance and professional execution') ?></h3>
                </div>
            </div>
            <div class="col-md-3 col-6 text-center">
                <div class="box-why">
                    <div class="img"><img src="https://taskty.com/images/cell/donedeal.png" width="100" /></div>
                    <h3><?= plang('اكثر من الآف الطلبات شهرياً', 'More than thousands of orders every month') ?></h3>
                </div>
            </div>
        </div>




    </div>
</section>


<!-- Projects Area Start Here -->
<section class="sec-gallery">


    <div class="auto-container">

        <div class="heading-layout1">
            <h2><?= getTitle("gallery" . $plang) ?> </h2>
        </div>

        <div class="owl-carousel gallery-slider custom-nav">
            <?php
            $prodpram = array();
            $products2 = $core->getmGallery($prodpram);
            if ($products2 != null)
                for ($ii = 0; $ii < count($products2); $ii++) {
            ?>
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
            <? } ?>



        </div>
    </div>
</section>
<!-- Projects Area End Here -->


<!-- Blog Area Start Here -->
<section class="sec-news section-bubble-3">
    <div class="container">
        <div class="heading-layout1">
            <h2><?= getTitle("news" . $plang) ?></h2>
        </div>
        <div class="owl-carousel news-sldier custom-nav">
            <?php
            $products = $core->getevents(array("special" => 1));
            if ($products)
                for ($i = 0; $i < count($products); $i++) {
                    if ($products[$i]["level"])
                        continue;
                    $date = getDateTime($products[$i]["date"], $lang);
            ?>
                <div class="blog-box">
                    <div class="blog-box-layout2">
                        <div class="item-img">
                            <a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" title=""><img src="images/<?= $products[$i]["image"] ?>" alt="blog-thumb"></a>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" title="<?= $products[$i]["name" . $clang] ?>"><?= $products[$i]["name" . $clang] ?> </a></h3>
                            <div class="entry-info">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i><?= $date[0] ?>, <?= $date[1] ?> <?= $date[2] ?></li>
                                </ul>
                            </div>
                            <p><?= $products[$i]["smoll_description" . $clang] ?></p>
                            <div class="entry-meta">
                                <a class="" href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>"><?= plang('المزيد', 'More') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>

        </div>
    </div>
</section>
<!-- Blog Area End Here -->




<!-- Brand Area Start Here -->
<section class="sec-client">
    <div class="container">
        <div class="heading-layout1">
            <h2><?= plang('عملائنا', 'Our clients') ?></h2>
        </div>
        <div class="owl-carousel client-slider custom-nav">
            <? $variable = $core->getData("clients", ["active" => 1]);
            foreach ($variable as $k => $v) { ?>
                <div class="brand-box-layout2">
                    <div class="item-img">
                        <a href="#">
                            <img src="images/<?= $v["image"] ?>" alt="brand">
                        </a>
                    </div>
                </div>

            <? } ?>


        </div>
    </div>
</section>
<!-- Brand Area End Here -->


<?php
include "inc/footer.php";
?>