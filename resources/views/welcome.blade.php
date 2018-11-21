<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bike Smart Bicycle Repair Centre</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

            /* The switch - the box around the slider */
            .switch {
                position: relative;
                display: inline-block;
                width: 48px;
                height: 23px;
            }

            /* Hide default HTML checkbox */
            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            /* The slider */
            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 18px;
                width: 18px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked + .slider {
                background-color: #2196F3;
            }

            input:focus + .slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked + .slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
            /* The side navigation menu */
            .sidenav {
                height: 100%; /* 100% Full-height */
                width: 0; /* 0 width - change this with JavaScript */
                position: fixed; /* Stay in place */
                z-index: 1; /* Stay on top */
                top: 0; /* Stay at the top */
                left: 0;
                background-color: #111; /* Black*/
                overflow-x: hidden; /* Disable horizontal scroll */
                padding-top: 60px; /* Place content 60px from the top */
                transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
            }

            /* The navigation menu links */
            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            /* When you mouse over the navigation links, change their color */
            .sidenav a:hover {
                color: #f1f1f1;
            }

            /* Position and style the close button (top right corner) */
            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
            #main {
                transition: margin-left .5s;
                padding: 20px;
            }

            /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }
            
            
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                var Total = 0;
                $(document).on("click", ".DriveTrain input", function (event) {
                    var args = '#' + event.target.id;
                    // alert(args);
                    CalculateTotal(args)
                });
                $(document).on("click", ".BuildBoxing input", function (event) {
                    var args = '#' + event.target.id;
                    CalculateTotal(args)
                });
                $(document).on("click", ".Wheels input", function (event) {
                    var args = '#' + event.target.id;
                    CalculateTotal(args)
                });
                $(document).on("click", ".CockPit input", function (event) {
                    var args = '#' + event.target.id;
                    // alert(args);
                    CalculateTotal(args)
                });
                $(document).on("click", ".Brakes input", function (event) {
                    var args = '#' + event.target.id;
                    CalculateTotal(args)
                });
                $(document).on("click", ".AccessoryInstalls input", function (event) {
                    var args = '#' + event.target.id;
                    CalculateTotal(args)
                });

                function CalculateTotal(args)
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
                $(document).on("click", "#Policies", function () {
                    // alert('Hello');
                    document.getElementById("mySidenav").style.width = "100%";
                });
                $(document).on("click", "#SideNav", function () {
                    // alert('Hello');
                    document.getElementById("mySidenav").style.width = "0";
                });

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
                        <a class="nav-link" href="#ContactUs"><i class="fa fa-id-card"></i> Contact</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#Services"><i class="fa fa-wrench" ></i> Services</a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-star"></i> Tune Up Packages</a>
                        <div class="dropdown-menu bg-dark">
                            <a class="nav-link" href="#TuneUps"><i class="fa fa-star" style="color:white"></i> Basic</a>
                            <a class="nav-link" href="#TuneUps"><i class="fa fa-star" style="color:silver"></i> General</a>
                            <a class="nav-link" href="#TuneUps"><i class="fa fa-star" style="color:gold"></i> Premium</a>
                            <a class="nav-link" href="#TuneUps"><i class="fa fa-star"  style="color:skyblue"></i> Platinum</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="openNav()" id="Policies"> Policies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About"><i class="fa fa-question-mark"></i> About</a>
                    </li> 
                </ul>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="SideNav">&times;</a>
                <section id="Policies">
                    <div class="row"  style="margin-top:10px">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header bg-danger text-white text-center">
                                    <h3><i class="fa fa-exclamation"></i> Repairs</h3>
                                </div>
                                <div class="card-body card-border-danger text-left">
                                    <p class="text-transform" style="text-transform:uppercase"><i class="fa fa-bell"></i> Time frame for repairs is usually 1-2 weeks; however we will try to return your bike in the shortest possible time</p>
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header bg-danger text-white text-center">
                                    <h3><i class="fa fa-exclamation"></i> Notice</h3>
                                </div>
                                <div class="card-body card-border-danger text-left">
                                    <ul class="text-transform" style="text-transform:uppercase; list-style:none">
                                        <li>
                                            <i class="fa fa-bell"></i> All orders are placed on Wednesday only
                                        </li>
                                        <li>
                                            <i class="fa fa-bell"></i> Special orders must be paid in full
                                        </li>
                                        <li>
                                            <i class="fa fa-bell"></i> A 50% deposit is required on all repairs. If there is no deposit we cannot take your Bike/Bikes
                                        </li>
                                        <li>
                                            <i class="fa fa-bell"></i> All bicycles not collected will be sold after 60 days in order to recover labour costs or repairs completed
                                        </li>
                                        <li>
                                            <i class="fa fa-bell"></i> After 10 days there will be a storage fee of $10 per day
                                        </li>
                                        <li>
                                            <i class="fa fa-bell"></i> After 60 days your bike/bikes will be sold or donated
                                        </li>
                                    </ul>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="jumbotron bg-white">
                <img src={{asset('/bikesmarttools2.jpg')}}  alt="" width="100%" height="500px"/>
                <form class="form-inline" style="margin-top:25px">
                    <div class="input-group">
                        <input type="email" class="form-control" size="50" placeholder="Email Address" required/>
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-basic"> Subscribe </button>
                        </div>
                    </div>
                </form>
            </div> 
            <section id="TuneUps">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card border-basic" >
                            <div data-toggle="collapse" data-target="#Basic" class="card-header bg-white text-grey-darker text-center">
                                <h3 > <i class="fa fa-star"></i> Bike Detail <i class="fa fa-dollar-sign"></i>70</h3>
                                <h5>between tune up as needed</h5>
                            </div> 
                            <div class="card-body bg-basic text-justify">
                                <div class="Basic " id="Basic">
                                    <ul style="list-style:none">
                                        <li>
                                            <i class="fa fa-cog"></i> Drive train cleaning
                                        </li>
                                        <li>
                                            <i class="fa fa-cog"></i> Detailed frame cleaning
                                        </li>
                                        <li>
                                            <i class="fa fa-cog"></i> Drivetrain lubrication
                                        </li>
                                        <li>
                                            <i class="fa fa-exclamation"></i> No tuning of components
                                        </li>
                                        <li>
                                            <i class="fa fa-exclamation"></i> Extra fee may apply for excessively dirty bike
                                        </li>                                        
                                    </ul>   
                                </div>

                            </div>
                        </div>
                    </div>  
                    <div class="col-md-3">
                        <div class="card border-basic">
                            <div data-toggle="collapse" data-target="#General" class="card-header bg-basic text-grey-darker text-center">
                                <h3 > <i class="fa fa-star"></i> General Tune <i class="fa fa-dollar-sign"></i>104</h3>
                                <h5>recommended 6 month intervals</h5>
                            </div> 
                            <div class="card-body bg-basic text-justify">
                                <div class="PremiumTune " id="Premium">
                                    <ul style="list-style:none">
                                        <li>
                                            <i class="fa fa-cog"></i> Gear Adjustment
                                        </li>
                                        <li>
                                            <i class="fa fa-cog"></i> Brake Tuning
                                        </li>
                                        <li>
                                            <i class="fa fa-cog"></i> Wheel Truing
                                        </li>
                                        <li>
                                            <i class="fa fa-cog"></i> Torque Fasteners
                                        </li>
                                        <li>
                                            <i class="fa fa-cog"></i> Lubricate Bicycle
                                        </li>
                                        <li>
                                            <i class="fa fa-cog"></i> Wipe Down Frame
                                        </li>
                                        <li>
                                            <i class="fa fa-cog"></i> Overall Safety Inspection
                                        </li>
                                    </ul>   
                                </div>

                            </div>
                        </div>
                    </div>  
                    <div class="col-md-3">
                        <div class="card border-warning">
                            <div data-toggle="collapse" data-target="#Premium" class="card-header bg-warning text-grey-darker text-center">
                                <h3><i class="fa fa-star"></i> Premium <i class="fa fa-dollar-sign"></i>156</h3>
                                <h5>recommended 12 month intervals</h5>
                            </div> 
                            <div class="card-body text-left">
                                <div class="PremiumTune" id="Premium">
                                    <ul style="list-style:none">
                                        <li><i class="fa fa-cog"></i> General Tune PLUS
                                        </li>
                                        <li><i class="fa fa-cog"></i> Check & adjust hubs, headset and bottom bracket
                                        </li>                                        
                                        <li><i class="fa fa-cog"></i> Detailed wipe down of frame and wheels
                                        </li>
                                        <li><i class="fa fa-cog"></i> Fully degrease drive train,chain,chain rings cassette
                                        </li>                                    
                                    </ul>      
                                </div>
                            </div>
                        </div>  
                    </div>  
                    <div class="col-md-3">
                        <div class="card border-info">
                            <div data-toggle="collapse" data-target="#Platinum" class="card-header text-grey-darker text-center" style="background:skyblue">
                                <h3><i class="fa fa-star"></i> Platinum <i class="fa fa-dollar-sign"></i>325</h3>
                                <h5>recommended 24 month intervals</h5>
                            </div> 
                            <div class="card-body text-left">
                                <div class="PlatinumTune" id="Platinum">
                                    <ul style="list-style:none">
                                        <li><i class="fa fa-cog"></i> Premium Tune PLUS
                                        </li>
                                        <li><i class="fa fa-cog"></i> New brake &AMP; cable housings
                                        </li>
                                        <li><i class="fa fa-cog"></i> New derailleur cable housings
                                        </li>
                                        <li><i class="fa fa-cog"></i> Removal of all components for cleaning, degreasing & lubrication
                                        </li>
                                        <li><i class="fa fa-cog"></i> Lubrication of all moving parts
                                        </li>
                                        <li><i class="fa fa-cog"></i> Intensive frame & component inspection
                                        </li>
                                    </ul>      
                                </div>
                            </div>
                        </div>  
                    </div>  
                </div>
            </section>
            <section id="SingleSpeed">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-header text-grey-darker" style="background:#ffffff" >
                                <h3><i class="fa fa-star"></i> Single Speed and Tune <i class="fa fa-dollar-sign"></i>52</h3>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </section>
            <section id="Services" style="margin-top:5%">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <div data-toggle="collapse" data-target="#DriveTrain" class="card-header bg-basic text-grey-darker text-center">
                                <h4> <i class="fa fa-wrench"></i> Drive Train</h4>
                            </div> 
                            <div class="card-body bg-basic DriveTrain collapse" style="font-size:medium;" id="DriveTrain">
                                <div class="" >
                                    <ul style="list-style:none">
                                        <li><i class="fa fa-cog"></i>
                                            Chain Install                                           
                                            <label class="switch">
                                                <input type="checkbox" id="ChainInstall" value="13.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i>
                                            Adjust Derailleur (each)
                                            <label class="switch">
                                                <input type="checkbox" id="AdjustDerailleur" value="26.00" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i>
                                            Derailleur Install (each)
                                            <label class="switch">
                                                <input type="checkbox" id="DerailleurInstall" value="26.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i>
                                            MTB Shifter Install
                                            <label class="switch">
                                                <input type="checkbox" id="MTBShifterInstall" value="32.50" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i>
                                            Road Shifter Install
                                            <label class="switch">
                                                <input type="checkbox" id="RoadShifterInstall" value="52.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i>
                                            Align Derailleur Hanger
                                            <label class="switch">
                                                <input type="checkbox" id="AlignDerailleurHanger" value="26.00" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i>
                                            Cassette Install
                                            <label class="switch">
                                                <input type="checkbox" id="CassetteInstall" value="26.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i>
                                            Bottom Bracket Install
                                            <label class="switch">
                                                <input type="checkbox" id="BottomBracketInstall" value="39.00" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i>
                                            Tap Pedal Threads (each)
                                            <label class="switch">
                                                <input type="checkbox" id="TapPedalThreads" value="39.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i>
                                            Drivechain Clean
                                            <label class="switch">
                                                <input type="checkbox" id="DrivechainClean" value="52.00" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div data-toggle="collapse" data-target="#BuildBoxing" class="card-header bg-basic text-grey-darker text-center">
                                <h4> <i class="fa fa-wrench"></i> Build Boxing</h4>
                            </div> 
                            <div class="card-body bg-basic BuildBoxing collapse" style="font-size:medium;" id="BuildBoxing">
                                <div >
                                    <ul style="list-style:none; ">
                                        <li><i class="fa fa-cog"></i> Assemble with gears                                                                                  
                                            <label class="switch">
                                                <input type="checkbox" id="AssembleGears" value="104.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Assemble Single Speed                                 
                                            <label class="switch">
                                                <input type="checkbox" id="AssembleSingleSpeed" value="65.00" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Assemble from frame and parts                                   
                                            <label class="switch">
                                                <input type="checkbox" id="AssembleFrameParts" value="195.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Disassemble to frame and parts                                    
                                            <label class="switch">
                                                <input type="checkbox" id="DisassembleFrameParts" value="65.50" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Box Bike                               
                                            <label class="switch">
                                                <input type="checkbox" id="BoxBike" value="65.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                    </ul>   
                                </div>
                            </div> 
                        </div>                      
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div data-toggle="collapse" data-target="#Wheels" class="card-header bg-basic text-grey-darker text-center">
                                <h4> <i class="fa fa-wrench"></i> Wheels</h4>
                            </div> 
                            <div class="card-body bg-basic Wheels collapse" style="font-size:medium;" id="Wheels">
                                <div>
                                    <ul style="list-style:none">
                                        <li><i class="fa fa-cog"></i> Tire/Tube Install                                                                                  
                                            <label class="switch">
                                                <input type="checkbox" id="TireInstall" value="13.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Wheel Truing                                
                                            <label class="switch">
                                                <input type="checkbox" id="WheelTruing" value="26.00" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Adjust Bearing/Cones (each)                                   
                                            <label class="switch">
                                                <input type="checkbox" id="AdjustBearing" value="26.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Build Custom Wheel                                    
                                            <label class="switch">
                                                <input type="checkbox" id="BuildWheel" value="104.50" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Tubular Tire Install                               
                                            <label class="switch">
                                                <input type="checkbox" id="TubularTire" value="45.50" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Spoke Install                               
                                            <label class="switch">
                                                <input type="checkbox" id="SpokeInstall" value="26.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Repack Bearings                              
                                            <label class="switch">
                                                <input type="checkbox" id="RepackBearings" value="26.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                    </ul>   
                                </div>
                            </div> 
                        </div>                    
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div data-toggle="collapse" data-target="#CockPit" class="card-header bg-basic text-grey-darker text-center">
                                <h4> <i class="fa fa-wrench"></i> CockPit</h4>
                            </div>
                            <div class="card-body bg-basic CockPit collapse" style="font-size:medium;" id="CockPit">
                                <div>
                                    <ul style="list-style:none">
                                        <li><i class="fa fa-cog"></i> Fork Install <span style="font-size:smaller">(cut steering tube)</span>
                                            <label class="switch">
                                                <input type="checkbox" id="ForkInstall" value="52.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Headlight Install
                                            <label class="switch">
                                                <input type="checkbox" id="Headlight" value="32.50" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Bar Tape Install
                                            <label class="switch">
                                                <input type="checkbox" id="BarTape" value="13.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Handlebar Install
                                            <label class="switch">
                                                <input type="checkbox" id="HandleBar" value="32.50" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Aero Bar Install
                                            <label class="switch">
                                                <input type="checkbox" id="AeroBar" value="45.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                    </ul>   
                                </div>
                            </div>
                        </div>                     
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div data-toggle="collapse" data-target="#Brakes" class="card-header bg-basic text-grey-darker text-center">
                                <h4> <i class="fa fa-wrench"></i> Brakes</h4>
                            </div>
                            <div class="card-body bg-basic Brakes collapse" style="font-size:medium;" id="Brakes">
                                <div >
                                    <ul style="list-style:none">
                                        <li><i class="fa fa-cog"></i> Cable Housing & Install
                                            <label class="switch">
                                                <input type="checkbox" id="CableHousing" value="36.40" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Cable & Install
                                            <label class="switch">
                                                <input type="checkbox" id="CableInstall" value="36.40" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Disc Brake Bleed
                                            <label class="switch">
                                                <input type="checkbox" id="BrakeBleed" value="52.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Brake Adjust (each)
                                            <label class="switch">
                                                <input type="checkbox" id="BrakeAdjust" value="26.00" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Brake Pad Install(per)
                                            <label class="switch">
                                                <input type="checkbox" id="PadInstall" value="26.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Disc Brake Pad Install
                                            <label class="switch">
                                                <input type="checkbox" id="DiscPadInstall" value="26.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div data-toggle="collapse" data-target="#AccessoryInstalls" class="card-header bg-basic text-grey-darker text-center">
                                <h4> <i class="fa fa-wrench"></i> Accessories </h4>
                            </div> 
                            <div class="card-body bg-basic AccessoryInstalls collapse" style="font-size:medium;" id="AccessoryInstalls">
                                <div>
                                    <ul style="list-style:none">
                                        <li><i class="fa fa-cog"></i> Basic Computer Install
                                            <label class="switch">
                                                <input type="checkbox" id="ComputerInstall" value="19.50" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> GPS/Power Meter Install
                                            <label class="switch">
                                                <input type="checkbox" id="GPSInstall" value="65.00" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Fender Install
                                            <label class="switch">
                                                <input type="checkbox" id="FenderInstall" value="26.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Rear Rack Install
                                            <label class="switch">
                                                <input type="checkbox" id="RearRack" value="19.50" >
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                        <li><i class="fa fa-cog"></i> Baby Seat Install
                                            <label class="switch">
                                                <input type="checkbox" id="BabySeat" value="26.00" > 
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                    </ul>   
                                </div>
                            </div> 
                        </div>                        
                    </div>
                </div>
            </section>
            <section id="ServiceTotal">
                <div class="row" style="margin-top:10px">
                    <div class="col-sm-12">
                        <center>
                            <div class="card ">
                                <div class="title m-b-md" style="font-size:40px">
                                    <label>Total</label> <i class="fa fa-dollar-sign" style="font-size:40px"></i><span id="Total">0.00</span> BBD
                                </div>
                            </div> 
                        </center>
                    </div>
                </div>                
            </section>      
            <section id="Footer">
                <div class="row"  style="margin-top:10px">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <div class="card" id="ContactUs">
                            <div class="card-header text-grey-darker text-center" style="background:#ffffff">
                                <h3 ><i class="fa fa-id-card"></i> Contact Us</h3>
                            </div>
                            <div class="card-body text-center">
                                <ul style="list-style:none" class="text-justify">
                                    <li>                            
                                        <p><i class="fa fa-map-marker"></i> Lot 31 Valley Land, Barbados<br></p>
                                    </li>
                                    <li>                                                          
                                        <p>  <i class="fa fa-calendar"></i> Hours Opens Mon-Fri 8 AM -4 PM</p>
                                        <p>  <i class="fa fa-calendar"></i> Hours Opens Sat 11 AM -1 PM</p>
                                    </li>
                                    <li> 
                                        <i class="fa fa-phone"></i> 
                                        <a href="tel:+1 246-572-2453">+1 246-572-2453</a>
                                    </li>  
                                </ul>
                                <div class="container ">
                                    <a class="" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook" style="font-size:40px" ></i></a>
                                    <a class="" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter" style="font-size:40px"></i></a>
                                    <a class="" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus" style="font-size:40px"></i></a>
                                    <a class="" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram" style="font-size:40px"></i></a>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </section>
        </div>
        <p class="text-center" style="margin-top:5%">Powered by <a href="https://www.kitjistudios.com" target="_blank">Kitji Studios</a></p>  
        <script>
            function myMap()

            {

                myCenter = new google.maps.LatLng(13.1315939, -59.5650427);

                var mapOptions = {

                    center: myCenter,

                    zoom: 12, scrollwheel: false, draggable: false,

                    mapTypeId: google.maps.MapTypeId.ROADMAP

                };

                var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);



                var marker = new google.maps.Marker({

                    position: myCenter,

                });

                marker.setMap(map);

            }
        </script> 
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP9BvX2_TEYdAaHD1lh4006DnP4gT47gg&amp;callback=myMap"></script>
    </body>
</html>