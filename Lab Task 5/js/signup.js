function get(id){
	return document.getElementById(id);
}
function checkUsername(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","check_username.php?uname="+e,value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState == 4 && this.status == 200){
			if(this.responseText.trim() == "Invalid"){
				get("err_uname").innerHTML = "Username Exists";
			}
			else{
				get("err_uname").innerHTML = "";
			}
		}
	};
	xhr.send();
}