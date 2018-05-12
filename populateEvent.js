// popcornA.js
//  Ajax JavaScript code for the popcornA.html document
// function getPlace
//  parameter: zip
function getPlace(valueOfColor){
    //create a new Ajax request to the URL getCityState.php
    //query-string-parameter-name is zip
    //query-string-parameter-value is the parameter that was sent to this function, i.e., the zip code value that the user entered
    //on the successful processing of the Ajax request, we want the displayCityState function to be invoked
    new Ajax.Request( "getCalendarEvent.php",
		      {
			  method: "get",
			      parameters: {color:valueOfColor},
			      onSuccess: displayCalendarEvents
			      } );
}

//displayCityState is the function that is to be executed when the Ajax request is successful
//IMPORTANT: The variable ajax MUST be in the parameter list of this function
//this function, retrieves the response sent by the PHP program above,  splits the response at the  comma-space character
//and populates the values  of the city and state textboxes with the split values
function displayCalendarEvents(ajax){
    var result = ajax.responseText;
    var place = result.split(', ');
    $("event").value = place[0];
    $("time").value = place[1];
    $("location").value = place[2];
}

