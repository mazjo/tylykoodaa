<!DOCTYPE html>
<html>

<head> 

<title>Heitä noppaa</title>

<link rel="shortcut icon" href="/marianne/favicon.ico" type="image/x-icon">
<link rel="icon" href="/marianne/favicon.ico" type="image/x-icon">

</head> 


<body>

<h1>Nopanheitto-peli</h1> 

<img src="/marianne/noppa.jpg" title="Tämä on noppa" width="" height="">   </img>

<br>

<?php

echo'<h1>Nopanheiton tulos on:</h1>';

$silmaluku = rand(1, 6);

echo'Silmäluku on '.$silmaluku;

echo'<br><br>';
$numero = 10;

while($numero >= 0){

    echo'<br><br>';
    echo'Numero on: '.$numero;

    $numero = $numero - 1;

}



?> 



<script language=javascript>
    var rev = "fwd";
    function titlebar(val){
        document.title = "Heitä noppaa";
        var msg  = "Heitä noppaa";
        var res = " ";
        var speed = 100;
        var pos = val;
       
        var le = msg.length;
        if(rev == "fwd"){
            if(pos < le){
                pos = pos+1;
                scroll = msg.substr(0,pos);
                document.title = scroll;
                timer = window.setTimeout("titlebar("+pos+")",speed);
            }
            else {
                
                rev = "bwd";
                
                timer = window.setTimeout("titlebar("+pos+")",speed);
            }
        }
        else {
            if(pos > 0) {
           
                pos = pos-1;
                var ale = le-pos;
                scrol = msg.substr(ale,le);
                document.title = scrol;
                timer = window.setTimeout("titlebar("+pos+")",speed);
            }
            else {
                document.title = "Heitä noppaa";
                rev = "fwd";
                timer = window.setTimeout("titlebar("+pos+")",speed); 
            }
        }
    }
    titlebar(0);

</script>

</body>
</html>

