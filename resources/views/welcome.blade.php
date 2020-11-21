<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <img src="./img/inkline.jpg" alt="">
    <title>Inkline | Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url ('css/bootstrap.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="./css/elegant-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="./css/slicknav.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="./css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all">
  
</head>

<body>
  
  
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

  
  
    @include('header')
       
  
    <!-- Offcanvas Menu Begin -->
   
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
   
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/a.jpg">
                
                <div class="hero__text">
                    <h2 style="color: black"> LET'S PRINT BRILLIANT LIFE </h2>
                    <br> <br> <br> <br>
                    
                    
                   
                </div>
            </div>
          
        </div>
      
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>who are we</span>
                            <h2>INKLINE OFFICE SOLUTIONS INC.</h2>
                        </div>
                        <div class="about__para__text">
                            <p>is a business entity
                                specialized in providing Remanufactured ink and toner cartridges and
                                wide-range of computer printer models for the consumption of our valued
                                clienteles.
                                Our entity is established on May of 2004 and is incorporated July, 2015.</p>
                        </div>
                    <a href="{{ url('about')}}" class="primary-btn normal-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__pic">
                      
                            <img src="img/side.jpg" alt="">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Begin -->
    <center>
    <section class="services spad">
        <div class="containe-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="section-title">
                        <span>Our Services</span>
                        <h2>What we do</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <div class="row">
                
                <div class="col">
                    <div class="services__item">
                        <img src="img/printers/436nda.png" alt="" style="height: 150px">
                        <h4>Free Use of Printers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/toner.png" alt="" style="height: 150px">
                        <h4>High Quality Toner</h4>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/ink.png" alt="" style="height: 150px">
                        <h4>Compatible Premium Ink</h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/free.jpg" alt="" style="height: 150px">
                        <h4>Free Delivery</h4>
                        
                    </div>
                </div>
            
            </div>
            </div>
         
        </div>
    </section>
    </center>
    <!-- Services Section End -->

    <!-- Testimonial Section Begin -->
    
   
    <!-- Team Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="callto__text">
                        <span>Why choose us?</span>
                        <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="services__item">
                                    <img src="img/quality.png" alt="" style="height: 150px">
                                    <h4>QUALITY</h4>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="services__item">
                                    <img src="img/earth.png" alt="" style="height: 150px">
                                    <h4>SAVE MOTHER EARTH</h4>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="services__item">
                                    <img src="img/hand.jpg" alt="" style="height: 150px">
                                    <h4>COMMITMENT</h4>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        <center>
                            <a href="{{ url('/contact')}}" class="primary-btn">Contact Us</a>
                        </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  

    @include('/footer')

<!-- Js Plugins -->
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.slicknav.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./js/main.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fae551f19a1cc7ca44b6550/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>