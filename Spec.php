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
                width: 40vh;
                height: 2vh;
            }
            /*when hovering an item:*/
                .autocomplete-items div:hover {
                background-color: #e9e9e9; 
            }
            /*when navigating through the items using the arrow keys:*/
            .autocomplete-active {
                background-color: DodgerBlue !important; 
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
                background-image: url("./bg.jpg");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                -webkit-background-clip: text;
                font-family: 'Nunito', sans-serif;
            }
            body::-webkit-scrollbar {
                display: none;
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
                width:78vh;
                height: fit-content;
                margin-left:60vh;
                margin-top: 50vh;
                background: linear-gradient(to right, red, purple,yellow) border-box;
                border-radius: 25px;
                border: 10px solid transparent;
                
                background-repeat: no-repeat;
                background-position: center;
            }
            .infobg{
                position: absolute;
                background-color: grey;
                height: 5vh;
                width: 50vh;
                margin-top: 25vh;
                margin-left: 74vh;
                border: 5px white solid ;
                border-radius: 5px;
                visibility:hidden;
            }
            .mainFormSubmitDiv{
                visibility: visible;
                background-color: grey;
                height: 7vh;
                width: 25vh;
                margin-top: 5vh;
                margin-left: 13vh;
                border: 5px white solid ;
                border-radius: 5px;
            }
            .mainFormSubmitCircle{
                visibility: visible;
                width: 7vh;
                height: 7vh;
                border-radius: 50%;
                margin-top: -7.5vh;
                margin-left: 42vh;
                background-color: grey;
                cursor:pointer;
                border: 3px white solid;
            }
            .mainFormSubmitInput{
                visibility: visible;
                width: 25vh;
                height: 7vh;
                border: 5px grey solid ;
                border-radius: 5px;
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
            .textos{
                /*
                -webkit-user-select:none;
                -moz-user-select:none;
                */
                position:relative;
                font-size: 2vh;
                color: white;
            }
            button{
                border:none;
            }
            .holdPI{
                width: 74vh;
                height: 11vh;
                margin-left: 2vh;
                margin-top: 3vh;
                padding: 0px;
            }
            .thingPI{
                width: 10vh;
                height: 10vh;
                background-color: grey;
                border-radius: 5%;
                float: left;
                margin-left: 2vh;
            }
            .innerPIText{
                text-shadow: 1px 1px 4px black ;
                color: white;
                font-size: 3vh;
                text-align: center;
                margin-top:3vh;
            }
            .s{
                font-size: 2vh;
                margin-top: 2.5vh;
            }
            .ts{
                margin-top: -2vh;;
                height: 3vh;
                background-color: rgba(0,0,0,0);
            }
            .tss{
                margin-top: 0vh;
                border-bottom: solid 5px white;
                border-radius: 4em;
            }
            .hs{
                height: .2vh;
            }
            .is{
                margin-top: 3.5vh;
            }
        </style>
    <body>
        <?php 
            $mainBody = "";
            $index = 0;
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
            ];
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if(!$index){
                    $myfile = fopen("currentIndex.txt", "w") or die("Unable to open file! 001");
                    $index = rand(1,11);
                    fwrite($myfile,$index);
                    fclose($myfile);
                }
                if(!empty($_POST["imputer"])){
                    $myfile = fopen("historyPI.txt","r") or die("Unable to open file!");
                    $jorn = true;
                    $all = "";
                    while(!feof($myfile)){
                        $content = fgets($myfile);
                        if($content == $translate[$_POST["imputer"]]) {
                            $jorn = false;
                        }
                        $all = $all . $content;
                    }
                    fclose($myfile);
                    if($jorn){
                        $myfile = fopen("historyPI.txt","w") or die("Unable to open file!");
                        fwrite($myfile, $translate[$_POST["imputer"]] . "\n" . $all);
                        fclose($myfile);
                    }
                }
                $myfile = fopen("historyPI.txt","r") or die("Unable to open file! 000");
                if(!feof($myfile) && filesize("historyPI.txt") != 0){
                    
                    $mainBody = "<main><div class=\"holdPI hs\"><div class=\"thingPI ts\"><p class=\"innerPIText tss s\">Name</p></div><div class=\"thingPI ts\"><p class=\"innerPIText tss s\">Model</p></div><div class=\"thingPI ts\"><p class=\"innerPIText tss s\">Date</p></div><div class=\"thingPI ts\"><p class=\"innerPIText tss s\">Price</p></div><div class=\"thingPI ts\"><p class=\"innerPIText tss s\">USB 2</p></div><div class=\"thingPI ts\"><p class=\"innerPIText tss s\">Weight</p></div></div>";
                    while(!feof($myfile)) {
                        $findex = fgets($myfile);
                        if(!$findex) break;
                        $ffile = fopen((int)$findex . ".txt","r") or die("Unable to open file! 002");
                        
                        $farray = [];
                        while(!feof($ffile)){
                            array_push($farray, fgets($ffile));
                        }
                        $mainBody = $mainBody . "<div class=\"holdPI\"><div class=\"thingPI\" style=\"background-color:red;\"><p class=\"innerPIText s is\">" . $farray[0] . "</p></div><div class=\"thingPI\" style=\"background-color:green;\"><p class=\"innerPIText\">" . $farray[1] . "</p></div><div class=\"thingPI\"><p class=\"innerPIText s\">" . $farray[2] . "</p></div><div class=\"thingPI\"><p class=\"innerPIText\">" . $farray[3] ."</p></div><div class=\"thingPI\"><p class=\"innerPIText\">" . $farray[4] . "</p></div><div class=\"thingPI\"><p class=\"innerPIText\">" . $farray[5] . "</p></div>
            </div>";
                        fclose($ffile);
                    }
                    
                    $mainBody = $mainBody . "</main>";
                }
                fclose($myfile);
                
            }
        ?>
    </body>
        
        
    <body>
        <p class="headlineText">Rasp &nbsp;&nbsp;&nbsp;&nbsp; dle</p>
        <div class="mainLogo"></div>
        <div class="infobg">
            <form action="./Spec.php" method="POST" autocomplete="off">
                <button class="mainFormSubmitCircle " id="buttonNew" style="position:absolute; margin-left:3vh; margin-top:.5vh;"><p style="color:white;-webkit-user-select:none;
                -moz-user-select:none; font-size:2.5vh; margin-left:1vh; margin-top:1vh; margin-left:-.05vh;">new</p>
                </button>
                <div class="mainFormSubmitDiv">
                    <input id="myInput" type="text" class="mainFormSubmitInput" placeholder="Guess RPI Type" name="imputer">
                </div>
                <button class="mainFormSubmitCircle" id="buttonPostKys"><p style="color:white;-webkit-user-select:none;
                -moz-user-select:none; font-size:5vh; margin-left:1vh; margin-top:-.5vh; margin-left:.1vh;">&#62;</p>
                </button>
            </form>
        </div>
        <?php echo $mainBody;?>

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