<!DOCTYPE html>
<html>
<title>KBMerger</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="./images/favicon3.png" type="image/x-icon"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./css/design.css">
<script src="./javascript/jquery.js"></script>
<script src="./javascript/mapsfunctionality.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkOPhhbiRakfxnbZiBTO1MKuYN883ynPA&callback=initMap">
    </script>
    <body style="min-width: 499px">
        
<!-- Navbar (sit on top) -->
<div class="w3-top">
    
  <div class="w3-bar w3-card custom-back-colour3" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>    
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT US</a>
    <a href="#rsvp" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-pencil"></i> RSVP</a>
    <a href="#registryList" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> REGISTRY LIST</a>      
    <a href="#accommodation" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home"></i> ACCOMMODATION</a> 
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT US</a>
</div>
    
    <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT US</a>
    <a href="#rsvp" class="w3-bar-item w3-button" onclick="toggleFunction()">RSVP</a>
    <a href="#registryList" class="w3-bar-item w3-button" onclick="toggleFunction()">REGISTRY LIST</a>
    <a href="#accommodation" class="w3-bar-item w3-button">ACCOMMODATION</a>
    <a href="#contact" class="w3-bar-item w3-button">CONTACT US</a>
  </div>
    
  </div>
<div id="loading" class="loader-container">
<div class="loader"></div>
<div class="loader-text">Please Wait...</div>
</div>
<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle  w3-hide-small" style="white-space:nowrap;font-family: monotype corsiva">
    <span class="w3-center w3-padding-large w3-xxlarge w3-wide w3-animate-opacity custom-back-colour2">Kajal <span>and</span> Brandon's Wedding</span>
  </div>
    <div class="w3-display-middle w3-opacity-min w3-hide-medium w3-hide-large custom-back-colour2" style="max-width: 80%;font-family: monotype corsiva">
        <h1 class="w3-center w3-padding-large w3-wide w3-large w3-animate-opacity">Kajal &AMP; Brandon's Wedding</h1>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64 custom-back-colour1" id="about">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center"><em>We Love Life</em></p>
  <p>We are excited to be entering this new period in our lives together, having started this journey together since 2010 a lot has happened. Up to this point we have managed to spend a third of our life-spans together and have learnt the ups
  and downs of our personalities. With this being the case we have decided to take things to the next step and I the luckiest man alive got the opportunity to ask the most beautiful and wonderful woman to be my wife. She said <b>YES</b>!!!!</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i id="mockLogin" class="fa fa-heart w3-margin-right"></i>Kajal And Brandon</b></p><br>
      <img src="./images/photo3.JPG" class="w3-round w3-image" alt="Photo of Us" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to our wedding website. This is just a place we are looking to make things easier with regards to the admin side of our wedding, you will see there is a section in which you can rsvp which will require to give your names and number just so we know who you
        are and that we can get hold of you with your latest contact details. And please add a photo and you will be added to the gallery of attending family and friends. Contact details have been provided for your convenience and should you require directions
        you can refer to the venue map tab and see where the venue will be as well as some pictures of what to expect. We look forward to seeing you on our happy day</p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">What to look forward to:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Venue</p>
  <div class="w3-light-grey" style="opacity: 1">
    <div class="w3-container w3-padding-small w3-center custom-back-colour2" style="width:100%;opacity: 1">100%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Food</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-center custom-back-colour2" style="width:100%">100%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Entertainment</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-center custom-back-colour2" style="width:100%">100%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Company</p>
  <div class="w3-light-grey">
    <div id="percentageAttendance" class="w3-container w3-padding-small w3-center custom-back-colour2" style="width:5%">5%</div>
  </div>
</div>

<div class="w3-row w3-center w3-padding-16 custom-back-colour2">
  <div class="w3-quarter w3-section" style="opacity: 1">
    <span id="familyAttending" class="w3-xlarge">7</span><br>
    Family
  </div>
  <div class="w3-half w3-section w3-opacity-min">
    <span class="w3-center w3-padding-large custom-back-colour1 w3-xlarge w3-wide w3-animate-opacity">GUESTS <span class="w3-hide-small">ATTENDING</span></span>
  </div>
  <div class="w3-quarter w3-section">
    <span id="friendsAttending" class="w3-xlarge">0</span><br>
    Friends
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black w3-opacity-min" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
    <p class="w3-opacity w3-large">Registered under Kajal and Brandon</p>
    <h1>Reference ID</h1>
        <h2 id="refID">########</h2>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal05" class="w3-modal w3-black" onclick="this.style.display='none'" style='z-index: 99999'>
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img07" class="w3-image">
    <p id="caption1" class="w3-opacity w3-large"></p>
    <h1>Photo</h1>        
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container">
  <div class="w3-display-middle heading-shader">
     <span class="w3-xxlarge w3-text-white w3-wide w3-display-medium w3-display-small w3-hide-large">RSVP</span>
     <span class="w3-xxxlarge w3-text-white w3-wide w3-display-large w3-hide-small w3-hide-medium">RSVP</span>
  </div>
</div>

<!-- Container (RSVP Section) -->
<div class="w3-content w3-container w3-padding-64 w3-center custom-back-colour1" id="rsvp">
  <h3 class="w3-center">Preparation is key</h3>
  <p class="w3-center"><em>help us get there by clicking on the button and filling in your details!</em></p>
<button class="w3-button w3-padding-large" style="margin-top:64px;background-color: #cc0000cc" onclick="RSVPClick()">RSVP</button>
</div>

<!-- Modal for RSVP click-->

<div id="modal02" class="w3-modal">
    
  
  <div class="w3-modal-content w3-animate-zoom w3-center custom-back-colour1" id="modal02Content">
      
<header class="w3-container custom-back-colour2"> 
        <span class="w3-button w3-large w3-display-topright" onclick="this.parentElement.parentElement.parentElement.style.display='none'" title="Close Modal RSVP"><i class="fa fa-remove"></i></span>
        <h2>RSVP</h2>
      </header>
                        <form id="formRSVP" name="formRSVP" onsubmit="return false">
                            <label>Please use the drop down to register your attendance</label>
                            <select class="w3-select" id="attending" name="attending">			
				<option value="1" selected>Attending</option>
				<option value="2">Not Attending</option>
			</select>
                            <label>Please indicate relationship to the couple</label>
                            <select class="w3-select" id="family" name="family">
			
				<option value="1" selected>Family</option>
				<option value="2">Friend</option>
			</select>
                        <input class="w3-check" type="checkbox" checked="checked" id="kAcq" value="kAcq" name="p_acq[]">
			<label>acquainted with Kajal</label>
			<input class="w3-check" type="checkbox" id="bAcq" value="bAcq" name="p_acq[]">
			<label>acquainted with Brandon</label>
                        <br>
			<label>First Name</label>
			<input class="w3-input" required placeholder="Jane" type="text" id="firstName" name="firstName">
			<label>Surname</label>
			<input class="w3-input" required placeholder="Smith" type="text" id="surname" name="surname">
			<label>Contact Details</label>
			<input class="w3-input" required placeholder="0123457896" type="tel" id="cell" name="cell">
			<label>Email Address</label>
			<input class="w3-input" placeholder="example@gmail.com" type="email" id="mail" name="mail">
                        <label>Number of Children attending</label>
			<select class="w3-select" id="cAttending" name="cAttending">			
				<option value="0" selected>0</option>
                                <option value="1">1</option>
				<option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">3+</option>
			</select>
                        <input class="w3-check" type="checkbox" id="hAtt" value="hAtt" name="hurdeeAt[]">
			<label>Attending the Hurdee</label>
                        <br>
			<label>Comments</label>
			<input class="w3-input w3-margin-bottom" placeholder="Snacks are always good" type="text" id="comment" name="comment">			
                        <input class="w3-radio w3-margin-bottom" type="checkbox" name="pRSVP[]" id="pRSVP" value="pRSVP">
                        <label>RSVP for Partner</label>
                        <div id="partnerDetails" required name="partnerDetails" style="display: none">
                        <label>Partner First Name</label>
			<input class="w3-input" required placeholder="Joe" type="text" id="pfirstName" name="pfirstName">
			<label>Partner Surname</label>
			<input class="w3-input" required placeholder="Smith" type="text" id="psurname" name="psurname">
			<label>Partner Contact Details</label>
                        <input class="w3-radio w3-margin-bottom" type="checkbox" name="rCell" id="rCell" value="rCell">
                        <label>same as above</label>
			<input class="w3-input" placeholder="01234567891" type="tel" id="pCell" name="pCell">
			<label>Partner Email Address</label>
                        <input class="w3-radio w3-margin-bottom" type="checkbox" name="rMail" id="rMail" value="rMail">
                        <label>same as above</label>
			<input class="w3-input" placeholder="example@gmail.com" type="email" id="pMail" name="pMail">
                        </div>
                        <br>                     
                        <label>Add a photo of yourself so we can get familiar with who will be attending (optional)</label>
                        <input type="file" id="photo" name="photo" accept=".jpg,.png,.jpeg" class="w3-input">
                        <button id="RSVP" name="RSVP" type="submit" form="formRSVP" class="w3-button w3-margin-bottom w3-margin-top w3-light-grey" style="margin-top:20px;margin-bottom:10px">RSVP</button>
			
		<footer class="w3-container custom-back-colour2">
                <p>Look forward to your attendance</p>
                </footer>
	</div>
            </form>
    </div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container">
  <div class="w3-display-middle heading-shader">
    <span class="w3-xxlarge w3-text-white w3-wide w3-display-medium w3-display-small w3-hide-large">SHOPPING REGISTRY</span>
    <span class="w3-xxxlarge w3-text-white w3-wide w3-display-large w3-hide-small w3-hide-medium">SHOPPING REGISTRY</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64 w3-sepia-min custom-back-colour1 custom-temporary" id="registryList">

    <div class="w3-display-middle w3-container w3-hide-small custom-back-colour2 w3-padding-16">
        <h1 class="w3-center w3-xlarge w3-wide w3-animate-opacity custom-colour1">Bear with us... we are still trying to decide whether we <i>actually</i> need a cat shaped teapot...</h1>
  </div>
    <div class="w3-display-middle w3-hide-medium w3-hide-large custom-back-colour2">
        <h1 class="w3-center w3-padding-large w3-wide w3-small w3-animate-opacity custom-colour1">Bear with us... we are still trying to decided whether we <i>actually</i> need a cat shaped teapot...</h1>
  </div>

<!--
  <h3 class="w3-center">Registry List:</h3>
  <p class="w3-center"><em>Here are the shops which we have set a Registry up with.<br> Click on the logo to reveal further details</em></p><br>

  
  <div class="w3-row w3-margin">
     
    <div class="w3-card w3-col m4 custom-back-colour2" onclick="onClick(this.childNodes[1])">
  <img src="./images/mrpricehome_logo.png" alt="MrPHome" id="MrP" style="width:100%">
  <div class="w3-container w3-center">
    <p>Mr Price Home</p>
  </div>
</div>

    <div class="w3-card w3-col m4 custom-back-colour2" onclick="onClick(this.childNodes[1])">
  <img src="./images/DionWired.png" alt="MrDWired" id="MrDWired" style="width:100%">
  <div class="w3-container w3-center">
    <p>Dion Wired</p>
  </div>
</div>
      <div class="w3-card w3-col m4 custom-back-colour2" onclick="onClick(this.childNodes[1])">
        <img src="./images/CB.png" alt="Carol&Boydes" id="CandB" style="width:100%">
            <div class="w3-container w3-center">
                <p>Carol & Boydes</p>
        </div>
    </div>
      
  </div>
-->
</div>
<!-- Fourth Parallax Image with Portfolio Text -->
<div class="bgimg-5 w3-display-container">
  <div class="w3-display-middle heading-shader">
     <span class="w3-xxlarge w3-text-white w3-wide w3-display-small w3-display-medium w3-hide-large">ACCOMMODATION</span>
     <span class="w3-xxxlarge w3-text-white w3-wide w3-display-large w3-hide-small w3-hide-medium">ACCOMMODATION</span>
  </div>
</div>

<!-- Container (Accommodation Section) -->
<div class="w3-content w3-container custom-back-colour1 w3-padding-64" id="accommodation">
<h3 class="w3-center">Accommodation near the venue</h3>
<div class="w3-row w3-margin">
     
    <div class="w3-card w3-col m4 custom-back-colour2">
  <div class="w3-container w3-center">
    <p>The Garden Venue Boutique Hotel</p>
  </div>
    <div class="w3-container w3-center w3-padding-16 custom-back-colour1">
    <a href='https://thegardenvenue.co.za/'>web-site</a>
  </div>
</div>

    <div class="w3-card w3-col m4 custom-back-colour2">
  <div class="w3-container w3-center">
    <p>Avianto hotel</p>
  </div>
         <div class="w3-container w3-center w3-padding-16 custom-back-colour1">
    <a href='https://www.avianto.co.za/'>web-site</a>
  </div>
</div>
      <div class="w3-card w3-col m4 custom-back-colour2">
            <div class="w3-container w3-center">
                <p>Kloofzicht Lodge</p>
        </div>
           <div class="w3-container w3-center w3-padding-16 custom-back-colour1">
    <a href='https://kloofzicht.co.za/'>web-site</a>
  </div>
    </div>
      
  </div>
<h3 class="w3-center">Accommodation near where the Hurdee will happen</h3>
<div class="w3-row w3-margin">
     
    <div class="w3-card w3-col m4 custom-back-colour2">
  <div class="w3-container w3-center">
    <p>Tsogo Sun Garden Court Eastgate</p>
  </div>
    <div class="w3-container w3-center w3-padding-16 custom-back-colour1">
    <a href='https://www.tsogosun.com/garden-court-eastgate?chebs=gl-hotel_garden-court-eastgate&utm_source=google&utm_medium=businesslisting&utm_campaign=hotel_garden-court-eastgate'>web-site</a>
  </div>
</div>

    <div class="w3-card w3-col m4 custom-back-colour2">
  <div class="w3-container w3-center">
    <p>Munday BnB</p>
  </div>
         <div class="w3-container w3-center w3-padding-16 custom-back-colour1">
    <a href='http://www.themunday.com/'>web-site</a>
  </div>
</div>
      <div class="w3-card w3-col m4 custom-back-colour2">
            <div class="w3-container w3-center">
                <p>The Nicol Hotel</p>
        </div>
           <div class="w3-container w3-center w3-padding-16 custom-back-colour1">
    <a href='https://www.thenicol.co.za/'>web-site</a>
  </div>
    </div>
      
  </div>
</div>

<!-- fifth Parallax Image with Portfolio Text -->
<div class="bgimg-4 w3-display-container">
  <div class="w3-display-middle heading-shader">
     <span class="w3-xxlarge w3-text-white w3-wide w3-display-medium w3-display-small w3-hide-large">CONTACT</span>
     <span class="w3-xxxlarge w3-text-white w3-wide w3-display-large w3-hide-small w3-hide-medium">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container custom-back-colour1" id="contact">
<h3 class="w3-center">WHERE IT'S ALL HAPPENING</h3>
<p class="w3-center"><em>We would love to hear from you!</em></p>

<div class="w3-row w3-section">
 <!-- <div class="w3-col m3 w3-container">
    <img src="./images/weddingVenue.jpg" class="w3-image w3-round">
  </div> -->
<div class="w3-col m6 w3-container" >
    <div id="map" style="height:400px"></div>    
</div>
<div class="w3-col m6 w3-panel">
    <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right" onclick="focusEverwood()"></i>85 R114, Gauteng, Johannesburg<br>
        <i class="fa fa-globe fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="http://everwoodweddings.co.za/">Everwood Weddings Website</a><br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: site@faulinginlove.co.za<br>
    </div>
    <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave us a message:</p>
    <form id="formMail" name="formMail">
    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
        <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name" id="Name">
        </div>
    <div class="w3-half">
        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email" id="Email">
    </div>
    </div>
    <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message" id="Message">
    <button id="sendMail" name="sendMail" type="button" class="w3-button w3-right w3-section" style="background-color: #cc0000cc">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
</div>
    </form>
</div>
</div>

<!-- Modal for ajax response-->
<div id="modal03" class="w3-modal" ondblclick="this.style.display='none'">
  
  <div class="w3-modal-content w3-text-black custom-back-colour1 w3-center w3-animate-zoom">
      <header class="w3-container custom-back-colour2"> 
        <span class="w3-button w3-large w3-display-topright" onclick="this.parentElement.parentElement.parentElement.style.display='none'" title="Close Modal RSVP"><i class="fa fa-remove"></i></span>
        <h2>Server Response</h2>
      </header>
      <div class="w3-container w3-padding-16">
          <p id="ajaxResponse" class="w3-large"></p>
      </div>
    
  </div>
</div>

<div id="modal04" class="w3-modal" ondblclick="this.style.display='none'">
  
  <div class="w3-modal-content w3-text-black custom-back-colour1 w3-center w3-animate-zoom">
      <header class="w3-container custom-back-colour2"> 
        <span class="w3-button w3-large w3-display-topright" onclick="this.parentElement.parentElement.parentElement.style.display='none'" title="Close Modal RSVP"><i class="fa fa-remove"></i></span>
        <h2>Login</h2>
      </header>
      <form id="formLog" name="formLog" onsubmit="return false">
      <div class="w3-container w3-padding-16">
            <label>Username</label>
            <input class="w3-input" required type="text" id="loginU" name="loginU">
            <label>Password</label>
            <input class="w3-input" required type="password" id="loginP" name="loginP">
            <button id="formLo" name="formLo" type="submit" form="formL" class="w3-button w3-margin-bottom w3-margin-top w3-light-grey" style="margin-top:20px;margin-bottom:10px">Login</button>
            <div id="loginResponse" style="width:100%;overflow: scroll"></div>
      </div>
      </form> 
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-padding-64" style="color:black;background-color:#cc0000cc">
  <a href="#home" class="w3-button custom-back-colour1"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">

  </div>
  
</footer>
</body>
</html>
