<div id="header">
    <!--header-->
    <div class="header">
        <div class="container">
            <div class="header-grids">
                <div class="logo">
                    <h1><a href="index.html"><span>Go</span>vihar</a></h1>
                </div>
                <!--navbar-header-->
                <div class="header-dropdown">
                    <div class="emergency-grid">
                        <ul>
                            <li>Toll Free :</li>
                            <li class="call">+1 234 567 8901</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="nav-top">
                <div class="top-nav">
                    <span class="menu"><img src="images/menu.png" alt=""/></span>
                    <!--dynamic menu-->
					<?php
					if ( has_nav_menu( 'top-main-menu' ) ):

						wp_nav_menu( [ 'theme_location' => 'top-main-menu' ] );

					else:
						echo '<span>ّبرای این قسمت یک منو ایجاد کنید</span>';
					endif;
					?>
                    <!--/dynamic menu-->
                    <!--                    <ul class="nav1">-->
                    <!--                        <li class="active"><a href="index.html">Flights</a></li>-->
                    <!--                        <li><a href="hotels.html">Hotels</a></li>-->
                    <!--                        <li><a href="holidays.html">Holidays</a></li>-->
                    <!--                        <li><a href="flights-hotels.html">Flight+Hotel</a></li>-->
                    <!--                        <li><a href="bus.html">Bus</a></li>-->
                    <!--                        <li><a href="trains.html">Trains</a></li>-->
                    <!--                        <li><a href="weekend.html">Weekend Getaways</a></li>-->
                    <!--                        <li><a href="deals.html">Deals</a></li>-->
                    <!--                    </ul>-->
                    <div class="clearfix"></div>
                    <!-- script-for-menu -->
                    <script>
                        $("span.menu").click(function () {
                            $("ul.nav1").slideToggle(300, function () {
                                // Animation complete.
                            });
                        });

                    </script>
                    <!-- /script-for-menu -->
                </div>
                <div class="dropdown-grids">
                    <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                        <div id="loginBox">
                            <form id="loginForm">
                                <div class="login-grids">
                                    <div class="login-grid-left">
                                        <fieldset id="body">
                                            <fieldset>
                                                <label for="email">Email Address</label>
                                                <input type="text" name="email" id="email">
                                            </fieldset>
                                            <fieldset>
                                                <label for="password">Password</label>
                                                <input type="password" name="password" id="password">
                                            </fieldset>
                                            <input type="submit" id="login" value="Sign in">
                                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember
                                                    me</i></label>
                                        </fieldset>
                                        <span><a href="#">Forgot your password?</a></span>
                                        <div class="or-grid">
                                            <p>OR</p>
                                        </div>
                                        <div class="social-sits">
                                            <div class="facebook-button">
                                                <a href="#">Connect with Facebook</a>
                                            </div>
                                            <div class="chrome-button">
                                                <a href="#">Connect with Google</a>
                                            </div>
                                            <div class="button-bottom">
                                                <p>New account? <a href="signup.html">Signup</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//header-->
</div>