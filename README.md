# Barcode Generator
This is a simple PHP web application that generates barcodes based on user input. The application uses the antwerpes/barcodes package to generate barcodes in various formats.

## How to Use
1. Clone the repository to your local machine.
2. Install the dependencies using composer install.
3. Start a PHP server using php -S localhost:8000 in the project root directory.
4. Navigate to http://localhost:8000 in your web browser.
5. Enter the text you want to generate a barcode for and select a format from the dropdown menu.
6. Click the "Generate Barcode" button to generate the barcode.
7. The generated barcode will be saved in 'img' folder and displayed on the same page below the input form.

## Dependencies
This project uses the following dependencies:

- antwerpes/barcodes - A PHP package for generating barcodes.
- GD - library needed to generate barcodes, installation tutorial can be found here: https://www.geeksforgeeks.org/how-to-install-php-gd-in-windows/

## Files
- index.php - The main file of the web application that handles user input and generates barcodes.
- Barcode.php - A helper class for rendering the input form and displaying the generated barcode.