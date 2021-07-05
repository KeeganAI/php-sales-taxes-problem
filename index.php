<!DOCTYPE html>
<html>

<body>
  <?php
  $products = array(
    array(
      'name' => 'Book',
      'category' => 1,
      'price' => 12.49,
      'quantity' => 2,
    ),
    array(
      'name' => 'Music Cd',
      'category' => 2,
      'price' => 14.99,
      'quantity' => 1
    ),
    array(
      'name' => 'chacolate',
      'category' => 3,
      'price' => 0.85,
      'quantity' => 1
    ),

  );
  $secondinput = array(



    array(
      'name' => 'Imported Chacolate',
      'category' => 1,
      'price' => 10.00,
      'quantity' => 1
    ),
    array(
      'name' => 'Imported perfume',
      'category' => 2,
      'price' => 47.50,
      'quantity' => 1
    ),

  );
  $thirdinput = array(



    array(
      'name' => 'Imported perfume',
      'category' => 1,
      'price' => 27.99,
      'quantity' => 1
    ),
    array(
      'name' => ' perfume',
      'category' => 2,
      'price' => 18.99,
      'quantity' => 1
    ),
    array(
      'name' => 'headache pills',
      'category' => 3,
      'price' => 9.75,
      'quantity' => 1
    ),
    array(
      'name' => 'Imported Chacolate',
      'category' => 4,
      'price' => 11.25,
      'quantity' => 3
    )


  );
  //First Input//
  for ($j = 1; $j <= 1; $j++) {
    for ($i = 0; $i < sizeof($products); $i++) {
      ($products[$i]['name']);
      ($products[$i]['category']);
      ($products[$i]['price']);
      
      ($products[$i]['quantity']);

      if ($products[$i]['category'] == 1) {
        echo "<b>" . "OUTPUT 1" . "<b>";
        echo "<br>";
        echo "<br>";
        $total_book_price = $products[$i]['quantity']* $products[$i]['price'];
        echo $products[$i]['quantity'] . " " . $products[$i]['name'] . ":" . number_format($total_book_price, 2);
        echo "<br>";
      }

      if ($products[$i]['category'] == 2) {

        $after_tex_price = $products[$i]['price'] * 0.10;
        $price = $products[$i]['quantity']*$products[$i]['price'] + $after_tex_price;
        echo $products[$i]['quantity'] . " " . $products[$i]['name'] . ":" . number_format($price, 2);
        echo "<br>";
      }


      if ($products[$i]['category'] == 3) {
        $chacolate_price = $products[$i]['quantity']*$products[$i]['price'];
        echo $products[$i]['quantity'] . " " . $products[$i]['name'] . ":" . number_format($chacolate_price, 2);
        echo "<br>";
      }
    }

    $total_Price = $chacolate_price + $price + $total_book_price;
    $sales_text = $after_tex_price;
    echo "Sales Text" . number_format($sales_text, 2);
    echo "<br>";
    echo "TOTAL: " . number_format($total_Price, 2);
    echo "<br>";
  }
  // SECOND INPUT//
  for ($j = 1; $j <= 1; $j++) {
    for ($i = 0; $i < sizeof($secondinput); $i++) {
      ($secondinput[$i]['name']);
      ($secondinput[$i]['category']);
      ($secondinput[$i]['price']);
      
      ($secondinput[$i]['quantity']);

      if ($secondinput[$i]['category'] == 1) {

        echo "<br>";
        echo "<b>" . "OUTPUT 2" . "<b>";
        echo "<br>";
        echo "<br>";

        $Chacolate_import_tex = $secondinput[$i]['price'] * 0.05;
        $imported_chacolate = $secondinput[$i]['quantity']*$secondinput[$i]['price'] + $Chacolate_import_tex;


        echo $secondinput[$i]['quantity'] . " " . $secondinput[$i]['name'] . ":" . number_format($imported_chacolate, 2);
        echo "<br>";
      }

      if ($secondinput[$i]['category'] == 2) {

        $after_tex_perfume_price = $secondinput[$i]['price'] * 0.10;
        $perfume_import_tex = $secondinput[$i]['price'] * 0.05;
        $perfume_price = $secondinput[$i]['quantity']*$secondinput[$i]['price'] + $after_tex_perfume_price + $perfume_import_tex;
        echo $secondinput[$i]['quantity'] . " " . $secondinput[$i]['name'] . ":" . number_format($perfume_price, 2);
        echo "<br>";
      }
    }

    $total_Price = $perfume_price + $imported_chacolate;
    $sales_text = $Chacolate_import_tex + $after_tex_perfume_price + $perfume_import_tex;
    echo "Sales Text: " . number_format($sales_text, 2);
    echo "<br>";
    echo "TOTAL: " . number_format($total_Price, 2);
    echo "<br>";
  }

 

  // third INPUT//
  for ($j = 1; $j <= 1; $j++) {
    for ($i = 0; $i < sizeof($thirdinput); $i++) {
      ($thirdinput[$i]['name']);
      ($thirdinput[$i]['category']);
      ($thirdinput[$i]['price']);
      
      ($thirdinput[$i]['quantity']);

      if ($thirdinput[$i]['category'] == 1) {

        echo "<br>";
        echo "<b>" . "OUTPUT 3" . "<b>";
        echo "<br>";
        echo "<br>";

        $importedafter_tex_perfume_price = $thirdinput[$i]['price'] * 0.10;
        $importedperfume_import_tex = $thirdinput[$i]['price'] * 0.05;
        $Importedperfume_price = $thirdinput[$i]['quantity']*$thirdinput[$i]['price'] + $importedafter_tex_perfume_price + $importedperfume_import_tex;
        echo $thirdinput[$i]['quantity']. " " . $thirdinput[$i]['name'] . ":" .  number_format($Importedperfume_price, 2);
        echo "<br>";
      }

      if ($thirdinput[$i]['category'] == 2) {

        $after_tex_perfume_price = $thirdinput[$i]['price'] * 0.10;
        $perfume_price = $thirdinput[$i]['quantity']*$thirdinput[$i]['price'] + $after_tex_perfume_price;
        echo $thirdinput[$i]['quantity'] . " " . $thirdinput[$i]['name'] . ":" . number_format($perfume_price, 2);
        echo "<br>";
      }
      if ($thirdinput[$i]['category'] == 3) {



        $headche = $thirdinput[$i]['quantity']*$thirdinput[$i]['price'];
        echo $thirdinput[$i]['quantity'] . " " . $thirdinput[$i]['name'] . ":" . $headche;
        echo "<br>";
      }
      if ($thirdinput[$i]['category'] == 4) {

        $pack_of_chacolate = $thirdinput[$i]['price']*$thirdinput[$i]['quantity'];
        $chacolate_import_tex = $pack_of_chacolate * 0.05;
        $chacolate_price =   $chacolate_import_tex + $pack_of_chacolate;
        echo $thirdinput[$i]['quantity'] . " " . $thirdinput[$i]['name'] . ":" . number_format($chacolate_price, 2);
        echo "<br>";
      }
    }

    $total_Price = $Importedperfume_price + $perfume_price + $headche + $chacolate_price;
    $sales_text = $importedperfume_import_tex + $after_tex_perfume_price + $chacolate_import_tex+$importedafter_tex_perfume_price;
    echo "Sales Text: " . number_format($sales_text, 2);

    echo "<br>";
    echo "TOTAL: " . number_format($total_Price, 2);
  }
  ?>

</body>

</html>