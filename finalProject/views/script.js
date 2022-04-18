function ajaxLogin(){
		
	let loginInfo = {
		usertype: document.querySelector('input[name="usertype"]:checked').value,
		username: document.getElementById('inputUsername').value,
		password: document.getElementById('inputPassword').value
	};
	let json = JSON.stringify(loginInfo);

	let http = new XMLHttpRequest();
	http.open('GET', '../controller/loginCheck.php?myjson='+json, true);
	http.send();
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200 ){

			var msg = String(this.responseText).trim();
			if(msg=="success"){
				if (loginInfo.usertype=="admin") {
					location.href = 'adminHome.php';
				}
				else if (loginInfo.usertype=="teacher") {
					location.href = 'teacherHome.php';
				}
				else if (loginInfo.usertype=="parent") {
					location.href = 'parentHome.php';
				}
				else{
					location.href = 'studentHome.php';
				}
			}
			else{
				alert(msg);
				document.getElementById('msg').style.color = "red";
				document.getElementById('msg').innerHTML = msg;
			}						
		}
	}
	
}

function openSignup(){
	location.href = 'reg.php';
}
function openLogin(){
	location.href = 'login.php';
}