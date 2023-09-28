<?php
// $jsonData = '{
//     "sizeQuntitySets": [
//         {
//             "timestamp": 1692544662963,
//             "gender": "combinationMen",
//             "matirial": "combinationBudget",
//             "xs": 90,
//             "s": null,
//             "m": null,
//             "l": null,
//             "xl": null,
//             "doublexxl": null,
//             "thribblexxl": null
//         },
//         {
//             "timestamp": 1692544672392,
//             "gender": "combinationWomen",
//             "matirial": "combinationBudget",
//             "xs": null,
//             "s": 100,
//             "m": null,
//             "l": null,
//             "xl": null,
//             "doublexxl": null,
//             "thribblexxl": null
//         },
//         {
//             "timestamp": 1692544672392,
//             "gender": "combinationWomen",
//             "matirial": "combinationBudget",
//             "xs": null,
//             "s": 100,
//             "m": null,
//             "l": null,
//             "xl": null,
//             "doublexxl": null,
//             "thribblexxl": null
//         }
//     ],
//     "gender": "male",
//     "clothType": "polo-t-shirt",
//     "printType": "ScreenPrint",
//     "mainColorHueValue": 100,
//     "mainColorSaturateValue": 0,
//     "mainColorLevelValue": 2.5,
//     "clothOption": {
//         "sleves": "shortSleeves",
//         "neck": "vneck",
//         "buttons": "hfh"
//     },
//     "views": {
//         "active": "front",
//         "strips": {
//             "neck": [
//                 {
//                     "color": "#851e1e",
//                     "thickness": "2"
//                 },
//                 {
//                     "color": "#ffffff",
//                     "thickness": "2"
//                 }
//             ],
//             "arm": [
//                 {
//                     "color": "#851e1e",
//                     "thickness": "2"
//                 },
//                 {
//                     "color": "#ffffff",
//                     "thickness": "2"
//                 }
//             ],
//             "sides": [
//                 {
//                     "color": "#851e1e",
//                     "thickness": "2"
//                 },
//                 {
//                     "color": "#ffffff",
//                     "thickness": "2"
//                 }
//             ]
//         }
//     }
// }';


// $decodedData = json_decode($jsonData);

$decodedData = json_decode($_POST["dataObject"]);


$sizeQuantitySets = $decodedData->sizeQuntitySets;
$gender = $decodedData->gender;
$clothType = $decodedData->clothType;
$printType = $decodedData->printType;
$mainColorHueValue = $decodedData->mainColorHueValue;
$mainColorSaturateValue = $decodedData->mainColorSaturateValue;
$mainColorLevelValue = $decodedData->mainColorLevelValue;
$clothOption = $decodedData->clothOption;
$views = $decodedData->views;
$clothOptionSleves = $decodedData->clothOption->sleves;
$clothOptionNeck = $decodedData->clothOption->neck;
$clothOptionButtons = $decodedData->clothOption->buttons;
$stripsNeck = $decodedData->views->strips->neck;
$stripsArm = $decodedData->views->strips->arm;
$stripsSides = $decodedData->views->strips->sides;

// Start output buffering
ob_start();
?>


<div>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        td {
            vertical-align: top;
        }
    </style>
    <div class="container">
        <h2>Main Data</h2>

        <table>
            <tr>
                <th>Variable</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <td>Cloth Type</td>
                <td><?php echo $clothType; ?></td>
            </tr>
            <tr>
                <td>Print Type</td>
                <td><?php echo $printType; ?></td>
            </tr>
            <tr>
                <td>Main Color Hue Value</td>
                <td><?php echo $mainColorHueValue; ?></td>
            </tr>
            <tr>
                <td>Main Color Saturate Value</td>
                <td><?php echo $mainColorSaturateValue; ?></td>
            </tr>
            <tr>
                <td>Main Color Level Value</td>
                <td><?php echo $mainColorLevelValue; ?></td>
            </tr>
            <tr>
                <td>sleve type</td>
                <td><?php echo $clothOptionSleves; ?></td>
            </tr>
            <tr>
                <td>neck type</td>
                <td><?php echo $clothOptionNeck; ?></td>
            </tr>
            <tr>
                <td>button type</td>
                <td><?php echo $clothOptionButtons; ?></td>
            </tr>

        </table>
        <table>
            <h2>Quntity Data</h2>

            <tr>
                <th>Timestamp</th>
                <th>Gender</th>
                <th>Material</th>
                <th>XS</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>DoubleXXL</th>
                <th>ThribbleXXL</th>
            </tr>
            <?php foreach ($sizeQuantitySets as $set) { ?>
                <tr>
                    <th>Variable</th>
                    <th>Value</th>
                </tr>

            <?php } ?>
        </table>
        <table>
            <h2>Neck Line Data</h2>

            <tr>
                <th>colour</th>
                <th>thickness</th>
            </tr>
            <?php foreach ($stripsNeck as $setp) { ?>
                <tr>
                    <td><?php echo $setp->color; ?></td>
                    <td><?php echo $setp->thickness; ?></td>
                </tr>
            <?php } ?>
        </table>
        <table>
            <h2>Arm Line Data</h2>

            <tr>
                <th>colour</th>
                <th>thickness</th>
            </tr>
            <?php foreach ($stripsArm as $setpo) { ?>
                <tr>
                    <td><?php echo $setpo->color; ?></td>
                    <td><?php echo $setpo->thickness; ?></td>
                </tr>
            <?php } ?>
        </table>
        <table>
            <h2>Side Line Data</h2>

            <tr>
                <th>colour</th>
                <th>thickness</th>
            </tr>
            <?php foreach ($stripsSides as $setpm) { ?>
                <tr>
                    <td><?php echo $setpm->color; ?></td>
                    <td><?php echo $setpm->thickness; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>


<?php
// Get the content from the output buffer
$tableHtml = ob_get_clean();

// Now you can use the $tableHtml variable wherever you need to display the HTML table
echo $tableHtml;
?>