$(document).ready(function (e) {
    console.log("Document Ready");
    $("#sendMail").click(function (e) {
        e.preventDefault();
        console.log("SENDING MAIL");
        $.ajax({
            url: "http://localhost:80/WeddingSite/php/email.php",
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
    });
    $("#RSVP").click(function (e) {
        console.log("SUBMITTING RSVP");
        e.preventDefault();
        $.ajax({
            url: "http://localhost:80/WeddingSite/php/RSVPuser.php",
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
    });
    
    function refreshScreen(){
        console.log('REFRESHING SCREEN');
        var refData = new FormData();
        refData.append("Refresh","Home");
        $.ajax({
        url: "http://localhost:80/WeddingSite/php/refreshView.php",
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
    };
    
    refreshScreen();
});



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
            console.log("ajaxRefreshScreenReceive: Success: " + data);
        }
    } else {
        console.log("ajaxRefreshScreenReceive: Data is null")
    }
}