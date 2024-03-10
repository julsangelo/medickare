<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="style_index.css">
    </head>
    <body>
        <!-- Navbar !-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="pictures/logo.png" alt="" width="100px" height="100px" class="d-inline-block align-text-top">
                    <label>MedicKare Health Care</label>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar link !-->
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto text-center">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        <a class="nav-link active" href="#about">About</a>
                        <a class="nav-link active" href="#contact">Contact</a>
                        <a class="nav-link active" href="#location">Location</a>
                        <a class="btn" href="patient/patient_login.php">LOG IN</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Home Section !-->
        <section class="text-left" id="home">
            <div class="row welcome text-left">
                <div>
                    <div class="d-xl-none"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="container">
                        <div class="display-2 header">MedicKare Health Care</div>
                        <br>
                        <div class="display-6 subheader">Your companion with healthy living.</div>
                    </div>
                </div>
            </div>    
        </section>

        <!-- About Section !-->
        <section class="text=center container-fluid" id="about">
            <div class="row welcome text-right">
                <div class="col-12">
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="container ">
                    <div class="display-5 header">About Us</div>
                    <br><br><br><br><br>
                    <div class="display-6 subheader">MedicKare is a health care provider that offers our users to set an appointment for a check-up in our partner hospitals with just a touch of their smartphone. Our goal is to avoid the inconvenience of waiting in line in clinics or hospitals.</div>
                </div>
            </div>    
        </section>

        <!-- Contact Section !-->
        <section class="text=center container-fluid d-flex justify-content-center" id="contact">
            <div class="row welcome text-left">
                <div>
                    <div class="d-xl-none"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                    <br><br><br><br><br><br><br><br><br>
                    <div class="container">
                        <center class="display-3 header">Contact Us</center>
                    </div>
                    <br><br>
                    <div class="row g-4">
                        <div class="col-md-4"></div>
                        <a class="col-md-1 facebook" href="https://www.facebook.com/juliusangelo.a.paano/" target="_blank"></a>
                        <div class="col-md-6">
                            <label for="facebook">MedicKare Health Care</label>
                        </div>

                        <div class="col-md-4"></div>
                        <a class="col-md-1 twitter" href="https://twitter.com/aint_juls" target="_blank"></a>
                        <div class="col-md-6">
                            <label for="twitter">@MedicKare</label>
                        </div>

                        <div class="col-md-4"></div>
                        <a class="col-md-1 gmail" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"></a>
                        <div class="col-md-6">
                            <label for="gmail">medickare.support@gmail.com</label>
                        </div>

                        <div class="col-md-4"></div>
                        <a class="col-md-1 phone"></a>
                        <div class="col-md-6">
                            <label for="phone">02-221-3575</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Locations Section !-->
        <section class="text=center container-fluid d-flex justify-content-center" id="location">
            <div class="row welcome text-left">
                <div>
                    <div class="d-xl-none"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                    <br><br><br><br><br><br>
                    <div class="container">
                        <center class="display-4 header">Location</center>
                    </div>
                    <br>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51947.5987429702!2d121.06316454480367!3d14.597458909861297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6379e5ccf3f%3A0xde1ba0020c2f2350!2sSt.%20Luke&#39;s%20Medical%20Center%20Quezon%20City!5e0!3m2!1sen!2sph!4v1671948647278!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <br><br>
                        <h5>St. Luke's Medical Center Quezon City</h5>
                        <h6>279 E Rodriguez Sr. Ave, Quezon City, 1112 Metro Manila</h6>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section !-->
        <div class="footer">
            <img src="pictures/logo.png" width="100px">
            <br>
            <label>Copyright ⓒ 2022 MedicKare, Inc.</label>
            <br>
            <a href="#">Terms and Condition</a>
            <label>|</label>
            <a href="#">Privary Policy</a>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>