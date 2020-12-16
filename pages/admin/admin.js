function baseUrl(){
	return location.protocol + "//" + location.host + "/";
}
function baseUrlAction(){
     return location.protocol + "//" + location.host + "/ElectricBillingSystem/database/controller.php";
}




$('#adminLogin').click(function(ve){ 
		ve.preventDefault();
	

		 $.ajax({
	            type:'POST',
	            url: baseUrlAction() + '?btn=loginAdmin',
	            context: this,
	            dataType: 'json',
	            data: { 
                    userName : $('#userName').val(),
                    password : $('#password').val()
                   
	            },
	            error: function(ts) { 
	            			console.log(ts.responseText+" naay error sa process admin Login"); 


	            },
	            success: function(data) { 
		           
		         // alert(data.status1);
		        
		          window.location ='index.php';

	            }
	        });
});


$('#registerModal').click(function(ve){ 	
		ve.preventDefault();

		 $.ajax({
	            type:'POST',
	            url: baseUrlAction() + '?btn=registerClient',
	            context: this,
	            dataType: 'json',
	            data: { 
                    firstName : $('#firstNameCostumer').val(),
                    lastName : $('#lastNameCostumer').val(),
                    meterNumber:$('#meterNumber').val(),
                    accountNumber:$('#accountNumber').val(),
                    address:$('#address').val()                   
	            },
	            error: function(ts) { 
	            			console.log(ts.responseText+" naay error sa Register"); 


	            },
	            success: function(data) { 
		      
		          $('#firstNameCostumer').val("");
		          $('#lastNameCostumer').val("");
		          $('#meterNumber').val("");
		          $('#accountNumber').val("");
		          $('#address').val("");
		          //console.log("tama man");
		       	 
	            }
	        });

});

$('#distributionModal').click(function(ve){ 	
		ve.preventDefault();

		 $.ajax({
	            type:'POST',
	            url: baseUrlAction() + '?btn=distribution',
	            context: this,
	            dataType: 'json',
	            data: { 
                    charges : $('#charges').val(),
                    amount : $('#amount').val()
                                     
	            },
	            error: function(ts) { 
	            			console.log(ts.responseText+" naay error sa Register"); 


	            },
	            success: function(data) { 
		      
		          $('#charges').val("");
		          $('#amount').val("");       
		       	 
	            }
	        });

});

$('#FCHmodal').click(function(ve){ 	
		ve.preventDefault();

		 $.ajax({
	            type:'POST',
	            url: baseUrlAction() + '?btn=FCHcharges',
	            context: this,
	            dataType: 'json',
	            data: { 
                    charges : $('#charges').val(),
                    amount : $('#amount').val()
                                     
	            },
	            error: function(ts) { 
	            			console.log(ts.responseText+" naay error sa Register"); 


	            },
	            success: function(data) { 
		      
		          $('#charges').val("");
		          $('#amount').val("");       
		       	 
	            }
	        });

});

$('#generationCharges').click(function(ve){ 	
		ve.preventDefault();

		 $.ajax({
	            type:'POST',
	            url: baseUrlAction() + '?btn=generation',
	            context: this,
	            dataType: 'json',
	            data: { 
                    charges : $('#charges').val(),
                    amount : $('#amount').val()
                                     
	            },
	            error: function(ts) { 
	            			console.log(ts.responseText+" naay error sa Register"); 


	            },
	            success: function(data) { 
		      
		          $('#charges').val("");
		          $('#amount').val("");       
		       	 
	            }
	        });

});

$('#governmentCharge').click(function(ve){ 	
		ve.preventDefault();

		 $.ajax({
	            type:'POST',
	            url: baseUrlAction() + '?btn=governmentcharges',
	            context: this,
	            dataType: 'json',
	            data: { 
                    charges : $('#charges').val(),
                    amount : $('#amount').val()
                                     
	            },
	            error: function(ts) { 
	            			console.log(ts.responseText+" naay error sa Register"); 


	            },
	            success: function(data) { 
		      
		          $('#charges').val("");
		          $('#amount').val("");       
		       	 
	            }
	        });

});

$('#subsidydiscount_charge').click(function(ve){ 	
		ve.preventDefault();

		 $.ajax({
	            type:'POST',
	            url: baseUrlAction() + '?btn=subsidydiscount',
	            context: this,
	            dataType: 'json',
	            data: { 
                    charges : $('#charges').val(),
                    amount : $('#amount').val()
                                     
	            },
	            error: function(ts) { 
	            			console.log(ts.responseText+" naay error sa Register"); 


	            },
	            success: function(data) { 
		      
		          $('#charges').val("");
		          $('#amount').val("");       
		       	 
	            }
	        });

});

$('#universal_charge').click(function(ve){ 	
		ve.preventDefault();

		 $.ajax({
	            type:'POST',
	            url: baseUrlAction() + '?btn=universal_Charges',
	            context: this,
	            dataType: 'json',
	            data: { 
                    charges : $('#charges').val(),
                    amount : $('#amount').val()
                                     
	            },
	            error: function(ts) { 
	            			console.log(ts.responseText+" naay error sa Register"); 


	            },
	            success: function(data) { 
		      
		          $('#charges').val("");
		          $('#amount').val("");       
		       	 
	            }
	        });

});

$('#vatandlocal_taxes').click(function(ve){ 	
		ve.preventDefault();

		 $.ajax({
	            type:'POST',
	            url: baseUrlAction() + '?btn=vatandlocal_tax',
	            context: this,
	            dataType: 'json',
	            data: { 
                    charges : $('#charges').val(),
                    amount : $('#amount').val()
                                     
	            },
	            error: function(ts) { 
	            			console.log(ts.responseText+" naay error sa Register"); 


	            },
	            success: function(data) { 
		      
		          $('#charges').val("");
		          $('#amount').val("");       
		       	 
	            }
	        });

});




// Activate Deactivate


function actDeact($receiveId,$receiveStatus){

	if ($receiveStatus == 1){
		$('#actDeactValue').html(' Do you really want to Deactivate?'); 
	}else{
		$('#actDeactValue').html('Do you really want to Activate?');
	}
	

	$('#activateDeactivate').click(function(ve){
	ve.preventDefault();

	$.ajax({
		type:'POST',
		 url: baseUrlAction() + '?btn=actDeactPassToController',
		 context: this,
		 dataType: 'json',
		 data:{
		 	statusValue:$receiveStatus,
		 	idvalue:$receiveId
		 },
		  error: function(ts) { 
	           console.log(ts.responseText+" naay error sa Process Act/Deact");

	      },
	      success: function(data) { 	
		   	window.location='index.php';
	     }
	});

});

}


function edit($id,$num){

	$id = $('#id').val(id);
	$fName = $('#fName').val(document.getElementById('firstName'+$num).value);
	$lName = $('#lName').val(document.getElementById('lastName'+$num).value);
	$meterNumber = $('#meterNumberModal').val(document.getElementById('meterNumber'+$num).value);
	$accountNumber = $('#accountNumberModal').val(document.getElementById('accountNumber'+$num).value);
	$address = $('#addressModal').val(document.getElementById('address'+$num).value);


	$('#updateButtonModal').click(function(ve){
		alert("hahahaha");
	ve.preventDefault();

	$.ajax({
		type:'POST',
		 url: baseUrlAction() + '?btn=updateButton',
		 context: this,
		 dataType: 'json',
		 data:{
		 	id:$id,
		 	fName:$fName,
		 	lName:$lName,
		 	meterNumber:$meterNumber,
		 	accountNumber:$accountNumber,
		 	address:$address
		 },
		  error: function(ts) { 
	           console.log(ts.responseText+" naay error sa Process Act/Deact");

	      },
	      success: function(data) { 	
		   	window.location='index.php';
	     }
	});

});
}



	
