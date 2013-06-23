 $(document).ready(function(){
	 //hidden no inicio
		$("#cliente").hide();
		//ao clicar no #clientes
	  $("#clientes").click(function(){
		  //aparece div 
	    $("#cliente").toggle();
	    //hidden em outra div
		$("#fornecedores").hide();
	  });
	});