<?php

$pagg = 6;

include "inc.php";

$id =  isv("id");

$name = isv("name");

$prodpram = array();

if ($id)
    $prodpram = array("id" => $id);
if ($name)
    $prodpram = array("name" => $name);
$products = $core->getevents($prodpram);

?>



<!-- Our Latest Blog Area -->

<section class="latest-blog latest_blog_area blog-section blog-wrapper construction-news">

    <div class="container">

        <div class="tittle wow fadeInUp">

            <h2><?= ($id ? $products[0]["name" . $clang] : getTitle("news" . $plang)) ?></h2>



        </div>

        <div class="row latest_blog blog-grids clearfix ">

            <?php

            if ($products != null)

                for ($i = 0; $i < count($products); $i++) {

                    $date = getDateTime($products[$i]["date"], $lang);

                    if (!$id) {

            ?>
                    <div class="col-md-6 col-sm-6 col-lg-4">
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
                    </div>

                <?php } else { ?>

                    <section style="transform: none;">
                        <div class="w-100 pt3-100 pb3-100 position-relative" style="transform: none;">
                            <div class="container" style="transform: none;">
                                <div class="post-detail-wrap w-100" style="transform: none;">
                                    <div class="row" style="transform: none;">
                                        <div class="col-md-12 col-sm-12 col-lg-8">

                                            <div class="theiaStickySidebar">
                                                <div class="post-detail w-100">
                                                    <img class="img-fluid w-100" src="images/<?= $products[$i]["image"] ?>" alt="Blog Detail Image">
                                                    <h2 class="mb-0"><?= $products[$i]["name" . $clang] ?></h2>
                                                    <p class="mb-0"><?= $products[$i]["description" . $clang] ?></p>
                                                    <div class="text"> <?php if ($products[$i]["video"] != null) { ?>

                                                            <p style="text-align: center;">

                                                                <iframe width="30%" height="100%" style="margin: auto; margin-right: 0%; border: 0px; min-height: 200px;" src="https://www.youtube.com/embed/<? echo $products[$i]["video"]; ?>" allowfullscreen></iframe>
                                                            </p>

                                                        <?php } ?>
                                                    </div>
                                                    <?php

                                                    if ($pagg == 3) {

                                                        $videospaaaarm = array("product_id" => $products[0]["id"]);

                                                        $videos = $core->getproducts_images($videospaaaarm);
                                                    } else if ($pagg == 6) {

                                                        $videospaaaarm = array("event_id" => $products[0]["id"]);

                                                        $videos = $core->geteventimages($videospaaaarm);
                                                    } else {

                                                        $videospaaaarm = array("services_id" => $products[0]["id"]);

                                                        $videos = $core->getservices_images($videospaaaarm);
                                                    }

                                                    if ($videos) {

                                                    ?>
                                                        <div class="detail-gal w-100">
                                                            <div class="row">
                                                                <?php

                                                                for ($i = 0; $i < count($videos); $i++) { ?>
                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                        <a href="images/<?= $videos[$i]["image"] ?>" data-fancybox="gallery" title=""><img class="img-fluid" src="images/<?= $videos[$i]["image"] ?>" alt="Blog Detail Gallery Image 1"></a>
                                                                    </div>
                                                                <? } ?>

                                                            </div>
                                                        </div>

                                                    <? } ?>



                                                    <div class="detail-share w-100 mt-2">
                                                        <span><?= plang("شارك:", "Share:") ?></span>
                                                        <a class="facebook-clr" href="https://www.facebook.com/sharer/sharer.php?u=<?= $FUr ?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        <a class="twitter-clr" href="http://twitter.com/share?text=<?= $products[0]["smoll_description" . $clang] ?>&amp;url=<?= $FUr ?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>

                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4" style="">
                                            <!-- Sidebar Wrap -->
                                            <div class="theiaStickySidebar" style="">
                                                <aside class="sidebar-wrap w-100">

                                                    <div class="widget2 search_widget brd-rd5 w-100">
                                                        <h3><?= plang("الكلمة الرئيسية", "Keyword") ?></h3>
                                                        <form class="w-100" method="POST">
                                                            <input type="text" name="name" placeholder="<?= plang("ابحث في كلماتك الرئيسية ...", "Search Your Keywords...") ?>">
                                                            <button type="submit"><i class="fas fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                    <div class="widget2 category_widget brd-rd5 w-100 m-0">
                                                        <h3><?= getTitle("services" . $plang) ?></h3>
                                                        <ul class="mb-0 list-unstyled w-100">
                                                            <? $variable = $core->getservices([]);
                                                            foreach ($variable as $k => $v) {
                                                                $link = $core->getPageUrl(array($v['id'], $v['name' . $clang]), "services" . $plang);
                                                            ?>
                                                                <li><a href="<?= $link ?>"><?= $v["name" . $clang] ?></a>.</li>
                                                            <? } ?>


                                                        </ul>
                                                    </div>


                                                    <div class="widget2 blog_widget brd-rd5 w-100">
                                                        <h3><?= plang("اخر الاخبار", "Latest Blog") ?></h3>
                                                        <div class="blog-widget-post-list w-100">
                                                            <?php
                                                            $products = $core->getevents(array("special" => 1));
                                                            if ($products)
                                                                for ($i = 0; $i < count($products); $i++) {
                                                                    if ($products[$i]["level"])
                                                                        continue;
                                                                    $date = getDateTime($products[$i]["date"], $lang);
                                                            ?>
                                                                <div class="blog-mini-post w-100">
                                                                    <a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" title=""><img class="img-fluid" src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>"></a>
                                                                    <div class="blog-mini-post-info">
                                                                        <h4 class="mb-0"><a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" title=""><?= $products[$i]["name" . $clang] ?></a></h4>
                                                                        <span class="d-block mini-post-date"><?= $date[0] ?> - <?= $date[1] ?> - <?= $date[2] ?></span>
                                                                    </div>
                                                                </div>
                                                            <? } ?>

                                                        </div>
                                                    </div>

                                                </aside>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Blog Detail Wrap -->
                            </div>
                        </div>
                    </section>


            <?php }
                } ?>



        </div>

    </div>

</section>

<!-- End Our Latest Blog Area -->



<?php

include "inc/footer.php";

?>