
$("#region").change(function(event){
	
	console.log("provincias/"+event.target.value+"");
	$.get("/provincias/"+event.target.value+"",function(response, state){
		console.log(response);
		$("#provincia").empty();
		$("#provincia").append("<option value='0'>Escoja una provincia</option>");
		for(i=0; i<response.length; i++){
			/*console.log(response[i].nombre_provincia);
			console.log(response[i].id_provincia);*/
				$("#provincia").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
		}
	});
});

$("#provincia").change(function(event){
	//console.log("llega");
	$.get("/comunas/"+event.target.value+"",function(response, state){
		//console.log(response);
		$("#comuna").empty();
		$("#comuna").append("<option value='0'>Escoja una comuna</option>");
		for(i=0; i<response.length; i++){
			/*console.log(response[i].nombre);
			console.log(response[i].id);*/
				$("#comuna").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
		}
	});
});


$("#categoria").change(function(){
	if ($("#categoria").val()>=1 && $("#categoria").val()<=4 ){
		$("#habitacional").show()
		$("#rural").hide()
	}
	else if ($("#categoria").val()==5 || $("#categoria").val()==6 ){
		$("#habitacional").show()
		$("#rural").show()
	}else{
		$("#habitacional").hide()
		$("#rural").show()
	}

	
});

$("#tipo").change(function(){
	if($("#tipo").val()=="arriendo"){
		$("#valor_cl").show()
		$("#valor_uf").hide()
	}else{
		$("#valor_cl").hide()
		$("#valor_uf").show()
	}
});

