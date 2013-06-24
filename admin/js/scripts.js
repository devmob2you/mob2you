
//Show/Hidde Clientes
$(document).ready(function(){
	 //hidden no inicio
		$("#cliente").hide();
		//ao clicar no #clientes
	  $("#clientes").click(function(){
		  //aparece div 
	    $("#cliente").toggle();
	    //hidden em outra div
		$("#fornecedor").hide()
		$("#categoria").hide()
		$("#produto").hide()
		$("#itenestoque").hide()
		$("#usuario").hide()
		;
	  });
	});

//Show/Hidde Fornecedores
$(document).ready(function(){
	 //hidden no inicio
		$("#fornecedor").hide();
		//ao clicar no #clientes
	  $("#fornecedores").click(function(){
		  //aparece div 
	    $("#fornecedor").toggle();
	    //hidden em outra div
		$("#cliente").hide()
		$("#categoria").hide()
		$("#produto").hide()
		$("#itenestoque").hide()
		$("#usuario").hide()
	  });
	});

//Show/Hidde Categorias
$(document).ready(function(){
	 //hidden no inicio
		$("#categoria").hide();
		//ao clicar no #clientes
	  $("#categorias").click(function(){
		  //aparece div 
	    $("#categoria").toggle();
	    //hidden em outra div
		$("#cliente").hide()
		$("#fornecedor").hide()
		$("#produto").hide()
		$("#itenestoque").hide()
		$("#usuario").hide()
	  });
	});

//Show/Hidde Produtos
$(document).ready(function(){
	 //hidden no inicio
		$("#produto").hide();
		//ao clicar no #clientes
	  $("#produtos").click(function(){
		  //aparece div 
	    $("#produto").toggle();
	    //hidden em outra div
		$("#cliente").hide()
		$("#fornecedor").hide()
		$("#categoria").hide()
		$("#itenestoque").hide()
		$("#usuario").hide()
	  });
	});

//Show/Hidde Ítens Estoque
$(document).ready(function(){
	 //hidden no inicio
		$("#itensestoque").hide();
		//ao clicar no #clientes
	  $("#itensestoques").click(function(){
		  //aparece div 
	    $("#itensestoque").toggle();
	    //hidden em outra div
		$("#cliente").hide()
		$("#fornecedor").hide()
		$("#categoria").hide()
		$("#produto").hide()
		$("#usuario").hide()
	  });
	});

//Show/Hidde Usuários
$(document).ready(function(){
	 //hidden no inicio
		$("#usuario").hide();
		//ao clicar no #clientes
	  $("#usuarios").click(function(){
		  //aparece div 
	    $("#usuario").toggle();
	    //hidden em outra div
		$("#cliente").hide()
		$("#fornecedor").hide()
		$("#categoria").hide()
		$("#produto").hide()
		$("#itenestoque").hide()
	  });
	});