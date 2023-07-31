<?php
echo "<h3> Soal 1 </h3>";
    
    $kids = array ("mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
    print_r ($kids);
    echo "<br>";
    $adults = array ("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");
    print_r($adults);
    
echo "<h3> Soal 2</h3>";

    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: 6";
    echo "<br>";
    echo "<ol>";
    echo "<li> Mike </li>";
    echo "<li> Dustin </li>";
    echo "<li> Will </li>";
    echo "<li> Lucas </li>";
    echo "<li> Max </li>";
    echo "<li> Eleven </li>";

    echo "</ol>";

    echo "Total Adults: 5";
    echo "<br>";
    echo "<ol>";
    echo "<li> Hopper </li>";
    echo "<li> Nancy </li>";
    echo "<li> Joyce </li>";
    echo "<li> Jonathan </li>";
    echo "<li> Murray </li>";

    echo "</ol>";

echo "<h3> Soal No 3 </h3>";

    $trainer = array (
        array("Name" => "Will Byers",
        "Age" => "12",
        "Aliases" => "Will the Wise",
        "Status" => "Alive"),
        array("Name" => "Mike Wheeler",
        "Age" => "12",
        "Aliases" => "Dungeon Master",
        "Status" => "Alive"),
        array("Name" => "Jim Hopper",
        "Age" => "43",
        "Aliases" => "Chief Hopper",
        "Status" => "Deceased"),
        array("Name" => "Eleven",
        "Age" => "12",
        "Aliases" => "El",
        "Status" => "Alive"),
    );
    
    echo "<pre>";
    print_r ($trainer);
    echo "</pre>";

?>