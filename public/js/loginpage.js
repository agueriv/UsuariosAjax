(() => {
	'use strict'
	
	const url = document.querySelector('meta[name="url-base"]')['content'];
	const csrf = document.querySelector('meta[name="csrf-token"]')['content'];
	
	// Evento logout
	document.getElementById('logout-btn').addEventListener('click', () => {
		// Revocamos el token
		logout();
		
		// Vaciamos el local storage
		localStorage.removeItem("user-token");
		
		// Comprobamos user
		user();
	})
	
	// Evento login
	document.getElementById('login-btn').addEventListener('click', () => {
		// Recogemos credenciales
		let email = document.getElementById('email').value;
		let pass = document.getElementById('password').value;
		
		document.getElementById('emailError').textContent = '';
		document.getElementById('passError').textContent = '';
		document.getElementById('unauthorized').textContent = '';
		
		// Lanzar fetch para intentar loguearte en la app
		let body = {
			'email': email,
			'password': pass
		}
		
		login(body);
	})
	
	// Peticion para login
	function login(body) {
		fetch(url + '/api/login', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': csrf
          },
          body: JSON.stringify(body),
        })
        .then(response => response.json())
        .then(data => {
            if(data.hasOwnProperty('errors')) {
            	if(data.errors.hasOwnProperty('email')) {
            		document.getElementById('emailError').textContent = data.errors.email[0];
            	}
            	if(data.errors.hasOwnProperty('password')) {
            		document.getElementById('passError').textContent = data.errors.password[0];
            	}
            } else if(data.hasOwnProperty('message')) {
            	document.getElementById('unauthorized').textContent = 'Email or password invalids';
            } else {
            	// Guardamos token y solicitamos peticion ususario
            	let token = {
            		access_token: data.access_token,
            		token_type: data.token_type,
            		expires_at: data.expires_at,
            		resume_token: data.token_type + ' ' + data.access_token
            	}
            	
            	localStorage.setItem('user-token', JSON.stringify(token));
            	
            	// Comprobamos user
            	user();
            }
        })
        .catch(error => {
            console.log("Error:", error);
          }
        );
	}
	
	// Peticion para logout
	function logout() {
		// Obtenemos el token
		let userInfo = JSON.parse(localStorage.getItem('user-token'));
		let token = userInfo != null ? userInfo.resume_token : null;
		
		// Hacemos el fetch a user para desloguearnos
		const headers = new Headers();
		headers.append('Accept', 'application/json');
		
		if(token != null) {
			headers.append('authorization', token);
		}
		
		const init = {
		  method: 'GET',
		  headers
		};
		
		/*global fetch*/
		fetch(url + '/api/logout', init)
		.then((response) => {
		  return response.json();
		})
		.then((text) => {
		  console.log(text)
		})
		.catch((e) => {
		  console.log(e);
		});
	}
	
	// Petición usuario
	function user() {
		// Obtenemos el token
		let userInfo = JSON.parse(localStorage.getItem('user-token'));
		let token = userInfo != null ? userInfo.resume_token : null;
		
		// Hacemos el fetch a user para saber si estamos logueados o no
		const headers = new Headers();
		headers.append('Accept', 'application/json');
		if(token != null) {
			headers.append('authorization', token);
		}
		
		const init = {
		  method: 'GET',
		  headers
		};
		
		/*global fetch*/
		fetch(url + '/api/user', init)
		.then((response) => {
		  return response.json();
		})
		.then((text) => {
		  // text is the response body
		  if(text.message == "Unauthenticated.") {
		  	document.getElementById('loggued-form').style.display = 'none';
		  	document.getElementById('login-form').style.display = 'block';
		  	document.getElementById('email').value = '';
		  	document.getElementById('password').value = '';
		  	
		  } else {
		  	document.getElementById('loggued-form').style.display = 'block';
		  	document.getElementById('login-form').style.display = 'none';
		  	// Seteamos info de user
		  	document.getElementById('username').textContent = text.name;
		  	document.getElementById('userEmail').value = text.email;
		  }
		})
		.catch((e) => {
		  console.log(e);
		});
	}
	
	user();
	
})();