<!-- Start Main Slides Area -->
<div class="main-slides-area">
    <div class="home-slides owl-carousel owl-theme">
        <?php

        $sliderpram = array();
        $sliders = $core->getslider($sliderpram);
        $ie = 0;
        foreach ($sliders as $slider) {  ?>
            <div class="main-slides-item" style="background:url(images/<?= $slider["image"] ?>)"></div>
        <? } ?>


    </div>


    <!--
            <div class="row__shape">
<svg version="1.1" class="shape__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 231" preserveAspectRatio="none" style="enable-background:new 0 0 1366 231;"
                                    xml:space="preserve"><path fill="#ffffff" d="M0,54c0,0,106,134,307,101c246-63,285-39,368-22c106,33,225,90,292,62c109-39,255-191,399-178 c0,128,0,214,0,214H0V54z"/> <path fill="#ffffff" style="opacity: 0.45" d="M-1,231h188h1178c0,0,2-104,0-214c-297,10-383,309-632,143c-39,0-122,51-325-17C172,216-1,31-1,31"/> <path fill="#ffffff" style="opacity: 0.45" d="M1366,227c0,0,0-71.03,0-203c-198-44-439,252-559,156c-13,1,0.7-9.44-53-20c-116.23-22.86-254.55-23.5-371-17 C157,121-4,172.01-4,172.01"/></svg>
        </div>
-->
</div>
<!-- End Main Slides Area -->