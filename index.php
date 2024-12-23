<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>game</title>
</head>
<body>
    

    <div class="container">
        <div class="header">
            <p>ผลเกมที่ 1</p>
        </div>

        <div class="row">
            <div class="component_win">
                <p class="title">ผู้ชนะ</p>

                <table>

                    <tr>
                        <td width="200px"><label for="">รหัสทีม</label></td>
                        <td><input type="text" id="" name="" required></td>
                    </tr>

                    <tr>
                        <td width="200px"><label for="">ชื่อโรงเรียน</label></td>
                        <td><input type="text" id="" name="" required></td>
                    </tr>

                    <tr>
                        <td width="200px"><label for="">คะแนนที่ได้</label></td>
                        <td><input type="number" id="" name="" required></td>
                    </tr>

                </table>
            </div>

            <div class="component_lose">
                <p class="title">ผู้แพ้</p>

                <table>

                    <tr>
                        <td width="200px"><label for="">รหัสทีม</label></td>
                        <td><input type="text" id="" name="" required></td>
                    </tr>

                    <tr>
                        <td width="200px"><label for="">ชื่อโรงเรียน</label></td>
                        <td><input type="text" id="" name="" required></td>
                    </tr>

                    <tr>
                        <td width="200px"><label for="">คะแนนที่ได้</label></td>
                        <td><input type="number" id="" name="" required></td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="footer">
            <button class="btn confirm">ตกลง</button>
            <button class="btn repeat">ทำซ้ำ</button>
        </div>
    </div>
</body>
</html>