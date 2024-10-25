

<?php





    $patike = [44.2,44.3,44.1];

    sort($patike);




    echo $patike[0],$patike[1],$patike[2];


    array_shift($patike);

    echo $patike[0],$patike[1];

    unset($patike[0]);

    echo $patike[1];


    ?>