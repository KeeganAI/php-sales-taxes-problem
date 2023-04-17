<!DOCTYPE html>
<html>

<body>
  <?php
  function calculate_taxes_and_total($products, $output_number)
  {
    $total_price = 0;
    $total_sales_tax = 0;

    echo "<h3>OUTPUT {$output_number}</h3>";

    foreach ($products as $product) {
      $name = $product['name'];
      $category = $product['category'];
      $price = $product['price'];
      $quantity = $product['quantity'];

      $tax_rate = 0;
      $import_tax_rate = 0;

      if ($category == 2) {
        $tax_rate = 0.10;
      }

      if ($category == 1 || $category == 4) {
        $import_tax_rate = 0.05;
      }

      $tax_amount = $price * ($tax_rate + $import_tax_rate);
      $total_tax = $tax_amount * $quantity;
      $total_sales_tax += $total_tax;
      $total_item_price = $quantity * $price + $total_tax;

      echo "{$quantity} {$name}: " . number_format($total_item_price, 2) . "<br>";
      $total_price += $total_item_price;
    }

    echo "Sales Tax: " . number_format($total_sales_tax, 2) . "<br>";
    echo "TOTAL: " . number_format($total_price, 2) . "<br><br>";
  }

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
  ?>
</body>

</html>
