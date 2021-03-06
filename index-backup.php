<!doctype html>
<html>
<head>

    <title>Tea Advisory Panel (TAP)</title>
    <?php include_once('includes/header-resources.php'); ?>

</head>
<body id="home">
    <div class="header">
        <div class="container">
            <a href="#mobileNav" id="mobileNavButton"><i class="fa fa-fw"></i></a>
            <h1><a href="index.php">Tea Advisory Panel</a></h1>
            <div class="search-and-social">
                <form id="frmSearch" name="frmSearch" action="search.php" method="post" novalidate="novalidate">
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
                            <li><a href="profile.php?member=19">Dr Carrie Ruxton</a></li>
                            <li><a href="profile.php?member=18">Dr Catherine Hood</a></li>
                            <li><a href="profile.php?member=20">Dr Chris Steele</a></li>
                            <li><a href="profile.php?member=24">Dr Christopher Etheridge</a></li>
                            <li><a href="profile.php?member=22">Dr Tim Bond</a></li>
                            <li><a href="profile.php?member=17">Lynne Garton</a></li>
                            <li><a href="profile.php?member=23">Professor Robin Seymour</a></li>
                        </ul>
                    </li>
                    <li><a href="tea-and-health.php">Tea &amp; Health</a>
                        <ul class="sub-level">
                            <li><a href="faqs.php">FAQs</a></li>
                            <li><a href="health-facts.php">Health Facts</a></li>
                            <li><a href="research.php">Research</a></li>
                            <li><a href="book.php">Little Book of Tea</a></li>
                        </ul>
                    </li>
                    <li><a href="media-centre.php">Media Centre</a>
                        <ul class="sub-level">
                            <li><a href="news.php">News</a></li>
                            <li><a href="videos.php">Videos</a></li>
                            <li><a href="images.php">Images</a></li>
                            <li><a href="links.php">Links</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="carousel">
                <div class="imagery">
                    <ul id="header-carousel">
                        <li>
                            <img src="uploaded/carousel-slide-1.jpg" alt="slide 1" />
                            <div class="slide-copy">
                                <h2>Is it important?</h2>
                                <p>Tea is the most commonly consumed beverage in the world after water. In the UK it has been drunk for over 350 years. Today, 77% of British adults drink tea and of the tea consumed in the UK, 95% is black tea.</p>
                            </div>
                        </li>
                        <li>
                            <img src="uploaded/carousel-slide-3.jpg" alt="slide 2" />
                            <div class="slide-copy">
                                <h2>Fusce ac turpis quis</h2>
                                <p>Morbi lectus riis, luctus non, massa. Fusce ac turpis quis ligsus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum.</p>
                            </div>
                        </li>
                        <li>
                            <img src="uploaded/carousel-slide-2.jpg" alt="slide 3" />
                            <div class="slide-copy">
                                <h2>Westibulum sapien. Prperdiet</h2>
                                <p>Sestibulum sapien. Praestibulum sapien. Prt imestibulum sapien. Prperdiet. Vestibulum sapien. Proin quam. Etiam ultat mi a equat ppk i bulum sapien. Proat.</p>
                            </div>
                        </li>
                        <li>
                            <img src="uploaded/carousel-slide-4.jpg" alt="slide 4" />
                            <div class="slide-copy">
                                <h2>Vestibulum sapien, lroin</h2>
                                <p>Aspendisse potenti. Nunc feugiat mi a equat imperdiet. Vestibulum sapien. Proin quam. Etiam ultat mi a equat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices.</p>
                            </div>
                        </li>
                        <li>
                            <img src="uploaded/carousel-slide-5.jpg" alt="slide 5" />
                            <div class="slide-copy">
                                <h2>Suspendisse unc-feugi</h2>
                                <p>Proin quam. Etiam ult auctor, sesse potenti. Nunc feugiat mi a equat imperdiet. Vestibulum sapie as sem, at interdum magna augue eget diam. </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="copy">
                    <div id="carousel-description" class="description"></div>
                </div>
            </div>
            <div class="cleft"></div>
        </div>
    </div>
    <div class="body">
        <div class="container">
            <div class="faqs">
                <div class="title">
                    <h2>FAQs</h2>
                </div>
                <?php
                $rand = rand(1,5);
                ?>
                <a href="#" class="copy uppercase">
                    <span class="question">
                        <?php if ($rand == 1){ ?>
                            <span class="quotes">&ldquo;</span><span class="text">Is drinking tea bad for the bones?</span><span class="quotes">&rdquo;</span>
                        <?php } ?>
                        <?php if ($rand == 2){ ?>
                            <span class="quotes">&ldquo;</span><span class="text">Does tea contain nearly as much caffeine as coffee?</span><span class="quotes">&rdquo;</span>
                        <?php } ?>
                        <?php if ($rand == 3){ ?>
                            <span class="quotes">&ldquo;</span><span class="text">Does your tea count to your 8 cups of fluid a day?</span><span class="quotes">&rdquo;</span>
                        <?php } ?>
                        <?php if ($rand == 4){ ?>
                            <span class="quotes">&ldquo;</span><span class="text">Is the high level of fluoride in tea harmful?</span><span class="quotes">&rdquo;</span>
                        <?php } ?>
                        <?php if ($rand == 5){ ?>
                            <span class="long-quote"><span class="quotes">&ldquo;</span><span class="text">Does drinking tea prevent iron from being absorbed from foods resulting in iron deficiency?</span><span class="quotes">&rdquo;</span></span>
                        <?php } ?>
                    </span>
                </a>
                <div class="cboth"></div>
            </div>
        </div>
        <div class="grey-bar">
            <div class="container">
                <h2 class="title uppercase">What we do.</h2>
                <p>The Tea Advisory Panel is an expert organisation which can:</p>
                <ul>
                    <li>
                        <a href="#">
                            <span class="item">
                                <span class="icon"><i class="fa fa-fw"></i></span>
                                <span class="intro">Provide independent and objective information about the latest health benefits regarding black tea.</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="item">
                                <span class="icon"><i class="fa fa-fw"></i></span>
                                <span class="intro">Answer all of your nutrition and hydration questions about black tea.</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="item">
                                <span class="icon"><i class="fa fa-fw"></i></span>
                                <span class="intro">Set the record straight on ‘science’ myths associated with black tea.</span>
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="cleft"></div>
            </div>
        </div>
        <div class="container">
            <ul id="body-carousel" class="carousel">
                <li class="item">
                    <div class="imagery">
                        <img src="uploaded/dr-catherine-hood.png" alt="" />
                    </div>
                    <div class="copy">
                        <h2>Who we are</h2>
                        <p class="sub-title">Dr Catherine Hood</p>
                        <p class="details">Dr Catherine Hood is a health broadcaster and writer. She presented Channel Five’s prime time series A Girl's Guide to 21st Century Sex and regularly appears on The Wright Stuff discussing all aspects of general medicine.</p>
                        <div class="buttons">
                            <a href="profile.php" class="button next orange">Read&nbsp;More</a><br />
                            <a href="members.php" class="button next orange">Other&nbsp;Members</a>
                        </div>
                    </div>
                    <div class="cboth"></div>
                </li>
                <li class="item">
                    <div class="imagery">
                        <img src="uploaded/dr-pretty-woman.png" alt="" />
                    </div>
                    <div class="copy">
                        <h2>Who we are</h2>
                        <p class="sub-title">Dr LongFristName LongerSurname</p>
                        <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sm imperdiet. Duis saed cursus ante dapibus diaquis sem at nibh elementugittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauri.</p>
                        <div class="buttons">
                            <a href="profile.php" class="button next orange">Read&nbsp;More</a><br />
                            <a href="members.php" class="button next orange">Other&nbsp;Members</a>
                        </div>
                    </div>
                    <div class="cboth"></div>
                </li>
                <li class="item">
                    <div class="imagery">
                        <img src="uploaded/dr-who.png" alt="" />
                    </div>
                    <div class="copy">
                        <h2>Who we are</h2>
                        <p class="sub-title">Dr Title OtherTitle</p>
                        <p class="details">Praesent libero. Sed cursus ante dapibus diam. Seem ipssi. Nulla quum dolor sit amet, consectetur adipiscing elit. Integer nec odio.  niis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauriv sce ne tb nhellu.</p>
                        <div class="buttons">
                            <a href="profile.php" class="button next orange">Read&nbsp;More</a><br />
                            <a href="members.php" class="button next orange">Other&nbsp;Members</a>
                        </div>
                    </div>
                    <div class="cboth"></div>
                </li>
                <li class="item">
                    <div class="imagery">
                        <img src="uploaded/dr-typical-hood.png" alt="" />
                    </div>
                    <div class="copy">
                        <h2>Who we are</h2>
                        <p class="sub-title">Dr LongFirstName surName</p>
                        <p class="details">Tpsu donsectetur adipiscing elisit amet, ceger nec odilesent libero. Sef gfxnd cursus ante dapibus did nisi. Nua a quis sem at nibh el Duis sagittis ipsfesent mauri sce nec tel entum imperdiet.</p>
                        <div class="buttons">
                            <a href="profile.php" class="button next orange">Read&nbsp;More</a><br />
                            <a href="members.php" class="button next orange">Other&nbsp;Members</a>
                        </div>
                    </div>
                    <div class="cboth"></div>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="forums">
                <div class="forum-chats">
                    <h3 class="uppercase">Our chat...</h3>
                    <ul>
                        <li>
                            <span href="#">
                                <div class="bubble"><i class="fa fa-fw"></i></div>
                                <div class="copy"><p><strong>Go put the kettle on</strong><br>
                                    Much oh this knitted lynx crane gross suddenly jeez reined unsafely hence and some less oversold goodness far cringed up far advantageous and crane some anathematically severe</p></div>
                            </span>
                        </li>
                        <li>
                            <span href="#">
                                <div class="bubble"><i class="fa fa-fw"></i></div>
                                <div class="copy"><p><strong>Research reveals black tea can improve body weight</strong>
                                unlocked exorbitant smooched. Much oh this knitted lynx crane gross suddenly jeez reined</p></div>
                            </span>
                        </li>
                    </ul>
                    <div class="buttons">
                        <a href="#" class="button next green">Join us on Twitter</a>
                    </div>
                </div>
                <div class="forum-info">
                    <h3 class="uppercase">What you need to know</h3>
                    <ul>
                        <li>
                            <div class="icon"><i class="fa fa-fw"></i></div>
                            <div class="copy">
                                <p><strong>Tea drinkers are a reduced risk of breast cancer</strong><br />lemming sank momentous much irrespective willful unlocked exorbitant smooched. <a href="#" class="read-more">Read&nbsp;More</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-fw"></i></div>
                            <div class="copy">
                                <p>Drinking tea is associated with reduced stiffness of the arteries - lemming sank momentous much irrespective willful unlocked exorbitant smooched. <a href="#" class="read-more">Read&nbsp;More</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-fw"></i></div>
                            <div class="copy">
                                <p><strong>Tea drinkers are a reduced risk of breast cancer</strong><br />Kicking footballs and smelling nice, check please! It's the hurt locker. <a href="#" class="read-more">Read&nbsp;More</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cboth"></div>
            </div>
        </div>
    </div>

    <?php include_once('includes/footer-html.php'); ?>

    <nav id="mobileNav">
        <!-- TODO: Mr Curle, please repeat nav in PHP, js library not working on DOM just HTML :( -->
        <?php include_once('includes/mobile-nav.php'); ?>
    </nav>

    <?php include_once('includes/footer-resources.php'); ?>

</body>
</html>