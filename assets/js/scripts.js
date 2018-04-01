function pegarkm(){
	
	
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
