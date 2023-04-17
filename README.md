# Sales Tax Calculator

This sales tax calculator is a simple PHP script that calculates the sales tax and total price of products based on their category. It processes three different sets of inputs and displays the results as OUTPUT 1, OUTPUT 2, and OUTPUT 3.

## Features

- Calculates sales tax and total price for each product 
- Handles multiple inputs (arrays of products)
- Displays itemized output with sales tax and total price for each set of inputs
- Handles imported and non-imported items separately
- Uses functions for improved code structure and readability


## Usage

1. Deploy the PHP script on a web server that supports PHP.
2. Open the script in a web browser to view the output.


## Input Format

The input is given as an array of products, where each product is an associative array with the following properties:

- `name`: The name of the product (string)
- `category`: The product category (integer)
* 1. Imported products (5% import tax)
* 2. Non-imported products with 10% sales tax
* 3. Non-imported products without sales tax
* 4. Imported products with 5% import tax and without sales tax
- `price`: The price of the product (float)
- `quantity`: The quantity of the product (integer)

## Example
The sales tax calculator can be used to calculate taxes and total prices for different sets of products. For example:
```php
$first_input = [
  ['name' => 'Book', 'category' => 1, 'price' => 12.49, 'quantity' => 2],
  ['name' => 'Music CD', 'category' => 2, 'price' => 14.99, 'quantity' => 1],
  ['name' => 'Chocolate', 'category' => 3, 'price' => 0.85, 'quantity' => 1],
];

$second_input = [
  ['name' => 'Imported Chocolate', 'category' => 1, 'price' => 10.00, 'quantity' => 1],
  ['name' => 'Imported Perfume', 'category' => 2, 'price' => 47.50, 'quantity' => 1],
];

$third_input = [
  ['name' => 'Imported Perfume', 'category' => 1, 'price' => 27.99, 'quantity' => 1],
  ['name' => 'Perfume', 'category' => 2, 'price' => 18.99, 'quantity' => 1],
  ['name' => 'Headache Pills', 'category' => 3, 'price' => 9.75, 'quantity' => 1],
  ['name' => 'Imported Chocolate', 'category' => 4, 'price' => 11.25, 'quantity' => 3],
];

calculate_taxes_and_total($first_input, 1);
calculate_taxes_and_total($second_input, 2);
calculate_taxes_and_total($third_input, 3);
```
## License

This project is open-source.