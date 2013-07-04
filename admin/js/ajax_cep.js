/*Referencia:
	
	ESTA OK MANIPULANDO POR UMA BASE DE DADOS SUPER ATUALIZADA 
	API cep correios: http://avisobrasil.com.br/correio-control/api-de-consulta-de-cep/
	JSON: http://www.json.org/
	
	*/

    $(document).ready(function(){
                //Preenche os campos na a&#231;&#227;o "Blur" (mudar de campo)
                $("#cep").blur(function(){
                    consulta = $("#cep").val()

                
                var url = "http://cep.correiocontrol.com.br/" + consulta + ".json";
                
                $.ajax({
                     url: url,
                     type:'GET',
                     dataType: 'json',
                     success: function(json){
                      $("#rua").val(json.logradouro)
                      $("#bairro").val(json.bairro)
                      $("#cidade").val(json.localidade)
                      $("#uf").val(json.uf)                	  
                      						},
                		});//ajax
                
                });//função blur
        });
