<?php

namespace App\Http\Controllers;
use Mpociot\VatCalculator\VatCalculator;

use Illuminate\Http\Request;

class VatHelperController extends Controller
{
    public function receive (Request $request){

     $data = $request->all();
 
     $vatNumber = $data['vat'];
     //echo $vatNumber;
     $vatCalculator = new VatCalculator();
     if($vatCalculator->isValidVATNumber($vatNumber)){
	  
	  
      $vat_details = $vatCalculator->getVATDetails($vatNumber);
      echo json_encode($vat_details);
       } else{
       	return "false";
	// Please handle me
      }
     

}
}
