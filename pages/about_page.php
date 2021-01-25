<!DOCTYPE html>
<html lang="en">

<?php
$title = "About Us";
include_once('../inc/header.php');
?>

<body>
<!-- Header -->
<header class="news-header py-4">
    <div class="row flex-nowrap justify-content-center align-items-center">
        <div class="col-4 text-center">
            <a class="news-header-logo text-dark" href="/newsly/index.php">Newsly</a>
        </div>
    </div>
</header>

<div class="container" style="padding-top: 20px;">

    <div>
        <div class="mb-4 text-white rounded-3 bg-dark main-about-card">
            <div class="wrapper rounded-3 p-4 p-md-5 d-flex align-items-end">
                <div class="col-md-6 px-0">
                    <!--<h1 class="display-4 font-italic">Sports</h1>
                    <p class="lead my-3">
                        Find the latest in top matches, highlights and expert analysis!
                    </p>
                    <p class="lead mb-0">
                        <a href="#" class="text-white fw-bold">Continue reading...</a>
                    </p>-->
                </div>
            </div>
        </div>

        <h2><u>About Us</u></h2>
        <div class="ml-auto aboutus-container">
            <p>Newsly Media is the publisher of Newsly, just another rather one of the biggest selling English newspaper
                in the region.
                It is also home to the most visited news websites in the country, <a href="#" target="_blank">newsly.com.</a>
            </p>
            <p>Newsly Media is also the home of a contract publishing division, and a magazine arm that publishes, among
                other titles, SWEN by Newsly, the most widely circulated magazine in the country according to Google.inc
                .
            </p>
            <p>Newsly Media is also the owner of <a href="https://ghar47.com" target="_blank">ghar47.com</a>, a major
                portal in the country for buying or renting property through classifieds.</p>
            <p>Newsly Media owns the largest, and most sophisticated printing presses in the region.</p>
        </div>

        <h3>Our Products</h3>
        <div class="ml-auto aboutus-container">
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"
                 style="padding-bottom: 20px; margin-bottom: 40px; border-radius: 21px 21px 21px 21px;">
                <div class="my-3 py-3">
                    <h4 class="display-5">SWEN Magazine by Newsly</h4>
                    <p class="lead">Let the news shine in.</p>
                </div>
                <div class="bg-light box-shadow mx-auto aboutus-swen"
                     style="width: 80%; height: 300px; border-radius: 21px 21px 21px 21px; margin-bottom: 20px;">

                </div>
            </div>
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"
                 style="padding-bottom: 20px; margin-bottom: 20px; border-radius: 21px 21px 21px 21px;">
                <div class="my-3 py-3">
                    <h4 class="display-5">SWEN Wheels by Newsly</h4>
                    <p class="lead">Ramp up the wheels</p>
                </div>
                <div class="bg-light box-shadow mx-auto aboutus-wheels"
                     style="width: 80%; height: 300px; border-radius: 21px 21px 21px 21px; margin-bottom: 20px;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include_once('../inc/footer.html') ?>

</body>
