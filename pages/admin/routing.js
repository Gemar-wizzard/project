$('#distributionCharge').click(function(){

	$('#content').load("Charges/DistributionCharges.php");

});

$('#generationCharge').click(function(){

	$('#content').load("Charges/GenerationCharges.php");
	
});

$('#subdiscountCharge').click(function(){

	$('#content').load("Charges/SubsidyDiscountCharges.php");
	
});

$('#governmentCharge').click(function(){

	$('#content').load("Charges/GovernmentCharges.php");
	
});

$('#universalCharge').click(function(){

	$('#content').load("Charges/UniversalCharges.php");
	
});

$('#vatLocalCharge').click(function(){

	$('#content').load("Charges/VatAndLocalTaxes.php");
	
});

$('#fchCharge').click(function(){

	$('#content').load("Charges/FCHCommunityCharges.php");
	
});

$('#registerCostumer').click(function(){
	$('#content').load("registerCostumer.php");
});