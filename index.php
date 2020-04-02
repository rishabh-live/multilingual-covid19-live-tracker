<?php
if (isset($_GET["lang"])) {
  # code...
  $lang = $_GET["lang"];

  if ($lang == "hindi") {
    # code...
    $header = "कोविद 19 लाइव ट्रैकर | हिंदी | बहुभाषी | Gladiolus Language Nectar";
    $heading = "बहुभाषी कोविद 19 लाइव ट्रैकर";
    $noca = "प्रभावित देशों की संख्या : ";
    $cases = "मामले";
    $deaths = "लोगों की मृत्यु";
    $recovered = "स्वस्थ होनेवाला";
    $active = "संक्रमित";
    $placeholder = "एक देश की खोज करें";
  }
  else
{
  $header = "COVID 19 Live Tracker | English | Multilingual | Gladiolus Language Nectar";
  $heading = "Multilingual COVID19 Live Tracker";
  $noca = "No. of countries affected :";
  $cases = "Cases";
  $deaths = "Deaths";
  $recovered = "Recovered";
  $active = "Active";

 }
}
else
{
  $header = "COVID 19 Live Tracker | English | Multilingual | Gladiolus Language Nectar";
  $heading = "Multilingual COVID19 Live Tracker";
  $noca = "No. of countries affected :";
  $cases = "Cases";
  $deaths = "Deaths";
  $recovered = "Recovered";
  $active = "Active";
 }
?>



<!DOCTYPE html>
<html>
<head>
  <title><?php echo $header;?></title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="mobile-style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
            table{
                margin-top: 70px;
            }
            table, th, td {
  border: 0px solid green;
  box-shadow: 0 0 2px 2px greenyellow;
}
th, #inputTd, #inputTd2
{
  width: 100px;
  padding: 12px;
  text-align: center;
}
table{
    box-shadow: 0 0 5px 2px greenyellow;
    transition:box-shadow 0.3s linear;
}
table:hover{
    box-shadow: 0 0 10px 2px greenyellow;
    transition:box-shadow 0.3s linear;
}
           
           body
           {
               overflow-x: hidden;
               
               scroll-behavior:inherit;
           }

            .nav-bar
            {
                width: 109%;
                margin-left: -8px;
                margin-right: -8px;
                margin-top: -8px;
                background: greenyellow;
                height: 85px;
            }
            .bottom-nav-bar
            {
                
                margin-left: -8px;
                margin-right: -8px;
                margin-top: 8px;
                background: white;
               
                
            }

            .landscapeMobile
            {
                display: none;
            }

            .notice
            {
                margin-top: 10%;
                color: white;
                font-weight: bolder;
            }
            #noticeLabel
            {
                font-size: 23px;
            }

            .logoLabel
            {
                float: left;
                margin: 23px;
                font-family: 'Lobster', cursive;
                font-size: 32px;
            }
            .menuBox
            {
                float: right;
                padding-right: 10%;
                padding-top: 28px;
            }

            .searchFeild,#transliterateTextarea
{
  
  
  width: 600px;
  height: 34px;
  font-size: 21px;
  
  
  border-width: 0px;   
  
  padding-left: 10px;
  z-index: 10;
    float: left;

}


.searchBox
{
  
  
  width: 690px;
  height: 34px;
  font-size: 21px;
  box-shadow: 0 0 2px 2px greenyellow;
  transition: box-shadow 0.5s linear;
  border-color: greenyellow;
  border-width: 1px;
  border-radius: 21px;
  padding: 5px;
  padding-left: 10px;
    outline: none;
  

}

.searchBox:hover, .searchBox:focus
{
  
  
  font-size: 21px;
  box-shadow: 0 0 10px 2px greenyellow;
  transition: box-shadow 0.3s linear;
}

.searchIcon
{
    float: left;
    z-index: 30;
}
#searchIcon
{
    height: 100px;
    border-radius:50%; 
    z-index: 37;
    margin-left: 4px;
    margin-top: -20px;
    box-shadow: 0 0 2px 2px greenyellow;
  transition: box-shadow 0.5s linear;
    
}#searchIcon:hover
{
    box-shadow: 0 0 10px 2px greenyellow;
  transition: box-shadow 0.5s linear;
}

#searchIconButton
{   
    width: 70px;
    height: 70px;
    border-radius:50%; 
    margin-top: -16px;
    margin-left: 10px;
    background: none;
    border: none;
    z-index: 34;
    outline: none;
}
input:focus, textarea:focus, select:focus{
        outline: none;
    }    
        </style>
        <!-- Mobile Landscape Blocker-->
        <style>
         @media screen and (min-width: 320px) and (max-width: 767px) and (orientation: landscape)
             {
               
                .landscapeMobile {
                    display: block;
                    position: fixed;
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 100%;
                    z-index: 10;
                    background-color:green;
               }

               .nav-bar
            {
                width: 109%;
                margin-left: -8px;
                margin-right: -8px;
                margin-top: -8px;
                background: greenyellow;
                height: 60px;
            }

               .logoLabel
            {
                float: left;
                margin: 18px;
                font-family: 'Lobster', cursive;
                font-size: 23px;
            }
        
            
            }
        </style>
        <!-- Basic Mobile Css Structure-->
        <style>
                @media screen and (min-width: 320px) and (max-width: 767px)
                    {
                      
                              
                      .nav-bar
                   {
                       width: 109%;
                       margin-left: -8px;
                       margin-right: -8px;
                       margin-top: -8px;
                       background: greenyellow;
                       height: 60px;
                   }
       
                      .logoLabel
                   {
                       float: left;
                       margin: 18px;
                       font-family: 'Lobster', cursive;
                       font-size: 23px;
                   }

                   .menuBox
            {
                float: right;
                padding-right: 18px;
                padding-top: 18px;
            }

            .searchFeild,#transliterateTextarea
{
  
  
  width: 230px;
  height: 34px;
  font-size: 16px;
  
  
  border-width: 0px;   
  
  padding-left: 3px;
  z-index: 10;
    float: left;

}


.searchBox
{
  
  
  width: 300px;
  height: 34px;
  font-size: 16px;
  box-shadow: 0 0 2px 2px greenyellow;
  transition: box-shadow 0.5s linear;
  border-color: greenyellow;
  border-width: 1px;
  border-radius: 21px;
  padding: 5px;
  padding-left: 10px;
  

}

.searchBox:hover, .searchBox:focus
{
  
  
  font-size: 16px;
  box-shadow: 0 0 10px 2px greenyellow;
  transition: box-shadow 0.3s linear;
}

.searchIcon
{
    float: left;
}
#searchIcon
{
    height: 80px;
    border-radius:50%; 
    z-index: 37;
    margin-left: 4px;
    margin-top: -9px;
}
#searchIconButton
{   
    width: 40px;
    height: 40px;
    border-radius:50%; 
    margin-top: -12px;
    margin-left: 3px;
    background: none;
    border: none;
    z-index: 34;
    outline: none;
}
           


                   }
        </style>
        <!-- Menu Overlay Code-->
        <style>
                /* The Overlay (background) */
                .overlay {
                /* Height & width depends on how you want to reveal the overlay (see JS below) */   
                height: 100%;
                width: 0;
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                background-color: rgb(50, 205, 50); /* Black fallback color */
                background-color: rgba(50, 205, 50, 0.9); /* Black w/opacity */
                overflow-x: hidden; /* Disable horizontal scroll */
                transition: 0.7s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
                }

                /* Position the content inside the overlay */
                .overlay-content {
                position: relative;
                top: 25%; /* 25% from the top */
                width: 100%; /* 100% width */
                text-align: center; /* Centered text/links */
                margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
                }

                /* The navigation links inside the overlay */
                .overlay a {
                padding: 8px;
                text-decoration: none;
                font-size: 36px;
                color: #818181;
                display: block; /* Display block instead of inline */
                transition: 0.3s; /* Transition effects on hover (color) */
                }

                /* When you mouse over the navigation links, change their color */
                .overlay a:hover, .overlay a:focus {
                color: #f1f1f1;
                }

                /* Position the close button (top right corner) */
                .overlay .closebtn {
                position: absolute;
                top: 20px;
                right: 45px;
                font-size: 60px;
                }

                /* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
                @media screen and (max-height: 450px) {
                .overlay a {font-size: 20px}
                .overlay .closebtn {
                    font-size: 40px;
                    top: 15px;
                    right: 35px;
                }
                }
        </style>
        <style>
           
.div2 {
  width: 32px;
  height: 3px;
  background-color: black;
  margin: 6px 0;
}
.Mca{
    position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}
table{
    cursor:none;
}



        </style>
        <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
/* Popup box BEGIN */
</style>
</head>
<body>

  <div class="heading">
    <center>
      <label id="heading">
        <?php echo $heading; ?>
      </label>
    </center>
  </div>

  <div class="notifications" >
    <div class="block" style="background-color: red; width: 10%; height:100%; padding: 10px; color: white;  ">SITE UPDATES :</div>
  </div>

  <div style="margin: 14px; color: blue;">
   <center> <a class="trigger_popup_fricc">Language</a></center>
   <div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">&times;</div>
        <p>Add any HTML content<br />inside the popup box!</p>
    </div>
</div>
  </div>

  <div class="data">

    <center> 

      <div class="country-no">
          <label><?php echo $noca; ?></label>
          <label id="noofcountry"><?php $i = 0; $contjson = json_decode(file_get_contents("https://corona.lmao.ninja/all/"),true); echo $contjson["affectedCountries"]; ?></label>
      </div>

      <div class="card-holder">
        <center>
        <div class="card"><label id="cases"><?php echo $cases; ?></label><br><div class="noholder"><label id="no-cases"></label></div></div>
        <div class="card"><label id="deaths"><?php echo $deaths; ?></label><br><div class="noholder"><label id="no-deaths"></label></div></div>
        <div class="card"><label id="recovered"><?php echo $recovered; ?></label><br><div class="noholder"><label id="no-recovered"></label></div></div>
        <div class="card"><label id="active"><?php echo $active; ?></label><br><div class="noholder"><label id="no-active"></label></div></div>
      </center>
      </div>


    </center> 
  </div>
  <div class="global-chart">
              <input type="text" id="myInput" onkeyup="myFunction()" onfocus="focus()" onfocusout="focusout()" placeholder="Search for Country..." title="Type in a TAG" autofocus="true">

    <table id="myTable">
  <tr><th style="height:30px; text-align: center;">Country</th><th style="height:30px; text-align: center;">Cases</th><th style="height:30px; text-align: center;">Today Cases</th><th style="height:30px; text-align: center;">Deaths</th><th style="height:30px; text-align: center;">Today Deaths</th><th style="height:30px; text-align: center;">Recovered</th><th style="height:30px; text-align: center;">Active</th><th style="height:30px; text-align: center;">Critical</th><th style="height:30px; text-align: center;">Cases(per million)</th><th style="height:30px; text-align: center;">Deaths(per million)</th></tr>

  <?php

  $json = json_decode(file_get_contents("https://corona.lmao.ninja/countries"),true);

  for ($i=0; $i < sizeof($json) ; $i++) { 
    # code...
    ?>
<tr><td style="height:30px; text-align: center;"><?php echo $json[$i]["country"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["cases"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["todayCases"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["deaths"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["todayDeaths"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["recovered"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["active"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["critical"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["casesPerOneMillion"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["deathsPerOneMillion"]; ?></td></tr>
    <?php
  }
  ?>
</table>
    
  </div>

  <footer style="margin-top: 70px; margin-bottom: 10px;">
    <hr>&copy; <?php echo date('Y'); ?>Gladiolus Langauge Nectar<i>All Rights Reserved.</i></footer>


  <script type="text/javascript">
    function focus() {
      // body...
      document.getElementByClass('card-holder').style.display = "none";
    }
    function hitApiWorld(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      let res = JSON.parse(this.responseText);
      cases=res.cases;
      deaths=res.deaths;
      recovered=res.recovered;
      active=res.active;
      country=res.country;
      updateTextWorld(cases, deaths, recovered, active)
    }
  };
  xhttp.open("GET", "https://corona.lmao.ninja/all/", true);
  xhttp.send();
}

function updateTextWorld(cases, deaths, recovered){
  document.getElementById("no-cases").innerHTML = cases;
  document.getElementById("no-deaths").innerHTML = deaths;
  document.getElementById("no-recovered").innerHTML = recovered;
    document.getElementById("no-active").innerHTML = active;

}
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
hitApiWorld();
  </script>
  <script type="text/javascript">
    $(window).load(function () {
    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
});
  </script>

</body>
</html>