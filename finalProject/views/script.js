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


function ajaxReg(){
		
	let regInfo = {
		username: document.getElementById('inputUsername').value,
		password: document.getElementById('inputPassword').value,
		email: document.getElementById('inputEmail').value
	};
	let json = JSON.stringify(regInfo);

	let http = new XMLHttpRequest();
	http.open('GET', '../controller/regCheck.php?myjson='+json, true);
	http.send();
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200 ){
			alert(this.responseText);					
		}
	}
}


function ajaxAddUser(){
	let addUserInfo = {
		usertype: document.querySelector('input[name="usertype"]:checked').value,
		username: document.getElementById('inputUsername').value,
		password: document.getElementById('inputPassword').value,
		email: document.getElementById('inputEmail').value
	};
	let json = JSON.stringify(addUserInfo);

	let http = new XMLHttpRequest();
	http.open('GET', '../controller/addUserCheck.php?myjson='+json, true);
	http.send();
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200 ){
			alert(this.responseText);					
		}
	}
}


function ajaxAddNotice(){
	let addNoticeInfo = {
		date: document.getElementById('inputDate').value,
		title: document.getElementById('inputTitle').value,
		detail: document.getElementById('inputDetail').value,
	};
	let json = JSON.stringify(addNoticeInfo);

	let http = new XMLHttpRequest();
	http.open('GET', '../controller/addNoticeCheck.php?myjson='+json, true);
	http.send();
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200 ){
			alert(this.responseText);					
		}
	}
}


