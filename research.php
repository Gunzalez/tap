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
                    <p>For more details about any of these reviews or reports, please contact the TAP press office via:</p>
                    <p>Emma Sanderson or Nicky Smith on <a href="tel:+02077058989" class="telephone-no"><span>0207</span>&nbsp;<span>705</span>&nbsp;<span>8989</span></a>.</p>
                </div>
                <div class="imagery">
                    <img src="uploaded/research.jpg" alt="" />
                </div>
                <div class="cboth"></div>
            </div>
            <div class="bordered-div">
                <div class="research-and-reviews">
                    <h3 class="title uppercase">Research and reviews</h3>
                    <form id="document-type" name="document-type" method="post" action="research.php" class="document-type">
                        <label for="doc-type">View</label>
                        <select id="doc-type" name="doc-type" class="">
                            <option value="" selected="selected">All</option>
                            <option value="">Some</option>
                            <option value="">A few</option>
                            <option value="">Now at all</option>
                        </select>
                    </form>
                    <div id="search-records" class="search-records">
                        <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tfoot></tfoot>
                        <tbody>
                            <tr>
                                <td class="title">Black tea is not significantly different from water in the maintenance of normal hydration in human subjects</td>
                                <td class="date">7 / 06 / 11</td>
                                <td class="category">TAP Reports</td>
                                <td class="description">There is a belief that caffeinated drinks, such as tea, may adversely affect hydration. This was investigated in a randomised controlled trial.</td>
                                <td class="action"><a href="#" class="button next purple">View</a></td>
                            </tr>
                            <tr class="even">
                                <td class="title">A randomised cross-over trial to evaluate the impact of tea on measures of hydration</td>
                                <td class="date">7 / 06 / 11</td>
                                <td class="category">TAP Published Papers</td>
                                <td class="description">There is a view in the popular press that caffeinated drinks, such as tea, have an adverse effect on hydration.</td>
                                <td class="action"><a href="#" class="button next purple">View</a></td>
                            </tr>
                            <tr>
                                <td class="title">Exercise, Tea Consumption, and Depression Among Breast Cancer Survivors</td>
                                <td class="date">7 / 06 / 11</td>
                                <td class="category">Independent Research</td>
                                <td class="description">Purpose: To examine the association of lifestyle factors and supplement use with depression among breast cancer survivors.</td>
                                <td class="action"><a href="#" class="button next purple">View</a></td>
                            </tr>
                            <tr class="even">
                                <td class="title">Black tea is not significantly different from water in the maintenance of normal hydration in human subjects</td>
                                <td class="date">7 / 06 / 11</td>
                                <td class="category">TAP Published Papers</td>
                                <td class="description">Pellentesque volutpat metus sapiutpat meten, convallis condimentum ligula fermentum quis. Morbi dignissim pellentesque blandit.</td>
                                <td class="action"><a href="#" class="button next purple">View</a></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <div class="pagination">
                        <a href="#" class="button prev purple">Prev</a>
                        <a href="#" class="page-no">1</a> <a href="#" class="active page-no">2</a> <a href="#" class="page-no">3</a> <a href="#" class="page-no">4</a> <a href="#" class="page-no">5</a> <a href="#" class="page-no">6</a>
                        <a href="#" class="button next purple">Next</a>
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