<!doctype html>
<html>
<head>

    <title>Tea Advisory Panel (TAP) - Contact</title>
    <?php include_once('includes/header-resources.php'); ?>

</head>
<body id="contact">
    <div class="header">
        <?php include_once('includes/header-content.php'); ?>
    </div>
    <div class="body">

        <div class="container">
            <div class="page-padding">
                <div class="introduction">

                    <?php
                    if(!isset($_GET['saved'])){
                    ?>
                        <h2 class="title uppercase">Contact us</h2>

                    <?php } else { ?>

                        <h2 class="title uppercase">Thank you</h2>
                        <p>Cras scelerisque mollis tellus eget lacinia. Integer facilisis lacus vel molestie egestas. Donec vel mauris sit amet ipsum varius interdum a sit amet mauris.</p>

                    <?php } ?>


                    <p>For further information contact</p>
                    <address>
                        Main Office: <a href="tel:+02077058989" class="telephone-no"><span>0207</span>&nbsp;<span>705</span>&nbsp;<span>8989</span></a>.<br>
                        52A Cromwell Road<br>
                        London<br>
                        SW7 5BE
                    </address>

                    <p>Emma Sanderson: <a href="tel:+02070528853" class="telephone-no"><span>0207</span>&nbsp;<span>052</span>&nbsp;<span>8853</span></a> / <a href="mailto:emma.sanderson@nexuspr.com">emma.sanderson@nexuspr.com</a><br>
                    Nicky Smith: <a href="tel:+02070528850" class="telephone-no"><span>0207</span>&nbsp;<span>052</span>&nbsp;<span>8850</span></a> / <a href="mailto:nicky.smith@nexuspr.com">nicky.smith@nexuspr.com</a></p>

                    <p>To receive the bulletins or newsletters automatically please email <a href="mailto:emma.sanderson@nexuspr.com">emma.sanderson@nexuspr.com</a></p>
                </div>
                <div class="imagery map">
                    <div id="map"></div>
                </div>
                <div class="cboth"></div>
            </div>

            <?php
            if(!isset($_GET['saved'])){
            ?>
            <div class="bordered-div">

                    <form id="frmContact" name="frmContact" action="thank-you.php" method="post" class="form" novalidate="novalidate">
                        <h2>Contact form</h2>
                        <div class="left-block">
                            <div class="row">
                                <label for="forename">Forename</label>
                                <input type="text" value="" class="text-input" id="forename" name="forename" />
                            </div>
                            <div class="row">
                                <label for="lastname">Lastname</label>
                                <input type="text" value="" class="text-input" id="lastname" name="lastname" />
                            </div>
                            <div class="row">
                                <label for="email">Email</label>
                                <input type="email" value="" class="text-input" id="email" name="email" />
                            </div>
                            <div class="row">
                                <label for="telephone">Telephone</label>
                                <input type="text" value="" class="text-input" id="telephone" name="telephone" />
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="row">
                                <label for="message">Message</label>
                                <textarea class="text-input textarea" id="message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row submit">
                            <a href="#" id="submitButton" class="button next brown">Send form</a>
                        </div>
                    </form>
                    <div class="cleft"></div>

            </div>

            <?php } ?>
        </div>

        <?php include_once('includes/forum-bar.php'); ?>
        <?php include_once('includes/subscription-bar.php'); ?>
    </div>

    <?php include_once('includes/footer-html.php'); ?>

    <nav id="mobileNav">
        <!-- TODO: Mr Curle, please repeat nav in PHP, js library not working on DOM just HTML :( -->
        <?php include_once('includes/mobile-nav.php'); ?>
    </nav>

    <?php include_once('includes/footer-resources.php'); ?>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map'),
                myLatLong = new google.maps.LatLng(51.495579, -0.179539),
                mapOptions = {
                    center: myLatLong,
                    zoom: 18,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                },
                map = new google.maps.Map(mapCanvas, mapOptions);
                marker = new google.maps.Marker({
                    position: myLatLong,
                    map: map,
                    title: 'TAP'
                });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</body>
</html>