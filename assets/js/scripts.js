function mostrar_vale(id){	
		$.ajax({
			url:'http://localhost/CONTROLE_KM/editar_vale',
			type:'POST',
			data:{id, id},
			beforeSend:function(){
				$('#modal-vale').find('.modal-body').html('Carregando...');
				$('#modal-vale').modal('show');
				
			},
			success:function(html){
				$('#modal-vale').find('.modal-body').html(html);
				$('#modal-vale').modal('show');
			}

		});	
}

function puxar_vale(){
	$(document).ready(function(){
		$.ajax({
			url:"",
			data:"",
			success:function(resultado){
				$("cadastro-km").find(".vale").html(resultado);
			}
		});
	});
}

// CALCULA O KM INICIAL E FINAL
			$(document).ready(function(){
			$("#kmfinal").focusout(function(){
				var result = $("#kmfinal").val() - $("#kminicial").val();
				if (result < 0) {
					alert("O KM FINAL NAO PODE SER MENOR QUE O INICIAL!");
					$("#kmrodado").val("0");
					}
					else{
				$("#kmrodado").val(result);
				}
			});

			});
