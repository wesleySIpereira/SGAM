

$(document).ready(function(){
	

	
	// Form Validation
    $('#form_ficha').validate({
		rules:{
			pessoa[nm_pessoa]:{
				required:true,
				minlength: 5
				},
				mail_funcionario:{
					required: true,
					email: true
					},
			n_resp:{
				 required: true,
				 number:true
				},	
			cid_cargo:{
				required:true
				},	
		     cid_secretaria:{
				 required:true
				 },		
			id_setor:{
				required:true
				},	
		    nm_local:{
				required:true,
				minlength: 5
				},	
		   n_ramal:{
			   required:true
			   },	
		   obs_local:{
			   required:true
			   },
		  nm_usuario:{
			  required:true,
			  minlength: 3
			  },
		  senha:{
			  required:true,
			  minlength: 5
			  },
		  confirma_senha:{
			  
					required: true,
					minlength: 5,
					equalTo: "#senha"
				
			  },	  	  	   	   		 	
		},
		errorClass: "text-danger",
		errorElement: "span",
		highlight:function(element, _errorClass, validClass) {
			$(element).parents('.form-group').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.form-group').removeClass('has-error');
			$(element).parents('.form-group').addClass('has-success');
		}
	});
	
	
});

