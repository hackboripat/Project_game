<?php 

$team_code = array();
$name_surname = array();
$school = array();

$max_column_data = 10;
$max_data = 8;


for ($i = 3; $i <= $max_column_data; $i++) {
    array_push($team_code, $spreadsheet->getActiveSheet()->getCell("A$i")->getCalculatedValue());
    array_push($name_surname, $spreadsheet->getActiveSheet()->getCell("B$i")->getCalculatedValue());
    array_push($school, $spreadsheet->getActiveSheet()->getCell("C$i")->getCalculatedValue());

}


for ($i = 0; $i < $max_data; $i++) {

    echo "team_code[$i] = '" . $team_code[$i] . "'; ";
    echo "name_surname[$i] = '" . $name_surname[$i] . "'; ";
    echo "school[$i] = '" . $school[$i] . "'; ";

}

?>