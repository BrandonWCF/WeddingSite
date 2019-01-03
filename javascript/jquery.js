$(document).ready(function (e) {
    console.log("Document Ready");
    $("#sendMail").click(function (e) {
        sendEmailClick(e);
    });
    $("#RSVP").click(function (e) {
        console.log(document.getElementById('formRSVP').reportValidity());
        if(document.getElementById('formRSVP').reportValidity())
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
    $("#mockLogin").click(function (){
        console.log("Login in");
        document.getElementById('modal04').style.display = 'block';
    });
    
    $("#formLo").click(function (){
        console.log("Sending Username and password");
        loginClick();
    });
    refreshScreen(e);
});

function loginClick(e){
    console.log("LOGIN");
        var toAdd = new FormData(document.getElementById('formLog'));
        toAdd.append("Login","Login");
        $.ajax({
            url: "http://www.faulinginlove.co.za/php/quickLogin.php",
            //url: "http://localhost:80/WeddingSite/php/quickLogin.php",
            type: "POST",
            data: toAdd,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: ajaxSent(),
            success: function (data) {
                loginGD(data);
            },
            error: ajaxError(e)
        });
        //console.log(new FormData(this));
}

function loginGD(data){
    if(data == ""){
        console.log("Nothing was returned");
    }else if(data == null){
        console.log("Null was returned");
    }else{
        var received = JSON.parse(data);
        console.log(received);
        if(received == "FAIL"){
            console.log("Incorrect Login Details");
        }
        else{
            var tableData = "";
            tableData = '<table class="w3-table"><tr><th>attending</th><th>family</th><th>first_name</th><th>surname</th><th>cell</th><th>bran_acq</th><th>kaj_acq</th><th>comment_made</th><th>mail</th><th>number_children</th><th>plusones_first_name</th><th>plusones_surname</th><th>plusones_mail</th><th>plusones_cell</th></tr>';
            received.forEach((user, index) => {
                tableData += "<tr><td>" + user['attending'] + "</td><td>" + user['family'] + "</td><td>" + user['first_name'] + "</td><td>" + user['surname'] + "</td><td>" + user['cell'] + "</td><td>" + user['bran_acq'] + "</td><td>" + user['kaj_acq'] + "</td><td>" + user['comment_made'] + "</td><td>" + user['mail'] + "</td><td>" + user['number_children'] + "</td><td>" + user['plusones_first_name'] + "</td><td>" + user['plusones_surname'] + "</td><td>" + user['plusones_mail'] + "</td><td>" + user['plusones_cell'] + "</td></tr>"
            });
            tableData += "</table>";
            document.getElementById('loginResponse').innerHTML += tableData;
        }
    }
}

function sendRSVPClick(e){
    console.log("SUBMITTING RSVP");
        e.preventDefault();
        $.ajax({
            url: "http://www.faulinginlove.co.za/php/RSVPuser.php",
            //url: "http://localhost:80/WeddingSite/php/RSVPuser.php",
            type: "POST",
            data: new FormData(document.getElementById('formRSVP')),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: ajaxSent(),
            success: function (data) {
                ajaxReceived(data);
                refreshScreen(e);
            },
            error: ajaxError(e)
        });
        //console.log(new FormData(this));
}

function sendEmailClick(e){ 
        e.preventDefault();
        console.log("SENDING MAIL");
        $.ajax({
            url: "http://www.faulinginlove.co.za/php/email.php",
            //url: "http://localhost:80/WeddingSite/php/email.php",
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
            displayMessage("Data returned as invalid: " + data + "contact the adminstrator using the Contact Section found at the bottom of the website");
            document.getElementById('modal02').style.display = 'none';
        } else
        {
            // view uploaded file.
            // $("#preview").html(data).fadeIn();
            // $("#RSVP")[0].reset(); 
            console.log("Success" + data);
            
            if(data.includes('true')){
                if(data.includes('No file attached')){
                    console.log('No file attached');
                    //console.log('Successfully saved to database');
                    displayMessage("Message was successfully sent - No picture was included");
                    if(data.includes('no partner rsvp')){
                        displayMessage("Message was successfully sent<br>No partner RSVP<br>No picture was included");
                        console.log(data);
                    }
                    else{
                        displayMessage("Message was successfully sent<br>No picture was included");
                        console.log(data);
                    }
                }
                else{
                    //console.log('Successfully saved to database');
                    if(data.includes('no partner rsvp')){
                        displayMessage("Message was successfully sent<br>No partner RSVP<br>");
                        console.log(data);
                    }
                    else{
                        displayMessage("Message was successfully sent");
                        console.log(data);
                    }
                }
                document.getElementById('modal02').style.display = 'none';
            }
            else{
                displayMessage("Message was successfully sent but data does not include true" + data);
            }
        }
    } else {
        console.log("Data is null");
        displayMessage("Unsuccessful data is null");
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
            displayMessage("Message was not successfully sent");
        } else
        {
            // view uploaded file.
            // $("#preview").html(data).fadeIn();
            // $("#RSVP")[0].reset(); 
            console.log("ajaxMailReceived: Success: " + data);
            displayMessage("Message was successfully sent" + data);
        }
    } else {
        console.log("ajaxMailReceived: Data is null")
        displayMessage("Message was not successfully sent - no data received back from the server");
    }
}

function refreshScreen(e){
        console.log('REFRESHING SCREEN');
        var refData = new FormData();
        refData.append("Refresh","Home");
        $.ajax({
        url: "http://www.faulinginlove.co.za/php/refreshView.php",
        //url: "http://localhost:80/WeddingSite/php/refreshView.php",
        type: "POST",
        data: refData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            ajaxRefreshScreenReceive(data);
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
            if(typeof(data) === 'object'){
                var famAttendance = 0;
                var frAttendance = 0;
                var attendance = data.length;
                document.getElementById('percentageAttendance').innerHTML = attendance + "%";
                data.forEach((user, index) => {  
                    console.log(user);
                    if(user['family'] === '1'){
                        famAttendance++;
                        if(user['plusones_id'] !== null){
                            famAttendance++;
                        }
                        famAttendance = famAttendance + parseInt(user['number_children']);
                    }else{
                        frAttendance++;
                        if(user['plusones_id'] !== null){
                            frAttendance++;
                        }
                        frAttendance = frAttendance + parseInt(user['number_children']);
                    }
                });
                document.getElementById('percentageAttendance').innerHTML = frAttendance + famAttendance + "%";
                if(frAttendance + famAttendance < 100)
                    document.getElementById('percentageAttendance').style.width = frAttendance + famAttendance + "%"
                else
                    document.getElementById('percentageAttendance').style.width = "100%"
                document.getElementById('familyAttending').innerHTML = famAttendance;
                document.getElementById('friendsAttending').innerHTML = frAttendance;
            }else{
                console.log("Incorrect Result:" + data);
            }
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
        document.getElementById('pfirstName').required = true;
        document.getElementById('psurname').required = true;
        document.getElementById('pCell').required = true;        
    }
    else{
        console.log("Checkbox is not checked");
        document.getElementById('partnerDetails').style.display = 'none';
        document.getElementById('pfirstName').required = false;
        document.getElementById('psurname').required = false;
        document.getElementById('pCell').required = false;
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

function displayMessage(message){
    document.getElementById('modal03').style.display = "block";
    document.getElementById('ajaxResponse').innerHTML = message;
}
















































































