<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Google Fonts: Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin-top: 120px;
            /* Adjust this depending on your navbar height */
        }

        /* Ensures the entire width of the container is used */
        .container {
            max-width: 1500px;
            /* Control the width of your container (adjustable) */
            margin: 0 auto;
            /* Centers the container */
        }

        .navbar-collapse {
            margin-left: 0;
            margin-right: 0;
        }

        .navbar {
            padding: 0.5rem 0;
            /* Reduce padding top and bottom to make it more compact */
        }

        /* Adjust the navbar to center the logo */
        .navbar .navbar-brand {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 0;
            /* Adjusted to bring closer to navbar links */
            margin-right: 0;
            /* Adjusted to balance the spacing */
            padding: 0;
            height: 115px;
        }




        /* Styling for navbar links */
        .navbar-nav .nav-link {
            margin-right: 20px;
            padding: 10px 16px;
            border-radius: 6px;
            transition: background-color 0.3s ease, border 0.3s ease;
        }


        /* Add hover effect for a button-like feel */
        .navbar-nav .nav-link:hover {
            background-color: #007bff;
            color: white;
            border-radius: 6px;
            /* Less rounded for boxier feel */
            border: 1px solid #0056b3;
            /* Optional: adds definition */
            text-decoration: none;
        }


        /* Optional: Remove the margin on the last nav link */
        .navbar-nav .nav-link:last-child {
            margin-right: 0;
        }

        /* Fix navbar to the top */
        .navbar {
            background-color: white !important;
            /* Enforces white background */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        /* Ensure the content below the navbar isn't hidden */
        body {
            margin-top: 120px;
            /* Adjust this depending on your navbar height */
        }

        /* Background for the About Us section that takes full width of the #data container */
        .about-us-background {

            /* Adjust the value if needed to match the navbar height */
            background-image: url('img/ourservices.jpg');
            /* Background image */
            background-size: cover;
            background-position: center;
            width: 100%;
            /* Full width relative to the #data container */
            height: 100vh;
            /* Full height of the viewport */
            border-radius: 20px;
            /* Semi-rounded corners */
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            /* Shadow to create floating effect */
            margin-left: 0;
            margin-right: 0;
            margin-top: 200px;
            /* Space between navbar and background image */
            transform: translateY(-10px);
            /* Slight upward movement to emphasize floating */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Smooth transition for floating effect */
        }

        /* Hover effect for background image */
        .about-us-background:hover {
            transform: translateY(-15px) scale(1.05);
            /* Move it upwards and scale it slightly */
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.4);
            /* Stronger shadow when hovered to enhance the floating effect */
        }

        /* Content inside the About Us section */
        .about-us-section {
            padding-top: 180px;
            /* Adjust the padding to create space below the navbar */
            position: relative;
            color: white;
            padding-top: 100px;
            padding-bottom: 50px;
            height: 80vh;
        }

        /* Add a shadow effect to the container inside about-us-section */
        .about-us-section .container {
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.25);
            /* Apply 25% shadow to the container */
            padding: 20px;
            /* Padding around the content */
            border-radius: 20px;
            /* Optional: rounded corners */
            background-color: rgba(0, 0, 0, 0.6);
            /* Optional: darkened background to enhance the shadow effect */
        }

        .about-us-section .content {
            position: relative;
            padding: 0 15px;
            max-width: 800px;
            margin: 0 auto;
            /* height: 70vh; */
        }

        /* Shadow background behind h2 and p */
        .about-us-section .content h2,
        .about-us-section .content p {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            color: white;
        }

        /* Bootstrap grid layout styling */
        .about-us-section .row {
            display: flex;
            align-items: center;
            /* height: 100%; */
        }

        /* Image column styling */
        .about-us-section .image-column {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about-us-section .image-column img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            /* Semi-rounded corners */
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .about-us-section .image-column img:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        .service-box {
            min-height: 280px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .service-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }


        /* Ensure that all divs inherit the width of the container */
        .full-width {
            width: 100%;
        }

        /* Hover effect for card images in the Featured Highlights section */
        .card-img-top {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px 10px 0 0;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }


        /* Footer styling */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }
    </style>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <title>SMHS Batch 1993 Consumer Cooperative</title>
</head>

<body>
    <!-- Container to wrap the entire content -->
    <div class="container mt-5" id="data">

        <!-- Navbar inside the 'data' container -->
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">


            <!-- Navbar links centered -->
            <div class="navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
                <!-- Centered logo -->
                <a class="navbar-brand " href="#">
                    <!-- Increased logo size (40% bigger) -->
                    <img src="img/sampletransparent.png" class="me-2" height="140" alt="Coop Logo" loading="lazy" />
                </a>
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link" href="#">About Us</a>
                    <a class="nav-link" href="#">News & Updates</a>
                    <a class="nav-link" href="#">Services</a>
                    <a class="nav-link" href="#">Events</a>
                    <a class="nav-link" href="#">Contact Us</a>
                    <a class="nav-link" href="#">Be a Member</a>
                </div>
            </div>
        </nav>

        <!-- Section 1: About Us with background image -->
        <!-- Background div inside the 'data' div -->
        <div class="about-us-background full-width"></div>

        <div class="about-us-section">
            <div class="container">
                <div class="row">
                    <!-- First column with text content -->
                    <div class="col-md-6">
                        <div class="content">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec urna dui. Quisque ac
                                erat eu ante fermentum laoreet non a leo. Ut sed urna at ipsum laoreet scelerisque et a
                                odio.</p>
                            <a href="#" class="btn btn-primary mt-3">Read More</a>
                        </div>
                    </div>

                    <!-- Second column for image or additional content -->
                    <div class="col-md-6 image-column">
                        <img src="img/pic1.jpg" alt="Image" class="img-fluid" />
                    </div>



                </div>
            </div>
        </div>
        <!-- Section 2: Services -->
        <div class="container mt-5" style="height: 80vh;">
            <h2 class="mb-4">Our Services</h2>
            <div class="row g-4">
                <!-- Service Box 1 -->
                <div class="col-md-4">
                    <div class="service-box p-4 h-100 shadow-sm text-center bg-light rounded-4">
                        <img src="img/savings.png" alt="Savings" class="img-fluid mb-3" style="max-height: 100px;">
                        <h5>Savings</h5>
                        <p>Save with confidence and earn from your deposits.</p>
                    </div>
                </div>
                <!-- Service Box 2 -->
                <div class="col-md-4">
                    <div class="service-box p-4 h-100 shadow-sm text-center bg-light rounded-4">
                        <img src="img/business-loan.png" alt="Business Loan" class="img-fluid mb-3"
                            style="max-height: 100px;">
                        <h5>Business Loan</h5>
                        <p>Kickstart or expand your business with our loan program.</p>
                    </div>
                </div>
                <!-- Service Box 3 -->
                <div class="col-md-4">
                    <div class="service-box p-4 h-100 shadow-sm text-center bg-light rounded-4">
                        <img src="img/emergency-loan.png" alt="Emergency Loan" class="img-fluid mb-3"
                            style="max-height: 100px;">
                        <h5>Emergency Loan</h5>
                        <p>Quick financial help during unexpected situations.</p>
                    </div>
                </div>
                <!-- Service Box 4 -->
                <div class="col-md-4">
                    <div class="service-box p-4 h-100 shadow-sm text-center bg-light rounded-4">
                        <img src="img/car-loan.png" alt="Car Loan" class="img-fluid mb-3" style="max-height: 100px;">
                        <h5>Car Loan</h5>
                        <p>Drive your dream with our affordable car loans.</p>
                    </div>
                </div>
                <!-- Service Box 5 -->
                <div class="col-md-4">
                    <div class="service-box p-4 h-100 shadow-sm text-center bg-light rounded-4">
                        <img src="img/time-deposit.png" alt="Time Deposit" class="img-fluid mb-3"
                            style="max-height: 100px;">
                        <h5>Time Deposit</h5>
                        <p>Grow your money with fixed-term investments.</p>
                    </div>
                </div>
                <!-- Service Box 6 -->
                <div class="col-md-4">
                    <div class="service-box p-4 h-100 shadow-sm text-center bg-light rounded-4">
                        <img src="img/educational-loan.png" alt="Educational Loan" class="img-fluid mb-3"
                            style="max-height: 100px;">
                        <h5>Educational Loan</h5>
                        <p>Support your child’s education with ease.</p>
                    </div>
                </div>
            </div>
        </div>




        <!-- Section 3: Events -->
        <div class="container mt-5" style="height: 80vh;">
            <h2>Upcoming Events</h2>
            <p>Donec tristique, felis a vestibulum convallis, dui odio bibendum erat, a gravida erat ipsum ac nulla.
                Nulla in sagittis odio. Etiam tincidunt ante at est posuere, a volutpat lectus interdum.</p>

            <!-- Section 4: Featured Highlights / Gallery / Members / Any Use -->
            <div class="container mt-5 mb-5">
                <h2 class="mb-4 text-center">Featured Highlights</h2>
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card shadow-sm h-100">
                            <img src="img/pic2.jpg" class="card-img-top" alt="Card Image 1">
                            <div class="card-body">
                                <h5 class="card-title">Community Outreach</h5>
                                <p class="card-text">Our cooperative actively supports local outreach programs.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card shadow-sm h-100">
                            <img src="img/pic3.jpg" class="card-img-top" alt="Card Image 2">
                            <div class="card-body">
                                <h5 class="card-title">Member Spotlight</h5>
                                <p class="card-text">Meet our outstanding members and their stories of success.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card shadow-sm h-100">
                            <img src="img/pic4.jpg" class="card-img-top" alt="Card Image 3">
                            <div class="card-body">
                                <h5 class="card-title">Training & Seminars</h5>
                                <p class="card-text">Join our upcoming training sessions to boost your financial
                                    literacy.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card shadow-sm h-100">
                            <img src="img/pic5.jpg" class="card-img-top" alt="Card Image 4">
                            <div class="card-body">
                                <h5 class="card-title">Annual Assembly</h5>
                                <p class="card-text">Be part of our yearly general assembly and voice your vote.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div> <!-- End of 'data' div -->

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row text-start py-4">
                <!-- Column 1: Logo or image -->
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <img src="img/logofinal.png" alt="Coop Logo" class="img-fluid" style="max-height: 300px;">
                </div>


                <!-- Column 2 -->
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Events</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Be a Member</a></li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div class="col-md-3">
                    <h5>Contact</h5>
                    <p>Email: info@smhscoop.com</p>
                    <p>Phone: (123) 456-7890</p>
                    <p>Location: San Mateo, Rizal</p>
                </div>

                <!-- Column 4 -->
                <div class="col-md-3">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white text-decoration-none d-block">Facebook</a>
                    <a href="#" class="text-white text-decoration-none d-block">Twitter</a>
                    <a href="#" class="text-white text-decoration-none d-block">Instagram</a>
                </div>
            </div>

            <!-- Bottom copyright -->
            <div class="text-center border-top pt-3">
                <p class="mb-0">&copy; 2025 SMHS Batch 1993 Consumer Cooperative. All Rights Reserved.</p>
            </div>
        </div>

    </footer>


</body>

</html>