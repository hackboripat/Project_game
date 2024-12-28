<div class="container">

    
        <div class="header">
            <p id="text_header_"> ผลเกม</p>
        </div>

        <div class="row">
            <div class="component_win">
                <p class="title">ผู้ชนะ</p>

                <input type="hidden" id="win_cell_column" name="win_cell_column" value="999">
                <table>

                    <tr>
                        <td width="200px"><label for="">รหัสทีม</label></td>
                        <td><input type="text" id="win_team_code" name="win_team_code" tabindex="1" required></td>
                    </tr>

                    <tr>
                        <td width="200px"><label for="">ชื่อ นามสกุล</label></td>
                        <td><input type="text" id="win_name_surname" name="win_name_surname" tabindex="-1" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td width="200px"><label for="">ชื่อโรงเรียน</label></td>
                        <td><input type="text" id="win_school" name="win_school" tabindex="-1" readonly></td>
                    </tr>

                    <tr>
                        <td width="200px"><label for="">คะแนนที่ได้</label></td>
                        <td><input type="number" id="win_score" name="win_score" tabindex="3" required></td>
                    </tr>

                </table>
            </div>

            <div class="component_lose">
                <p class="title">ผู้แพ้</p>

                <input type="hidden" id="lose_cell_column" name="lose_cell_column" value="999">

                <table>

                    <tr>
                        <td width="200px"><label for="">รหัสทีม</label></td>
                        <td><input type="text" id="lose_team_code" name="lose_team_code" tabindex="4" required></td>
                    </tr>

                    <tr>
                        <td width="200px"><label for="">ชื่อ นามสกุล</label></td>
                        <td><input type="text" id="lose_name_surname" name="lose_name_surname" tabindex="-1" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td width="200px"><label for="">ชื่อโรงเรียน</label></td>
                        <td><input type="text" id="lose_school" name="lose_school" tabindex="-1" readonly></td>
                    </tr>

                    <tr>
                        <td width="200px"><label for="">คะแนนที่ได้</label></td>
                        <td><input type="number" id="lose_score" name="lose_score" tabindex="6" required></td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="footer">

            <div class="button-event">
                <button type="submit" class="btn confirm" tabindex="7">ตกลง</button>
            </div>

            <div class="button-event">
                <button type="button" class="btn repeat" tabindex="8" onClick="window.location.reload();">ทำซ้ำ</button>
            </div>
        </div>
    </form>
</div>