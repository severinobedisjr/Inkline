<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inkline | Contact</title>

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


    @include('./header')

    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__links">
                            <a href="./">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>Contact Details</h2>
                        </div>
                        <p>As you might expect of a company that began as a high-end toner remanufacturers, we pay strict
                        attention.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <img src="img/contact/ci-1.png" alt="">
                        </div>
                        <div class="contact__widget__item__text">
                            <h5>Phone Number</h5>
                            (02) 8531-2985 <br>
                            (02) 8359-5062 <br>
                            09175521727 <br>
                            09175391727
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <img src="img/contact/ci-2.png" alt="">
                        </div>
                        <div class="contact__widget__item__text">
                            <h5>Email Address</h5>
                            <span>info@inklineofficesolutionsinc.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item last__item">
                        <div class="contact__widget__item__icon">
                            <img src="img/contact/ci-3.png" alt="">
                        </div>
                        <div class="contact__widget__item__text">
                            <h5>Office Location</h5>
                            <span>429 Martinez St., Barangay Plainview, Mandaluyong City</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="632" id="gmap_canvas" src="https://maps.google.com/maps?q=Inkline%20Office%20Solutions%20Inc.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2torrentz.net"></a></div><style>.mapouter{position:relative;text-align:right;height:732px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:732px;width:1080px;}</style></div>
            </div>
            <br> <br> <br> <br> <br> <br>

            
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact__form__text">
                        <div class="section-title">
                            <span>Form</span>
                            <h2>Get in touch</h2>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact__form">
                        <div class="container box">
                          
                            @if (count($errors) > 0)
                             <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                              <ul>
                               @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                               @endforeach
                              </ul>
                             </div>
                            @endif
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                             <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif
                            <form method="post" action="{{url('contactPost')}}">
                             {{ csrf_field() }}
                             <div class="form-group" style="color: #dfa667">
                              <label>Enter Your Name</label>
                              <input type="text" name="name" class="form-control" value="" >
                             </div>

                             <div class="form-group" style="color: #dfa667">
                                <label>Enter Your Mobile Number</label>
                                <input type="text" name="number" class="form-control"   onkeypress="return onlyNumberKey(event)" maxlength="11" >
                            </div>
                             <div class="form-group" style="color: #dfa667">
                              <label>Enter Your Email</label>
                              <input type="text" name="email" class="form-control" value="" >
                             </div>

                             <div class="form-group" style="color: #dfa667">
                                <label>Enter Your Subject</label>
                                <input type="text" name="subject" class="form-control" value="" >
                               </div>

                             <div class="form-group" style="color: #dfa667">
                              <label>Enter Your Message</label>
                              <textarea name="message" class="form-control" ></textarea>
                             </div>
                             <div class="form-group">
                              <input type="submit" name="send" class="btn btn-primary" value="Send" />
                             </div>
                            </form>
                            
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
   @include('./footer')
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>

<script>

    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 

</script>
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
</body>

</html>