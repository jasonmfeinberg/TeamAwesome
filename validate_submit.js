function validate_submit(){
	var gname=document.forms["submit_form"]["game_name"].value,
	username=document.forms["submit_form"]["User"].value,
	rulesandins=document.forms["submit_form"]["Rules"].value,
	reqs=document.forms["submit_form"]["Requirements"].value,
	errors=new Array, errorcount=0;
	if (gname==null||gname=""){
		errors[errorcount]="You need to enter a game name first!"
		errorcount++;
	}
	else if (gname.length>40){
		errors[errorcount]="Game names can't be longer than 40 characters!"
		errorcount++;
	}
	if (username==null||username=""){
		errors[errorcount]="You need to enter a user name!"
		errorcount++;
	}
	else if (username.length>16){
		errors[errorcount]="Usernames can't be longer than 16 characters!"
		errorcount++;
	}
	if (rulesandins==null||rulesandins=""){
		errors[errorcount]="You need to enter the rules and instructions!"
		errorcount++;
	}
	else if (username.length>1000){
		errors[errorcount]="Rules and Instructions can't be longer than 1000 characters!"
		errorcount++;
	}
	if (username.length>100){
		errors[errorcount]="Requirements can't be longer than 100 characters!"
		errorcount++;
	}
	if (errorcount!=0){
		var alertmessage="";
		for(i=0;i<errors.length;i++){
			alertmessage=alertmessage+"/n"+errors[i];
		}
		alert(alertmessage);
		return false;
	}
}