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
                background-image: url("./bg.jpg");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
            }
            .headlineText{
                -webkit-user-select:none;
                -moz-user-select:none;
                user-select:none;
                position:absolute;
                color:white;
                font-size:13vh;
                margin-left:66vh;
                margin-top:3vh;
            }
            .mainLogo{
                position:absolute;
                width: 12vh;
                height: 15vh;
                background-image: url("./rpiLogo.png");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                margin-top:5vh;
                margin-left:100vh;
            }
            p{
                -webkit-background-clip: text;
                font-family: 'Nunito', sans-serif;
            }
            main{
                position:absolute;
                width:50vh;
                height:70vh;
                background-color:black;
                margin-left:75vh;
                margin-top:23vh;
                background: url("./bgbg.png") padding-box,
                linear-gradient(to right, red, purple,yellow) border-box;
                border-radius: 25px;
                border: 10px solid transparent;
                
                background-repeat: no-repeat;
                background-position: center;
            }
            .gameBtn{
                width:40vh;
                height:10vh;
                background-color:rgb(77, 77, 77);
                margin-left: 5vh;
                margin-top: 10vh;
                border-radius: 25px;
                border-style: solid;
                border-width:5px;
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
        </style>
    <style type="text/css" id="operaUserStyle"></style><link id="operaalerabat-link" rel="stylesheet" type="text/css" href="chrome-extension://eplcjggklbefnipglcfdfalbbjpmkbkl/content.css"></head>
    <body>
        <p class="headlineText">Rasp &nbsp;&nbsp;&nbsp;&nbsp; dle</p>
        <div class="mainLogo"></div>
        <main>
            <button class="gameBtn"><p class="textos">Spec guessing</p></button>
            <button class="gameBtn"><p class="textos">Photo guessing</p></button>
            <button class="gameBtn"></button>
        </main>
    </body>
</html>