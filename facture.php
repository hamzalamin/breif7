<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Electro Nacer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/str.css" rel="stylesheet" />
    
</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section starts -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.php"><span class="text-danger">Electro </span><span
                            style="color: black;">EL-Nacer</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="facture.php">Facture</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>
    <!-- inner page section -->
    <div class="container mt-5 mb-5">
        <section class="formell">
            <form method="post">
                <h2 class="text-center mb-4" style="color: black;">Invoice Details</h2>
                <div class="form-group">
                    <label for="fullName" style="color: black;">Full Name:</label>
                    <input name="name" type="text" class="form-control" id="fullName"
                        placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="email" style="color: black;">Email:</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email"
                        required>
                </div>
                <div class="form-group">
                    <label for="phone" style="color: black;">Phone Number:</label>
                    <input name="password" type="tel" class="form-control" id="phone"
                        placeholder="Enter your phone number" required>
                </div>

                <!-- Additional Address Fields can be added as needed -->

                <button type="submit" class="btn btn-primary btn-block"
                    style="background-color: #dc3545; border-color: #dc3545;">Complete Order</button>
            </form>

            <!-- Order Confirmation -->
            <div class="order-summary mt-4">
                <h3 class="mb-4" style="color: black;">Order Summary</h3>
                <div class="order-summary mt-4">
              

              <!-- New section for order and delivery date -->
              <div class="mt-4" style="color: black;">
                  <p class="font-weight-bold">Order Date: December 1, 2023</p>
                  <p class="font-weight-bold">Date d'envoi: December 1, 2023</p>
                  <p class="font-weight-bold">Estimated Delivery Date: December 10, 2023</p>
              </div>
              </div>
         
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product 1</td>
                            <td>2</td>
                            <td>$20.00</td>
                            <td>$40.00</td>
                        </tr>
                        <tr>
                            <td>Product 2</td>
                            <td>1</td>
                            <td>$15.00</td>
                            <td>$15.00</td>
                        </tr>
                    </tbody>
                </table>
       
                <hr style="border-top: 2px solid #dc3545;">

                <div class="text-right">
                    <p class="font-weight-bold" style="color: black;">Total: $55.00</p>

                    <button class="btn btn-secondary mr-2"
                        style="background-color: black; border-color: black;">Print Invoice</button>
                    <!-- Pay Invoice Button -->
                    <button class="btn btn-success"
                    style="background-color: #dc3545; border-color: #dc3545;">Pay Invoice</button>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>Reach at..</h4>
                        <div class="contact_link_box">
                            <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Location</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Call +01 1234567890</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>demo@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="index.php" class="footer-logo" style="color: white;">Famms</a>
                        <p>
                            Necessary, making this the first true generator on the Internet. It uses a dictionary of over
                            200 Latin words, combined with
                        </p>
                        <div class="footer_social">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-info">
                <div class="col-lg-7 mx-auto px-0">
                    <p>
                        &copy; <span id="displayYear"></span> All Rights Reserved By
                        <a href="https://html.design/" style="color: white;">Free Html Templates</a><br>

                        Distributed By <a href="https://themewagon.com/" target="_blank"
                            style="color: white;">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section -->
    <!-- jQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
