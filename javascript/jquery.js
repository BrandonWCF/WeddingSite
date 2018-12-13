$(document).ready(function (e) {
    console.log("Document Ready");
    $("#sendMail").click(function (e) {
        sendEmailClick(e);
    });
    $("#RSVP").click(function (e) {
        sendRSVPClick(e);
    });
    checkPartnerRSVP();
    $("#pRSVP").click(function () {
        checkPartnerRSVP();
        checkRepeatMailandCell();
    });
    $("#rMail").click(function () {
        checkRepeatMailandCell();
    });
    $("#rCell").click(function () {
        checkRepeatMailandCell();
    });
    
    refreshScreen(e);
});

function sendRSVPClick(e){
    console.log("SUBMITTING RSVP");
        e.preventDefault();
        $.ajax({
            url: "http://localhost:80/php/RSVPuser.php",
            type: "POST",
            data: new FormData(document.getElementById('formRSVP')),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: ajaxSent(),
            success: function (data) {
                ajaxReceived(data);
            },
            error: ajaxError(e)
        });
        //console.log(new FormData(this));
}

function sendEmailClick(e){ 
        e.preventDefault();
        console.log("SENDING MAIL");
        $.ajax({
            url: "http://localhost:80/php/email.php",
            type: "POST",
            data: new FormData(document.getElementById('formMail')),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: ajaxMailSent(),
            success: function (data) {
                ajaxMailReceived(data);
            },
            error: ajaxError(e)
        }); //console.log(new FormData(document.getElementById('formMail')));
}

function ajaxSent() {
    console.log("Sent");
}

function ajaxReceived(data) {
    if (data != null) {

        if (data == 'invalid')
        {
            // invalid file format.
            console.log("Home View did not refresh");
        } else
        {
            // view uploaded file.
            // $("#preview").html(data).fadeIn();
            // $("#RSVP")[0].reset(); 
            console.log("Success" + data);
        }
    } else {
        console.log("Data is null")
    }
}

function ajaxError(e) {
    console.log(e)
}

function ajaxMailSent() {
    console.log("ajaxMailSent: Sent Mail");
}

function ajaxMailReceived(data) {
    if (data != null) {

        if (data == 'invalid')
        {
            // invalid file format.
            console.log("ajaxMailReceived: Failed to send message")
        } else
        {
            // view uploaded file.
            // $("#preview").html(data).fadeIn();
            // $("#RSVP")[0].reset(); 
            console.log("ajaxMailReceived: Success: " + data);
        }
    } else {
        console.log("ajaxMailReceived: Data is null")
    }
}

function refreshScreen(e){
        console.log('REFRESHING SCREEN');
        var refData = new FormData();
        refData.append("Refresh","Home");
        $.ajax({
        url: "http://localhost:80/php/refreshView.php",
        type: "POST",
        data: refData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            ajaxRefreshScreenReceive(data)
        },
        error: ajaxError(e)
    });
}

function ajaxRefreshScreenReceive(data) {
    if (data != null) {

        if (data == 'invalid')
        {
            // invalid file format.
            console.log("ajaxRefreshScreenReceive: Failed to refresh view")
        } else
        {
            // view uploaded file.
            // $("#preview").html(data).fadeIn();
            // $("#RSVP")[0].reset(); 
            var data = JSON.parse(data);
            console.log(data);
            var famAttendance = 0;
            var frAttendance = 0;
            var attendance = data.length;
            document.getElementById('percentageAttendance').innerHTML = attendance + "%";
            data.forEach((user, index) => {  
                console.log(user);
                if(user['family'] == '1'){
                    famAttendance++;
                }else{
                    frAttendance++;
                }
            });
            document.getElementById('familyAttending').innerHTML = famAttendance;
            document.getElementById('friendsAttending').innerHTML = frAttendance;
            
        }
    } else {
        console.log("ajaxRefreshScreenReceive: Data is null")
    }
}

function checkPartnerRSVP(){
    var checkbox = document.getElementById('pRSVP');
    console.log("The following is checking up the value for the pRSVP checkbox");
    console.log(checkbox);
    if(checkbox.checked == true){
        console.log("Checkbox is checked");
        document.getElementById('partnerDetails').style.display = 'block';
    }
    else{
        console.log("Checkbox is not checked");
        document.getElementById('partnerDetails').style.display = 'none';
    }
}

function checkRepeatMailandCell(){
    var mailCheckbox = document.getElementById('rMail');
    var cellCheckbox = document.getElementById('rCell');
    console.log("checkRepeatMailandCell");
    console.log(mailCheckbox.checked);
    console.log(cellCheckbox.checked);
    if(mailCheckbox.checked == true || cellCheckbox.checked == true ){
        if(mailCheckbox.checked == true){
            document.getElementById('pMail').value = document.getElementById('mail').value;
        }
        if(cellCheckbox.checked == true){
            document.getElementById('pCell').value = document.getElementById('cell').value;
        }
    }
}

// Modal Image Gallery
function onClick(element) {
    console.log(element);
  document.getElementById("img01").src = element.src;
  console.log(element.id)
  switch(element.id){
    case'CandB':    
        document.getElementById("refID").innerHTML = '123456879';
    break;
    case'Makro':
        document.getElementById("refID").innerHTML = '123456879';
    break;
    case'GAME':
        document.getElementById("refID").innerHTML = '123456879';
    break;
    case'HomeandHouse':
        document.getElementById("refID").innerHTML = '123456879';
    break;
    case'MrDWired':
        document.getElementById("refID").innerHTML = '123456879';
    break;
    case'MrP':
        document.getElementById("refID").innerHTML = '123456879';
    break;
    default:
        console.log(element.id);
                     
      
  }
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