<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inkline | Printers</title>

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


    @include('/header')

    <!-- Offcanvas Menu Begin -->
    
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
   
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Printers</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Printers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <br> <br>

 @include('./printers/A3_printer_multi')
 @include('./printers/A4_printer_alone')
 @include('./printers/A4_mono_printer_alone')
 @include('./printers/A4_colored_printer_alone')
 @include('./printers/A3_colored_printer_alone')
 @include('./printers/A3_colored_multifunction')
 <style>
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
        
    .custom-select {
  position: relative
  display: block
  max-width: 400px
  min-width: 180px
  margin: 0 auto
  border: 1px solid #3C1C78
  background-color: #16013E
  z-index: 10
        }

  .select {
    border: none
    outline: none
    background: transparent
    -webkit-appearance: none
    -moz-appearance: none
    appearance: none
    border-radius: 0
    margin: 0
    display: block
    width: 100%
    padding: 12px 55px 15px 15px
    font-size: 14px
    color: #714BB9
  
  &:after
    position: absolute
    right: 0
    top: 0
    width: 50px
    height: 100%
    line-height: 38px
    content: '\2228'
    text-align: center
    color: #714BB9
    font-size: 24px
    border-left: 1px solid #3C1C78
    z-index: -1
  }
    
    }
   
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
</head>
<body>
    <center>
        <div class="col-md-5">
           
            <select class="custom-select" name="options">
            <option>Select Printers</option>
            <option value="red">A4 Monochrome Laserjet Printer (Printer Alone)</option>
            <option value="green">A3 Monochrome Laserjet Printer (Multi-function)</option>
            <option value="blue">A4 Monochrome Laserjet Printer (Multi-function)</option>
            <option value="cyan">A4 Colored Laserjet Printer (Printer Alone)</option>
            <option value="magenta">A3 Colored Laserjet Printer (Printer Alone)</option>
            <option value="pink">A3 Colored Laserjet Printer (Multi-function)</option>
            {{-- <option value="purple">A4 Colored Laserjet Printer (Multi-function)</option> --}}
            <option value="black">A3 Colored Fuji Xerox Printer (Multi-function)</option>
        
        </select>
    </div>
    </center>


    <br> <br> <br>

    @include('./box/red')
    @include('./box/blue')
    @include('./box/green')
    @include('./box/magenta')
    @include('./box/cyan')
    @include('./box/pink')
    @include('./box/black')
    
    @include('footer')
</body>
  

<!-- Js Plugins -->
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.slicknav.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./js/main.js"></script>
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