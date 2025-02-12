<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://use.fontawesome.com/43a032c80c.js"></script>
    <script src="js/scripts.js"></script>
  
    <title>Sicomoro</title>
</head>

<body>
    <div class="container">
        <!-- Section 1 includes the Logo, Slogan and Horizontal Line Menu-->
        <div class="section1">
            <!--Hamburger Modal Menu
            <!--Trigger the modal with a button -->
            <div class="menulines">
                <button type="button" class="btn" data-toggle="modal" data-target="#menuModal"><i class="fa fa-bars fa-lg" aria-hidden="true" ></i></button>
                <!-- Modal -->
                <div id="menuModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">menu de Hamburguesas</h4>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li><a href="#">contacto</a></li>
                                    <li><a href="#">Eventos</a></li>
                                    <li><a href="#">Menu</a></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo">
                <img src="assets/logoBig.png" alt="Company Logo">
                <p>Brindamos La Mejor Comida <br /> Al <span class="boldSlogan">Precio Correcto</span></p>
            </div>
        </div>
        <!-- Section 2 includes the Drinks, Breakfast, Lunch and Dinner Clickable Menu-->
        <div class="section2">
            <div class="row">
                <div class="col-md-3">
                    <p class="happyhour">Happy Hour </p>
                    <p class="partytime">Party Time</p>
                </div>

                <div class="col-md-3">
                    <p id="breakfast">Desayuno</p>
                </div>
                <div class="col-md-3">
                    <p id="lunch">Almuerzo</p>
                </div>
                <div class="col-md-3 ">
                    <p id="dinner">Comida</p>
                </div>

            </div>
        </div>
        <!-- Section 3 includes information on Fast food and Drink items with photos-->
        <div class="section3">
            <!--Fast food row-->
            <div class="row fastFoodRow">
                <div class="col-md-6  fastFoodPhotos">
                    <img src="assets/fastFood1.jpg" alt="Photo of Fast Food"><br/>
                    <img src="assets/fastFood2.jpg" alt="Photo of Fast Food">
                </div>

                <div class="col-md-6">
                    <div class="fastFood">
                        <h3>Fast Food</h3>
                        <h4>You'll love our delicious food.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button type="button" name="button">View Gallery &rarr;</button>
                    </div>
                </div>
            </div>
            <!-- Drink Information Row-->
            <div class="row drinksInfoRow">
                <div class="col-md-6 drinksInfo">

                    <h3>Bebidas</h3>
                    <h4>We also produce delicious drinks.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <button type="button" name="button">View Gallery &rarr;</button>
                </div>

                <div class="col-md-6 drinksInfoPhotos">
                    <img src="assets/drink1.jpg" alt="Photo of Drink">
                    <img src="assets/drink2.jpg" alt="Photo of Drink" class="drinksInfoPhoto2">
                </div>
            </div>
        </div>
        <!-- Section 4 includes navigation tabs for various menu items each with image carousels-->
        <div class="section4">
            <!-- Tab Navigation List-->
            <div class="nav-list">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="tab" href="#fastFood">Fast Food</a></li>
                    <li><a data-toggle="tab" href="#drinks">Bebidad</a></li>
                    <li><a data-toggle="tab" href="#chicken">Pollo</a></li>
                    <li><a data-toggle="tab" href="#rice">Arroz</a></li>
                </ul>
                <!-- Tab Content includes four carousels for the four tabs-->
                <div class="tab-content">
                    <!-- Content for Fast Food Tab containing it's carousel-->
                    <div id="fastfood" class="tab-pane fade in active">
                        <div id="fastFoodCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#fastFoodCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#fastFoodCarousel" data-slide-to="1" class="active"></li>
                                <li data-target="#fastFoodCarousel" data-slide-to="2" class="active"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/fastfood/chickenBurger.jpg" alt="Chicken Burger">
                                </div>
                                <div class="item active ">
                                    <img src="assets/fastfood/beefBurger.jpg" alt="Beef Burger">
                                </div>
                                <div class="item active">
                                    <img src="assets/fastfood/chickenPizza.jpg" alt="Chicken Pizza">
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#fastFoodCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#fastFoodCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <!-- Content for Drinks Tab containing it's carousel-->
                    <div id="drinks" class="tab-pane fade ">
                        <div id="drinksCarousel" class="carousel" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#drinksCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#drinksCarousel" data-slide-to="1" class="active"></li>
                                <li data-target="#drinksCarousel" data-slide-to="2" class="active"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/fastfood/beefBurger.jpg" alt="Beef Burger">
                                </div>
                                <div class="item active ">
                                    <img src="assets/fastfood/chickenBurger.jpg" alt="Chicken Burger">
                                </div>
                                <div class="item active">
                                    <img src="assets/fastfood/chickenPizza.jpg" alt="Chicken Pizza">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#drinksCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#drinksCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <!-- Content for the Chicken Tab containing it's carousel-->
                    <div id="chicken" class="tab-pane fade ">
                        <div id="chickenCarousel" class="carousel" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#chickenCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#chickenCarousel" data-slide-to="1" class="active"></li>
                                <li data-target="#chickenCarousel" data-slide-to="2" class="active"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/fastfood/chickenPizza.jpg" alt="Chicken Pizza">
                                </div>
                                <div class="item active ">
                                    <img src="assets/fastfood/beefBurger.jpg" alt="Beef Burger">
                                </div>
                                <div class="item active">
                                    <img src="assets/fastfood/chickenBurger.jpg" alt="Chicken Burger">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#chickenCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#chickenCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <!-- Content for the Rice Tab containing it's carousel-->
                    <div id="rice" class="tab-pane fade ">
                        <div id="riceCarousel" class="carousel" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#riceCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#riceCarousel" data-slide-to="1" class="active"></li>
                                <li data-target="#riceCarousel" data-slide-to="2" class="active"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/fastfood/chickenBurger.jpg" alt="Chicken Burger">
                                </div>
                                <div class="item active ">
                                    <img src="assets/fastfood/beefBurger.jpg" alt="Beef Burger">
                                </div>
                                <div class="item active">
                                    <img src="assets/fastfood/chickenPizza.jpg" alt="Chicken Pizza">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#riceCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#riceCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section 5 includes testimonials from customers as a slideshow and information about the menu-->
        <div class="section5">
            <div class="row">
                <div class="col-md-8 customers">
                    <h4>Clientes felices</h4>
                    <div id="testimonials" class="carousel" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonials" data-slide-to="1"></li>
                            <li data-target="#testimonials" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <h5>George Richard</h5>
                                <p>Great food! Menu is awesome, their foods are not only great but also have great pricing. I'll highly recommend them.</p>
                                <img src="assets/customers/p2.png" alt="Customer 1">
                            </div>
                            <div class="item ">
                                <h5>Amy Poland</h5>
                                <p>Great food! Menu is awesome, their foods are not only great but also have great pricing. I'll highly recommend them.</p>
                                <img src="assets/customers/p1.png" alt="Customer 2">
                            </div>
                            <div class="item ">
                                <h5>James Micheals</h5>
                                <p>Great food! Menu is awesome, their foods are not only great but also have great pricing. I'll highly recommend them.</p>
                                <img src="assets/customers/p3.png" alt="Customer 3">
                            </div>
                        </div>


                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#testimonials" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Atras</span>
                        </a>
                        <a class="right carousel-control" href="#testimonials" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 about">
                    <h4>Acerca del Menú</h4>
                    <p>We are a small team of 9 members. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                </div>
            </div>
        </div>
        <!-- Section 6 includes an email entry form for a subscription list-->
        <div class="section6">
            <p> Get our daily food items delivered to your email</p>
            <div class="form-group">
                <form id="subscribtionList">
                    <div class="rows">
                        <div class="col-md-8">
                            <input type="email" id="emailaddress" class="form-control" placeholder="Your email">
                        </div>
                        <div class="col-md-4">
                            <input type="button" value="Subscribe" id="subscribe" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Section 7 includes the website footer-->
        <div class="section7">
            <div class="footer">
                <h5>
                    <img src="assets/footerlogos/logo_white.png" alt="White Logo">MENU
                </h5>
                <p>Thats what we are</p>
                <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
                <i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i>
                <i class="fa fa-pinterest-square fa-lg" aria-hidden="true"></i>
                <p id="copyright">2016 Menu Restaurant</p>
            </div>
        </div>
    </div>

</body>

</html>
