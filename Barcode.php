<?php

class Barcode {
    
    public function renderForm() {
        $formats = [
            "EAN_2" => "EAN2",
            "EAN_5" => "EAN5",
            "EAN_8" => "EAN8",
            "EAN_13" => "EAN13",
            "UPC_A" => "UPCA",
            "UPC_E" => "UPCE",
            "PHARMACODE" => "Pharmacode",
            "MSI" => "MSI",
            "CODABAR" => "Codabar",
            "CODE_25" => "Code25",
            "CODE_25_INTERLEAVED" => "Code25Interleaved",
            "ITF_14" => "ITF14",
            "CODE_39" => "Code39",
            "CODE_93" => "Code93",
            "CODE_11" => "Code11",
            "CODE_128" => "Code128",
        ];
        
        echo '<!DOCTYPE html>';
        echo '<html>';
        echo '<head>';
        echo '<title>Barcode Generator</title>';
        echo '</head>';
        echo '<body>';
        echo '<h1>Barcode Generator</h1>';
        echo '<form method="post">';
        echo '<label for="text">Text:</label>';
        echo '<input type="text" name="text" id="text">';
        echo '<br>';
        // Generate select dropdown with format options
        echo '<label for="format">Format:</label>';
        echo '<select name="format" id="format">';
        foreach ($formats as $format => $formatName) {
            echo '<option value="' . $format . '">' . $formatName . '</option>';
        }
        echo '</select>';
        echo '<button type="submit">Generate Barcode</button>';
        echo '</form>';
        echo '</body>';
        echo '</html>';
    }
    

    public function displayBarcode($imagePath) { 
        echo "<img src=" . $imagePath . " alt='barcode'>";
    }
}
