<?php

require("app/data_validator.php");
require("app/database_driver.php");
require("app/passwordEncryptor.php");
require("app/user_access_updater.php");
require("app/response_sender.php");
require("send_otp.php");


$responseObject = new stdClass();
$responseObject->status = "failed";

$jsonData = '{
    "test": {
      "startX": 100,
      "startY": 100,
      "endX": 200,
      "endY": 200,
      "thickness": 3,
      "color": "white"
    },
    "sizeQuntity": {
      "gender": null,
      "matirial": null,
      "xs": null,
      "s": null,
      "m": null,
      "l": null,
      "xl": null,
      "xxl": null,
      "doublexxl": null,
      "thribblexxl": null
    },
    "gender": "male",
    "clothType": "polo-t-shirt",
    "printType": "ScreenPrint",
    "mainColorHueValue": 100,
    "mainColorSaturateValue": 1,
    "mainColorLevelValue": 1,
    "clothOption": {
      "sleves": "long",
      "neck": "v"
    },
    "views": {
      "active": "front",
      "strips": {
        "neck": [],
        "arm": [
          {
            "thickness": 2,
            "color": "white"
          },
          {
            "thickness": 2,
            "color": "orange"
          },
          {
            "thickness": 3,
            "color": "pink"
          }
        ],
        "hip": [
          {
            "thickness": 3,
            "color": "white"
          }
        ]
      },
      "frontSideObject": {
        "imageSections": {
          "topLeft": {
            "imgUri": null,
            "position": {},
            "size": {
              "width": 50,
              "height": 50
            }
          },
          "topRight": {
            "imgUri": null,
            "position": {},
            "size": {
              "width": 50,
              "height": 50
            }
          },
          "center": {
            "imgUri": null,
            "position": {},
            "size": {
              "width": 50,
              "height": 50
            }
          }
        }
      },
      "backSideObject": {},
      "leftSideObject": {},
      "rightSideObject": {}
    }
  }';

// Decode the JSON data into a PHP associative array
$orderDetails = json_decode($jsonData, true);

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
