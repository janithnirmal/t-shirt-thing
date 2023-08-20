<?php

require("app/data_validator.php");
require("app/database_driver.php");
require("app/passwordEncryptor.php");
require("app/user_access_updater.php");
require("app/response_sender.php");
require("send_otp.php");


$responseObject = new stdClass();
$responseObject->status = "failed";




  $access = new UserAccess();
  if (!$access->isLoggedIn()) {
      $responseObject->error = "Invalid Access";
      response_sender::sendJson($responseObject);
      die();
  }
  
$orderDetails = json_decode($_POST["orderDetails"], true);


$clothtype=$orderDetails['clothType'];
$printType=$orderDetails['printType'];

$clothOptionsleves=$orderDetails['clothOption']['sleves'];
$clothOptionneck=$orderDetails['clothOption']['neck'];
$clothOptionbutton=$orderDetails['clothOption']['button'];

$views=$orderDetails['clothOption']['sleves'];







$printType = $orderDetails['printType'];
$sleeves = $orderDetails['clothOption']['sleves'];

$sizeQuantityMaterial = $orderDetails['sizeQuntity']['matirial'];
$sizeQuantityGender = $orderDetails['sizeQuntity']['gender'];
$sizeQuantityXS = $orderDetails['sizeQuntity']['xs'];
$sizeQuantityS = $orderDetails['sizeQuntity']['s'];
$sizeQuantityM = $orderDetails['sizeQuntity']['m'];
$sizeQuantityL = $orderDetails['sizeQuntity']['l'];
$sizeQuantityXL = $orderDetails['sizeQuntity']['xl'];
$sizeQuantityXXL = $orderDetails['sizeQuntity']['xxl'];
$sizeQuantityDoubleXXL = $orderDetails['sizeQuntity']['doublexxl'];
$sizeQuantityThribbleXXL = $orderDetails['sizeQuntity']['thribblexxl'];

// Associative array with variable names as keys and their corresponding values
$variableData = array(
  'printType' => $printType,
  'sleeves' => $sleeves,
  'sizeQuantityMaterial' => $sizeQuantityMaterial,
  'sizeQuantityGender' => $sizeQuantityGender,
  'sizeQuantityXS' => $sizeQuantityXS,
  'sizeQuantityS' => $sizeQuantityS,
  'sizeQuantityM' => $sizeQuantityM,
  'sizeQuantityL' => $sizeQuantityL,
  'sizeQuantityXL' => $sizeQuantityXL,
  'sizeQuantityXXL' => $sizeQuantityXXL,
  'sizeQuantityDoubleXXL' => $sizeQuantityDoubleXXL,
  'sizeQuantityThribbleXXL' => $sizeQuantityThribbleXXL,
);

// Start output buffering
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Variable Table</title>
    
</head>
<body>
    <table border="1">
        <tr>
            <th>Variable Name</th>
            <th>Variable Value</th>
        </tr>
        <?php foreach ($variableData as $varName => $varValue): ?>
        <tr>
            <td><?php echo $varName; ?></td>
            <td><?php echo $varValue; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<?php

// Get the content of the output buffer and store it in a variable
$phpTable = ob_get_clean();

// Now $phpTable contains the HTML table as a string stored in a PHP variable
// You can echo or use $phpTable as needed
mail::mailSender($phpTable)

?>
