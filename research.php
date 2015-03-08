<!doctype html>
<html>
<head>

    <title>Tea Advisory Panel (TAP) - Latest Research</title>
    <?php include_once('includes/header-resources.php'); ?>

</head>
<body id="tea-and-health" class="research">
    <div class="header">
        <?php include_once('includes/header-content.php'); ?>
    </div>
    <div class="body">

        <div class="container">
            <div class="page-padding">
                <div class="introduction">
                    <h2 class="title uppercase">Latest Research</h2>
                    <p>The Tea Advisory Panel publishes reviews and reports on black tea and health and also sponsors various research papers and studies. You can read the full reports by clicking on the relevant title.</p>
                    <p>For more details about any of these reviews or reports, please contact the TAP press office via:<br />
                    Emma Sanderson or Nicky Smith on <a href="tel:+02077058989" class="telephone-no"><span>0207</span>&nbsp;<span>705</span>&nbsp;<span>8989</span></a>.</p>
                </div>
                <div class="imagery">
                    <img src="uploaded/research.jpg" alt="" />
                </div>
                <div class="cboth"></div>
            </div>
            <div class="bordered-div">
                <div class="research-and-reviews">
                    <div class="heading">
                        <h3 class="title uppercase">Research and reviews</h3>
                        <form id="document-type" name="document-type" method="post" action="research.php" class="document-type">
                            <label for="doc-type">Setting document type</label>
                            <select id="doc-type" name="doc-type" class="">
                                <option value="" selected="selected">All</option>
                                <option value="">Some</option>
                                <option value="">A few</option>
                                <option value="">Now at all</option>
                            </select>
                        </form>
                        <div class="cboth"></div>
                    </div>
                </div>
                <div class="cleft"></div>
            </div>
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

</body>
</html>