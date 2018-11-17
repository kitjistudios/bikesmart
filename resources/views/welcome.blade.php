<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bikesmart</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
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

        }        
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
        <div class="flex-center position-ref full-height wrapper">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
            @endif
            <div class="container-fluid" style="width:inherit">
                <div class="page-content" >
                    <div class="title m-b-md">
                        <i class="fa fa-bicycle"></i>    Bikesmart
                        <br>

                        <label>Total </label> <i class="fa fa-dollar-sign" style="font-size:60px"></i><span id="Total">0.00</span> <label style="font-size:60px"/>BBD

                    </div>
                    <div class="page-content-row">
                        <div class="GeneralTune">
                            <ul style="list-style:none">
                                <li>
                                <caption/>Chain Install
                                <input type="checkbox" id="ChainInstall" value="13.00" > 
                                </li>
                                <li>
                                <caption/>Adjust Derailleur (each)
                                <input type="checkbox" id="AdjustDerailleur" value="26.00" >
                                </li>
                                <li>
                                <caption/>Derailleur Install (each)
                                <input type="checkbox" id="DerailleurInstall" value="26.00" > 
                                </li>
                                <li>
                                <caption/>MTB Shifter Install
                                <input type="checkbox" id="MTBShifterInstall" value="32.50" >
                                </li>
                                <li>
                                <caption/>Road Shifter Install
                                <input type="checkbox" id="RoadShifterInstall" value="52.00" > 
                                </li>
                                <li>
                                <caption/>Align Derailleur Hanger
                                <input type="checkbox" id="AlignDerailleurHanger" value="26.00" >
                                </li>
                                <li>
                                <caption/>Cassette Install
                                <input type="checkbox" id="CassetteInstall" value="26.00" > 
                                </li>
                                <li>
                                <caption/>Bottom Bracket Install
                                <input type="checkbox" id="BottomBracketInstall" value="39.00" >
                                </li>
                                <li>
                                <caption/>Tap Pedal Threads (each)
                                <input type="checkbox" id="TapPedalThreads" value="39.00" > 
                                </li>
                                <li>
                                <caption/>Drivechain Clean
                                <input type="checkbox" id="DrivechainClean" value="52.00" >
                                </li>
                            </ul>   
                        </div>

                    </div>


                </div>
            </div>


            <!--                                  -<div class="links">
                <a h                                   ref="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>-->
        </div>
    </div>
</body>
</html>