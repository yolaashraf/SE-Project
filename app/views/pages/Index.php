
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">


    <!-- Bootstrap core CSS -->
    <link href="../../public/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../public/assets/dist/js/bootstrap.bundle.min.js"></script>

    <link href="../public/css/HomePage.css" rel="stylesheet">    


</head>


<?php
class Index extends View
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    //echo $text;
    $text = <<<EOT
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../images/HomePhotos/image5.jpeg" alt="missing image">

            <div class="container">
                <div class="carousel-caption text-start">

                    <h1 style="color:lightgrey">Aamzing Events</h1>
                    <p style="color:lightgray">Attracts customer from all over egypt</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../images/HomePhotos/image3.jpeg" alt="missing image">

            <div class="container">
                <div class="carousel-caption">
                    <h1 style="color:lightgrey">Sell your products</h1>
                    <p style="color:lightgrey">Make your besuines thrive</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../images/HomePhotos/277174954_5135084823222831_2073231548658663038_n.jpeg" alt="missing image">
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1 style="color:lightgrey">Grow your customer base</h1>
                    <p style="color:lightgrey">Get people to know more about your product</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">

            <img src="../images/HomePhotos/location_icon.jpeg" alt="missing image">

            <h2  style="color:rgb(213, 1, 89)">Location</h2>
            <p style="color:rgb(213, 1, 89)">All over egypt.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

            <img src="../images/HomePhotos/event-schedule-icon-260nw-606709283.jpg copy.jpeg" alt="missing image">

            <h2  style="color:rgb(213, 1, 89)">Events</h2>
            <p style="color:rgb(213, 1, 89)">Many interesting events all the year.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

            <img src="../images/HomePhotos/tent_icon.png" alt="missing image">

            <h2 style="color:rgb(213, 1, 89)">Tents</h2>
            <p style="color:rgb(213, 1, 89)">Display your product the way you like.</p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"  style="color:rgb(213, 1, 89)">Get Noticed, <span class="text-muted">We Display With Pride</span>
            </h2>
            <p class="lead" style="color:black">Every tent booth gets the spotlight it deserves!
            </p>
        </div>
        <div class="col-md-5">
            <img src="../images/HomePhotos/image_tent.jpeg" alt="image missing">

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading" style="color:rgb(213, 1, 89)"> Perfect From Beginning to End, <span class="text-muted">Yeah, it???s
                    that good.</span></h2>
            <p class="lead" style="color:black">Every successful event needs to be well organized, Well don't
                you worry we got
                all that covered.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="../images/HomePhotos/image_tent2.jpeg" alt="image missing">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading" style="color:rgb(213, 1, 89)">Our Reputation Goes With It, <span class="text-muted">Experience is
                    the game.</span></h2>
            <p class="lead" style="color:black">With Years of Experience in the business, You better believe
                that we make events to
                be proud of.</p>
        </div>
        <div class="col-md-5">
            <img src="../images/HomePhotos/image_tent3.jpeg" alt="image missing">
        </div>
    </div>

</div>

EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
?>
</html>
