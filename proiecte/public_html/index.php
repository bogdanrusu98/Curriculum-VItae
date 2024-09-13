<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurant</title>
    <link rel="icon" href="img/logo.jpg">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6153d57823.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Q'usine Official Website"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    
    <div class="navbar">
        <p>Q'usine</p>
        <div class="nav" id="mynav">
        
            <a href="index" class="active">Home</a>
            <a href="#about">About</a>
            <a href="php/menu">Menu</a>
            <a href="php/gallery">Gallery</a>
            <a href="php/reservation">Reservations</a>
            <a href="#location">Location</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
</a>
        
    </div>
    </div>
    <div class="header">
        <img src="img/logo.jpg" alt="logo">
        <h1>Q'usine</h1><br>
        <p>Restaurant</p>
            <div class="mouse">
                <a href="#about"><span></span></a>
    </div>
    </div>

<div class="spacer">
</div>

    <div class="about" id="about">
        <div class="container">
        <hr><h1>About us</h1><hr>
        <h2>Tiam posuere, ante non malesuada accumsan, mi ligula laoreet quam, a tristique risus ipsum egestas sem</h2> <h2> In pharetra elementum mauris, vitae sagittis enim varius et.</h2>
       
       
        <div class="row margin-top">
        <div class="col-sm">
        <h3>The History</h3>
        <p>Lorem ipsum dolor sit amet, <span class="red">consectetur adipiscing elit</span>. Morbi accumsan sapien nec nisi pharetra, a vestibulum tortor congue. Praesent vulputate lacus eget augue fringilla gravida. Mauris rhoncus convallis diam, a tristique dolor semper ornare. Vivamus ut felis sed nibh posuere facilisis. Integer auctor lectus ut egestas laoreet. Mauris laoreet eros tincidunt est interdum facilisis. Vivamus sagittis mattis augue, pharetra vulputate justo convallis sit amet. Nulla egestas nec nulla et ornare.</p>
        <p class="p">Donec placerat laoreet condimentum. In et ex non lorem hendrerit auctor ut eget elit. Nunc vehicula consequat ex nec consequat. Integer pretium eu orci at aliquet. Integer at sem vitae lorem tincidunt laoreet nec vitae lectus. Morbi nec eleifend turpis. Sed ac eleifend diam. Duis sed leo at metus semper suscipit sed ut justo. Proin id nibh magna. Sed sed metus quis risus maximus convallis id in nisi.</p>
    </div>

    <!--SLIDESHOW-->
    <div class="col-sm">
    <div class="slideshow-container">

        <div class="mySlides fade-slide">
          <img src="img/photo1.jpg" alt="photo">
        </div>
        
        <div class="mySlides fade-slide">
          <img src="img/photo5.jpg" alt="photo-food">
        </div>
        
        <div class="mySlides fade-slide">
            <img src="img/photo3.jpg" alt="photo-food">
          </div>

          <div class="mySlides fade-slide">
            <img src="img/photo4.jpg" alt="photo-food">
            </div>
          
</div>


        <br>
        
        <div>
          <span class="dot-slide" onclick="currentSlide(1)"></span> 
          <span class="dot-slide" onclick="currentSlide(2)"></span> 
          <span class="dot-slide" onclick="currentSlide(3)"></span> 
          <span class="dot-slide" onclick="currentSlide(4)"></span> 
        </div>
       
            
  </div>
</div>

    </div>
    <!--END SLIDESHOW-->
    </div>

    
    <div class="orar">
        <h1>Opening Hours</h1>
        <!--SCHEDULE-->
        <div class="schedule">
            <h1>Everyday</h1>
            <hr>
            <ul>
                <li>11:30 - 23: 30</li>
            </ul>
            <hr>
    </div>
    <!--END SCHEDULE-->
    </div>

    <div class="menu">
        <div class="container">
            <hr>
            <h1>Menu</h1>
            <hr>
                <div class="menu-content">
                    <div class="row">

                        <!--PASTA-->
                        <div class="col-sm">
                            <h1>Great Pasta</h1>
                                <div class="row">
                                    <div class="col-sm">
                                        <b>Filet</b>
                                        <h2>47 ron</h2>
                                        <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <b>Filet</b>
                                        <h2>47 ron</h2>
                                        <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <b>Filet</b>
                                        <h2>47 ron</h2>
                                        <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <b>Filet</b>
                                        <h2>47 ron</h2>
                                        <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <b>Filet</b>
                                        <h2>47 ron</h2>
                                        <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                    </div>
                                </div>
                        </div>
                        <!--PIZZA-->
                        <div class="col-sm">
                            <h1>Our Pizza</h1>
                            <div class="row">
                                <div class="col-sm">
                                    <b>Filet</b>
                                    <h2>47 ron</h2>
                                    <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <b>Filet</b>
                                    <h2>47 ron</h2>
                                    <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <b>Filet</b>
                                    <h2>47 ron</h2>
                                    <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <b>Filet</b>
                                    <h2>47 ron</h2>
                                    <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <b>Filet</b>
                                    <h2>47 ron</h2>
                                    <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                </div>
                            </div>
                        </div>
                        <!--DESSERT-->
                        <div class="col-sm">
                            <h1>Desserts</h1>
                            <div class="row">
                                <div class="col-sm">
                                    <b>Filet</b>
                                    <h2>47 ron</h2>
                                    <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <b>Filet</b>
                                    <h2>47 ron</h2>
                                    <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <b>Filet</b>
                                    <h2>47 ron</h2>
                                    <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <b>Filet</b>
                                    <h2>47 ron</h2>
                                    <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <b>Filet</b>
                                    <h2>47 ron</h2>
                                    <h5>7 oz. Center Cut10 oz. Double cut</h5>
                                </div>
                            </div>
                        </div>
                    </div>


            <br>
                    <a class="menu-button" href="php/menu.php">Menu</a>
            </div>
        </div>
    </div>







        <div class="contact">
            <div class="container">
                <hr>
                <h1>Contact</h1>
                <hr>
                <p>Strada Dimitrie Cantemir 14, Câmpulung Moldovenesc 725100</p>
                <div class="clearfix"></div>
                    
                
                <form method="POST" action="index.php" id="contact">
                        <div class="form-group">
                            <label>Nume</label>
                            <input type="text" name="Nume" class="form-control">
                        </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="Email" class="form-control">
                            </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="Subiect" class="form-control">
                                </div>
                                    <div class="form-group">
                                        <label>Descriere</label>
                                        <textarea name="Mesaj"></textarea>
                                    </div>
                                        <button type="submit" name="Trimite" class="submit-button">Trimite</button>
                    </form>
                
                   <?php
    
                    
                        $name = $_POST['Nume'];
                        $email = $_POST['Email'];
                        $subject = $_POST['Subiect'];
                        $message = $_POST['Mesaj'].'
                        Nume:
                        '.$name.'
                        Email: 
                        '.$email;
                    
                        if(isset($_POST ['Trimite'])) {
                            if($name !='' && $email !='' && $subject !='' && $message !='') {
                                if(strlen($name) > 4){ 
                                    mail("bogdan.rusu98@gmail.com", $subject, $message);
                    
                                    echo 'Mesaj trimis. Multumesc.';
                                    
                                }  
                                else{
                                    echo 'Numele este prea scurt';
                                } 
                            }

                            else{
                                echo 'Trebuie sa completezi toate campurile!';
                            }
                    }
                
                
                ?>
            </div>
        </div>

    <div id="location">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Dimitrie%20Cantemir%2014&t=&z=13&ie=UTF8&iwloc=&output=embed">
                </iframe>
                <a href="https://www.crocothemes.net"></a>
            </div>

    </div>
    </div>

    <div class="footer" id="footer">
        <div class="container">
        <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
                </div>
    <script src="js/slideshow.js"></script>
    <script src="js/responsive-nav.js"></script>
</body>
</html>