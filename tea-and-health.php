<!doctype html>
<html>
<head>

    <title>Tea Advisory Panel (TAP) - Tea and Health</title>
    <?php include_once('includes/header-resources.php'); ?>

</head>
<body id="tea-and-health">
    <div class="header">
        <div class="container">
            <a href="#mobileNav" id="mobileNavButton"><i class="fa fa-fw"></i></a>
            <h1><a href="index.php">Tea Advisory Panel</a></h1>
            <div class="search-and-social">
                <form id="frmSearch" name="frmSearch" action="some-page.php" method="post" novalidate="novalidate">
                    <span class="input-box"><input type="text" name="" class="text-input" value="" placeholder="Search" /></span>
                    <button><i class="fa fa-fw"></i></button>
                    <div class="cleft"></div>
                </form>
                <ul>
                    <li><a href="#"><i class="fa fa-fw"></i></a></li>
                    <li><a href="#"><i class="fa fa-fw"></i></a></li>
                </ul>
            </div>
            <div class="site-navigation">
                <ul id="site-navigation-list" class="top-level">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="members.php">Members</a>
                        <ul class="sub-level">
                            <li><a href="/members/profile/19">Dr Carrie Ruxton</a></li>
                            <li><a href="/members/profile/18">Dr Catherine Hood</a></li>
                            <li><a href="/members/profile/20">Dr Chris Steele</a></li>
                            <li><a href="/members/profile/24">Dr Christopher Etheridge</a></li>
                            <li><a href="/members/profile/22">Dr Tim Bond</a></li>
                            <li><a href="/members/profile/17">Lynne Garton</a></li>
                            <li><a href="/members/profile/23">Professor Robin Seymour</a></li>
                        </ul>
                    </li>
                    <li><a href="tea-and-health.php" class="active">Tea &amp; Health</a>
                        <ul class="sub-level">
                            <li><a href="/FAQs/">FAQs</a></li>
                            <li><a href="/health-facts/">Health Facts</a></li>
                            <li><a href="/research/">Research</a></li>
                            <li><a href="/book/">Little Book of Tea</a></li>
                        </ul>
                    </li>
                    <li><a href="/media-centre/">Media Centre</a>
                        <ul class="sub-level">
                            <li><a href="/news/">News</a></li>
                            <li><a href="/videos/">Videos</a></li>
                            <li><a href="/images/">Images</a></li>
                            <li><a href="/links/">Links</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact/">Contact</a></li>
                </ul>
            </div>
            <div class="cleft"></div>
            <div class="bodyBorder"></div>
        </div>
    </div>
    <div class="body">

        <div class="container">
            <div class="page-padding">
                <h2 class="title">Tea and Health</h2>
                <div style="height: 600px"></div>
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