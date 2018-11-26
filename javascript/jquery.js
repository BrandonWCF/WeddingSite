$(document).ready(function (e) {
	$("#RSVP").submit(function(e) {
	e.preventDefault();
	$.ajax({
		url: "http://localhost:80/WeddingSite/php/RSVPuser.php",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		beforeSend : ajaxSent(),
		success: function(data){ajaxReceived(data)},
		error: ajaxError(e)         
		});
	});
});

function ajaxSent(){
	console.log("Sent");
}

function ajaxReceived(data){
	if(data != null){
		
	 if(data=='invalid')
    {
     // invalid file format.
     console.log("Invalid File Format")
    }
    else
    {
     // view uploaded file.
     // $("#preview").html(data).fadeIn();
    // $("#RSVP")[0].reset(); 
	 console.log("Success" + data);
    }
	}
	else{
		console.log("Data is null")
	}
}

function ajaxError(e){
	console.log(e)
}
