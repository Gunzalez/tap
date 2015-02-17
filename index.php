<!doctype html>
<html>
<head>
    <title>Tea Advisory Panel</title>
    <?php include_once('includes/resources.php'); ?>
    <link href="js/vendors/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
</head>
<body id="home">
    <div class="header">
        <div class="container">
            <h1><a href="index.php">Tea Advisory Panel</a></h1>
            <div class="search-and-social">
                <form id="frmSearch" name="frmSearch" action="some-page.php" method="post" novalidate="novalidate">
                    <input type="text"name="" class="text-input" value="" placeholder="Search" />
                    <button><i class="fa fa-fw"></i></button>
                </form>
                <ul>
                    <li><a href="#"><i class="fa fa-fw"></i></a></li>
                    <li><a href="#"><i class="fa fa-fw"></i></a></li>
                </ul>
            </div>
            <div class="site-navigation">
                <ul>
                    <li><a href="#">Members</a></li>
                    <li><a href="#">Tea &amp; Health</a></li>
                    <li><a href="#">Media Centre</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="carousel">
                <div class="imagery">
                    <img src="uploaded/carousel-slide-1.jpg">
                </div>
                <div class="copy">
                    <div class="description">
                        <h2>Is it important?</h2>
                        <p>Tea is the most commonly consumed beverage in the world after water. In the UK it has been drunk for over 350 years. Today, 77% of British adults drink tea and of the tea consumed in the UK, 95% is black tea.</p>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="container">
            <div class="faqs">
                <div class="title">
                    <h2>FAQs</h2>
                </div>
                <a href="#" class="copy">
                    <span class="question">
                    <span class="count">
                        01:
                    </span>Is drinking tea bad for the bones, is it really, no, really is it?</span>
                    <div class="cleft"></div>
                </a>
                <div class="cboth"></div>
            </div>
        </div>
        <div class="grey-bar">
            <div class="container">
                <h2 class="title">What we do.</h2>
                <p>The Tea Advisory Panel is an expert organisation which can:</p>
                <ul>
                    <li>
                        <a href="#">
                            <span class="item">
                                <span class="icon"><i class="fa fa-fw"></i></span>
                                <p class="intro">Provide independent and objective information about the latest health benefits regarding black tea.</p>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="item">
                                <span class="icon"><i class="fa fa-fw"></i></span>
                                <p class="intro">Answer all of your nutrition and hydration questions about black tea.</p>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="item">
                                <span class="icon"><i class="fa fa-fw"></i></span>
                                <p class="intro">Set the record straight on ‘science’ myths associated with black tea.</p>
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
                        <img src="uploaded/dr-catherine-hood.png" width="284" height="337" />
                    </div>
                    <div class="copy">
                        <h2>Who we are</h2>
                        <p class="sub-title">Dr Catherine Hood</p>
                        <p>Dr Catherine Hood is a health broadcaster and writer. She presented Channel Five’s prime time series A Girl's Guide to 21st Century Sex and regularly appears on The Wright Stuff discussing all aspects of general medicine.</p>
                        <div class="buttons">
                            <a href="#" class="button next">Read more</a><br />
                            <a href="#" class="button next">Other members</a>
                        </div>
                    </div>
                    <div class="cboth"></div>
                </li>
                <li class="item">
                    <div class="imagery">
                        <img src="uploaded/dr-pretty-woman.png" width="284" height="337" />
                    </div>
                    <div class="copy">
                        <h2>Who we are</h2>
                        <p class="sub-title">Dr Pretty Lady</p>
                        <p>Dr Pretty Lady is an exercise physiologist with a scientific research background. She is currently a Professor in Ageing and Health at Glasgow Caledonian University.  She is Deputy Lead of the Later Life Research Group and also the Scottish Centre for Evidence Based Care. </p>
                        <div class="buttons">
                            <a href="#" class="button next">Read more</a><br />
                            <a href="#" class="button next">Other members</a>
                        </div>
                    </div>
                    <div class="cboth"></div>
                </li>
                <li class="item">
                    <div class="imagery">
                        <img src="uploaded/dr-who.png" width="284" height="337" />
                    </div>
                    <div class="copy">
                        <h2>Who we are</h2>
                        <p class="sub-title">Dr Who</p>
                        <p>Doctor Who is a British science-fiction television programme produced by the BBC from 1963 to the present day. The programme depicts the adventures of the Doctor, a Time Lord—a time-travelling humanoid alien. He explores the universe in his TARDIS, a sentient time-travelling space ship.</p>
                        <div class="buttons">
                            <a href="#" class="button next">Read more</a><br />
                            <a href="#" class="button next">Other members</a>
                        </div>
                    </div>
                    <div class="cboth"></div>
                </li>
                <li class="item">
                    <div class="imagery">
                        <img src="uploaded/dr-typical-hood.png" width="284" height="337" />
                    </div>
                    <div class="copy">
                        <h2>Who we are</h2>
                        <p class="sub-title">Dr Typical Doctor</p>
                        <p>Dr Typical Doctor is a fictional character, a mercenary and anti-hero appearing in comic books published by Marvel Comics. Created by writer and artist Rob Liefeld and scripted by Fabian Nicieza.</p>
                        <div class="buttons">
                            <a href="#" class="button next">Read more</a><br />
                            <a href="#" class="button next">Other members</a>
                        </div>
                    </div>
                    <div class="cboth"></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer">

    </div>

    <?php include_once('includes/footer.php'); ?>
    <script src="js/vendors/jquery.bxslider/jquery.bxslider.js"></script>
</body>
</html>