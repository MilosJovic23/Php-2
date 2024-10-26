

<?php





    $patike = [44.2,44.3,44.1];

    sort($patike);




    echo $patike[0],$patike[1],$patike[2];


    array_shift($patike);

    echo $patike[0],$patike[1];

    unset($patike[0]);

    echo $patike[1];

    $products = ["Gpu","Cpu","RAM"];

    var_dump($products);
    array_push($products,"pc","keyboard","Monitor");

    var_dump($products);

    $products[1]="SSD";
    var_dump($products);

    $newProducts = ["Mouse","MousePad","PowerSupply"];

    $AllProducts = array_merge($products,$newProducts);

    var_dump($AllProducts);

?>