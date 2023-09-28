<?php
$jsonData = '{
    "sizeQuntitySets": [
        {
            "timestamp": 1692544662963,
            "gender": "combinationMen",
            "matirial": "combinationBudget",
            "xs": 90,
            "s": null,
            "m": null,
            "l": null,
            "xl": null,
            "doublexxl": null,
            "thribblexxl": null
        },
        {
            "timestamp": 1692544672392,
            "gender": "combinationWomen",
            "matirial": "combinationBudget",
            "xs": null,
            "s": 100,
            "m": null,
            "l": null,
            "xl": null,
            "doublexxl": null,
            "thribblexxl": null
        },
        {
            "timestamp": 1692544672392,
            "gender": "combinationWomen",
            "matirial": "combinationBudget",
            "xs": null,
            "s": 100,
            "m": null,
            "l": null,
            "xl": null,
            "doublexxl": null,
            "thribblexxl": null
        }
    ],
    "gender": "male",
    "clothType": "polo-t-shirt",
    "printType": "ScreenPrint",
    "mainColorHueValue": 100,
    "mainColorSaturateValue": 0,
    "mainColorLevelValue": 2.5,
    "clothOption": {
        "sleves": "shortSleeves",
        "neck": "vneck",
        "buttons": "hfh"
    },
    "views": {
        "active": "front",
        "strips": {
            "neck": [
                {
                    "color": "#851e1e",
                    "thickness": "2"
                },
                {
                    "color": "#ffffff",
                    "thickness": "2"
                }
            ],
            "arm": [
                {
                    "color": "#851e1e",
                    "thickness": "2"
                },
                {
                    "color": "#ffffff",
                    "thickness": "2"
                }
            ],
            "sides": [
                {
                    "color": "#851e1e",
                    "thickness": "2"
                },
                {
                    "color": "#ffffff",
                    "thickness": "2"
                }
            ]
        }
    }
}';


$decodedData = json_decode($jsonData);

//$decodedData = json_decode($_POST["orderDetails"], true);


$sizeQuantitySets = $decodedData->sizeQuntitySets;
$gender = $decodedData->gender;
$clothType = $decodedData->clothType;
$printType = $decodedData->printType;
$mainColorHueValue = $decodedData->mainColorHueValue;
$mainColorSaturateValue = $decodedData->mainColorSaturateValue;
$mainColorLevelValue = $decodedData->mainColorLevelValue;
$clothOption = $decodedData->clothOption;
$views = $decodedData->views;
$clothOptionSleves=$decodedData->clothOption->sleves;
$clothOptionNeck=$decodedData->clothOption->neck;
$clothOptionButtons=$decodedData->clothOption->buttons;
$stripsNeck=$decodedData->views->strips->neck;
$stripsArm=$decodedData->views->strips->arm;
$stripsSides=$decodedData->views->strips->sides;

// Start output buffering
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Object Data Table</title>
   

</head>
<body>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
        <h2 style="text-align: center; margin-bottom: 20px;">Main Data</h2>

        <table style="border-collapse: collapse; width: 100%; background-color: #ffffff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <tr>
                <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">Variable</th>
                <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">Value</th>
            </tr>
            <tr>
                <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;">Gender</td>
                <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $gender; ?></td>
            </tr>
            <tr>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;">Gender</td>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $gender; ?></td>
    </tr>
    <tr>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;">Cloth Type</td>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $clothType; ?></td>
    </tr>
    <tr>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;">Print Type</td>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $printType; ?></td>
    </tr>
    <tr>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;">Main Color Hue Value</td>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $mainColorHueValue; ?></td>
    </tr>
    <tr>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;">Main Color Level Value</td>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $mainColorLevelValue; ?></td>
    </tr>
    <tr>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;">sleve type</td>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $clothOptionSleves; ?></td>
    </tr>
    <tr>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;">neck type</td>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $clothOptionNeck; ?></td>
    </tr>
    <tr>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;">button type</td>
        <td  style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $clothOptionButtons; ?></td>
    </tr>
    
</table>
<table  style="border-collapse: collapse; width: 100%; background-color: #ffffff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
<h2 style="text-align: center; margin-bottom: 20px;">Quntity Data</h2>

<tr>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">Timestamp</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">Gender</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">Material</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">XS</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">S</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">M</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">L</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">XL</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">DoubleXXL</th>
        <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">ThribbleXXL</th>
    </tr>
    <?php foreach ($sizeQuantitySets as $set) { ?>
        <tr>
            <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $set->timestamp; ?></td>
            <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $set->gender; ?></td>
            <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $set->matirial; ?></td>
            <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $set->xs; ?></td>
            <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $set->s; ?></td>
            <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $set->m; ?></td>
            <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $set->l; ?></td>
            <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $set->xl; ?></td>
            <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $set->doublexxl; ?></td>
            <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $set->thribblexxl; ?></td>
        </tr>
        
    <?php } ?>
</table>
<table  style="border-collapse: collapse; width: 100%; background-color: #ffffff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
<h2 style="text-align: center; margin-bottom: 20px;">Neck Line Data</h2>

<tr>
            <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">colour</th>
            <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">thickness</th>
        </tr>
        <?php foreach ($stripsNeck as $setp) { ?>
            <tr>
                <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $setp->color; ?></td>
                <td> style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"<?php echo $setp->thickness; ?></td>
            </tr>
        <?php } ?>
</table>
<table  style="border-collapse: collapse; width: 100%; background-color: #ffffff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
<h2 style="text-align: center; margin-bottom: 20px;">Arm Line Data</h2>

<tr>
            <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">colour</th>
            <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">thickness</th>
        </tr>
        <?php foreach ($stripsArm as $setpo) { ?>
            <tr>
                <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $setpo->color; ?></td>
                <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $setpo->thickness; ?></td>
            </tr>
        <?php } ?>
</table>
<table  style="border-collapse: collapse; width: 100%; background-color: #ffffff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
<h2 style="text-align: center; margin-bottom: 20px;">Side Line Data</h2>

<tr>
            <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">colour</th>
            <th style="border: 1px solid #e0e0e0; padding: 10px; text-align: left; background-color: #f5f5f5; font-weight: bold;">thickness</th>
        </tr>
        <?php foreach ($stripsSides as $setpm) { ?>
            <tr>
                <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $setpm->color; ?></td>
                <td style="border: 1px solid #e0e0e0; padding: 10px; text-align: left;"><?php echo $setpm->thickness; ?></td>
            </tr>
        <?php } ?>
</table>
</div>

</body>
</html>
<?php
// Get the content from the output buffer
$tableHtml = ob_get_clean();

// Now you can use the $tableHtml variable wherever you need to display the HTML table
echo $tableHtml;
?>