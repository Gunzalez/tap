<!doctype html>
<html>
<head>

    <title>Tea Advisory Panel (TAP) - Members</title>
    <?php include_once('includes/header-resources.php'); ?>

</head>
<body id="members">
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
                    <li><a href="tea-and-health.php">Tea &amp; Health</a>
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
                <h2 class="title">Tap members</h2>
                <ul>
                    <li>Provide independent and objective information about the latest health benefits regarding black tea</li>
                    <li>Answer all of your nutrition and hydration questions about black tea</li>
                    <li>Set the record straight on ‘science’ myths associated with black tea</li>
                </ul>
                <p>TAP is a novel health group, bringing together experts in the areas of public health, general practice, nutrition and diet. Its objective is to provide informed ‘advice’ about the essential health, hydration and dietary role that black tea can provide in our daily diets.</p>
                <p>It also as a group will be commissioning a series of study reviews and market research initiatives investigating further the ‘natural’ well-being benefits associated with black tea. TAP is supported by an unrestricted educational grant from the UK Tea Council, the trade association for the UK tea industry.</p>
            </div>
            <div class="bordered-div">
                <p>TAP members include nutritionists, dieticians and doctors.</p>
                <ul class="members-list">
                    <li>
                        <a href="#">
                            <img src="uploaded/members-1.jpg" alt="" />
                            <span>Dr Aku</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="uploaded/members-2.jpg" alt="" />
                            <span>Dr Aku 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="uploaded/members-3.jpg" alt="" />
                            <span>Mr Aku</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="uploaded/members-1.jpg" alt="" />
                            <span>Master Aku</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="uploaded/members-3.jpg" alt="" />
                            <span>Dr Aku</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="uploaded/members-2.jpg" alt="" />
                            <span>Dr Aku 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="uploaded/members-1.jpg" alt="" />
                            <span>Mr Aku</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="uploaded/members-3.jpg" alt="" />
                            <span>Master Aku</span>
                        </a>
                    </li>
                </ul>
                <div class="cleft"></div>
            </div>
            <div class="page-padding">
                <h3>Our objectives are</h3>
                <ul class="objectives">
                    <li>To be an independent and impartial source of information, focusing of the health and nutrition benefits associated with black tea</li>
                    <li>To explain the latest science findings in relation to black tea</li>
                    <li>To put into place and review new research investigating people’s general nutrition and lifestyle habits, plus the associated health outcomes of black tea consumption</li>
                    <li>To de-mystify health issues surrounding black tea</li>
                </ul>
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