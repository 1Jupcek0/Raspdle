<html lang="cz">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap');
            img{visibility: hidden;}
            body{
                margin:0;
                width:99.9%;
                height:99.9%;
                background-image: url("./pics/bg.jpg");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
            }
            .headlineText{
                width:65vh;
                height:10vh;
                background-color:blue;
                -webkit-user-select:none;
                -moz-user-select:none;
                user-select:none;
                color:white;
                font-size:13vh;
                margin:auto;
            }
            .mainLogo{
                width: 12vh;
                height: 15vh;
                background-image: url("./pics/rpiLogo.png");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                margin-left: 103.5vh;
                margin-top:-7vh;
            }
            p{
                -webkit-background-clip: text;
                font-family: 'Nunito', sans-serif;
            }
            main{
                width:50vh;
                height:70vh;
                background-color: rgb(3,124,89);
                margin:auto;
                margin-top:5vh;
                
                border-radius: 3vh;
                border: 1vh solid white;
                
                background-image: url("./pics/bgbg.png");
                background-repeat: no-repeat;
                background-position: center;
                background-size: 47vh;
            }
            .gameBtn{
                width:40vh;
                height:10vh;
                background-color: grey;
                margin-left: 5vh;
                margin-top: 10vh;
                border-radius: 3vh;
                border-style: solid;
                border-width: .5vh;
                border-color: rgb(255, 255, 255);
                cursor: pointer;
            }
            .textos{
                -webkit-user-select:none;
                -moz-user-select:none;
                position:relative;
                font-size:5vh;
                top: -4vh;
                color: white;
            }
            form{
                top:0;
                left:0;
                right:0;
                bottom:0;
                padding-top:0px;
                margin-block-end: 0em;
            }
        </style>
    <style type="text/css" id="operaUserStyle"></style><link id="operaalerabat-link" rel="stylesheet" type="text/css" href="chrome-extension://eplcjggklbefnipglcfdfalbbjpmkbkl/content.css"></head>
    <body>
        <p class="headlineText">Rasp &nbsp;&nbsp;&nbsp; dle</p>
        <div class="mainLogo"></div>
        <main>
            <form action="./Specifications.php" method="POST" autocomplete="off">
                <button class="gameBtn"><p class="textos">Specifications</p></button>
            </form>
            <form action="./Photos.php" method="POST" autocomplete="off">
                <button class="gameBtn"><p class="textos">Photos</p></button>
            </form>
            <form action="https://github.com/1Jupcek0/Raspdle" method="POST" autocomplete="off" target="_blank">
                <button class="gameBtn"><p class="textos">Github</p></button>
            </form>
        </main>
    </body>
</html>