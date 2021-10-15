<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>RecipeMaster</title>
        <link rel="stylesheet" href="/css/app.css">
        <style>
            footer#layout{

                padding: 20px;
                padding-top: 40px;
                color: #fff;
                background: #333;
            }
            nav#barcolor{
                background-color: #fbd5c0;
            }
            div#first{
                background-image: url('/img/backg/strawberryBack.png');
                background-size: 2020px;
                background-blend-mode: darken;
                
                width: 100%;
                height: 100%;;
            }
            div#box{
                background-color: #fbd5c0;
                width: 600px;
            }
            .container1 {
                position: relative;
                max-width: 800px; /* Maximum width */
                margin: 0 auto; /* Center it */
            }

            .container1 .content1 {
                position: absolute; /* Position the background text */
                bottom: 0; /* At the bottom. Use top:0 to append it to the top */
                background: rgb(0, 0, 0); /* Fallback color */
                background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                color: #f1f1f1; /* Grey text */
                width: 100%; /* Full width */
                padding: 20px; /* Some padding */
            }
            .submissionfield { 
                width: 400px; 
                height: 390px; 
                padding: 5px; }
        </style>
        <!-- Bootstrap CSS -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous"
        />
    </head>
    <body>
        
        @include('inc.navbar')
        <!-- <div id="first"></div> -->
        <div id="first" style="position: relative; min-height:100vh; width:600;">
            <div style=" background: rgba(255, 255, 255, 0.5);">
                <div class="container" style="position: relative; min-height:100vh;">
                    <div  style="padding-bottom: 2.5rem">
                        <div  style="text-align: left; padding-right: 30px; padding-top: 35px;"> 
                            @yield('content') 
                        </div>           
                    </div>
                </div>            
            </div>
        </div>
        
        
        <footer id="layout" class="text-center" style="bottom: 0; position: relative; width: 100%; background-color: #fbd5c0">
            <p style="color: black;">Copyright 2021 &copy; RecipeMaster</p>
        </footer>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"
        ></script>  
    </body>
</html>