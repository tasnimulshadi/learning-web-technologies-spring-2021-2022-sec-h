function ajaxLogin(){
	
	let usertype = document.getElementById('inputUsertype').value;
	let username = document.getElementById('inputUsername').value;
	let password = document.getElementById('inputPassword').value;
	let http = new XMLHttpRequest();
	http.open('GET', '../controller/loginCheck.php?utype='+usertype+'&uname='+username+'&upass='+password, true);
	http.send();
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200 ){
			let msg = this.responseText;
			
			if(msg=="success"){
				location.href = 'adminHome.php';
			}
			else{				
				document.getElementById('msg').style.color = "red";
				document.getElementById('msg').innerHTML = msg;
			}			
		}
	}
	
}