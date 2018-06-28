<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="keywords" content="photography,photo,photographer,portfolio,photography portfolio,camera,click,picture,picture portfolio,home"/>
        <meta name="description" content="Fotophilous Photography | Shashank Jain Photography"/>
        <meta name="author" content="Nishit Jain"/>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        
        <title>Info | Fotophilous Photography</title>
        
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/home-style.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/info-style.css"/>
        
        <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script>
            $(document).ready(function() {
                $(".toggle").click(function() {
                    toggleNav();
                });
            })
        </script>
    </head>
    <body>
        <noscript>
            <div id="overlay">
                <div id="inner">
                    <img src="img/nature_mini/_F1A1015.jpg"/>
                </div>
                <h1>Oops! Javascript unavailable. Turn on javascript and refresh to continue.</h1>
            </div>
        </noscript>
        
        <nav>
            <div id="menu-bar" class="toggle">
                <div id="bar-1" class="bar"></div>
                <div id="bar-2" class="bar"></div>
            </div>
            
            <div id="menu-icons">
                <ul>
                    <li>
                        <a href="home.html">Home</a>
                    </li>
                    <li>
                        <a href="home.html#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="info.php">Info</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div id="back-image">
            <img src="img/webpages/ship-water-river-photography-fotophilous.jpg"/>
        </div>
        
        <div id="info-content">
            <div id="column-left" class="column">
                <div id="bio">
                    <div id="bio-header">
                        <h1>Bio</h1>
                    </div>
                    <div id="bio-content">
                        <h2>
                            <p>
                                A commerce graduate is only what my parents' pressure could write into my story, and I always knew that I needed to change the lens. As they say, when life gets blurry, all one needs is to adjust their focus.
                            </p>
                            <p>
                                My focus was set in LLA when I got saturated with the exposure of various forms of photography with my specialization in Food, Travel, Architecture and Interiors, and Product photography.
                            </p>
                            <p>
                                As the old saying goes, a good photograph is one that communicates a fact, touches the heart and leaves the viewer a changed person for having seen it. All my assignments are a testimony of my belief in that principle.
                            </p>
                            <p>
                                I would like to thank you for spending some time of your life experiencing my story and hope that you would provide me an opportunity to capture some chapters of your life and turn it into sweet memories.
                            </p>
                        </h2>
                    </div>
                </div>
            </div>
            
            <div id="column-right" class="column">
                <div id="form-header">
                    <h1>Get in touch</h1>
                    <h2>jain.shashank9039@gmail.com | +91 9039397147</h2>
                </div>
                
                <div id="form-content">
                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <input type="text" name="name" class="input input-single" placeholder="Name" required/>
                        <input type="email" name="email" class="input input-single" placeholder="Email" required/>
                        <textarea name="message" placeholder="Message" class="input input-multiple" required></textarea>
                        <input type="submit" name="submit" class="button" value="Submit"/>
                    </form>
                </div>
            </div>
            
            <div class="clear"></div>
        </div>
        
        <?php
            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                
                $to = "jain.shashank9039@gmail.com";
                $subject = "Get in touch";
                
                $message = $name . '\n' . $message;

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= "From: $email" . "\r\n";

                mail($to,$subject,$message,$headers);
            }
        ?>
    </body>
</html>