<?php

require_once 'vendor/autoload.php';
require __DIR__ . '/Barcode.php';

use Antwerpes\Barcodes\Barcodes;
use Antwerpes\Barcodes\Enumerators\Format;

// Instantiate a new instance of the Barcode class
$form = new Barcode();


// Render the HTML form for the user to input barcode data
$form->renderForm();

try {
    if (isset($_POST['text'])) {
        // Get the barcode text and format submitted by the user
        $text = $_POST['text'];
        $format = $_POST['format'];

        // Create a filename for the barcode image based on the text input
        $barcode = "img/barcode-" . $text . ".webp";

        // Use the Barcodes library to create the barcode image in the specified format
        $image = Barcodes::create($text, constant("Antwerpes\Barcodes\Enumerators\Format::$format"), 'webp');

        // Save the barcode image to a file
        file_put_contents($barcode, base64_decode($image));

        // Display the barcode image to the user
        $form->displayBarcode($barcode);
    }
} catch (Exception $e) {
    // If an exception occurs, handle it and display an error message to the user
    echo 'Error: ' . $e->getMessage() . '. Try Code128';
}