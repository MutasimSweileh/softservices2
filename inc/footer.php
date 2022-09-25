<?php if (isset($_POST["subscribe"])) {
    $text =  $_POST["name"] . "<br>" . $_POST["email"];
    require("class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "mail.sherktk.net";

    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = "ssl";
    $mail->Port = 587;
    $mail->Username = "mail@sherktk.net";
    $mail->Password = "JCrS%^)qc!eH";

    $mail->From = "mail@sherktk.net";

    $mail->FromName = $name;
    $info_media["code"] = "email";
    $contents = $core->getinfo_media($info_media);
    $emaills = $contents[0]["link"];
    $mail->AddAddress($emaills);
    //$mail->AddReplyTo("mail@mail.com");
    $mail->IsHTML(true);
    $mail->Subject = "Subscribe";
    $mail->Body = $text;

    //$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    $core->addemail(array("email" => $_POST["email"]));
    if ($mail->Send()) {
?>

        <script type="text/javascript">
            alert("Thank you !!");
        </script>

    <?php
    } else { ?>
        <script type="text/javascript">
            alert("<?= trim(htmlspecialchars_decode(str_replace("</p>", " ", str_replace("<p>", " ", $mail->ErrorInfo)))) ?>");
        </script>
<?php  }
} ?>


<footer>
    <div class="footer-area footer-area2">
        <div class="container">
            <div class="footer-top">
                <div class="ft-social-link">
                    <div class="footer-social">
                        <h4 class="item-title"><?= plang('تابعنا عبر السوشيال ميديا', 'Follow us on social media') ?></h4>
                        <ul class="social-icon">
                            <li><a href="<?= getValue('facebook') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= getValue('twitter') ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?= getValue('linkedin') ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="<?= getValue('instagram') ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="ft-s-input">
                    <div class="footer-newsletter">
                        <h3 class="item-title"><?= plang('اشترك في النشرة البريدية ليصلك اخر الاخبار', 'Subscribe to the newsletter to receive the latest news') ?></h3>
                        <form action="#" method="post" class="input-group stylish-input-group">
                            <input type="text" class="form-control" name="email" placeholder="<?= plang("أدخل بريدك الإلكتروني", "Enter your email") ?>">
                            <span class="input-group-addon">
                                <button type="submit" name="subscribe" value="subscribe"><?= plang('الإشتراك', 'Subscribe') ?></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-pages">
                        <div class="page-links">
                            <h6><?= $alt ?></h6>
                            <div class="footer-logo-area">
                                <p><?= getValue('footer_text', $lang) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-pages">
                        <div class="page-links">
                            <h6><?= plang('روابط سريعة', 'quick links') ?> </h6>
                            <ul class="qui">
                                <li>
                                    <a href="<?= $core->getPageUrl("index" . $plang) ?>" title=""><?= getTitle("index" . $plang) ?></a>
                                </li>

                                <li>
                                    <a href="<?= $core->getPageUrl("about" . $plang) ?>" title=""><?= getTitle("about" . $plang) ?></a>
                                </li>

                                <li>
                                    <a href="<?= $core->getPageUrl("services" . $plang) ?>" title=""><?= getTitle("services" . $plang) ?></a>
                                </li>

                                <li>
                                    <a href="<?= $core->getPageUrl("news" . $plang) ?>" title=""><?= getTitle("news" . $plang) ?></a>
                                </li>


                                <li>
                                    <a href="<?= $core->getPageUrl("gallery" . $plang) ?>" title=""><?= getTitle("gallery" . $plang) ?></a>
                                </li>


                                <li>
                                    <a href="<?= $core->getPageUrl("contact" . $plang) ?>" title=""><?= getTitle("contact" . $plang) ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-pages">
                        <div class="page-links">
                            <h6><?= getTitle("contact" . $plang) ?> </h6>
                            <ul>
                                <li><i class="flaticon-maps-and-flags con-icon"></i> <?= getValue('footer_adress', $lang) ?></li>
                                <li><i class="flaticon-mail con-icon"></i><?= getValue('email') ?></li>
                                <li><i class="flaticon-phone-call con-icon"></i><?= getValue('header_phone') ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="copyright">
                <p>جميع الحقوق محفزظة شركة ايراسوفت 2022</p>
            </div>
        </div>
    </div>

</footer>






</div>
<!-- jquery-->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- MeanMenu js -->
<script src="js/jquery.meanmenu.min.js"></script>
<!-- Nivo Slider js -->
<script src="vendor/slider/js/jquery.nivo.slider.js"></script>
<script src="vendor/slider/home.js"></script>
<!-- Owl Carousel js -->
<script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
<!-- CounterUp js -->
<script src="js/jquery.counterup.min.js"></script>
<!-- WayPoints js -->
<script src="js/waypoints.min.js"></script>
<!-- Validator js -->
<script src="js/validator.min.js"></script>
<!-- Select 2 js -->
<script src="js/select2.min.js"></script>
<!-- Datetime Picker js -->
<script src="js/jquery.datetimepicker.full.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<!-- Main js -->
<script src="js/main.js"></script>
<script src="js/venobox.min.js"></script>
<script>
    jQuery(document).ready(function($) {

        $('.venobox,.image-popup-vertical-fit').venobox({
            bgcolor: '',
            framewidth: '500px', // default: ''
            spinner: 'cube-grid', // default: ''
            frameheight: '400px', // default: ''
            overlayColor: 'rgba(6, 12, 34, 0.85)',
            closeBackground: '',
            closeColor: '#fff',
            titleattr: 'data-title',
            share: ['facebook', 'twitter', 'download'] // default: []
        });
    });
</script>
</body>

</html>