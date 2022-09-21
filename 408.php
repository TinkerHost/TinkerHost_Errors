<!DOCTYPE html>
<html>
<head>
    <title>408 Error</title>
    <style>
        html,body {
         height: 100%;
        }

        .box {
         height: 100%;
         display: flex;
         justify-content: center;
         align-items: center;
         width:100%;
         height: 100%;
         background: rgb(200,0,255);
         background: linear-gradient(90deg, rgba(176,217,182,1) 0%, rgba(189,244,250,1) 47%, rgba(170,193,215,1) 100%);
         background-size: 600% 100%;
         animation: gradient 16s linear infinite;
         animation-direction: alternate;
         }
         @keyframes gradient {
             0% {background-position: 0%}
             100% {background-position: 100%}
         }
         h1{
            font-size: 50px;
         }
         p{
            font-size: 25px;
            font-weight: bold;
         }
         a{
            color: green;
            text-decoration: none;
         }
    </style>
</head>
<body>
    <div class="box">
        <div style="text-align: center;">
            <h1>408 Error - Connection Timed Out</h1>
            <br>
            <p>Things are going a little slow. Please try refeshing the page or checking your internat connection.</p>
            <br><br>
            <p><a href="https://tinkertechlab.com/webhosting/http-status-codes/408?ref=tinkerhost-client-error&type=click&placement=408-error" target="_blank">Learn more about this error</a></p>
            <br><br>
            <p>This website is hosted with TinkerHost, <a href="https://tinkerhost.net?ref=client-error-page&type=click&placement=get-free-website-link">get your free website today</a>!</p>
        </div>
    </div>
</body>