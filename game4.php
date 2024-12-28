

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>game 4</title>
</head>
<body>
    
    <form action="game5.php" method="post">
    <?php include_once 'component/form.php'; ?>
    

    <script>
        
        document.getElementById('text_header_').innerHTML = 'ผลเกมที่ 4'
        
        var team_code = [];
        var name_surname = [];
        var school = [];
        
        <?php 

            require 'vendor/autoload.php';

            use PhpOffice\PhpSpreadsheet\Spreadsheet;
            use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

            include_once 'functions/config_file.php';

            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
            $reader->setLoadSheetsOnly($sheetname);
            $spreadsheet = $reader->load($inputFileName);

                if(($_SERVER['REQUEST_METHOD'] == 'POST')){

                    
                    include_once 'functions/variable.php';
                    
                    $spreadsheet->getActiveSheet()->setCellValue("Z$win_cell_column", $win_score);
                    $spreadsheet->getActiveSheet()->setCellValue("AA$win_cell_column", $lose_score);
                    $spreadsheet->getActiveSheet()->setCellValue("Z$lose_cell_column", $lose_score);
                    $spreadsheet->getActiveSheet()->setCellValue("AA$lose_cell_column", $win_score);

                    
                    // $result = $spreadsheet->getActiveSheet()->getCell('C2')->getCalculatedValue();
                    // $writer->save('demo.xlsx');
                    // echo "<p>ผลลัพธ์การคำนวณ: $result </p>";

                    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
                    $writer->save($inputFileName);

                }
            ?>

            <?php include_once 'functions/getlist_data.php'; ?>
            <?php include_once 'functions/event_listener.php'; ?>

            
    </script>
</body>
</html>
