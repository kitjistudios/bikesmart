<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                var Total = 0;
                $(document).on("click", ".GeneralTune input", function (event) {
                    var args = '#' + event.target.id;
                    // alert(args);
                    test(args)
                });
                function test(args)
                {
                    if ($(args).is(":checked"))
                    {
                        var subtotal = Number($(args).val());
                        Total = subtotal + Total;
                        $("#Total").text(Total.toFixed(2));
                    } else
                    {
                        var subtotal = Number($(args).val() * -1);
                        Total = subtotal + Total;
                        $("#Total").text(Total.toFixed(2));
                    }
                }
                /* $(document).on("click", "#ChainInstall", function () {
                 alert($(this).document.);
                 if ($("#ChainInstall").is(":checked"))
                 {
                 var subtotal = Number($("#ChainInstall").val());
                 //alert($("#Total").text());
                 Total = subtotal + Total;
                 $("#Total").text(Total.toFixed(2));
                 } else
                 {
                 //alert($("#ChainInstall").val() * -1);
                 var subtotal = Number($("#ChainInstall").val() * -1);
                 //alert($("#Total").text());
                 Total = subtotal + Total;
                 $("#Total").text(Total.toFixed(2));
                 }
                 });
                 $(document).on("click", "#AdjustDerailleur", function () {
                 if ($("#AdjustDerailleur").is(":checked"))
                 {
                 var subtotal = Number($("#AdjustDerailleur").val());
                 //alert($("#Total").text());
                 Total = subtotal + Total;
                 $("#Total").text(Total.toFixed(2));
                 } else
                 {
                 //alert($("#ChainInstall").val() * -1);
                 var subtotal = Number($("#AdjustDerailleur").val() * -1);
                 //alert($("#Total").text());
                 Total = subtotal + Total;
                 $("#Total").text(Total.toFixed(2));
                 }
                 });*/
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">     <i class="fa fa-bicycle"></i> Bikesmart</a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#General"><i class="fa fa-wrench" style="color:silver"></i> General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Premium"><i class="fa fa-wrench" style="color:gold"></i> Premium</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#Platinum"><i class="fa fa-wrench"  style="color:skyblue"></i> Platinum</a>
                    </li> 
                </ul>
            </div> 

        </nav>
        <div class="container">

            <div class="jumbotron jumbotron-fluid bg-white">
                <div class="container">
                    <h1><span class="rounded-circle"><i class="fa fa-check"></i> </span>Bikesmart tip of the Day</h1> 
                    <p>Bootstrap is the most popular HTML, CSS...</p> 
                </div>
            </div>
            <section>
                <div class="" id="Standard">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header bg-basic text-grey-darker"><h3>General</h3></div> 
                                <div class="card-body bg-basic">
                                    <div class="GeneralTune" id="General">
                                        <ul style="list-style:none">
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Chain Install
                                            <input type="checkbox" id="ChainInstall" value="13.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Adjust Derailleur (each)
                                            <input type="checkbox" id="AdjustDerailleur" value="26.00" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Derailleur Install (each)
                                            <input type="checkbox" id="DerailleurInstall" value="26.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>MTB Shifter Install
                                            <input type="checkbox" id="MTBShifterInstall" value="32.50" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Road Shifter Install
                                            <input type="checkbox" id="RoadShifterInstall" value="52.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Align Derailleur Hanger
                                            <input type="checkbox" id="AlignDerailleurHanger" value="26.00" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Cassette Install
                                            <input type="checkbox" id="CassetteInstall" value="26.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Bottom Bracket Install
                                            <input type="checkbox" id="BottomBracketInstall" value="39.00" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Tap Pedal Threads (each)
                                            <input type="checkbox" id="TapPedalThreads" value="39.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Drivechain Clean
                                            <input type="checkbox" id="DrivechainClean" value="52.00" >
                                            </li>
                                        </ul>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header bg-warning text-grey-darker"><h3>Premium</h3></div> 
                                <div class="card-body">
                                    <div class="GeneralTune" id="Premium">
                                        <ul style="list-style:none">
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Chain Install
                                            <input type="checkbox" id="ChainInstall" value="13.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Adjust Derailleur (each)
                                            <input type="checkbox" id="AdjustDerailleur" value="26.00" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Derailleur Install (each)
                                            <input type="checkbox" id="DerailleurInstall" value="26.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>MTB Shifter Install
                                            <input type="checkbox" id="MTBShifterInstall" value="32.50" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Road Shifter Install
                                            <input type="checkbox" id="RoadShifterInstall" value="52.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Align Derailleur Hanger
                                            <input type="checkbox" id="AlignDerailleurHanger" value="26.00" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Cassette Install
                                            <input type="checkbox" id="CassetteInstall" value="26.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Bottom Bracket Install
                                            <input type="checkbox" id="BottomBracketInstall" value="39.00" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Tap Pedal Threads (each)
                                            <input type="checkbox" id="TapPedalThreads" value="39.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Drivechain Clean
                                            <input type="checkbox" id="DrivechainClean" value="52.00" >
                                            </li>
                                        </ul>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header text-grey-darker" style="background:skyblue"><h3>Platinum</h3></div> 
                                <div class="card-body">
                                    <div class="GeneralTune" id="Platinum">
                                        <ul style="list-style:none">
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Chain Install
                                            <input type="checkbox" id="ChainInstall" value="13.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Adjust Derailleur (each)
                                            <input type="checkbox" id="AdjustDerailleur" value="26.00" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Derailleur Install (each)
                                            <input type="checkbox" id="DerailleurInstall" value="26.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>MTB Shifter Install
                                            <input type="checkbox" id="MTBShifterInstall" value="32.50" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Road Shifter Install
                                            <input type="checkbox" id="RoadShifterInstall" value="52.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Align Derailleur Hanger
                                            <input type="checkbox" id="AlignDerailleurHanger" value="26.00" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Cassette Install
                                            <input type="checkbox" id="CassetteInstall" value="26.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Bottom Bracket Install
                                            <input type="checkbox" id="BottomBracketInstall" value="39.00" >
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Tap Pedal Threads (each)
                                            <input type="checkbox" id="TapPedalThreads" value="39.00" > 
                                            </li>
                                            <li><i class="fa fa-cog"></i>
                                            <caption/>Drivechain Clean
                                            <input type="checkbox" id="DrivechainClean" value="52.00" >
                                            </li>
                                        </ul>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-sm-12">
                            <center>
                                <div class="card">
                                    <div class="title m-b-md" style="font-size:50px">
                                        <label>Total</label> <i class="fa fa-dollar-sign" style="font-size:40px"></i><span id="Total">0.00</span> BBD
                                    </div>
                                </div> 
                            </center>

                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="footer">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 ">                        
                    <h5>Follow Us</h5>
                    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
                    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
                    <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                    <p style="font-size:small">Powered by <a href="https://www.kitjistudios.com" target="_blank">Kitji Studios</a></p>
                </div>
                 <div class="col-sm-4"></div>
            </div>
        </div>

    </body>
</html>