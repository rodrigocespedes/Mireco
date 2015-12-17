$(document).ready(function () {
    
	$("#AddNew").click(function (){
		$(".error").remove();
		if( $("#fnNew").val() == "" ){
			$("#fnNew").focus().after("<span class='error'>Ingrese su Nombre</span>");
			return false;
		}else
		if( $("#fieldVerify").val().length > 0 ){
			$("#fnNew").focus().after("<span class='error'>Existe</span>");
			return false;
		}else
		if( $("#lnNew").val() == "" ){
			$("#lnNew").focus().after("<span class='error'>Ingrese su Apellido</span>");
			return false;
		}else
		if( $("#phNew").val() == "" ){
			$("#phNew").focus().after("<span class='error'>Ingrese su Telefono</span>");
			return false;
		}else
		if( $("#logNew").val() == "" ){
			$("#logNew").focus().after("<span class='error'>Ingrese su Usuario</span>");
			return false;
		}else
		if( $("#passNew").val() == "" ){
			$("#passNew").focus().after("<span class='error'>Ingrese su Contraseña</span>");
			return false;
		}
	});
	$("#fnNew, #lnNew, #phNew, #logNew, #passNew").keyup(function(){
		if( $(this).val() != "" ){
			$(".error").fadeOut();
			return false;
		}
	});
	$("#fnNew").keyup(function(){
		$("#AddNew").attr("disabled", true);
		$("#fieldVerify").val("");
		verifyUsers($("#fnNew").val());
			if( $("#fieldVerify").val().length > 0 ){
			$("#fnNew").focus().after("<span class='error'>Existe</span>");
			return false;
		}
	});

	$("#AddNewProduct").click(function (){
	
	$('#selectCodeOriginal').find('option').remove().end();
	$('#selectCodeAlternative').find('option').remove().end();
	$('#selectType').find('option').remove().end();
	$('#selectBrand').find('option').remove().end();
	
	var webServiceCodes = 'http://localhost/Mireco/WebService/ws_getCodes.php';
	var codOriginal = $("#selectCodeOriginal");
		$.getJSON(webServiceCodes, function(data){
			$.each(data, function(i, item){
				if("Original" == item.cod_type)
				{
					 codOriginal.append('<option value="' + item.cod_code + '">' + item.cod_name + '</option>');
				}
			});
		});

	var codAlternative = $("#selectCodeAlternative");
		$.getJSON(webServiceCodes, function(data){
			$.each(data, function(i, item){
				if("Alternativo" == item.cod_type)
				{
					 codAlternative.append('<option value="' + item.cod_code + '">' + item.cod_name + '</option>');
				}
			});
		});

	var webServiceType = 'http://localhost/Mireco/WebService/ws_getTypes.php';
	var type = $("#selectType");
		$.getJSON(webServiceType, function(data){
			$.each(data, function(i, item){
					 type.append('<option value="' + item.typ_code + '">' + item.typ_name + '</option>');
			});
		});

	var webServiceBrand = 'http://localhost/Mireco/WebService/ws_getBrands.php';
	var brand = $("#selectBrand");
		$.getJSON(webServiceBrand, function(data){
			$.each(data, function(i, item){
					 brand.append('<option value="' + item.bra_code + '">' + item.bra_name + '</option>');
			});
		});
	});
	
});


