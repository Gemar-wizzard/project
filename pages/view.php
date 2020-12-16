<?php //open php tag
if(!isset($_SESSION['page']))
{
    $_SESSION['page']='home';

 
}

if(isset($_GET['page']))
{
   
    $_SESSION['page']=$_GET['page'];


    if(isset($_SESSION['page']))
    {
     
      switch ($_SESSION['page']) {
        case 'distributionCharge':
            include 'admin/Charges/DistributionCharges.php';
        break;
         case 'communityCharge':
            include 'admin/Charges/FCHCommunityCharges.php';
        break;
        case 'generationCharge':
            include 'admin/Charges/GenerationCharges.php';
        break; 
        case 'governmentCharge':
            include 'admin/Charges/GovernmentCharges.php';
        break; 
       
        case 'subDiscountCharge':
            include 'admin/Charges/SubsidyDiscountCharges.php';
        break;
        case 'universalCharge':
            include 'admin/Charges/UniversalCharges.php';
        break;
        case 'vatLocalTax':
            include 'admin/Charges/VatAndLocalTaxes.php';
        break;
        default:
          # code...
          break;
      }
    }
}




//close php tag ?> 


