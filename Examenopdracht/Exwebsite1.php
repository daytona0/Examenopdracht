<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="Menu.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="Image.css">
    <link type="text/css" rel="stylesheet" href="Titel.css">
    <link type="text/css" rel="stylesheet" href="Merchandise.css">
    <link type="text/css" rel="stylesheet" href="tabs.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    
  </head>
  <body>
      <div class="topnav" id="myTopnav">
        <a href="Exwebsite1.php">HOME</a>
        <a href="#">ABOUT</a>
        <a href="#">TOURS</a>
        <a href="#">PICTURES</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
      <script>
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
        x.className += " responsive";
      } 
        else {
        x.className = "topnav";
     }
  }
      </script>
      <div id="Image">
        <div class="bottom-left"><span>Daytona Aerts 5BIN</span></div>
        <div class="centered">
          The Weeknd
          <br> 
          <span>16 februari 1990</span> 
        </div>
        <img src="theweeknd1.jpg" style ="width: 100%;">
      </div>
      <div id="Titel">
        <h1>
          De 4 recentste albums van The Weeknd

        </h1>
      </div>

      <button class="tablink" onclick="openPage('MyDearMelancholy', this, '#f44336')"id="defaultOpen">My Dear Melancholy</button>
      <button class="tablink" onclick="openPage('Starboy', this, '#f44336')">Starboy</button>
      <button class="tablink" onclick="openPage('BeautyBehindTheMadness', this, '#f44336')">Beauty Behind The Madness</button>
       
      
      <div id="MyDearMelancholy" class="tabcontent">
        <h3>Call Out My Name</h3>
        <p>Dit is het eerste liedje van zijn nieuwste album.</p>
        <hr>
        <h3>Try Me</h3>
        <p>Heel leuk liedje.</p>
        <hr>
        <h3>Wasted Times</h3>
        <p>De meeste liedjes van dit album gaan eigenlijk over zijn relatie met Selena Gomez.</p>
        <hr>
        <h3>I Was Never There</h3>
        <p>Dit is mijn lievelings liedje van dit album.</p>
      </div>
    
      <div id="Starboy" class="tabcontent">
        <h3>Starboy</h3>
        <p>I'm a mothafuckin' STARBOOYY.</p>
        <hr>
        <h3>Party Monster</h3>
        <p>Deze videoclip bevat heel wat kleur.</p>
        <hr>
        <h3>False Alarm</h3>
        <p>Hey hey hey hey hey.</p>
        <hr>
        <h3>Reminder</h3>
        <p>Leuk om mee te zingen!!</p>
        
      </div>

      <div id="BeautyBehindTheMadness" class="tabcontent">
        <h3>Real Life</h3>
        <p>Mama talking that real life, oh oh oh.</p>
        <hr>
        <h3>Losers</h3>
        <p>Only losers go to school.</p>
        <hr>
        <h3>Tell Your Friends</h3>
        <p>Go tell your friends about it.</p>
        <hr>
        <h3>Often</h3>
        <p>Dit is het eerste liedje van zijn nieuwste album.</p>
       
      </div>
      
      <script>
        function openPage(pageName, elmnt, color) {
   
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
          tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
}
        document.getElementById("defaultOpen").click();
      </script>
      <div id="Merchandise">
        <h1>
          Merchandise 
        </h1>
        <p>
          De merch van The Weeknd is heel verschillend en leuk. Hij verkoopt van alles wel wat bv. T-shirt, jackets, truien, joggingbroeken,... Hij verkocht ook een tijdje kleren in de H&M maar heeft zijn samenwerking stop gezet wegens dat ze zijn volk beledigd hadden.
        </p>
        <br>
        <p>
          Ik vind zijn kleren wel mooi.
        </p>
        <br> 
        <p>
         Ik heb een zwarte trui gekocht van The Weeknd.
        </p>
        <img src="TheWeekndMerch.jpg">
          <p>
            Prijzen:
          </p>
          <br>
          <p>
            T-shirt:  <span>20-40 euro</span>
          </p>
          <br>
          <p>
            Truien: <span>70-90 euro</span> 
          </p>
    </div>
  </body>
</html>