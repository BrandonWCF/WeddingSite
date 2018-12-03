<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./css/design.css">
<script src="./javascript/jquery.js"></script>
<body class="w3-brown">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT US</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> ATTENDANCE GALLERY</a>
    <a href="#rsvp" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-pencil"></i> RSVP</a>
	<a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT US</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-sand w3-text-brown w3-xlarge w3-wide w3-animate-opacity">KAJAL <span class="w3-hide-small">and</span> BRANDON'S WEDDING</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64 w3-brown" id="about">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center"><em>We Love Life</em></p>
  <p>We are excited to be entering this new period in our lives together, having started this journey together since 2010 a lot has happened. Up to this point we have managed to spend a third of our life-spans together and have learnt the ups
  and downs of our personalities. With this being the case we have decided to take things to the next step and I the luckiest man alive got the opportunity to ask the most beautiful and wonderful woman to be my wife. She said <b>YES</b>!!!!</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Kajal And Brandon</b></p><br>
      <img src="./images/IMG_8715.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Us" width="500" height="333">
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
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-sand w3-center" style="width:100%">100%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Food</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-sand w3-center" style="width:100%">100%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Entertainment</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-sand w3-center" style="width:100%">100%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Company</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-sand w3-center" style="width:5%">5%</div>
  </div>
</div>

<div class="w3-row w3-center w3-brown w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">7</span><br>
    Family
  </div>
  <div class="w3-half w3-section">
    <span class="w3-center w3-padding-large w3-sand w3-xlarge w3-wide w3-animate-opacity">GUESTS <span class="w3-hide-small">ATTENDING</span></span>
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">0</span><br>
    Friends
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">ATTENDANCE GALLERY</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64 " id="portfolio">
  <h3 class="w3-center">Guest List:</h3>
  <p class="w3-center"><em>Here are some of the lovely people who will be attending.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
    </div>
    
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">RSVP</span>
  </div>
</div>

<!-- Container (RSVP Section) -->
<div class="w3-content w3-container w3-padding-64 w3-center" id="rsvp">
  <h3 class="w3-center">Preparation is key</h3>
  <p class="w3-center"><em>help us get there by clicking on the button and filling in your details!</em></p>
<button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px" onclick="RSVPClick()">RSVP</button>
</div>

<!-- Modal for RSVP click-->

<div id="modal02" class="w3-modal">
    
  
  <div class="w3-modal-content w3-animate-zoom w3-center w3-sand" id="modal02Content">
      
<header class="w3-container w3-brown"> 
        <span class="w3-button w3-large w3-display-topright" onclick="this.parentElement.parentElement.parentElement.style.display='none'" title="Close Modal RSVP"><i class="fa fa-remove"></i></span>
        <h2>RSVP</h2>
      </header>
			<form id="RSVP" name="RSVP" class="w3-container" method="post">
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
			<input class="w3-input" required value="Brandon" type="text" id="firstName" name="firstName">
			<label>Surname</label>
			<input class="w3-input" required value="Faul" type="text" id="surname" name="surname">
			<label>Contact Details</label>
			<input class="w3-input" value="0662435268" type="tel" id="cell" name="cell">
			<label>Email Address</label>
			<input class="w3-input" value="bwcfaul@gmail.com" type="email" id="mail" name="mail">
			<label>Comments</label>
			<input class="w3-input w3-margin-bottom" value="Snacks are always good" type="text" id="comment" name="comment">			
                        <br>                     
                        <label>Add a photo of yourself so we can get familiar with who will be attending (optional)</label>
                        <input type="file" id="photo" name="photo" accept=".jpg,.png,.jpeg" class="w3-input w3-margin-top">
			<button class="w3-button w3-margin-bottom w3-margin-top w3-light-grey" style="margin-top:20px;margin-bottom:10px">RSVP</button>
			</form>
		<footer class="w3-container w3-brown">
                <p>Look forward to your attendance</p>
                </footer>
	</div>

    </div>
<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE IT'S ALL HAPPENING</h3>
  <p class="w3-center"><em>We would love to hear from you too!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="./images/weddingVenue.jpg" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>85 R114 85 R114, Gauteng, Johannesburg<br>
		<i class="fa fa-globe fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="http://everwoodweddings.co.za/">Everwood Weddings Website</a><br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Brandon Phone: +27 66 243 5268<br>
		<i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: bwcfaul@gmail.com<br>
		<i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Kajal Phone: +27 83 455 5568<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: kajal.tulsi@gmail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave us a message:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-sand w3-right w3-section w3-opacity w3-hover-opacity-off" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-sand w3-padding-64">
  <a href="#home" class="w3-button w3-brown w3-opacity w3-hover-opacity-off"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Modal RSVP
function RSVPClick() {
  document.getElementById("modal02").style.display = "block";
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-sand";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-sand", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>