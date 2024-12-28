document.addEventListener("DOMContentLoaded", function() {
                
    function win_run() {

        const input_win_team_code = parseFloat(document.querySelector(`input[name="win_team_code"]`).value || 0);
        // console.log("step 1");
        
        for (let index = 0; index < team_code.length; index++) {
            
            if(input_win_team_code == team_code[index]){

                // console.log("OK <<<<<<<>>>>>>>");
                document.querySelector(`input[name="win_cell_column"]`).value = index+3; // +3 ให้ตรง cell 
                document.querySelector(`input[name="win_name_surname"]`).value = name_surname[index];
                document.querySelector(`input[name="win_school"]`).value = school[index];


                break;
            }
        }
    }

    // เพิ่ม event listeners สำหรับฟิลด์ที่เกี่ยวข้อง
    document.querySelectorAll('input[type="text"]').forEach(input => {
        input.addEventListener("input", win_run);
    });

    win_run();
    

})

document.addEventListener("DOMContentLoaded", function() {
    
    function lose_run() {

        const input_lose_team_code = parseFloat(document.querySelector(`input[name="lose_team_code"]`).value || 0);
        // console.log("step 1");
        
        for (let index = 0; index < team_code.length; index++) {
            
            if(input_lose_team_code == team_code[index]){

                // console.log("OK <<<<<<<>>>>>>>");
                document.querySelector(`input[name="lose_cell_column"]`).value = index+3; // +3 ให้ตรง cell 
                document.querySelector(`input[name="lose_name_surname"]`).value = name_surname[index];
                document.querySelector(`input[name="lose_school"]`).value = school[index];

                break;
            }
        }
    }

    // เพิ่ม event listeners สำหรับฟิลด์ที่เกี่ยวข้อง
    document.querySelectorAll('input[type="text"]').forEach(input => {
        input.addEventListener("input", lose_run);
    });

    lose_run();
    

})