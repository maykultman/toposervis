async function postData(url = '', data = {}) {
	
	const response = await fetch(`${ajax.api+url}`, {
	 	method: 'POST', // *GET, POST, PUT, DELETE, etc.
	  	mode: 'cors', 
	  	cache: 'no-cache', 
	  	credentials: 'same-origin', 
	  	headers: {
			'Content-Type': 'application/json'
	  	},
	  	redirect: 'follow',
	  	referrerPolicy: 'no-referrer', 
	  	body: JSON.stringify(data)
	});
	return response.json();
}

const toJson = data => Object.fromEntries(new FormData(data).entries());
const rules = {
	names : 'required',
	email : 'required',
	lastname : 'required',
	service : 'required',
	phone : 'required'
}; 

const messages = {
	names : '*',
	email : '*',
	lastname : '*',
	service : '*',
	phone : '*'
};

(function($){
	const toastEl = document.querySelector('.toast');
	let toast = new bootstrap.Toast(toastEl);
	$('#formContact').validate({
		rules : rules,
		messages : messages,
		submitHandler : form => {
			const data = toJson(form);
			postData( `send_message` , data)
			.then(data => {
				if( data.status === 'success' ) {
					location.href = '/gracias';
				}
				
			});
		}
	})

})(jQuery);

