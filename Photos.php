<html lang="cz">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap');
            img{visibility: hidden;}
            /* AUTOCOMPLETE */
            .autocomplete {
                position: relative;
                display: inline-block;
            }
            .autocomplete-items {
                position: absolute;
                border: 0px solid #d4d4d4;
                border-bottom: none;
                border-top: none;
                z-index: 99;
                /*position the autocomplete items to be the same width as the container:*/
                width: 25vh;
                height: 2vh;
            }
            /*when hovering an item:*/
                .autocomplete-items div:hover {
                background-color: red; 
            }
            /*when navigating through the items using the arrow keys:*/
            .autocomplete-active {
                background-color: red !important; 
                color: #ffffff; 
            }
            .autocomplete-items div {
                padding: 10px;
                cursor: pointer;
                background-color: #fff; 
                border-bottom: 1px solid #d4d4d4; 
            }

            /**/
            body{
                margin:0;
                width:99.9%;
                height:99.9%;
                background-image: url("./pics/bg.jpg");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                font-family: 'Nunito', sans-serif;
            }
            body::-webkit-scrollbar {
                display: none;
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
            .mainmainu{
                width:100%;
                height:50px;
                margin-bottom:0vh;
            }
            main{
                width: fit-content;
                height: 15vh;
                display: flex;
                padding-left:2vh;
                padding-right:2vh;
                gap:2vh;
                background-color: rgb(3,124,89);
                align-items: center;
                border-radius: 3vh;
                border: .5vh solid transparent;
                
                margin:auto;
                margin-top: 20vh;
                background-repeat: no-repeat;
                background-position: center;
            }
            form{
                top:0;
                left:0;
                right:0;
                bottom:0;
                padding-top:0px;
                margin-block-end: 0em;
            }
            .infobg{
                background-color: grey;
                height: 35vh;
                width: 50vh;
                margin: auto;
                margin-top: 5vh;
                border: .5vh white solid ;
                border-radius: .5vh;
                visibility:visible;
            }
            .piBG{
                width:100%;
                height:100%;
                
                background-repeat: no-repeat;
                background-position: center;
                background-size: 45vh;
            }
            .mainFormSubmitDiv{
                visibility: visible;
                background-color: grey;
                height: 7vh;
                width: 25vh;
                margin-top: 5vh;
                margin-left: 13vh;
                border: .5vh white solid ;
                border-radius: .5vh;
            }
            .mainFormSubmitCircle{
                position:absolute;
                visibility: visible;
                width: 7vh;
                height: 7vh;
                border-radius: 50%;
                margin-top: 1vh;
                margin-left: 42vh;
                background-color: grey;
                cursor:pointer;
                border: .5vh white solid;
            }
            .mainFormSubmitInput{
                visibility: visible;
                width: 25vh;
                height: 7vh;
                border: .5vh grey solid ;
                border-radius: .5vh;
                background-color: rgba(128, 128, 128, 0.877);
                outline: none;
                cursor:pointer;
                align-items: center;
                    display: flex;
                    flex: 1 1 auto;
                    flex-wrap: wrap;
                    width: 100%;
                    color: #495057;
                    background-clip: padding-box;
                    border-radius: 2px;
                    box-shadow: 0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12);
                color: white;   
                font-size: 2vh; 
            }
            .mainFormSubmitInput::placeholder{
                color: white;
            }
            button{
                border:none;
            }
            .thingPIName{
                text-align:center;
                margin-top:-4vh;
                width:10vh;
                height:2vh;
                color:white;
                font-size:2.5vh;
                text-shadow: 1vh 1vh 2vh black, 0 0 1em blue, 0 0 0.2em black;
            }
            .thingPI{
                width: 10vh;
                height: 10vh;
                background-color: grey;
                border-radius: 5%;
                float: left;
                margin-top:3vh;
                
                background-repeat: no-repeat;
                background-position: center;
                background-size:8vh;
                border: .2vh solid white;
            }
            @keyframes popUpBro{
                0% {
	                transform: scale(0.5);
	                opacity: 0;
                }
                100%{
                    transform: scale(1);
                    opacity: 1;
                }
            }
            .popUp1{opacity:0; animation: popUpBro .5s linear 0s 1 forwards;}
            .victoryScreen{
                position:absolute;
                width:85vh;
                height:50vh;
                margin-top:-62.5vh;
                margin-left:60vh;
                
                border-radius:15px;
                background-image:url("./pics/bgalewin.png");
                background-repeat: no-repeat;
                background-position: center;
                background-size: 90vh 51vh;
            }
            .victoryText{
                color:white;
                font-family: 'Nunito', sans-serif;
                text-align: center;
                font-size:10vh;
                background-color:rgba(0,0,0,.5);
                -webkit-user-select:none;
                -moz-user-select:none;
                user-select:none;
                margin-top:2vh;
                margin-left:18vh;
                width:50vh;
                height:12vh;
                border-radius:15px;
            }
            .victoryNewBtn{
                width:35vh;
                height:10vh;
                background-color:rgba(0,0,0,.5);
                margin-top:10vh;
                margin-left:25vh;
                -webkit-user-select:none;
                -moz-user-select:none;
                user-select:none;
                color:white;
                font-size:5vh;
                /*-webkit-background-clip: text;*/
                font-family: 'Nunito', sans-serif;
                cursor:pointer;
                border-radius:15px;
            }
            .victoryTries{
                color:white;
                /*-webkit-background-clip: text;*/
                font-family: 'Nunito', sans-serif;
                text-align: center;
                font-size: 5vh;
                margin-top:3vh;
                background-color:rgba(0,0,0,.5);
                width:25vh;
                height:8vh;
                margin-left:30vh;
                border-radius:15px;
            }
            .zpet{
                position:absolute;
                width:12vh;
                height:7vh;
                margin-top:2vh;
                margin-left:2vh;
                background-color: grey;
                cursor:pointer;
                color:white;
                font-size:3vh;
                border-radius:5px;
                border: .4vh white solid;
            }
        </style>
    <body>
        <?php
            // Inicializace proměnných 
            $winDiv = "";
            $mainBody = "";
            $index = 0;
            $tries = 0;
            $win = false;
            $thingToGuess = 0;
            
            // Načtení kolik už uživatel má pokusů
            $myfile = fopen("./photoData/photoGuessTries.txt" , "r") or die("KYSKYSFALLINLOVE1");
            $tries = fgets($myfile);
            fclose($myfile);
            
            // Dictionary na převádění PI -> Index a obráceně
            $translate = [
                "PI 1 A" => "1", 
                "PI 1 A+" => "2", 
                "PI 1 B" => "3",
                "PI 1 B+" => "4", 
                "PI 2 B" => "5", 
                "PI 3 B" => "6", 
                "PI 3 B+" => "7", 
                "PI 4 B" => "8",
                "PI 1.2" => "9",
                "PI 1.3" => "10",
                "PI W" => "11",
                "1" => "PI 1 A", 
                "2" => "PI 1 A+", 
                "3" => "PI 1 B",
                "4" => "PI 1 B+", 
                "5" => "PI 2 B", 
                "6" => "PI 3 B", 
                "7" => "PI 3 B+", 
                "8" => "PI 4 B",
                "9" => "PI 1.2",
                "10" => "PI 1.3",
                "11" => "PI W",
            ];
            
            // Pokud přoběhl POST request
            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                // Logika mezi tlačítkem NEW a SUBMIT
                if(isset($_POST['buttonNew'])){
                    $myfile = fopen("./photoData/photoGuessIndex.txt", "w") or die("Unable to open file! 050");
                    fwrite($myfile,"");
                    fclose($myfile);
                    unset($_POST['inputer']);
                }
                
                // Načtení indexu, které PI hádáme
                $myfile = fopen("./photoData/photoGuessIndex.txt", "r") or die("Unable to open file! 001");
                $index = fgets($myfile);
                fclose($myfile);
                
                // Pokud nemáme žádné PI, které by jsme měli hádat (new random index)
                if(!$index){
                    NewIndex();
                }
                $thingToGuess = $index;
                // Pokud uživatel něco napsal (zapsání do historie)
                if(!empty($_POST["inputer"])){
                    UserInputHandler();
                }
                // Zobrazení všech PI, které byli napsány, uživateli
                $myfile = fopen("./photoData/photoGuessHistory.txt","r") or die("Unable to open file! 000");
                if(!feof($myfile) && filesize("./photoData/photoGuessHistory.txt") != 0){
                    
                    $mainBody = "<main>";
                    $order = 1;
                    
                    while(!feof($myfile)) {
                        $historyLine = fgets($myfile);
                        
                        if(!$historyLine) break;
                        $goodfile = fopen("./photoData/photoGuessIndex.txt","r") or die("Unable to open file! 010");
                        $goodIndex = intval(fgets($goodfile));
                        fclose($goodfile);
                        
                        
                        if(intval($historyLine) === intval($goodIndex)){
                            $mainBody = $mainBody . "<div class=\"ThingPI" . ($order == 1 ? " popUp1" : "") . "\" style=\"background-image:url(databasePhotos/" . intval($historyLine) . ".png); background-color: green;\"><div class=\"thingPIName\">" . $translate[intval($historyLine)] . "</div></div>";
                            $win = true;
                        }
                        else{
                            $mainBody = $mainBody . "<div class=\"ThingPI" . ($order == 1 ? " popUp1" : "") . "\" style=\"background-image:url(databasePhotos/". intval($historyLine) . ".png); background-color: red;\"><div class=\"thingPIName\">" . $translate[intval($historyLine)] . "</div></div>";
                        }
                        
                        $order++;
                    }
                    
                    $mainBody = $mainBody . "</main>";
                    if($win){$winDiv = "<div class=\"popUp1 victoryScreen \"><div class=\"victoryText\">You won</div><div class=\"victoryTries\">Tries: " . $tries . "</div><form action=\"./Photos.php\" method=\"POST\" autocomplete=\"off\"><button UseSubmitBehavior=true type=\"submit\" name=\"buttonNew\" autofocus class=\"victoryNewBtn\">New Game</button></form></div>";
                    }
                }
            }
            fclose($myfile);
            unset($_POST['inputer']);
            unset($_POST['buttonNew']);
            
            function NewIndex(){
                global $index;
                
                $index = rand(1,11);
                $myfile = fopen("./photoData/photoGuessIndex.txt","w") or die("Unable to open file! 008");
                fwrite($myfile,$index);
                fclose($myfile);
                $myfile = fopen("./photoData/photoGuessHistory.txt", "w") or die("Unable to open file! 009");
                fwrite($myfile, "");
                fclose($myfile);
                
                $myfile = fopen("./photoData/photoGuessTries.txt", "w") or die("KYSKYSFALLINLOVE");
                fwrite($myfile, 0);
                fclose($myfile);
            }
            function UserInputHandler(){
                global $translate;
                global $tries;
                $myfile = fopen("./photoData/photoGuessHistory.txt","r") or die("Unable to open file!");
                $jorn = true;
                $all = "";
                while(!feof($myfile)){
                    $content = fgets($myfile);
                    if($content == $translate[$_POST["inputer"]]) {
                        $jorn = false;
                    }
                    $all = $all . $content;
                }
                fclose($myfile);
                if($jorn){
                    $myfile = fopen("./photoData/photoGuessHistory.txt","w") or die("Unable to open file!");
                    fwrite($myfile, $translate[$_POST["inputer"]] . "\n" . $all);
                    fclose($myfile);
                    $tries = intval($tries) + 1;
                    $myfile = fopen("./photoData/photoGuessTries.txt", "w") or die("KYSKYSFALLINLOVE");
                    fwrite($myfile, $tries);
                    fclose($myfile);
                }
            }
        ?>
    </body>
        
        
    <body>
        <!-- zpět tlačítko -->
        <form action="./" method="POST">
            <button class="zpet">Back</button>
        </form>
        <!-- Nadpis -->
        <p class="headlineText">Rasp &nbsp;&nbsp;&nbsp; dle</p>
        <div class="mainLogo"></div>
        
        <!-- Ovládání -->
        <div class="infobg">
            <!-- PI na uhádnutí -->
            <div class="piBG" style="background-image: url(databasePhotos/<?php  echo $thingToGuess; ?>.png);"></div>
            <form action="./Photos.php" method="POST" autocomplete="off">
                <!-- Submit button -->
                <button UseSubmitBehavior=true type="submit" class="mainFormSubmitCircle" name="submitbtn" id="buttonPostKys"><p style="color:white;-webkit-user-select:none;
                -moz-user-select:none; font-size:5vh; margin-left:1vh; margin-top:-.5vh; margin-left:.1vh;">&#62;</p>
                </button>
                <!-- User input -->
                <div class="mainFormSubmitDiv">
                    <input id="myInput" type="text" class="mainFormSubmitInput" placeholder="Guess RPI" name="inputer" autofocus>
                </div>
                <!-- New button -->
                <button UseSubmitBehavior=false class="mainFormSubmitCircle " name="buttonNew" id="buttonNew" style="position:absolute; margin-left:3vh; margin-top:-7vh;"><p style="color:white;-webkit-user-select:none;
                -moz-user-select:none; font-size:2.5vh; margin-left:1vh; margin-top:1vh; margin-left:-.05vh;">new</p>
                </button>
            </form>
        </div>
        
        <!-- Div kde se zobrazujů správně a špatně PI -->
        <div class="mainmainu">
            <!-- Samotné PI -->
            <?php echo $mainBody ?>
        </div>
        <!-- Když uživatel vyhraje -->
        <?php echo $winDiv ?>
        
    </body>




    <body>
        <script type="text/javascript">
            function autocomplete(inp, arr) {
              /*the autocomplete function takes two arguments,
              the text field element and an array of possible autocompleted values:*/
              var currentFocus;
              /*execute a function when someone writes in the text field:*/
              inp.addEventListener("input", function(e) {
                  var a, b, i, val = this.value;
                  /*close any already open lists of autocompleted values*/
                  closeAllLists();
                  if (!val) { return false;}
                  currentFocus = -1;
                  /*create a DIV element that will contain the items (values):*/
                  a = document.createElement("DIV");
                  a.setAttribute("id", this.id + "autocomplete-list");
                  a.setAttribute("class", "autocomplete-items");
                  /*append the DIV element as a child of the autocomplete container:*/
                  this.parentNode.appendChild(a);
                  /*for each item in the array...*/
                  for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                      /*create a DIV element for each matching element:*/
                      b = document.createElement("DIV");
                      /*make the matching letters bold:*/
                      b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                      b.innerHTML += arr[i].substr(val.length);
                      /*insert a input field that will hold the current array item's value:*/
                      b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                      /*execute a function when someone clicks on the item value (DIV element):*/
                      b.addEventListener("click", function(e) {
                          /*insert the value for the autocomplete text field:*/
                          inp.value = this.getElementsByTagName("input")[0].value;
                          /*close the list of autocompleted values,
                          (or any other open lists of autocompleted values:*/
                          closeAllLists();
                      });
                      a.appendChild(b);
                    }
                  }
              });
              /*execute a function presses a key on the keyboard:*/
              inp.addEventListener("keydown", function(e) {
                  var x = document.getElementById(this.id + "autocomplete-list");
                  if (x) x = x.getElementsByTagName("div");
                  if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                  } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                  } 
                   else if (e.keyCode == 13) {
                    // jj prevent aby sel vubec post 
                        if(countries.includes(document.getElementById("myInput").value)){
                            return;
                        }
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                      /*and simulate a click on the "active" item:*/
                      if (x) x[currentFocus].click();
                    }
                  }
              });
            inp.addEventListener("click", function(e){
                  var a, b, i, val = this.value;
                  /*close any already open lists of autocompleted values*/
                  closeAllLists();
                  if (!val) { val = "P";}
                  currentFocus = -1;
                  /*create a DIV element that will contain the items (values):*/
                  a = document.createElement("DIV");
                  a.setAttribute("id", this.id + "autocomplete-list");
                  a.setAttribute("class", "autocomplete-items");
                  /*append the DIV element as a child of the autocomplete container:*/
                  this.parentNode.appendChild(a);
                  /*for each item in the array...*/
                  for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                      /*create a DIV element for each matching element:*/
                      b = document.createElement("DIV");
                      /*make the matching letters bold:*/
                      b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                      b.innerHTML += arr[i].substr(val.length);
                      /*insert a input field that will hold the current array item's value:*/
                      b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                      /*execute a function when someone clicks on the item value (DIV element):*/
                      b.addEventListener("click", function(e) {
                          /*insert the value for the autocomplete text field:*/
                          inp.value = this.getElementsByTagName("input")[0].value;
                          /*close the list of autocompleted values,
                          (or any other open lists of autocompleted values:*/
                          closeAllLists();
                      });
                      a.appendChild(b);
                    }
                  }
                  
              });
              
              function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
              }
              function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                  x[i].classList.remove("autocomplete-active");
                }
              }
              function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                  if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                  }
                }
              }
              /*execute a function when someone clicks in the document:*/
              document.addEventListener("click", function (e) {
                  closeAllLists(e.target);
              });
            }
            
            /*An array containing all the country names in the world:*/
            var countries = ["PI 1 A", "PI 1 A+", "PI 1 B", "PI 1 B+", "PI 2 B", "PI 3 B", "PI 3 B+", "PI 4 B", "PI 1.2", "PI 1.3", "PI W"];
            
            /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
            autocomplete(document.getElementById("myInput"), countries);

            // button nn post 
            document.getElementById("buttonPostKys").addEventListener("click",function (e) {
                if(countries.includes(document.getElementById("myInput").value)){
                    return;
                }
                e.preventDefault();
            });
            </script>
    </body>
</html>