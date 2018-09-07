fvgbhnjmk
<?php

function validate(){
$vat_details = VatCalculator::getVATDetails($_POST['vat']);    
echo $vat_details;    
}



?>