<?php 
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    if(($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['amount'])){

        $amount = $_POST['amount'];
        
        
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
        $spreadsheet = $reader->load("demo.xlsx");

        $spreadsheet->getActiveSheet()->setCellValue('A2', $amount);

        $result = $spreadsheet->getActiveSheet()->getCell('C2')->getCalculatedValue();
    
        // $writer->save('demo.xlsx');
        echo "<p>ผลลัพธ์การคำนวณ: $result </p>";

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
        $writer->save("demo.xlsx");

    }



?>