function load_fill(){
	document.getElementById("job").value =  "Please enter job title here";
	document.getElementById("birthday").value =  "Please enter your birthday here";
	document.getElementById("city").value =  "Please enter city here";
	document.getElementById("state").value =  "Please enter state here";
	document.getElementById("county").value =  "Please enter county here";
	document.getElementById("phone").value =  "(xxx)xxx-xxxx";
	document.getElementById("website").value =  "Please enter website here";
}

function submit_fill(){
	var job = document.getElementById("job").value;
	var birthday = document.getElementById("birthday").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;
	var county = document.getElementById("county").value;
	var phone = document.getElementById("phone").value;
	var website = document.getElementById("website").value;
	var all_true = true;
	
	if(job == "" || job.search(/\d/)>=0){
		if(job.search(/\d/)>=0){
			alert("Job title can not contain numbers");
		}else{
			alert("Please enter in a valid job title");
		}
		document.getElementById("job").focus();
		all_true=false;
	}
	
	var birthday_pat = /^\d/;
	if(birthday == "" || !birthday_pat.test(birthday)){
		if(!birthday_pat.test(birthday) && birthday != ""){
			alert("birthday must start with a number");
		}else{
			alert("Please enter your birthday");
		}
		document.getElementById("birthday").focus();
		all_true=false;
	}
	
	if(city == ""){
		alert("Please enter a city");
		document.getElementById("city").focus();
		all_true=false;
	}
	
	if(state == "MD" || state == "NJ" || state == "VA" || state == "md" || state == "nj" || state == "va"){
	}else{
		alert("Re-type state");
		document.getElementById("state").focus();
		all_true=false;
	}
		
	if(county == ""){
		alert("Please enter a county");
		document.getElementById("county").focus();
		all_true=false;
	}
	
	var phone_pat = /\(\d{3}\)\d{3}-\d{4}/;
	if(phone == "" || !phone_pat.test(phone)){
		if(!phone_pat.test(phone)){
			alert("Please re-enter your number in the format (xxx)xxx-xxxx");
		}else{
			alert("Please enter in a valid phone number");
		}
		document.getElementById("phone").focus();
		all_true=false;
	}
	
	var website_pat = /\w+\@\w+\.\w+/;
	if(website == "" || !website_pat.test(website)){
		if(!website_pat.test(website)){
			alert("An invalid website has been entered");
		}else{
			alert("Please enter in a valid website");
		}
		document.getElementById("website").focus();
		all_true=false;
	}
	
	if(all_true){
		alert("Thank you. We will contact you soon with additional information\n\nJob: "+job+"\nBirthday: "+birthday+"\nCity: "+city+"\nState: "+state+"\nCounty: "
		+county+"\nPhone Number: "+phone+"\nWebsite: "+website);
	}
}
 