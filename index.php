<?php
$siteupdates = "ગુજરતી ભાષા ઉમેર્યું | తెలుగు భాష జోడించబడింది | नेपाली भाषा थपिएको छ | Ajout de la langue française | Country Rank Now Available |";
$countryRankOf = "Rank of Country";
if (isset($_GET["lang"])) {
  # code...
  $lang = $_GET["lang"];

  if ($lang == "gujarati") {
    # code...
    $header = "કોવિડ 19 લાઇવ ટ્રેકર | ગુજરાતી | બહુભાષી | Gladiolus Language Nectar";
    $heading = "બહુભાષી કોવિડ 19 લાઇવ ટ્રેકર";
    $noca = "અસરગ્રસ્ત દેશોની સંખ્યા : ";
    $cases = "કેસ";
    $deaths = "મૃત્યુ";
    $recovered = "સ્વસ્થ";
    $active = "ચેપગ્રસ્ત";
    $placeholder = "એક દેશ શોધો";
    $todayCases = "આજે કેસ";
    $todayDeaths = "આજે મૃત્યુ";
    $critical = "જટિલ";
    $pm = "(મિલિયન દીઠ)";
    $country = "દેશોનું નામ";
    $countryRankOf = "દેશનો ક્રમ";
    
  }
  else   if ($lang == "hindi") {
    # code...
    $header = "कोविद 19 लाइव ट्रैकर | हिंदी | बहुभाषी | Gladiolus Language Nectar";
    $heading = "बहुभाषी कोविद 19 लाइव ट्रैकर";
    $noca = "प्रभावित देशों की संख्या : ";
    $cases = "मामले";
    $deaths = "लोगों की मृत्यु";
    $recovered = "स्वस्थ होनेवाला";
    $active = "संक्रमित";
    $placeholder = "एक देश की खोज करें";
    $todayCases = "आज के मामले";
    $todayDeaths = "आज मौतें";
    $critical = "नाजुक";
    $pm = "(प्रति मिलियन)";
    $country = "देशों का नाम";
    $countryRankOf = "देश की रैंक";
    
  }
  else if($lang == "french")
    {
   $header = "COVID 19 Live Tracker | French | Multilingue | Gladiolus Language Nectar";
   $heading = "Multilingue COVID19 Live Tracker";
   $noca = "Nombre de pays touchés:";
   $cases = "Cas";
   $deaths = "Décès";
   $recovered = "récupéré";
   $active = "Actif";
   $todayCases = "Cas d'aujourd'hui";
   $todayDeaths = "Décès aujourd'hui";
   $critical = "Critique";
   $pm = "(par million)";
   $country = "Pays";
   $placeholder = "Rechercher le pays ...";
   $linkedin = "https://www.linkedin.com/in/raghunandan-chaudhary-3ab9971a3/";
   $nameofcontribor = "Raghunandan Chaudhary";
   $countryRankOf = "Rang du pays";



   
}
  else   if ($lang == "nepali") {
    # code...
    $header = "कोविड 19  लाइभ ट्र्याकर | बहुभाषी | Gladiolus Language Nectar";
    $heading = "बहुभाषी कोविड 19 लाईभ ट्र्याकर";
    $noca = "प्रभावित देशहरूको संख्या : ";
    $cases = "केसहरु";
    $deaths = "मृत्यु";
    $recovered = "स्वस्थ";
    $active = "संक्रमित";
    $placeholder = "देश खोज्नुहोस्";
    $todayCases = "आज केसहरू";
    $todayDeaths = "आज मृत्यु";
    $critical = "आलोचनात्मक";
    $pm = "(प्रति मिलियन)";
    $country = "देशहरूको नाम";
    $countryRankOf = "देशको रैंक";
    
  }
  else   if ($lang == "telugu") {
    # code...
    $header = "COVID 19 లైవ్ ట్రాకర్ | తెలుగు | బహుభాషా | Gladiolus Language Nectar";
    $heading = "బహుభాషా COVID 19 లైవ్ ట్రాకర్";
    $noca = "ప్రభావితమైన దేశాల సంఖ్య: ";
    $cases = "ప్రభావితం";
    $deaths = "మరణాలు";
    $recovered = "కోలుకున్న";
    $active = "క్రియాశీల";
    $placeholder = "ఒక దేశాన్ని శోధించండి";
    $todayCases = "నేడు కేసులు";
    $todayDeaths = "నేడు మరణాలు";
    $critical = "క్లిష్టమైన";
    $pm = "(మిలియన్‌కు)";
    $country = "దేశం ";
    $countryRankOf = "దేశం యొక్క ర్యాంక్";
    
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
  $todayCases = "Today Cases";
  $todayDeaths = "Today Deaths";
  $critical = "Critical";
  $pm = "(per million)";
  $country = "Country";
  $placeholder = "Search Country...";
  

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
  $todayCases = "Today Cases";
  $todayDeaths = "Today Deaths";
  $critical = "Critical";
  $pm = "(per million)";
  $country = "Country";
  $placeholder = "Search Country...";
  
  header("Refresh:0,url=http://covid19.languagenectar.com?lang=english&contrbutor=no&country=no");
  
 }
?>



<!DOCTYPE html>
<html>
<head>
  <title><?php echo $header;?></title>
  <meta charset="utf-8">
  <meta name="keywords" content="covid , ncovid19, langauge nectar, Multilingual live Tracker, nepali, gujarati, english, telugu, gladiolus, french, italy, china, wuhan">
  <meta name="description" content="This is worlds first Multilingual COVID19 Live Tracker. Designed by developers of Gladiolus Language Nectar.">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="mobile-style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B371C980HN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B371C980HN');
</script>
<!-- /Google Analytics -->

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




        </style>
        <style>
* {
  box-sizing: border-box;
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
    <div class="block" style="background-color: red; width: 20%; height:50px; padding: 10px; color: white; float: left; ">SITE UPDATES :</div>
    <div class="block" style="background-color: lightgreen; width: 80%; height:50px; padding:10px;  color: blue; float: left; "><marquee> <?php echo $siteupdates; ?></marquee></div>
  </div>

  <div style="margin: 14px; color: blue;">
   <center> <a class="trigger_popup_fricc">Language</a> <a href="https://github.com/rishabharya1422/multilingual-covid19-live-tracker" class="trigger_popup_fricc_git" target="_blank">Github</a>

      <?php

    if ($_GET["country"] != "no") {
      # code...
      ?>
      <a href="?lang=<?php echo $_GET['lang'];?>&contrbutor=<?php echo $_GET['contrbutor'];?>&country=no" class="trigger_popup_fricc_git">Global Data</a>
      <?php
    }

    ?>

    <?php

    if ($_GET["contrbutor"] == "french") {
      # code...
      ?>
      <a href="<?php echo $linkedin; ?>" class="trigger_popup_fricc_git" target="_blank"><?php echo $nameofcontribor; ?></a>
      <?php
    }

    ?>


    </center>
   <div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">&times;</div>
       
        <p><a href="?lang=english&contrbutor=no&country=<?php echo $_GET['country']; ?>">English</a></p>
        <p><a href="?lang=hindi&contrbutor=no&country=<?php echo $_GET['country']; ?>">हिंदी</a></p>
        <p><a href="?lang=gujarati&contrbutor=no&country=<?php echo $_GET['country']; ?>">ગુજરાતી</a></p>
        <p><a href="?lang=telugu&contrbutor=no&country=<?php echo $_GET['country']; ?>">తెలుగు</a></p>
        <p><a href="?lang=nepali&contrbutor=no&country=<?php echo $_GET['country']; ?>">नेपाली</a></p>
        <p><a href="?lang=french&contrbutor=french&country=<?php echo $_GET['country']; ?>">French</a><br></p>


    </div>
</div>
  </div>
  <hr>

  <div class="data">
    <?php

    $globalData = json_decode(file_get_contents("https://corona.lmao.ninja/all/"),true);

    $globalCases = $globalData["cases"];
    $globalDeath = $globalData["deaths"];
    $globalActive = $globalData["active"];
    $globalRecovered = $globalData["recovered"];

    if ($_GET["country"] != "no") {




      $countryDataAll  = json_decode(file_get_contents("https://corona.lmao.ninja/countries"),true);

      $countryArray;

      for ($i=0; $i < sizeof($countryDataAll) ; $i++) { 
        # code...
        

        if ($_GET["country"] === $countryDataAll[$i]["country"]) {
          # code...
          $rank = $i+1;
          $casesNew = $countryDataAll[$i]["cases"];
          $deathsNew = $countryDataAll[$i]["deaths"];
          $recoveredNew = $countryDataAll[$i]["recovered"];
          $activeNew = $countryDataAll[$i]["active"];
          $casesPer = number_format(($casesNew / $globalCases)*100, 2 , '.' , ',');
          $deathsPer = number_format(($deathsNew / $globalDeath)*100, 2 , '.' , ',');
          $recPer = number_format(($recoveredNew / $globalRecovered)*100, 2 , '.' , ',');
          $activePer = number_format(($activeNew / $globalActive)*100, 2 , '.' , ',');
        }

      }

      
      ?>
      <center> 

      <div class="country-no">
          <label><?php echo $countryRankOf."<br>".$_GET["country"]." : ".$rank; ?></label>
          
      </div>

   

      <div class="card-holder">
        <center>
        <div class="card"><label id="cases"><?php echo $cases; ?></label><br><div class="noholder"><label id="no-cases"><?php echo $casesNew."<br>(".$casesPer."%)" ;?></label></div></div>
        <div class="card"><label id="deaths"><?php echo $deaths; ?></label><br><div class="noholder"><label id="no-deaths"><?php echo $deathsNew."<br>(".$deathsPer."%)" ;?></label></div></div>
        <div class="card"><label id="recovered"><?php echo $recovered; ?></label><br><div class="noholder"><label id="no-recovered"><?php echo $recoveredNew."<br>(".$recPer."%)" ;?></label></div></div>
        <div class="card"><label id="active"><?php echo $active; ?></label><br><div class="noholder"><label id="no-active"><?php echo $activeNew."<br>(".$activePer."%)" ;?></label></div></div>
      </center>
      </div>


    </center> 


      <?php
    }else{
   ?>

    <center> 

      <div class="country-no">
          <label><?php echo $noca; ?></label>
          <label id="noofcountry"><?php $i = 0; $contjson = json_decode(file_get_contents("https://corona.lmao.ninja/all/"),true); echo $contjson["affectedCountries"]; ?></label>
      </div>

   

      <div class="card-holder">
        <center>
        <div class="card"><label id="cases"><?php echo $cases; ?></label><br><div class="noholder"><label id="no-cases"><?php echo $globalCases ;?></label></div></div>
        <div class="card"><label id="deaths"><?php echo $deaths; ?></label><br><div class="noholder"><label id="no-deaths"><?php echo $globalDeath ;?></label></div></div>
        <div class="card"><label id="recovered"><?php echo $recovered; ?></label><br><div class="noholder"><label id="no-recovered"><?php echo $globalRecovered ;?></label></div></div>
        <div class="card"><label id="active"><?php echo $active; ?></label><br><div class="noholder"><label id="no-active"><?php echo $globalActive ;?></label></div></div>
      </center>
      </div>


    </center> 
<?php }   ?>
  </div>
  <div class="global-chart">
              <input type="text" id="myInput" onkeyup="myFunction()"  placeholder="<?php echo $placeholder;?>" title="<?php echo $placeholder;?>" >

    <table id="myTable">
  <tr><th style="height:30px; text-align: center;"><?php echo $country; ?></th><th style="height:30px; text-align: center;"><?php echo $cases; ?></th><th style="height:30px; text-align: center;"><?php echo $todayCases; ?></th><th style="height:30px; text-align: center;"><?php echo $deaths; ?></th><th style="height:30px; text-align: center;"><?php echo $todayDeaths; ?></th><th style="height:30px; text-align: center;"><?php echo $recovered; ?></th><th style="height:30px; text-align: center;"><?php echo $active; ?></th><th style="height:30px; text-align: center;"><?php echo $critical; ?></th><th style="height:30px; text-align: center;" id="nomobile"><?php echo $cases."<br>".$pm; ?></th><th style="height:30px; text-align: center;" id="nomobile"><?php echo $deaths."<br>".$pm; ?></th></tr>

  <?php

  $json = json_decode(file_get_contents("https://corona.lmao.ninja/countries"),true);

  for ($i=0; $i < sizeof($json) ; $i++) { 

    # code...

    $link = "?lang=".$_GET["lang"]."&country=".$json[$i]["country"]."&contrbutor=".$_GET["contrbutor"];
    ?>
<tr><td style="height:30px;"><a  href="<?php echo $link; ?>"><?php echo $json[$i]["country"]; ?></a></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["cases"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["todayCases"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["deaths"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["todayDeaths"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["recovered"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["active"]; ?></td><td style="height:30px; text-align: center;"><?php echo $json[$i]["critical"]; ?></td><td style="height:30px; text-align: center;" id="nomobile"><?php echo $json[$i]["casesPerOneMillion"]; ?></td><td style="height:30px; text-align: center;" id="nomobile"><?php echo $json[$i]["deathsPerOneMillion"]; ?></td></tr>
    <?php
  }
  ?>
</table>
    
  </div>


  <footer style="margin-top: 70px; margin-bottom: 10px;">
    <hr><center>
    &copy; <?php echo date('Y'); ?>&nbsp; Gladiolus Langauge Nectar. <i>All Rights Reserved.</i>
  </center></footer>


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
    $(document).ready(function () {
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