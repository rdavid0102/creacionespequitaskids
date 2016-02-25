var inicio=function () {

	 function hola(){

				bootbox.confirm({ 
			 	title: 'Creaciones pequitas kids',
			    message: 'Estamos trabajando', 
			    callback: function(result){if(result==true){
			  	
			  	}else{
			  		////no envio datos
			  	}
			  }
			}) 


	 }
	 $("#hola").click(function(e){
	 hola();
	});

	/////////// 	login
	$(".logeo").click(function(e){
		$('.modal-logeo').modal('show')
	});
///////////
	}

$(document).on('ready',inicio);