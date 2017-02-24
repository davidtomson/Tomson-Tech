<!DOCTYPE html>
<html lang="en">
<?php 

include("function.php");
global $con;
$sql = "INSERT INTO `hits` (`hits`) VALUES (NULL)";
$run_sql = mysqli_query($con, $sql);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tomson Tech | The Best IT Solution Center</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/logo.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <!-- <li><a href="#pricing">Pricing</a></li> -->
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel" style="background-image: url('images/bg11.jpg');">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url('images/bg11.jpg');">
            <br><br><br><br>
                <div class="container" >
                    <div class="carousel-content">
                    <div class="well" style="opacity: 0.8; color: grey">
                        <h1 style="color: grey">Software Installation</h1>
                        <p class="lead">MS Office, Anti-Virus, Drivers, Browsers, Players, Programming Softwares <br>Other Softwares also Available</p>
                        </div>
                    </div>
                </div><br><br>
            </div><!--/.item-->
            <div class="item" style="background-image: url('images/bg6.jpg');"><br><br><br><br>
                <div class="container">
                    <div class="carousel-content">
                        <div class="well" style="opacity: 0.8; color: grey">
                        <h1 style="color: grey">Operating System Installation</h1>
                        <p class="lead">MS Windows (XP, 7, 8 & 10), Unux Obuntu, CentOS, Back Track  <br>Apple IOS also Available</p>
                        </div>
                    </div>
                </div><br><br><br>
            </div><!--/.item-->
            <div class="item" style="background-image: url('images/bg9.jpg');"><br><br><br><br>
                <div class="container">
                    <div class="carousel-content">
                        <div class="well" style="opacity: 0.8; color: grey">
                        <h1 style="color: grey">Web Development</h1>
                        <p class="lead">Responsive Web App, Website, online Web Store, Academic Web System  <br>Media Web Base Application</p>
                        </div>
                    </div>
                </div><br><br><br>
            </div><!--/.item-->
            <div class="item" style="background-image: url('images/bg10.jpg');"><br><br><br><br>
                <div class="container">
                    <div class="carousel-content">
                        <div class="well" style="opacity: 0.8; color: grey">
                        <h1 style="color: grey">Computer Repair</h1>
                        <p class="lead">Hardware Upgrade and Replacement, Network Configuration, RAM Upgrade And Repalacement,<br>Servers and Printers manitenances also Available</p>
                        </div>
                    </div>
                </div><br><br><br>
            </div><!--/.item-->
            <div class="item" style="background-image: url('images/bg12.jpg');"><br><br><br><br>
                <div class="container">
                    <div class="carousel-content">
                        <div class="well" style="opacity: 0.8; color: grey">
                        <h1 style="color: grey">Database Management</h1>
                        <p class="lead">SQL MySQL Servers, Oracle Servers, Database CRUD, App Database Connection, Cloud Services <br>Data Storage also Available</p>
                        </div>
                    </div>
                </div><br><br><br>
            </div><!--/.item-->
            <div class="item" style="background-image: url('images/bg2.jpg');"><br><br><br><br>
                <div class="container">
                    <div class="carousel-content">
                        <div class="well" style="opacity: 0.8; color: grey">
                        <h1 style="color: grey">Network installation & Configuration</h1>
                        <p class="lead">Computer Network (Organization & Banks E.T.C), Satallite Network, Telecom Network,  <br>CISCO Network also Available</p>
                        </div>
                    </div>
                </div><br><br><br>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" title="Previous" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" title="Next" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->

    <section id="services" style="background-image: url('images/bg3.jpg');"><br><br><br><br><br><br>
        <div class="container" style="opacity: 0.9">
            <div class="box first">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-apple icon-md icon-color1"></i><i class="icon-windows icon-md icon-color2"></i><i class="icon-linux icon-md icon-color3"></i>
                            <h4>OS Installation</h4>
                            <p>We Do Multiple Operating system Istallation. Windows, APPLE IOS, Unix and Others. <br>We Also do Server OS Installation and Maintenance</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-globe icon-md icon-color2"></i><i class="icon-edit icon-md icon-color4"></i><i class="icon-shopping-cart icon-md icon-color1"></i>
                            <h4>Web Development</h4>
                            <p>Responsive Web App, Websites, online Web Store, Academic System, Booking & reservation Web Apps<br>Media Web Base Application</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-gears icon-md icon-color3"></i><i class="icon-sitemap icon-md icon-color2"></i><i class="icon-link icon-md icon-color1"></i>
                            <h4>Network Installation & Configuration</h4>
                            <p>We Instal network to Organizations, banks and companies, LAN WAN And WLAN. <br>We also configure and maintain an existing network</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-html5 icon-md icon-color1"></i><i class="icon-tasks icon-md icon-color4"></i><i class="icon-css3 icon-md icon-color3"></i>
                            <h4>Database Management</h4>
                            <p>DSQL MySQL Servers, Oracle Servers, Database CRUD, App Database Connection, Cloud Services <br>Data Storage also Available</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-desktop icon-md icon-color5"></i><i class="icon-mobile-phone icon-md icon-color3"></i><i class="icon-laptop icon-md icon-color2"></i>
                            <h4>Computer Repair</h4>
                            <p>Hardware Upgrade and Replacement, Network Configuration, RAM Upgrade And Repalacement,<br>Servers and Printers manitenances also Available.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i class="icon-print icon-md icon-color6"></i><i class="icon-file icon-md icon-color4"></i><i class="icon-gear icon-md icon-color2"></i>
                            <h4>Stationaries</h4>
                            <p>We sell all sort of stationaries, printers, scanners e.t.c and also we provide services and maintenance for those devices.</p>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio" style="background-image: url('images/bg14.jpg');"><br><br><br>
        <div class="container" style="opacity: 0.9">
            <div class="box">
                <div class="center gap">
                    <h2>Portfolio</h2>
                    <p class="lead">The powerline to your digitalize company<br>We provide the globaly recognize service to our clien.</p>
                </div><!--/.center-->
                <ul class="portfolio-filter">
                    <li><a class="btn btn-primary active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".os">Opertaing System Installation</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".web">Web Development</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".software">Software Installation</a></li>
                </ul><!--/#portfolio-filter-->
                <ul class="portfolio-items col-4">
                    <li class="portfolio-item apps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item1.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Computer Network, Satallite Network, Telecom Network & CISCO," href="images/portfolio/full/item1.jpg"><i class="icon-eye-open"></i></a>             
                                </div>
                            </div>
                            <h5>Computer Network, Satallite Network, Telecom Network & CISCO,</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla os">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item2.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Unix OS. Ubuntu, CentOS, Back Track, Kali Linux" href="images/portfolio/full/item2.jpg"><i class="icon-eye-open"></i></a>  
                                </div>
                            </div> 
                            <h5>Unix OS. Ubuntu, CentOS, Back Track, Kali Linux</h5>         
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item os software">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item3.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="window OS, Application (Offices, Visual Studio E.T.C" href="images/portfolio/full/item3.jpg"><i class="icon-eye-open"></i></a>        
                                </div> 
                            </div>
                            <h5>window OS, Application (Offices, Visual Studio E.T.C</h5>          
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla software apps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item4.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Accounting Management" href="images/portfolio/full/item4.jpg"><i class="icon-eye-open"></i></a>          
                                </div>   
                            </div>
                            <h5>Accounting Management</h5>        
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla web">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item5.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Acedemic Stand alone And Web Base System" href="images/portfolio/full/item5.jpg"><i class="icon-eye-open"></i></a>          
                                </div>  
                            </div>
                            <h5>Acedemic Stand alone And Web Base System </h5>  
                        </div>       
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item software web">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item7.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Supermaket POS System and Online Store" href="images/portfolio/full/item7.jpg"><i class="icon-eye-open"></i></a>           
                                </div>  
                            </div>
                            <h5>Supermaket POS System and Online Store</h5>         
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla web">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item8.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Organizationa and Company Websites" href="images/portfolio/full/item8.jpg"><i class="icon-eye-open"></i></a>          
                                </div>  
                            </div>
                            <h5>Organizationa and Company Websites</h5>  
                        </div>       
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item software web">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item6.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Database Connect for Multiple System Interfaces" href="images/portfolio/full/item6.jpg"><i class="icon-eye-open"></i></a>           
                                </div>   
                            </div>
                            <h5>Database Connect for Multiple System Interfaces</h5>        
                        </div>         
                    </li><!--/.portfolio-item-->
                </ul>   
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->
<br><br><br>
    <section id="about-us" style="background-image: url('images/bg5.jpg');">
        <div class="container" style="opacity: 0.9">
            <div class="box">
                <div class="center">
                    <h2>About Us</h2>
                    <p class="lead">The Best IT Solution - You will never regret choosing us </p>
                </div>
                <div class="gap"></div>
                <p class="light regular light white"><b>Tomson Technolgy </b> is an infor mation technology company this founded in 2016 by <a href="" data-toggle="modal" data-target="#modal2" title="Founder/CEO - +254 - 712-547-864">David Tomson </a> as a family company. with the help and support of my friends and family that made this possible.  <br>The company is built on a solid foundation of well trained and experienced staffs. We operate on team spirit and unity, together nothing is impossible. <p class="light regular light white"> We offer veriety of quality products and services such as Web Design and development; software development; network installation & administration; hardware repair & maintenace; software installation & maintenance; Database Management; and many more services....we also have a store openning soon in <a href="#contact"> Juba Town</a> where we have all electronic devices for all your Information technology needs.</p><p class="light regular light white">we also provide other services such as computer application training, operating system and software installation; desktop and laptop reapair and maintenance; mobile phones repair, unlocking and applications installation. we build efficient and responsive website at a very affordable price, with management deal package. #html #css #bootstrap #php #javascript #Asp.net</p><p class="light regular light white">The company also provide sercises as network installation, setup, maintenance and administration for companyies, Banks organizations, acedemic and government institutions as well as businesses.</p><p>To God be the Glory</p>
                </div><!--/.carousel-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#about-us-->

    <section id="contact" style="background-image: url('images/bg1.jpg');"><br><br><br>
        <div class="container" style="opacity: 0.9">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Contact Form</h1>
                        <p>We are looking forward to hear from you</p>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" method="POST" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="sendemail" class="btn btn-danger btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </div></form>
                            <?php
                            if (isset($_POST['sendemail'])) {
                                    global $con;
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $message = $_POST['message'];

                                    $sql = "INSERT INTO `message` (`name`, `email`, `message`, `date`) VALUES ('$name', '$email', '$message', CURRENT_TIMESTAMP)";
                                    $run_sql = mysqli_query($con, $sql);

                                    if ($run_sql == true) {

                                       echo "<span alert-success> Message Sent</span>";
                                    }else{echo "<span alert-danger> Message NOT Sent</span>"; }
                                }
                                ?>
                        
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Our Address</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Nairobi Office</strong><br>
                                    Juba town, Opp Ivory Bank<br>
                                    Jubek State, South Sudan<br>
                                    <abbr title="Phone">P:</abbr> (+211) 955-919-329
                                    <br><abbr title="Email">E-Mail:</abbr> <a href="mailto:davidlubajo@gmail.com">info@tomsontech.com</a>
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                    <strong>Juba Office</strong><br>
                                    Ole Dume, Valley Arcade<br>
                                    Nairobi, Kenya<br>
                                    <abbr title="Phone">P:</abbr> (+254) 712-547-864
                                    <br><abbr title="Email">E-Mail:</abbr> <a href="mailto:davidlubajo@gmail.com">info@tomsontech.com</a>
                                </address>
                            </div>
                        </div>
                        <h1>Connect with us</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="http://facebook.com/wiz.david2"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                    <li><a href="http://plus.google.com/David Lubajo"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                                    <li><a href="#"><i class="icon-pinterest icon-social"></i> Pinterest</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="https://www.linkedin.com/in/david-tomson-292a2967?trk=hp-identity-name"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                                    <li><a href="http://twitter.com/davido_95"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                    <li><a href="#"><i class="icon-youtube icon-social"></i> Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?php echo Date('Y');?> <a target="_blank" href="admin_login.php" title="Your Best IT Solution Choice">Tomson Tech</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <i class="pull-right">Design By <a href="http://tomesontech.comze.com"><img class="" src="images/logo.png" title="Tomson Tech"></a></i>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>