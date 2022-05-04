<!DOCTYPE html>


<html>



<head> 

<title>  Mariannen etusivu </title>
<link rel="stylesheet" href="/marianne/ulkoasu.css">
</head> 

    <body style="background-color: #21AAF8;" > 
    <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
    <a href="/marianne/index.php?lisaa"> 

    <span style="position:absolute; width:100%; height:100%; top:0; left: 0; z-index: 1; background-image: url('/marianne/empty.gif');"></span>
    
    <div>
<h1>Mariannen etusivu</h1>

<div style="display: grid; grid-template-columns: auto auto;">

<div style="text-align: center; border: 2px dotted red; display: inline-block;">

<p style="color: white; font-size: 2em; font-weight: bold"> Hello world! </p>

</div>

<div  style="display: inline-block; border: 2px solid black ">



<br><br><br>

<a href="/marianne/nopanheitto.php" > <button>Heitä noppaa</button>  </a>

</div>

</div>

<br><br><br>

<?php

if(isset($_GET[lisaa])){

echo'Lisää tekstiä...';

echo'<br><br>';
echo '<a href="/marianne/index.php" > <button>PIILOTA TEKSTI</button>  </a>';

}
else{
}


?> 
</div>
</a>
</body>



</html>


