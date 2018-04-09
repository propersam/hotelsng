<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HNG TAsk1</title>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;

    }

    .fill-viewport {
        min-height: 100vh;
    }

    .container {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0 auto;
        width: 100%;
        background: linear-gradient(rgba(177, 149, 25,1),
    rgba(92, 63, 2, 0.5)), url('.\\backgrndimg.jpg') 0% 0%/cover;
        background: -moz-linear-gradient(rgba(177, 149, 25,1),
    rgba(92, 63, 2, 0.8)),
     url('.\\backgrndimg.jpg') 0% 0%/cover;
        background: -o-linear-gradient(rgba(177, 149, 25,1),
    rgba(92, 63, 2, 0.8)),
     url('.\\backgrndimg.jpg') 0% 0%/cover;
     background: -webkit-linear-gradient(rgba(177, 149, 25,1),
    rgba(92, 63, 2, 0.8)),
     url('.\\backgrndimg.jpg') 0% 0%/cover;
    }

    .info {
        padding: 50px 100px;
        color: rgba(255, 5, 5, 0.8);
        font-size: 50px;
    }

    .timer {
        background: #3f7206;
        width: 300px;
        height: 100px;
        margin-top: 150px;
        margin-left: 650px;
        text-align: center;
    }
    
    .black {
        color:black; 
        padding: 20px 0px; 
        font-size: 25px; 
        font-weight: bold;
    }

    .white {
        color:white;
        padding: 20px 0px; 
        font-size: 40px; 
    }
</style>
<body>
    <div class="container fill-viewport">
        <h1 class="info">TIME WAITS FOR NO ONE</h1>
        <div class="timer">
                <span class = 'black'> 
                    <strong> <?php echo date('M d Y'); ?> </strong> </span>
                    <br>
                <span class = 'white'> 
                    <strong> <?php echo date('h:m:s a'); ?> </strong> </span>
            
        </div>
    </div>
</body>
</html>
