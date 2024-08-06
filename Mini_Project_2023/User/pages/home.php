<?php
include_once "./bash.php";

if (isset($_POST["get_Ad_btn"])) {
    if ($_SESSION["islogged_in"] == true) {
        header("Location:/Mini_Project_2023/User/pages/get_ads.php");
    } else {
        echo "<script>";
        echo "alert('Please Ragister with us then you get AD...');";
        echo "</script>";
    }
}

?>

<!-- End of Navigation Bar -->

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../static/Images/HomeImages/first.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>Your Advertisement</h5>
                <p>You can purchase your advertisement</p>
                <p><a href="#getadform" class="btn btn-warning mt-3"> Get Started</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../static/Images/HomeImages/sec3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>Your requirenment</h5>
                <p>we will try to understand your requirenment</p>
                <p><a href="#getadform" class="btn btn-warning mt-3"> Get Started</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../static/Images/HomeImages/third.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>Best result</h5>
                <p>We provide best result for you</p>
                <p><a href="#getadform" class="btn btn-warning mt-3"> Get Started</a></p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End Of Sliding Picture -->

<section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="about-img">
                    <img src="../static/Images/HomeImages/service.jpg" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lgh-5 mt-md-5">
                <div class="about-text">
                    <h2>We Provide Best Quality <br> Service Ever</h2>
                    <p>We Provide Best Quality that anyone can even imagine. we are mediator between the client and
                        advertiser.it means we are only one type of broker.we can't take commition from you.
                    </p>
                    <a href="###" class="btn btn-warning">learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of about Section -->

<section id="services" class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Our Services</h2>
                    <p>This website provide service to sell the advertisement to the
                        client. This is medium of
                        website can make world very.
                        Moreover Client can find ad according to their requirenment. </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body">
                        <i class="bi bi-subtract"></i>
                        <h3 class="card-title">Best Quality</h3>
                        <p class="lead">We try to provide best quality and best exeperiance to our client.
                            We make sure that our client can't get trouble.
                            Also we maintaine our website and update time to time for better experiance.
                            Our service quality is betterr than others.
                            YOu can also give us your experiance as us feedback.
                        <p>Click below to read more</p>
                        </p>
                        <button class="btn btn-warning text-dark">
                            Read More
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body">
                        <i class="bi bi-subtract"></i>
                        <h3 class="card-title">Best Facility</h3>
                        <p class="lead">Our website 's facility is better than other's.
                            We try our best to provide facility as much as possible.
                            Also we try to provide our customer's response as soon as possible.
                            We always try our best to satisfy our customers.
                            And we also complete our goal to satisfy our customer.
                        <p>Click below to read more</p>
                        </p>
                        <button class="btn btn-warning text-dark">
                            Read More
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body">
                        <i class="bi bi-subtract"></i>
                        <h3 class="card-title">Good Experiance</h3>
                        <p class="lead">
                            Our website is good enough and provide proper facility that's why our customer are
                            happy.
                            Our customer provides some feedbacks and those feedbacks are satisfy our curiocity that
                            how our work is.
                            Our all feedback tells thst our work is goood and there is no mistake in our work cause
                            We work Professionally.
                        <p>Click below to read more</p>
                        </p>
                        <button class="btn btn-warning text-dark">
                            Read More
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Of Service Section -->

<section id="portfolio" class="portfolio section-padding">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Works</h2>
                        <p class="lead">Our main work is to provide a plateform for those who want
                            advertisement for the business
                            expantion
                            And those who sell the advertisement.
                        </p>
                        <h4> People Working with us </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-47">
                                <img src="../static/Images/HomeImages/ourteam2.jpg" alt="" class="img-fluid"
                                    id="img-fluid">
                            </div>
                            <h3 class="card-title">Our Team</h3>
                            <p class="lead">
                                Advertisement Broker's team work as intermediate between client and advertiser.
                                our team verify the client type and check that none of our client or advertiser get
                                suffer from any thing
                            </p>

                            <div class="btn btn-warning text-">Learn More</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-47">
                                <img src="../static/Images/HomeImages/client.png" alt="" class="img-fluid"
                                    id="img-fluid">
                            </div>
                            <h3 class="card-title">Client</h3>
                            <p class="lead">
                                Client is the main person who help us to grow.
                                cleint is try to find advertisement according to their requirenment
                                and at last they satisfy them selves from taken contact with asvertiser and get ads.
                            </p>
                            <div class="btn btn-warning text-">Learn More</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-47">
                                <img src="../static/Images/HomeImages/adver2.jpg" alt="" class="img-fluid"
                                    id="img-fluid">
                            </div>
                            <h3 class="card-title">Advertiser</h3>
                            <p class="lead">
                                Hear Advertiser is part , without this part we might not be grown.
                                our advertiser help to attract new client and help to grow us.
                                Advertiser is sell advertisement to the client using our plateform.
                            </p>
                            <div class="btn btn-warning text-">Learn More</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="col-12 text-white" id="getadform">

    <h1 style="text-align: center;">Want to get Advertisements?</h1>

    <div class="col-12" id="optiondata">
        <form action="./home.php" method="post">
            <button type="submit" class="btn btn-warning" id="btnsearch" name="get_Ad_btn">Get Started</button>
        </form>
    </div>
</div>




<!-- End Of Search Part -->
<section id="contact" class="contact section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Contact US</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat repellat assumenda reiciendis
                        necessitatibus minima rerum veritatis dolorem obcaecati, voluptatem maiores.</p>
                </div>
            </div>
        </div>

        <div class="row m-0">
            <div class="col-md-12 p-0 pt-4 p-4 m-auto">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Full name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <textarea rows="3" class="form-control" placeholder="Enter Your query"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-warning btn-lg btn-block mt-3">
                        Submit query
                    </button>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Contact section -->

</body>

</html>