<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inkline | Support</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" />
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

   
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Support</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <br> <br>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


   <center>
   
       <select class="custom-select col-md-12 col-lg-4 col-sm-3" name="options" id="type">
           <option value="item0">--Select Brand--</option>
           <option value="Brother">Brother</option>
            <option value="Canon">Canon</option>
            <option value="Epson">Epson</option>
            <option value="Fuji">Fuji</option>
            <option value="HP">HP</option>
        </select>
      
    
        <select id="size" class="custom-select col-md-12 col-lg-4 col-sm-3" name="options">
            <option value="">-- Select Model -- </option>
        </select>
     
   </center>

<!-- example of select options that arent affected by the above javascript !-->


@include('./support/brother')
@include('./support/canon')
@include('./support/epson')
@include('./support/fuji')
@include('./support/hp')
<script>
    $(document).ready(function () {
        $('.277DW, .1020, .M401, .P3015DN, .2055, .M12W, .P3005, .M602N, .4015N, .M402DN, .5035,.9050, .M436NDA, .M3035, .M4555, .M426FDN, .M127FN, .1025N, .251NW, .3525, .P5225DN, .M477, .177FW, .277FW, .476DN, .M281, .M880, .P455D, .M455DF, .M355DF, .SC2020, .2263, .2265, .4470, .3375, .3370, .4475, .5575, .3110, .1300, .6030, .2550, .2540').hide();
    $("#type").change(function () {
        var val = $(this).val();
        if (val == "Brother") {
            $("#size").html("<option value=''>--Select Model--</option><option>Brother 2540</option><option>Brother 2550</option>");
            $('.277DW, .1020, .M401, .P3015DN, .2055, .M12W, .P3005, .M602N, .4015N, .M402DN, .5035,.9050, .M436NDA, .M3035, .M4555, .M426FDN, .M127FN, .1025N,.251NW, .3525, .P5225DN, .M477, .177FW, .277FW, .476DN, .M281, .M880, .P455D, .M455DF, .M355DF, .SC2020, .2263, .2265, .4470, .3375, .3370, .4475, .5575, .3110, .1300, .6030, .2550, .2540').hide();
        } else if (val == "Canon") {
            $('.277DW,.1020, .M401, .P3015DN, .2055, .M12W, .P3005, .M602N, .4015N, .M402DN, .5035,.9050, .M436NDA, .M3035, .M4555, .M426FDN, .M127FN, .1025N, .251NW, .3525, .P5225DN, .M477, .177FW, .277FW, .476DN, .M281, .M880, .P455D, .M455DF, .M355DF, .SC2020, .2263, .2265, .4470, .3375, .3370, .4475, .5575, .3110, .1300,.6030, .2550, .2540 ').hide();
            $("#size").html("<option value=''>--Select Model--</option><option>Canon 6030</option>");
        } else if (val == "Epson") {
            $("#size").html("<option value=''>--Select Model--</option><option>Epson 3110</option><option>Epson L1300</option>");
            $('.277DW,.1020, .M401, .P3015DN, .2055, .M12W, .P3005, .M602N, .4015N, .M402DN, .5035,.9050, .M436NDA, .M3035, .M4555, .M426FDN, .M127FN, .1025N, .251NW, .3525, .P5225DN, .M477, .177FW, .277FW, .476DN, .M281, .M880, .P455D, .M455DF, .M355DF, .SC2020, .2263, .2265, .4470, .3375, .3370, .4475, .5575, .3110, .1300,.6030, .2550, .2540').hide();
        } else if(val == "Fuji"){
            $("#size").html("<option value=''>--Select Model--</option><option>Docuprint P455D</option><option>Docuprint M455DF</option><option>Docuprint M355DF</option><option>DocuCentre SC2020</option><option>DocuCentre IV 2263</option><option>DocuCentre IV 2265</option><option>DocuCentre IV 4470</option><option>DocuCentre V 3375</option><option>DocuCentre IV 3370</option><option>DocuCentre V 4475</option><option>DocuCentre IV 5575");
            $(' .277DW,.1020, .M401, .P3015DN, .2055, .M12W, .P3005, .M602N, .4015N, .M402DN, .5035,.9050, .M436NDA, .M3035, .M4555, .M426FDN, .M127FN, .1025N, 251NW, .3525, .P5225DN, .M477, .177FW, .277FW, .476DN, .M281, .M880, .P455D, .M455DF, .M355DF, .SC2020, .2263, .2265, .4470, .3375, .3370, .4475, .5575, .3110, .1300, .6030, .2550, .2540').hide();
        } else if (val == "HP") {
            $("#size").html("<option>--Select Model--</option><option>HP LASERJET 1020</option><option>HP LASERJET PRO M401</option><option>HP LASERJET P3015DN</option><option>HP LASERJET 2055</option><option>HP LASERJET M12W</option><option>HP LASERJET P3005</option><option>HP LASERJET ENTERPRISE 600 M602N</option><option>HP LASERJET 4015N/4015DN</option><option>HP LASERJET PRO M402DN</option><option>HP LASERJET M5035</option><option>HP LASERJET MFP 9050</option><option>HP LASERJET MFP M436NDA</option><option>HP LASERJET M3035</option><option>HP LASERJET M4555</option><option>HP LASERJET PRO MFP M426FDN</option><option>HP LASERJET M127FN</option><option>HP COLOR LASERJET 1025N</option><option>HP COLOR LASERJET PRO 200 251NW</option><option>HP COLOR LASERJET 3525</option><option>HP COLOR LASERJET P5225DN</option><option>HP COLOR LASERJET PRO M477</option><option>HP COLOR LASERJET Pro177fw</option><option>HP COLOR LaserJet Pro 200 277dw</option><option>HP COLOR LJ Pro MFP 476dn</option><option>HP COLOR LJ PRO MFP M281 fdw</option><option>HP Color LaserJet Enterprise flow MFP M880</option>");
            $('.277DW,.1020, .M401, .P3015DN, .2055, .M12W, .P3005, .M602N, .4015N, .M402DN, .5035,.9050, .M436NDA, .M3035, .M4555, .M426FDN, .M127FN, .1025N, 251NW, .3525, .P5225DN, .M477, .177FW, .277FW, .476DN, .M281, .M880, .P455D, .M455DF, .M355DF, .SC2020, .2263, .2265, .4470, .3375, .3370, .4475, .5575, .3110, .1300, .6030, .2550, .2540').hide();
        }
         else if (val == "item0") {
            $("#size").html("<option value=''>--Select Model--</option>");
            $('.277DW,.1020, .M401, .P3015DN, .2055, .M12W, .P3005, .M602N, .4015N, .M402DN, .5035,.9050, .M436NDA, .M3035, .M4555, .M426FDN, .M127FN, .1025N, 251NW, .3525, .P5225DN, .M477, .177FW, .277FW, .476DN, .M281, .M880, .P455D, .M455DF, .M355DF, .SC2020, .2263, .2265, .4470, .3375, .3370, .4475, .5575, .3110, .1300, .6030, .2550,.2540').hide();
        }
    });

        $('#size').change(function(){
            var choice = $(this).val();
        if (choice === "Brother 2540") {
            $('.2540').show();
        }
        else if (choice !== "Brother 2540") {
            $('.2540').hide();
        }
        if (choice === "Brother 2550") {
            $('.2550').show();
        }
        else if (choice !== "Brother 2550") {
            $('.2550').hide();
        }
        if (choice === "Canon 6030") {
            $('.6030').show();
        }
        else if (choice !== "Canon 6030") {
            $('.6030').hide();
        }
        if (choice === "Epson 3110") {
            $('.3110').show();
        }
        else if (choice !== "Epson 3110") {
            $('.3110').hide();
        }
        if (choice === "Epson L1300") {
            $('.1300').show();
        }
        else if (choice !== "Epson L1300") {
            $('.1300').hide();
        }

        if (choice === "Docuprint P445D") {
            $('.P455D').show();
        }
        else if (choice !== "Docuprint P455D") {
            $('.P455D').hide();
        }

        
        if (choice === "Docuprint M455DF") {
            $('.M455DF').show();
        }
        else if (choice !== "Docuprint M455DF") {
            $('.M455DF').hide();
        }

        
        if (choice === "Docuprint M355DF") {
            $('.M355DF').show();
        }
        else if (choice !== "Docuprint M355DF") {
            $('.M355DF').hide();
        }

        
        if (choice === "DocuCentre SC2020") {
            $('.SC2020').show();
        }
        else if (choice !== "DocuCentre SC2020") {
            $('.SC2020').hide();
        }

        
        if (choice === "DocuCentre IV 2263") {
            $('.2263').show();
        }
        else if (choice !== "DocuCentre IV 2263") {
            $('.2263').hide();
        }

        
        if (choice === "DocuCentre IV 2265") {
            $('.2265').show();
        }
        else if (choice !== "DocuCentre IV 2265") {
            $('.2265').hide();
        }

        
        if (choice === "DocuCentre IV 4470") {
            $('.4470').show();
        }
        else if (choice !== "DocuCentre IV 4470") {
            $('.4470').hide();
        }

        
        if (choice === "DocuCentre V 3375") {
            $('.3375').show();
        }
        else if (choice !== "DocuCentre V 3375") {
            $('.3375').hide();
        }

        
        if (choice === "DocuCentre IV 3370") {
            $('.3370').show();
        }
        else if (choice !== "DocuCentre IV 3370") {
            $('.3370').hide();
        }

        
        if (choice === "DocuCentre V 4475") {
            $('.4475').show();
        }
        else if (choice !== "DocuCentre V 4475") {
            $('.4475').hide();
        }

        
        if (choice === "DocuCentre IV 5575") {
            $('.5575').show();
        }
        else if (choice !== "DocuCentre IV 5575") {
            $('.5575').hide();
        }

        if (choice === "HP LASERJET 1020") {
            $('.1020').show();
        }
        else if (choice !== "HP LASERJET 1020") {
            $('.1020').hide();
        }

        if (choice === "HP LASERJET PRO M401") {
            $('.M401').show();
        }
        else if (choice !== "HP LASERJET PRO M401") {
            $('.M401').hide();
        }

        if (choice === "HP LASERJET P3015DN") {
            $('.P3015DN').show();
        }
        else if (choice !== "HP LASERJET P3015DN") {
            $('.P3015DN').hide();
        }

        if (choice === "HP LASERJET 2055") {
            $('.2055').show();
        }
        else if (choice !== "HP LASERJET 2055") {
            $('.2055').hide();
        }

        if (choice === "HP LASERJET M12W") {
            $('.M12W').show();
        }
        else if (choice !== "HP LASERJET M12W") {
            $('.M12W').hide();
        }

        if (choice === "HP LASERJET P3005") {
            $('.P3005').show();
        }
        else if (choice !== "HP LASERJET P3005") {
            $('.P3005').hide();
        }

        if (choice === "HP LASERJET ENTERPRISE 600 M602N") {
            $('.M602N').show();
        }
        else if (choice !== "HP LASERJET ENTERPRISE 600 M602N") {
            $('.M602N').hide();
        }

        if (choice === "HP LASERJET 4015N/4015DN") {
            $('.4015N').show();
        }
        else if (choice !== "HP LASERJET 4015N/4015DN") {
            $('.4015N').hide();
        }

        if (choice === "HP LASERJET PRO M402DN") {
            $('.M402DN').show();
        }
        else if (choice !== "HP LASERJET PRO M402DN") {
            $('.M402DN').hide();
        }

        if (choice === "HP LASERJET M5035") {
            $('.5035').show();
        }
        else if (choice !== "HP LASERJET M5035") {
            $('.5035').hide();
        }

        if (choice === "HP LASERJET MFP 9050") {
            $('.9050').show();
        }
        else if (choice !== "HP LASERJET MFP 9050") {
            $('.9050').hide();
        }


        if (choice === "HP LASERJET MFP M436NDA") {
            $('.M436NDA').show();
        }
        else if (choice !== "HP LASERJET MFP M436NDA") {
            $('.M436NDA').hide();
        }

        if (choice === "HP LASERJET M3035") {
            $('.M3035').show();
        }
        else if (choice !== "HP LASERJET M3035") {
            $('.M3035').hide();
        }

        if (choice === "HP LASERJET M4555") {
            $('.M4555').show();
        }
        else if (choice !== "HP LASERJET M4555") {
            $('.M4555').hide();
        }

        if (choice === "HP LASERJET PRO MFP M426FDN") {
            $('.M426FDN').show();
        }
        else if (choice !== "HP LASERJET PRO MFP M426FDN") {
            $('.M426FDN').hide();
        }

        if (choice === "HP LASERJET M127FN") {
            $('.M127FN').show();
        }
        else if (choice !== "HP LASERJET M127FN") {
            $('.M127FN').hide();
        }

        if (choice === "HP COLOR LASERJET 1025N") {
            $('.1025N').show();
        }
        else if (choice !== "HP COLOR LASERJET 1025N") {
            $('.1025N').hide();
        }

        if (choice === "HP COLOR LASERJET PRO 200 251NW") {
            $('.251NW').show();
        }
        else if (choice !== "HP COLOR LASERJET PRO 200 251NW") {
            $('.251NW').hide();
        }

        if (choice === "HP COLOR LASERJET 3525") {
            $('.3525').show();
        }
        else if (choice !== "HP COLOR LASERJET 3525") {
            $('.3525').hide();
        }
        if (choice === "HP COLOR LASERJET P5225DN") {
            $('.P5225DN').show();
        }
        else if (choice !== "HP COLOR LASERJET P5225DN") {
            $('.P5225DN').hide();
        }

        if (choice === "HP COLOR LASERJET PRO M477") {
            $('.M477').show();
        }
        else if (choice !== "HP COLOR LASERJET PRO M477") {
            $('.M477').hide();
        }
        if (choice === "HP COLOR LASERJET Pro177fw") {
            $('.177FW').show();
        }
        else if (choice !== "HP COLOR LASERJET Pro177fw") {
            $('.177FW').hide();
        }

        if (choice === "HP COLOR LaserJet Pro 200 277dw") {
            $('.277DW').show();
        }
        else if (choice !== "HP COLOR LaserJet Pro 200 277dw") {
            $('.277DW').hide();
        }

        if (choice === "HP COLOR LJ Pro MFP 476dn") {
            $('.476DN').show();
        }
        else if (choice !== "HP COLOR LJ Pro MFP 476dn") {
            $('.476DN').hide();
        }

        if (choice === "HP COLOR LJ PRO MFP M281 fdw") {
            $('.M281').show();
        }
        else if (choice !== "HP COLOR LJ PRO MFP M281 fdw") {
            $('.M281').hide();
        }

        if (choice === "HP Color LaserJet Enterprise flow MFP M880") {
            $('.M880').show();
        }
        else if (choice !== "HP Color LaserJet Enterprise flow MFP M880") {
            $('.M880').hide();
        }


         });
         
 
});
</script>
    
    <br> <br>
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