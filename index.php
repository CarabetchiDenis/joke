<?php
    /*
    * Date: 2021-09-23
    * Author: 
    * Description: This file the contient de html (index + ajax)
    */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Joke</title>
</head>
<body>
    <h1>Welcome the joke</h1>
    <div id="input_container">
        <div id="blabla">blablabla</div><br>
        <input type="text" id="input_joke" placeholder="Écrire qqch...">
        <button class="btn" id="btn_search" onclick="search_joke()">Search</button>
    </div>
    <br>
    <div id="output_joke">
      Afficher les résultat....
    </div>    
</body>

<script src="app.js"></script>
<!--
<script>
    function search_joke() {

        var input_joke  = document.getElementById("input_joke").value;

        var endpoints =  "https://v2.jokeapi.dev/joke/[Category/-ies]";
        var display_endpoints = endponts + input_joke;

        var output = "";

       
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("output_joke").innerHTML =
                this.responseText;
            }
        };
        xhttp.open("GET", "ajax_info.txt");
        xhttp.send();
        
    }

</script>  -->
</html>
