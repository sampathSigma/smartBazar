<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
    <link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider -->
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <!-- web-fonts -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items :4,
                itemsDesktop : [640,5],
                itemsDesktopSmall : [480,2],
                navigation : true

            });
        });
    </script>
    <script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {

            // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

            $('.header-two').scrollToFixed();
            // previous summary up the page.

            var summaries = $('.summary');
            summaries.each(function(i) {
                var summary = $(summaries[i]);
                var next = summaries[i + 1];

                summary.scrollToFixed({
                    marginTop: $('.header-two').outerHeight(true) + 10,
                    zIndex: 999
                });
            });
        });
    </script>
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="js/bootstrap.js"></script>
</head>
<body>
<!--	<div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"-->
<!--		aria-hidden="true">-->
<!--		<div class="modal-dialog">-->
<!--			<div class="modal-content">-->
<!--				<div class="modal-header">-->
<!--					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
<!--					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h4>-->
<!--				</div>-->
<!--				<div class="modal-body modal-body-sub"> -->
<!--					<h5>Select your delivery location </h5>  -->
<!--					<select class="form-control bfh-states" data-country="US" data-state="CA">-->
<!--						<option value="">Select Your location</option>-->
<!--						<option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas<option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FM">Federated States Of Micronesia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option>-->
<!--						<option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Mariana Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>-->
<!--					</select>-->
<!--					<input type="text" name="Name" placeholder="Enter your area / Landmark / Pincode" required="">-->
<!--					<button type="button" class="close2" data-dismiss="modal" aria-hidden="true">Skip & Explore</button>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<script>
    $('#myModal88').modal('show');
</script>
<!-- header -->
<div class="header">
    <div class="w3ls-header"><!--header-one-->
        <div class="w3ls-header-left">
            <p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
        </div>

        <div class="w3ls-header-right">
            <ul>
                <li class="dropdown ">
                    <a style="text-decoration: none;color:white"><?php
                        if(isset($_SESSION['USER_LOGIN'])){
                            echo $_SESSION['USER_NAME'];
                        }
                        ?></a>

                </li>
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <!--<a href="login.php">Login </a>-->
                            <?php if(isset($_SESSION['USER_LOGIN'])){
                                echo '<a href="logout.php">Logout</a></a>';
                            }else{
                                echo '<a href="login.php">LOGIN</a>';
                            }
                            ?>
                        </li>
    <!--                        <li><a href="signup.html">Sign Up</a></li>-->
                        <li><a href="order.php">My Orders</a></li>
                        <li>
                            <?php if(isset($_SESSION['USER_LOGIN'])){
                                echo '<a href="account.php">Account</a>';
                            }?>
                        </li>

                        <li><a href="logout.php">Wallet</a></li>
                    </ul>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i> Today's Deals<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="offers.php">Cash Back Offers</a></li>
                        <li><a href="offers.php">Product Discounts</a></li>
                        <li><a href="offers.php">Special Offers</a></li>
                    </ul>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gift" aria-hidden="true"></i> Gift Cards<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="offers.php">Product Gift card</a></li>
                        <li><a href="offers.php">Occasions Register</a></li>
                        <li><a href="offers.php">View Balance</a></li>
                    </ul>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="contact.html" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Store Finder</a>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="card.html" class="dropdown-toggle"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Credit Card</a>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="help.html" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="header-two"><!-- header-two -->
        <div class="container">
            <div class="header-logo">
                <h1><a href="index.php"><span>S</span>mart <i>Bazaar</i></a></h1>
                <h6>Your stores. Your place.</h6>
            </div>
            <!--				<div class="header-search">-->
            <!--					<form action="#" method="post">-->
            <!--						<input type="search" name="search" id="search-box" placeholder="Search for a Product..." required="">-->
            <!--						<button type="submit" class="btn btn-default" aria-label="Left Align">-->
            <!--							<i class="fa fa-search" aria-hidden="true"> </i>-->
            <!--							<div id="suggesstion-box"></div>-->
            <!--						</button>-->
            <!--					</form>-->
            <!--				</div>-->

            <div class="header-search">
                <form action="#" method="post">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Search for a Product..." required="">
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
<!--                        <div id="suggesstion-box"></div>-->
                        <div class="col-md-7" style="position:relative;">
                            <div class="list-group" id="show-list"></div>

                            <!--				<a href="#" class="list-group-item list-group-item-action border-1"> List1</a>-->
                            <!--				<a href="#" class="list-group-item list-group-item-action border-1"> List1</a>-->
                        </div>

                        <script type="text/javascript">
                            $(function() {
                                $("#search").autocomplete({
                                    source: 'readProduct.php',
                                });
                            });
                        </script>
                        <!-- Script -->
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

                        <!-- jQuery UI -->
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

                        <!-- Bootstrap Css -->
                        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
                    </button>
                </form>
            </div>

            <!--						</button>-->
            <!--					</form>-->
            <!--				</div>-->

            <div class="header-cart">
                <div class="my-account">
                    <a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>
                </div>
                <div class="cart">
                    <form action="#" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="display" value="1" />
                        <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div><!-- //header-two -->
    <div class="header-three"><!-- header-three -->
        <div class="container">
            <div class="menu">
                <div class="cd-dropdown-wrapper">
                    <a class="cd-dropdown-trigger" href="#0">Store Categories</a>
                    <nav class="cd-dropdown">
                        <a href="#0" class="cd-close">Close</a>
                        <ul class="cd-dropdown-content">
                            <li><a href="offers.php">Today's Offers</a></li>
                            <li class="has-children">
                                <a href="#">Electronics</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#">Menu</a></li>
                                    <li class="see-all"><a href="products.php">All Electronics</a></li>
                                    <li class="has-children">
                                        <a href="#">MOBILE PHONES</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Electronics</a></li>
                                            <li class="has-children">
                                                <a href="#0">SmartPhones</a>
                                                <ul class="is-hidden">
                                                    <li class="go-back"><a href="#"> </a></li>
                                                    <li><a href="products.php">Android</a></li>
                                                    <li><a href="products.php">Windows</a></li>
                                                    <li><a href="products.php">Black berry</a></li>
                                                </ul>
                                            </li>
                                            <li> <a href="products.php">IPhones</a> </li>
                                            <li><a href="products.php">Tablets</a></li>
                                            <li><a href="products.php">IPad</a></li>
                                            <li><a href="products.php">Feature Phones</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">LARGE APPLIANCES</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Electronics </a></li>
                                            <li><a href="products.php">Refrigerators</a></li>
                                            <li><a href="products.php">Washing Machine</a></li>
                                            <li><a href="products.php">Office Technology</a></li>
                                            <li><a href="products.php">Air conditioner</a></li>
                                            <li><a href="products.php">Home Automation</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">ENTERTAINMENT</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Electronics</a></li>
                                            <li><a href="products.php">Tv & Accessories</a></li>
                                            <li><a href="products.php">Digital Camera</a></li>
                                            <li><a href="products.php">Gaming</a></li>
                                            <li><a href="products.php">Home Audio & Theater</a></li>
                                            <li class="has-children">
                                                <a href="#">Computer</a>
                                                <ul class="is-hidden">
                                                    <li class="go-back"><a href="#"> </a></li>
                                                    <li><a href="products.php">Laptop </a></li>
                                                    <li><a href="products.php">Gaming PC</a></li>
                                                    <li><a href="products.php">Monitors</a></li>
                                                    <li><a href="products.php">Networking</a></li>
                                                    <li><a href="products.php">Printers & Supplies</a></li>
                                                    <li><a href="products.php">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">HOME APPLIANCES</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#0">All Electronics </a></li>
                                            <li class="has-children"><a href="#">Kitchen appliances</a>
                                                <ul class="is-hidden">
                                                    <li class="go-back"><a href="#0"> </a></li>
                                                    <li><a href="products.php">Rice Cookers</a></li>
                                                    <li><a href="products.php">Mixer Juicer</a></li>
                                                    <li><a href="products.php">Grinder</a></li>
                                                    <li><a href="products.php">Blenders & Choppers</a></li>
                                                    <li><a href="products.php">Microwave Oven</a></li>
                                                    <li><a href="products.php">Food Processors</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="products.php">Purifiers</a></li>
                                            <li><a href="products.php">Geysers</a></li>
                                            <li><a href="products.php">Gas Stove</a></li>
                                            <li><a href="products.php">Vacuum Cleaner</a></li>
                                            <li><a href="products.php">Sewing Machine</a></li>
                                            <li><a href="products.php">Heaters & Fans</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">SMALL DEVICES</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#0">All Electronics </a></li>
                                            <li><a href="products.php">Wifi Dongle</a></li>
                                            <li><a href="products.php">Router & Modem</a></li>
                                            <li class="has-children"><a href="#">Storage Devices</a>
                                                <ul class="is-hidden">
                                                    <li class="go-back"><a href="#0"> </a></li>
                                                    <li><a href="products.php">Cloud Storage</a></li>
                                                    <li><a href="products.php">Hard Disk</a></li>
                                                    <li><a href="products.php">SSD</a></li>
                                                    <li><a href="products.php">Pen Drive</a></li>
                                                    <li><a href="products.php">Memory card</a></li>
                                                    <li><a href="products.php">Security Devices</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="products.php">Office Supplies</a></li>
                                            <li><a href="products.php">Cut the Cable</a></li>
                                            <li><a href="products.php">Auto Electronics</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">PERSONAL CARE</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#0">All Electronics </a></li>
                                            <li><a href="products.php">Epilator</a></li>
                                            <li><a href="products.php">Hair Styler</a></li>
                                            <li><a href="products.php">Trimmer & Shaver</a></li>
                                            <li><a href="products.php">Health Care</a></li>
                                            <li><a href="products.php">cables</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- .cd-secondary-dropdown -->
                            </li> <!-- .has-children -->
                            <li class="has-children">
                                <a href="#">Fashion Store</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#">Menu</a></li>
                                    <li class="see-all"><a href="products1.php">All Fashion Stores</a></li>
                                    <li class="has-children">
                                        <a href="#">GIRLS' CLOTHING</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                            <li><a href="products1.php">Ethnic wear </a></li>
                                            <li><a href="products1.php">Maternity wear</a></li>
                                            <li><a href="products1.php">inner & nightwear </a></li>
                                            <li><a href="products1.php">casual wear </a></li>
                                            <li><a href="products1.php">formal wear</a></li>
                                            <li><a href="products1.php">Sports wear</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">BOYS' CLOTHING</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                            <li><a href="products1.php">Jeans</a></li>
                                            <li><a href="products1.php">Casual wear</a></li>
                                            <li><a href="products1.php">Shorts</a></li>
                                            <li><a href="products1.php">T-Shirts & Polos</a></li>
                                            <li><a href="products1.php">Trousers & Chinos</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">JACKETS</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                            <li><a href="products1.php">Blazers</a></li>
                                            <li><a href="products1.php">Bomber jackets</a></li>
                                            <li><a href="products1.php">Denim Jackets</a></li>
                                            <li><a href="products1.php">Duffle Coats</a></li>
                                            <li><a href="products1.php">Leather Jackets</a></li>
                                            <li><a href="products1.php">Parkas</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">ACCESSORIES </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                            <li><a href="products1.php">Watches </a></li>
                                            <li><a href="products1.php">Eyewear </a></li>
                                            <li><a href="products1.php">Jewellery </a></li>
                                            <li class="has-children">
                                                <a href="#">Footwear </a>
                                                <ul class="is-hidden">
                                                    <li class="go-back"><a href="#"> </a></li>
                                                    <li><a href="products1.php">Ethnic</a></li>
                                                    <li><a href="products1.php">Casual wear</a></li>
                                                    <li><a href="products1.php">Sports Shoes</a></li>
                                                    <li><a href="products1.php">Boots</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="products1.php">Stoles & Scarves</a></li>
                                            <li><a href="products1.php">Handbags</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">BEAUTY</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                            <li><a href="products1.php">Perfumes & Deos</a></li>
                                            <li><a href="products1.php">Lipsticks & Nail Polish</a></li>
                                            <li><a href="products1.php">Beauty Gift Hampers</a></li>
                                            <li><a href="products1.php">Personal Grooming</a></li>
                                            <li><a href="products1.php">Travel bags</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="products1.php">PERSONAL CARE</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                            <li><a href="products1.php">Face Care</a></li>
                                            <li><a href="products1.php">Nail Care</a></li>
                                            <li><a href="products1.php">Hair Care</a></li>
                                            <li><a href="products1.php">Body Care</a></li>
                                            <li><a href="products1.php">Bath & Spa</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- .cd-secondary-dropdown -->
                            </li> <!-- .has-children -->
                            <li class="has-children">
                                <a href="products2.php">Kids Fashion & Toys</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#">Menu</a></li>
                                    <li class="see-all"><a href="products2.php">All Kids Fashions</a></li>
                                    <li class="has-children">
                                        <a href="products2.php">KIDS CLOTHING</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                            <li><a href="products2.php">Ethnic wear </a></li>
                                            <li><a href="products2.php">inner & Sleepwear </a></li>
                                            <li><a href="products2.php">Dresses & Frocks </a></li>
                                            <li><a href="products2.php">Winter wear</a></li>
                                            <li><a href="products2.php">Diaper & Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="#">KIDS FASHION</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                            <li><a href="products2.php">Footwear</a></li>
                                            <li><a href="products2.php">Sunglasses </a></li>
                                            <li><a href="products2.php">School & Stationery</a></li>
                                            <li><a href="products2.php">Jewellery</a></li>
                                            <li><a href="products2.php">Hair bands & Clips</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="#">Baby Care</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                            <li><a href="products2.php">Lotions, Oil & Powder </a></li>
                                            <li><a href="products2.php">Soaps, Shampoo </a></li>
                                            <li><a href="products2.php">Bath Towels</a></li>
                                            <li class="has-children">
                                                <a href="#">Feeding</a>
                                                <ul class="is-hidden">
                                                    <li class="go-back"><a href="#"> </a></li>
                                                    <li><a href="products2.php">Baby Food </a></li>
                                                    <li><a href="products2.php">Bottle Feeding </a></li>
                                                    <li><a href="products2.php">Breast Feeding</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="products2.php">Toddlers' Rooms</a></li>
                                        </ul><!-- .cd-secondary-dropdown -->
                                    </li> <!-- .has-children -->
                                    <li class="has-children"><a href="#">TOYS & GAMES </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                            <li><a href="products2.php">Art & Crafts</a></li>
                                            <li><a href="products2.php">Educational Toys </a></li>
                                            <li><a href="products2.php">Baby Toys</a></li>
                                            <li><a href="products2.php">Outdoor Play </a></li>
                                            <li><a href="products2.php">Musical Instruments</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                            <li><a href="products2.php">Toy Tips & Trends</a></li>
                                            <li><a href="products2.php">Preschool Toys</a></li>
                                            <li><a href="products2.php">Musical Instruments</a></li>
                                            <li><a href="products2.php">Bikes & Ride-Ons</a></li>
                                            <li><a href="products2.php">Video Games</a></li>
                                            <li><a href="products2.php">PC & Digital Gaming</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- .cd-secondary-dropdown -->
                            </li> <!-- .has-children -->
                            <li class="has-children">
                                <a href="#">Home, Furniture & Patio</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#">Menu</a></li>
                                    <li class="see-all"><a href="products3.php">All Products</a></li>
                                    <li class="has-children">
                                        <a href="#">Kitchen Uses</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products3.php">Dinner Sets </a></li>
                                            <li><a href="products3.php">Cookware & Bakeware </a></li>
                                            <li><a href="products3.php">Containers & Jars </a></li>
                                            <li><a href="products3.php">Kitchen Tools </a></li>
                                            <li><a href="products3.php">Food Storage</a></li>
                                            <li><a href="products3.php">Casseroles</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Furniture </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products3.php">Bedroom </a></li>
                                            <li><a href="products3.php">Dining Room </a></li>
                                            <li><a href="products3.php">Kids' Furniture </a></li>
                                            <li><a href="products3.php">Living Room</a></li>
                                            <li><a href="products3.php">Office</a></li>
                                            <li><a href="products3.php">Mattresses</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Home Decor </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products3.php">Lighting</a></li>
                                            <li><a href="products3.php">Painting</a></li>
                                            <li><a href="products3.php">Curtains & Blinds</a></li>
                                            <li><a href="products3.php">Patio Furniture</a></li>
                                            <li><a href="products3.php">Wardrobes & Cabinets</a></li>
                                            <li><a href="products3.php">Mattresses</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Gardening & Lawn </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"> </a></li>
                                            <li><a href="products3.php">Gardening </a></li>
                                            <li><a href="products3.php">Landscaping </a></li>
                                            <li><a href="products3.php">Sheds</a></li>
                                            <li><a href="products3.php">Outdoor Storage  </a></li>
                                            <li><a href="products3.php">Garden & Ideas </a></li>
                                            <li><a href="products3.php">Patio Tips</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Garage Storage</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products3.php">Baskets & Bins </a></li>
                                            <li><a href="products3.php">Garage Door Openers</a></li>
                                            <li><a href="products3.php">Free Standing Shelves </a></li>
                                            <li><a href="products3.php">Floor cleaning</a></li>
                                            <li><a href="products3.php">Tool Kits</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- .cd-secondary-dropdown -->
                            </li> <!-- .has-children -->
                            <li class="has-children">
                                <a href="#">Sports, Fitness & Outdoor</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#">Menu</a></li>
                                    <li class="see-all"><a href="products4.php">All Products</a></li>
                                    <li class="has-children">
                                        <a href="#">Single Sports </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products4.php">Bikes </a></li>
                                            <li><a href="products4.php">Fishing  </a></li>
                                            <li><a href="products4.php">Cycling </a></li>
                                            <li><a href="products4.php">Musical Instruments</a></li>
                                            <li><a href="products4.php">Archery </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Team Sports</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products4.php">Cricket </a></li>
                                            <li><a href="products4.php">Badminton </a></li>
                                            <li><a href="products4.php">Swimming Gear </a></li>
                                            <li><a href="products4.php">Sports Apparel </a></li>
                                            <li><a href="products4.php">Indoor games</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Fitness </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products4.php">Fitness Accessories </a></li>
                                            <li><a href="products4.php">Exercise Machines </a></li>
                                            <li><a href="products4.php">Ellipticals </a></li>
                                            <li><a href="products4.php">Home Gyms</a></li>
                                            <li><a href="products4.php">Exercise Bikes</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Camping </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products4.php"> Airbeds</a></li>
                                            <li><a href="products4.php">Tents </a></li>
                                            <li><a href="products4.php">Gazebo's & Shelters</a></li>
                                            <li><a href="products4.php">Coolers </a></li>
                                            <li><a href="products4.php">Canopies</a></li>
                                            <li><a href="products4.php">Sleeping Bags</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Camping Tools</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products4.php">Shooting </a></li>
                                            <li><a href="products4.php">Knives & Tools </a></li>
                                            <li><a href="products4.php">Optics & Binoculars </a></li>
                                            <li><a href="products4.php">Lights & Lanterns </a></li>
                                            <li><a href="products4.php">Hunting Clothing </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Other</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products4.php">Riding Gears & More </a></li>
                                            <li><a href="products4.php">Body Massagers </a></li>
                                            <li><a href="products4.php">Health Monitors </a></li>
                                            <li><a href="products4.php">Health Drinks </a></li>
                                        </ul>
                                    </li>
                                </ul><!-- .cd-secondary-dropdown -->
                            </li> <!-- .has-children -->
                            <li class="has-children">
                                <a href="#">Grocery store</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#">Menu</a></li>
                                    <li class="see-all"><a href="products5.php">All Products</a></li>
                                    <li class="has-children">
                                        <a href="#">Veggies & Fruits </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products5.php">Vegetables </a></li>
                                            <li><a href="products5.php">Fruits </a></li>
                                            <li><a href="products5.php">Dry Fruits</a></li>
                                            <li><a href="products5.php">Snacks & Cookies </a></li>
                                            <li><a href="products5.php">Breakfast & Cereal</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Packet Food</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products5.php">Beverages </a></li>
                                            <li><a href="products5.php">Baking </a></li>
                                            <li><a href="products5.php">Emergency Food </a></li>
                                            <li><a href="products5.php">Candy & Gum </a></li>
                                            <li><a href="products5.php">Meals & Pasta </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Shop All Pets </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products5.php">Dogs </a></li>
                                            <li><a href="products5.php">Fish </a></li>
                                            <li><a href="products5.php">Cats</a></li>
                                            <li><a href="products5.php">Birds </a></li>
                                            <li><a href="products5.php">Pet Food </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Household Essentials </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products5.php">Laundry Room </a></li>
                                            <li><a href="products5.php">Paper & Plastic</a></li>
                                            <li><a href="products5.php">Pest Control </a></li>
                                            <li><a href="products5.php">Batteries </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Food Shops </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products5.php">Fresh Food</a></li>
                                            <li><a href="products5.php">Food Gifts </a></li>
                                            <li><a href="products5.php">Frozen Food </a></li>
                                            <li><a href="products5.php">Organic </a></li>
                                            <li><a href="products5.php">Gluten Free </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Tips </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products5.php">Pets Growth</a></li>
                                            <li><a href="products5.php">Recipes </a></li>
                                            <li><a href="products5.php">Snacks</a></li>
                                            <li><a href="products5.php">Nutrition</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- .cd-secondary-dropdown -->
                            </li> <!-- .has-children -->
                            <li class="has-children">
                                <a href="#">Photo, Gifts & Office Supplies</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#">Menu</a></li>
                                    <li class="see-all"><a href="products6.php">All Products</a></li>
                                    <li class="has-children">
                                        <a href="#">Trending Now </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products6.php">Best Priced</a></li>
                                            <li><a href="products6.php">Chocolates </a></li>
                                            <li><a href="products6.php">Gift Cards </a></li>
                                            <li><a href="products6.php">Fashion & Accessories </a></li>
                                            <li><a href="products6.php">Decorative Plants </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Photos </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products6.php">Shelf animation </a></li>
                                            <li><a href="products6.php">3D-rendered </a></li>
                                            <li><a href="products6.php">gift builder </a></li>
                                            <li><a href="products6.php">Frames</a></li>
                                            <li><a href="products6.php">Wall Decor</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Gifts </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products6.php">Personalized Gifts </a></li>
                                            <li><a href="products6.php">Flowers </a></li>
                                            <li><a href="products6.php">Cards & Toys</a></li>
                                            <li><a href="products6.php">Show pieces </a></li>
                                            <li><a href="products6.php">Photo Books</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Favourite Brands </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products6.php">Archies </a></li>
                                            <li><a href="products6.php">Jewel Fuel </a></li>
                                            <li><a href="products6.php">Ferns N Petals </a></li>
                                            <li><a href="products6.php">Happily Unmarried</a></li>
                                            <li><a href="products6.php">Chumbak</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Office</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products6.php">Calendars</a></li>
                                            <li><a href="products6.php">Mousepads</a></li>
                                            <li><a href="products6.php">Phone Cases</a></li>
                                            <li><a href="products6.php">Tablet & Laptop Cases</a></li>
                                            <li><a href="products6.php">Mounted Photos</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Combos </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products6.php">Chocolates </a></li>
                                            <li><a href="products6.php">Dry Fruits</a></li>
                                            <li><a href="products6.php">Sweets</a></li>
                                            <li><a href="products6.php">Snacks</a></li>
                                            <li><a href="products6.php">Cakes</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- .cd-secondary-dropdown -->
                            </li>
                            <li class="has-children">
                                <a href="#">Health, Beauty & Pharmacy</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#">Menu</a></li>
                                    <li class="see-all"><a href="products7.php">All Products</a></li>
                                    <li class="has-children">
                                        <a href="#">Health</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products7.php">Home Health Care </a></li>
                                            <li><a href="products7.php">Sports Nutrition </a></li>
                                            <li><a href="products7.php">Vision </a></li>
                                            <li><a href="products7.php">Vitamins </a></li>
                                            <li><a href="products7.php">Diet & Nutrition </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Health Tips</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products7.php">Diet</a></li>
                                            <li><a href="products7.php">Exercise Tips  </a></li>
                                            <li><a href="products7.php">Vitamin Balance</a></li>
                                            <li><a href="products7.php">Health Insurance</a></li>
                                            <li><a href="products7.php">Funeral</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Beauty </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products7.php">Massage & Spa </a></li>
                                            <li><a href="products7.php">Face Wash</a></li>
                                            <li><a href="products7.php">Facial Cleanser</a></li>
                                            <li><a href="products7.php">Makeup </a></li>
                                            <li><a href="products7.php">Beauty Tips</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Pharmacy </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products7.php">Home Delivery </a></li>
                                            <li><a href="products7.php">History & Reports </a></li>
                                            <li><a href="products7.php">Transfer Prescriptions </a></li>
                                            <li><a href="products7.php">Health CheckUp</a></li>
                                            <li><a href="products7.php">Mobile App</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Pharmacy Center </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products7.php">Diabetes Shop </a></li>
                                            <li><a href="products7.php">Medicine Cabinet </a></li>
                                            <li><a href="products7.php">Vitamin Selector</a></li>
                                            <li><a href="products7.php">Pharmacy Help</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- .cd-secondary-dropdown -->
                            </li>
                            <li class="has-children">
                                <a href="#">Automotive</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#">Menu</a></li>
                                    <li class="see-all"><a href="products8.php">All Products</a></li>
                                    <li class="has-children">
                                        <a href="#">All Motors </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products8.php">Bikes </a></li>
                                            <li><a href="products8.php">Yachts </a></li>
                                            <li><a href="products8.php">Scooters </a></li>
                                            <li><a href="products8.php">Autos</a></li>
                                            <li><a href="products8.php">Bus</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Accessories </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products8.php">Vehicle Electronics</a></li>
                                            <li><a href="products8.php">Stereos & Monitors</a></li>
                                            <li><a href="products8.php">Bluetooth Devices</a></li>
                                            <li><a href="products8.php">GPS Navigation</a></li>
                                            <li><a href="products8.php">Speakers & Tweeters</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Safety & Security </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products8.php">Anti-Theft Devices </a></li>
                                            <li><a href="products8.php">Helmets</a></li>
                                            <li><a href="products8.php">Sensors</a></li>
                                            <li><a href="products8.php">Auto Repair Tools </a></li>
                                            <li><a href="products8.php">Antifreeze & Coolants </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Car Interiors</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products8.php">Stereos </a></li>
                                            <li><a href="products8.php">Floor Mats </a></li>
                                            <li><a href="products8.php">Seat Covers</a></li>
                                            <li><a href="products8.php">Chargers </a></li>
                                            <li><a href="products8.php">Audio Finder </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Exterior Accessories </a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products8.php">Wheel covers </a></li>
                                            <li><a href="products8.php">Car Lighting </a></li>
                                            <li><a href="products8.php">Polish & Waxes</a></li>
                                            <li><a href="products8.php">Cargo Management</a></li>
                                            <li><a href="products8.php">Car Decoration </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Car Care</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products8.php">Auto Tips & Advice </a></li>
                                            <li><a href="products8.php">Car Washes & Cleaners </a></li>
                                            <li><a href="products8.php">Car Wax & Polish</a></li>
                                            <li><a href="products8.php">Cleaning Tools</a></li>
                                            <li><a href="products8.php">Detailing Kits </a></li>
                                        </ul>
                                    </li>
                                </ul><!-- .cd-secondary-dropdown -->
                            </li>
                            <li class="has-children">
                                <a href="#">Books, Music & Movies</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#">Menu</a></li>
                                    <li class="see-all"><a href="products9.php">All Products</a></li>
                                    <li class="has-children">
                                        <a href="#">Books</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li class="has-children"><a href="#">Exam books </a>
                                                <ul class="is-hidden">
                                                    <li class="go-back"><a href="#"> </a></li>
                                                    <li><a href="products9.php">CAT/MAT/XAT</a></li>
                                                    <li><a href="products9.php">Civil Services</a></li>
                                                    <li><a href="products9.php">AFCAT</a></li>
                                                    <li><a href="products9.php">New Releases</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="products9.php">Academic Text </a></li>
                                            <li><a href="products9.php">Romance Books </a></li>
                                            <li><a href="products9.php">Journals </a></li>
                                            <li><a href="products9.php">Children's & Teen Books </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Music</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products9.php">New Releases </a></li>
                                            <li><a href="products9.php">Country Music </a></li>
                                            <li><a href="products9.php">Musical Instruments </a></li>
                                            <li><a href="products9.php">Collections</a></li>
                                            <li><a href="products9.php">Boxed Sets </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Music Combo</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products9.php">Pop </a></li>
                                            <li><a href="products9.php">Preorders </a></li>
                                            <li><a href="products9.php">Album Songs</a></li>
                                            <li><a href="products9.php">Top 50 CDs </a></li>
                                            <li><a href="products9.php">Music DVDs </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Movies</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products9.php">New Releases </a></li>
                                            <li><a href="products9.php">Children & Family </a></li>
                                            <li><a href="products9.php">Action</a></li>
                                            <li><a href="products9.php">Classic Movies </a></li>
                                            <li><a href="products9.php">Bollywood Movies </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Movies Combo</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products9.php">Hollywood Movies </a></li>
                                            <li><a href="products9.php">Digital Movies </a></li>
                                            <li><a href="products9.php">Boxed Sets</a></li>
                                            <li><a href="products9.php">Animated</a></li>
                                            <li><a href="products9.php">Adventure</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">TV Shows</a>
                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="#"></a></li>
                                            <li><a href="products9.php">Serials</a></li>
                                            <li><a href="products9.php">Best Programs</a></li>
                                            <li><a href="products9.php">Celebrations</a></li>
                                            <li><a href="products9.php">Top Shows</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- .cd-secondary-dropdown -->
                            </li>
                            <li><a href="sitemap.html">Full Site Directory </a></li>
                        </ul> <!-- .cd-dropdown-content -->
                    </nav> <!-- .cd-dropdown -->
                </div> <!-- .cd-dropdown-wrapper -->
            </div>
            <div class="move-text">
                <div class="marquee"><a href="offers.php"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
                <script type="text/javascript" src="js/jquery.marquee.min.js"></script>
                <script>
                    $('.marquee').marquee({ pauseOnHover: true });
                    //@ sourceURL=pen.js
                </script>
            </div>
        </div>
    </div>
</div>
<!-- //header -->
<!-- banner -->
<!-- //welcome -->
<!-- add-products -->
<div class="add-products">
    <div class="container">
        <div class="add-products-row">
            <div class="w3ls-add-grids">
                <a href="products1.php">
                    <div class="banner">
                        <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
                            <!-- Wrapper-for-Slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active"><!-- First-Slide -->
                                    <img src="images/5.jpg" alt="" class="img-responsive" />
                                    <div class="carousel-caption kb_caption kb_caption_right">
                                        <h3 data-animation="animated flipInX">Flat <span>50%</span> Discount</h3>
                                        <h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
                                    </div>
                                </div>
                                <div class="item"> <!-- Second-Slide -->
                                    <img src="images/8.jpg" alt="" class="img-responsive" />
                                    <div class="carousel-caption kb_caption kb_caption_right">
                                        <h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
                                        <h4 data-animation="animated fadeInUp">cupidatat non proident</h4>
                                    </div>
                                </div>
                                <div class="item"><!-- Third-Slide -->
                                    <img src="images/3.jpg" alt="" class="img-responsive"/>
                                    <div class="carousel-caption kb_caption kb_caption_center">
                                        <h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
                                        <h4 data-animation="animated flipInX">cupidatat non proident</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Left-Button -->
                            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
                                <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <!-- Right-Button -->
                            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <script src="js/custom.js"></script>
                    </div>
                    <!-- //banner -->
                    <!-- welcome -->
                    <div class="welcome">
                        <div class="container">
                            <div class="welcome-info">
                                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class=" nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" >
                                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                                <h5>Electronics</h5>
                                            </a></li>
                                        <li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab">
                                                <i class="fa fa-female" aria-hidden="true"></i>
                                                <h5>Fashion</h5>
                                            </a></li>
                                        <li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab">
                                                <i class="fa fa-gift" aria-hidden="true"></i>
                                                <h5>Photo & Gifts</h5>
                                            </a></li>
                                        <li role="presentation"><a href="#decor" role="tab" id="decor-tab" data-toggle="tab">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <h5>Home Decor</h5>
                                            </a></li>
                                        <li role="presentation"><a href="#sports" role="tab" id="sports-tab" data-toggle="tab">
                                                <i class="fa fa-motorcycle" aria-hidden="true"></i>
                                                <h5>Sports</h5>
                                            </a></li>
                                    </ul>
                                    <div class="clearfix"> </div>
                                    <h3 class="w3ls-title">Featured Products</h3>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                            <div class="tabcontent-grids">
                                                <div id="owl-demo" class="owl-carousel">
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products.php"><img src="images/e1.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products.php">Audio speaker</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$100</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Audio speaker" />
                                                                    <input type="hidden" name="amount" value="100.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>Sale</h6></div>
                                                            <a href="products.php"><img src="images/e2.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products.php">Refrigerator</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$300</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Refrigerator" />
                                                                    <input type="hidden" name="amount" value="300.00"/>
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>New</h6></div>
                                                            <a href="products.php"><img src="images/e3.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products.php">Smart Phone</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$70</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                                                    <input type="hidden" name="amount" value="70.00"/>
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products.php"><img src="images/e4.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products.php">Digital Camera</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$80</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Digital Camera"/>
                                                                    <input type="hidden" name="amount" value="80.00"/>
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products.php"><img src="images/e1.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products.php">Audio speaker</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$100</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Audio speaker" />
                                                                    <input type="hidden" name="amount" value="100.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>Sale</h6></div>
                                                            <a href="products.php"><img src="images/e2.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products.php">Refrigerator</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$300</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Refrigerator" />
                                                                    <input type="hidden" name="amount" value="300.00"/>
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>New</h6></div>
                                                            <a href="products.php"><img src="images/e3.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products.php">Smart Phone</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$70</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                                                    <input type="hidden" name="amount" value="70.00"/>
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products.php"><img src="images/e4.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products.php">Digital Camera</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$80</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Digital Camera"/>
                                                                    <input type="hidden" name="amount" value="80.00"/>
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
                                            <div class="tabcontent-grids">
                                                <script>
                                                    $(document).ready(function() {
                                                        $("#owl-demo1").owlCarousel({

                                                            autoPlay: 3000, //Set AutoPlay to 3 seconds

                                                            items :4,
                                                            itemsDesktop : [640,5],
                                                            itemsDesktopSmall : [414,4],
                                                            navigation : true

                                                        });

                                                    });
                                                </script>
                                                <div id="owl-demo1" class="owl-carousel">
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products1.php"><img src="images/f1.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products1.php">T Shirt</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$10</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="T Shirt" />
                                                                    <input type="hidden" name="amount" value="10.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>20% <br> Off</h6></div>
                                                            <a href="products1.php"><img src="images/f2.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products1.php">Women Sandal</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$20</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                                                    <input type="hidden" name="amount" value="20.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products1.php"><img src="images/f3.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products1.php">Jewellery</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$60</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Jewellery" />
                                                                    <input type="hidden" name="amount" value="60.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>New</h6></div>
                                                            <a href="products1.php"><img src="images/f4.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products1.php">Party dress</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$15</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Party dress" />
                                                                    <input type="hidden" name="amount" value="15.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products1.php"><img src="images/f1.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products1.php">T Shirt</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$10</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="T Shirt" />
                                                                    <input type="hidden" name="amount" value="10.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>20% <br> Off</h6></div>
                                                            <a href="products1.php"><img src="images/f2.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products1.php">Women Sandal</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$20</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                                                    <input type="hidden" name="amount" value="20.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products1.php"><img src="images/f3.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products1.php">Jewellery</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$60</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Jewellery" />
                                                                    <input type="hidden" name="amount" value="60.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>New</h6></div>
                                                            <a href="products1.php"><img src="images/f4.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products1.php">Party dress</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$15</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Party dress" />
                                                                    <input type="hidden" name="amount" value="15.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
                                            <div class="tabcontent-grids">
                                                <script>
                                                    $(document).ready(function() {
                                                        $("#owl-demo2").owlCarousel({

                                                            autoPlay: 3000, //Set AutoPlay to 3 seconds

                                                            items :4,
                                                            itemsDesktop : [640,5],
                                                            itemsDesktopSmall : [414,4],
                                                            navigation : true

                                                        });

                                                    });
                                                </script>
                                                <div id="owl-demo2" class="owl-carousel">
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>New</h6></div>
                                                            <a href="products6.php"><img src="images/p1.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products6.php">Coffee Mug</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$14</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Coffee Mug" />
                                                                    <input type="hidden" name="amount" value="14.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>20% <br> Off</h6></div>
                                                            <a href="products6.php"><img src="images/p2.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products6.php">Teddy bear</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$20</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Teddy bear" />
                                                                    <input type="hidden" name="amount" value="20.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>Sale</h6></div>
                                                            <a href="products6.php"><img src="images/p3.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products6.php">Chocolates</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$60</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Chocolates" />
                                                                    <input type="hidden" name="amount" value="60.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products6.php"><img src="images/p4.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products6.php">Gift Card</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$22</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Gift Card" />
                                                                    <input type="hidden" name="amount" value="22.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>New</h6></div>
                                                            <a href="products6.php"><img src="images/p1.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products6.php">Coffee Mug</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$14</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Coffee Mug" />
                                                                    <input type="hidden" name="amount" value="14.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>20% <br> Off</h6></div>
                                                            <a href="products6.php"><img src="images/p2.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products6.php">Teddy bear</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$20</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Teddy bear" />
                                                                    <input type="hidden" name="amount" value="20.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>Sale</h6></div>
                                                            <a href="products6.php"><img src="images/p3.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products6.php">Chocolates</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$60</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Chocolates" />
                                                                    <input type="hidden" name="amount" value="60.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products6.php"><img src="images/p4.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products6.php">Gift Card</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$22</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Gift Card" />
                                                                    <input type="hidden" name="amount" value="22.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="decor" aria-labelledby="decor-tab">
                                            <div class="tabcontent-grids">
                                                <script>
                                                    $(document).ready(function() {
                                                        $("#owl-demo3").owlCarousel({

                                                            autoPlay: 3000, //Set AutoPlay to 3 seconds

                                                            items :4,
                                                            itemsDesktop : [640,5],
                                                            itemsDesktopSmall : [414,4],
                                                            navigation : true

                                                        });

                                                    });
                                                </script>
                                                <div id="owl-demo3" class="owl-carousel">
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>Sale</h6></div>
                                                            <a href="products3.php"><img src="images/h1.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products3.php">Wall Clock</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$80</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                                                    <input type="hidden" name="amount" value="80.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>10%<br>Off</h6></div>
                                                            <a href="products3.php"><img src="images/h2.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products3.php">Plants & Vases</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$40</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Plants & Vases" />
                                                                    <input type="hidden" name="amount" value="40.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products3.php"><img src="images/h3.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products3.php">Queen Size Bed</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$250</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Queen Size Bed" />
                                                                    <input type="hidden" name="amount" value="250.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products3.php"><img src="images/h4.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products3.php">flower pot</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$30</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="flower pot" />
                                                                    <input type="hidden" name="amount" value="30.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>Sale</h6></div>
                                                            <a href="products3.php"><img src="images/h1.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products3.php">Wall Clock</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$80</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                                                    <input type="hidden" name="amount" value="80.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>10%<br>Off</h6></div>
                                                            <a href="products3.php"><img src="images/h2.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products3.php">Plants & Vases</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$40</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Plants & Vases" />
                                                                    <input type="hidden" name="amount" value="40.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products3.php"><img src="images/h3.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products3.php">Queen Size Bed</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$250</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Queen Size Bed" />
                                                                    <input type="hidden" name="amount" value="250.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products3.php"><img src="images/h4.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products3.php">flower pot</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$30</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="flower pot" />
                                                                    <input type="hidden" name="amount" value="30.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="sports" aria-labelledby="sports-tab">
                                            <div class="tabcontent-grids">
                                                <script>
                                                    $(document).ready(function() {
                                                        $("#owl-demo4").owlCarousel({

                                                            autoPlay: 3000, //Set AutoPlay to 3 seconds

                                                            items :4,
                                                            itemsDesktop : [640,5],
                                                            itemsDesktopSmall : [414,4],
                                                            navigation : true

                                                        });
                                                    });
                                                </script>
                                                <div id="owl-demo4" class="owl-carousel">
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>New</h6></div>
                                                            <a href="products4.php"><img src="images/s1.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products4.php">Roller Skates</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$180</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Roller Skates"/>
                                                                    <input type="hidden" name="amount" value="180.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products4.php"><img src="images/s2.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products4.php">Football</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$70</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Football"/>
                                                                    <input type="hidden" name="amount" value="70.00"/>
                                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>20% <br>Off</h6></div>
                                                            <a href="products4.php"><img src="images/s3.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products4.php">Nylon Shuttle</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$56</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Nylon Shuttle" />
                                                                    <input type="hidden" name="amount" value="56.00"/>
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products4.php"><img src="images/s4.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products4.php">Cricket Kit</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$80</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Cricket Kit" />
                                                                    <input type="hidden" name="amount" value="80.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>New</h6></div>
                                                            <a href="products4.php"><img src="images/s1.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products4.php">Roller Skates</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$180</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Roller Skates"/>
                                                                    <input type="hidden" name="amount" value="180.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products4.php"><img src="images/s2.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products4.php">Football</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$70</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Football"/>
                                                                    <input type="hidden" name="amount" value="70.00"/>
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <div class="new-tag"><h6>20% <br>Off</h6></div>
                                                            <a href="products4.php"><img src="images/s3.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products4.php">Nylon Shuttle</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$56</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Nylon Shuttle" />
                                                                    <input type="hidden" name="amount" value="56.00"/>
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="glry-w3agile-grids agileits">
                                                            <a href="products4.php"><img src="images/s4.png" alt="img"></a>
                                                            <div class="view-caption agileits-w3layouts">
                                                                <h4><a href="products4.php">Cricket Kit</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <h5>$80</h5>
                                                                <form action="#" method="post">
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="w3ls_item" value="Cricket Kit" />
                                                                    <input type="hidden" name="amount" value="80.00" />
                                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="w3ls-add-grids w3ls-add-grids-mdl">
                <a href="products1.php">
                    <h4>SUNDAY SPECIAL DISCOUNT FLAT <span>40%</span> OFF</h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="w3ls-add-grids w3ls-add-grids-mdl1">
                <a href="products.php">
                    <h4>LATEST DESIGNS FOR YOU <span> Hurry !</span></h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="clerfix"> </div>
        </div>
    </div>
</div>
<!-- //add-products -->
<!-- coming soon -->
<div class="soon">
    <div class="container">
        <h3>Mega Deal Of the Week</h3>
        <h4>Coming Soon Don't Miss Out</h4>
        <div id="countdown1" class="ClassyCountdownDemo"></div>
    </div>
</div>
<!-- //coming soon -->
<!-- deals -->
<div class="deals">
    <div class="container">
        <h3 class="w3ls-title">DEALS OF THE DAY </h3>
        <div class="deals-row">
            <div class="col-md-3 focus-grid">
                <a href="products.php" class="wthree-btn">
                    <div class="focus-image"><i class="fa fa-mobile"></i></div>
                    <h4 class="clrchg">Mobiles</h4>
                </a>
            </div>
            <div class="col-md-3 focus-grid">
                <a href="products.php" class="wthree-btn wthree1">
                    <div class="focus-image"><i class="fa fa-laptop"></i></div>
                    <h4 class="clrchg"> Electronics & Appliances</h4>
                </a>
            </div>
            <div class="col-md-3 focus-grid">
                <a href="products4.php" class="wthree-btn wthree2">
                    <div class="focus-image"><i class="fa fa-wheelchair"></i></div>
                    <h4 class="clrchg">Furnitures</h4>
                </a>
            </div>
            <div class="col-md-3 focus-grid">
                <a href="products3.php" class="wthree-btn wthree3">
                    <div class="focus-image"><i class="fa fa-home"></i></div>
                    <h4 class="clrchg">Home Decor</h4>
                </a>
            </div>
            <div class="col-md-2 focus-grid w3focus-grid-mdl">
                <a href="products9.php" class="wthree-btn wthree3">
                    <div class="focus-image"><i class="fa fa-book"></i></div>
                    <h4 class="clrchg">Books & Music</h4>
                </a>
            </div>
            <div class="col-md-2 focus-grid w3focus-grid-mdl">
                <a href="products1.php" class="wthree-btn wthree4">
                    <div class="focus-image"><i class="fa fa-asterisk"></i></div>
                    <h4 class="clrchg">Fashion</h4>
                </a>
            </div>
            <div class="col-md-2 focus-grid w3focus-grid-mdl">
                <a href="products2.php" class="wthree-btn wthree2">
                    <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                    <h4 class="clrchg">Kids</h4>
                </a>
            </div>
            <div class="col-md-2 focus-grid w3focus-grid-mdl">
                <a href="products5.php" class="wthree-btn wthree">
                    <div class="focus-image"><i class="fa fa-shopping-basket"></i></div>
                    <h4 class="clrchg">Groceries</h4>
                </a>
            </div>
            <div class="col-md-2 focus-grid w3focus-grid-mdl">
                <a href="products7.php" class="wthree-btn wthree5">
                    <div class="focus-image"><i class="fa fa-medkit"></i></div>
                    <h4 class="clrchg">Health</h4>
                </a>
            </div>
            <div class="col-md-2 focus-grid w3focus-grid-mdl">
                <a href="products8.php" class="wthree-btn wthree1">
                    <div class="focus-image"><i class="fa fa-car"></i></div>
                    <h4 class="clrchg">Automotive</h4>
                </a>
            </div>
            <div class="col-md-3 focus-grid">
                <a href="products5.php" class="wthree-btn wthree2">
                    <div class="focus-image"><i class="fa fa-cutlery"></i></div>
                    <h4 class="clrchg">Food</h4>
                </a>
            </div>
            <div class="col-md-3 focus-grid">
                <a href="products4.php" class="wthree-btn wthree5">
                    <div class="focus-image"><i class="fa fa-futbol-o"></i></div>
                    <h4 class="clrchg">Sports</h4>
                </a>
            </div>
            <div class="col-md-3 focus-grid">
                <a href="products2.php" class="wthree-btn wthree3">
                    <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                    <h4 class="clrchg">Games & Toys</h4>
                </a>
            </div>
            <div class="col-md-3 focus-grid">
                <a href="products6.php" class="wthree-btn ">
                    <div class="focus-image"><i class="fa fa-gift"></i></div>
                    <h4 class="clrchg">Gifts</h4>
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<script>

</script>