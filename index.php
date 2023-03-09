<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sibilize</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body>
        
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span><h2>SIBILIZE</h2></span>
                </div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>

            <div class = "head-bottom flex">
                <h2>A Home away from home</h2>
                <p>A Sibilize is a place which ensures and make sure to provide you the experience of stay at your own place.Go for the Hassle free booking of the stay of your own choice.</p>
                <!--<button type = "button" class = "head-btn">GET STARTED</button>-->
                <button onclick="location.href='#services'" type="button" class = "head-btn"> GET STARTED</button>
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "#services">services</a></li>
                <li><a href = "#rooms">rooms</a></li>
                <li><a href = "#customers">customers</a></li>
            </ul>
            <button class = "btn sign-up"  onclick="location.href = 'register.php'">sign up</button>
            <button class = "btn log-in"  onclick="location.href = 'login.php'">log in</button>
            <!--<a class="btn sign-up" href="signup.html"> SiGN UP</a>
            <a class="btn log-in" href="login.html">LOG IN</a>-->
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h2>services</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Food Service</h2>
                        <p>Hygienic and home cooked food with variety of dishes.</p>
                        <button type = "button" onclick="location.href='#rooms'" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Other Facilities</h2>
                        <p>It has all facilities such as Air Conditioners, Refrigerator, WI-FI, Laundry, Kitchen etc.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Housekeeping</h2>
                        <p>A well hygiene place kept clean by housekeeping staff everyday.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Security</h2>
                        <p>Safe & Secure stay equipped with CCTV Surveillance.Gated Security </p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>

        <div class = "book">
            <form class = "book-form">
                <div class = "form-item">
                    <label for = "checkin-date">Stay Start Date: </label>
                    <input type = "date" id = "chekin-date">
                </div>
                <div class = "form-item">
                    <label for = "checkout-date">Stay End Date: </label>
                    <input type = "date" id = "chekout-date">
                </div>
                <!--<div class = "form-item">
                    <label for = "adult"> </label>
                    <input type = "number" min = "1" value = "1" id = "adult">
                </div>
                <div class = "form-item">
                    <label for = "children">Children: </label>
                    <input type = "number" min = "1" value = "1" id = "children">
                </div>-->
                <div class = "form-item">
                    <label for = "rooms">Rooms Sharing : </label>
                    <input type = "number" min = "1" value = "1" id = "rooms">
                </div>
                <div class = "form-item">
                    <input type = "submit" class = "btn" value = "Book Now">
                </div>
            </form>
        </div>

        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h2>rooms</h2>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img1.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Stay 1</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Single Sharing Stay/ Private Room
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                24/7 Power Backup and Wi-fi
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Home cooked food
                            </li>
                        </ul>
                        <p>A stay in the vicinity of Janakpuri with the lush green surroundings and the stay has all the amenities such as 24/7 power and water supply, daily housekeeping and maintenance.Home cooked food with wide range of cuisines while keeping in view the proper Hygiene conditions and clean surroundings.</p>
                        <p class = "rate">
                            <span>Rs. 8500 /</span>Monthly
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img2.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Stay 2</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Double Sharing
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                All amenities such as Water purifier, refrigerator, geyser, Air conditioner etc.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                24/7 Power Backup
                            </li>
                        </ul>
                        <p>A stay in the vicinity of Janakpuri with the lush green surroundings and the stay has all the amenities such as 24/7 power and water supply, daily housekeeping and maintenance.Home cooked food with wide range of cuisines while keeping in view the proper Hygiene conditions and clean surroundings.</p>
                        <p class = "rate">
                            <span>7000/</span> Monthly
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img3.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Stay 3</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Triple Sharing
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                All amenities such as air conditioner, geyser, refrigerator etc.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                A secured environment with 24/7 CCTV Survelliance
                            </li>
                        </ul>
                        <p>A stay in the vicinity of Janakpuri with the lush green surroundings and the stay has all the amenities such as 24/7 power and water supply, daily housekeeping and maintenance.Home cooked food with wide range of cuisines while keeping in view the proper Hygiene conditions and clean surroundings.</p>
                        <p class = "rate">
                            <span>5500/</span> monthly
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
            </div>
        </section>


        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2>customers</h2>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p>What pulled me to Sibilize was the sincerity and honesty of the people running the place.They care for you like a family, our caretaker deserves special mention for going above and beyond for us at all times.</p>
                        <img src = "images/cus1.jpg" alt = "customer image">
                        <span>Rishab</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Living</h3>
                        <p>Living in sibilize is all about experiencing stay like home. I never felt that I am away from home. So Sibilize is home away from home</p>
                        <img src = "images/cus2.jpg" alt = "customer image">
                        <span>Shweta</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>My overall experience with sibilize is quite good. It is well equipped with all the amenities and is a nice play to stay</p>
                        <img src = "images/cus3.jpg" alt = "customer image">
                        <span>Ritvik</span>
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        <!-- end of body content -->
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>Accomodate the Youth<br>Missing Hostel Life?<br>Haven't got admitted to college's hostel?<br>Sibilize is answer to all of your questions</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#">Blog</a>
                    <a href = "#">Rooms</a>
                    <a href = "#">Subscription</a>
                    <a href = "#">Gift Card</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    <a href = "#">Services</a>
                </div>

                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            West Sagarpur, New Delhi-110046
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +91 91070 XXXXX
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            info@sibilize.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="script.js"></script>
    </body>
</html>