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

// $decodedData = json_decode($_POST["orderDetails"], true);


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


<head>
    <title>PHP Object Data Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>

    <h2>Data Table</h2>
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
                <td><?php echo $set->timestamp; ?></td>
                <td><?php echo $set->gender; ?></td>
                <td><?php echo $set->matirial; ?></td>
                <td><?php echo $set->xs; ?></td>
                <td><?php echo $set->s; ?></td>
                <td><?php echo $set->m; ?></td>
                <td><?php echo $set->l; ?></td>
                <td><?php echo $set->xl; ?></td>
                <td><?php echo $set->doublexxl; ?></td>
                <td><?php echo $set->thribblexxl; ?></td>
            </tr>

        <?php } ?>
    </table>
    <table>
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
</body>


<?php
// Get the content from the output buffer
$tableHtml = ob_get_clean();

// Now you can use the $tableHtml variable wherever you need to display the HTML table
echo $tableHtml;
?>