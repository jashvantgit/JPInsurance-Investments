<?php include "header.php"  ?>
<!-- End Header Top -->

    <!-- Header 
    ============================================= -->

    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center"
        style="background-image: url(assets/img/about_mdn.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <!-- <li><a href="#">Pafges</a></li> -->
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding">
        <!-- Fixed BG -->
        <div class="fixed-bg">
            <!-- <img src="assets/img/illustration/1.png" alt="Thumb"> -->
        </div>
        <!-- End Fixed BG -->
        <div class="container">
            <div class="contact-items" style="border: 3px solid #c2202d";>
                <div class="row align-center">

                    <div class="col-lg-4 right-item">
                        <div class="info-items text-light">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <div class="info">
                                    <a href="https://www.google.com/maps?ll=23.027063,72.523487&z=16&t=m&hl=en&gl=IN&mapclient=embed&cid=11240422690339418904"><h5>Location</h5>
                                    <p>
                                    <p style="text-align:left">
                                    <!-- E-103, Saral Residency,
                                Nr. Aristo Bliss, Satyamev vista Road, -->
                                Gota, Ahmedabad-382481.
                                    </p></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h5 style="text-transform:none">Make a Call</h5>
                                    <p>
                                        <a href="tel:9426038776">
                                            +91-94260 38776</a>
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <h5 style="text-transform:none">Send a Mail</h5>
                                    <p>
                                        <a href="mailto:pateljashvant663@gmail.com">
                                        pateljashvant663@gmail.com</a><br>
                                       
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>

                    <div class="col-lg-8 left-item">
                        <div class="content">
                            <h2>Let's Lalk About Your Idea</h2>
                            <form action="mail.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name"
                                                type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                                type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments"
                                                placeholder="Tell Us About Requirement *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send Message <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.046063056787!2d72.5399983241315!3d23.095409563608364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8322eb200001%3A0xc99178a15dcbdd34!2sSARAL%20RESIDENCY%2C%20Gota%2C%20Ahmedabad%2C%20Gujarat%20382481!5e0!3m2!1sen!2sin!4v1762770086000!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
        </div>
    </div>
    <!-- End Google Maps -->

    <!-- Start Footer 
    ============================================= -->
    <!-- Start Footer 
    ============================================= -->
<?php include "footer.php" ?>