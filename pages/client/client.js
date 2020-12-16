function baseUrl(){
	return location.protocol + "//" + location.host + "/";
}
function baseUrlAction(){
     return location.protocol + "//" + location.host + "/ElectricBillingSystem/database/controller.php";
}




$('#loginButton').click(function(ve){ 
		ve.preventDefault();
	

		 $.ajax({
	            type:'POST',
	            url: baseUrlAction() + '?btn=login',
	            context: this,
	            dataType: 'json',
	            data: { 
                    accountNumber : $('#accountNumber').val(),
                    meterNumber : $('#meterNumber').val()
                   
	            },
	            error: function(ts) { 
	            			console.log(ts.responseText+" naay error sa process"); 


	            },
	            success: function(data) { 
		           
		          // alert(data.status1);
		          window.location ='index.php';
	            }
	        });
});
	
