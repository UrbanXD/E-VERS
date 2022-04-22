$(document).ready(function(){
    setInterval(function(){
        const clock   = document.querySelector(".display");
        if (clock == undefined){
            return;
        }
        let time      = new Date();
        let year      = time.getFullYear();
        let month     = time.getMonth();
        let month_day = time.getDate();
        let week_day  = time.getDay();
        switch (month){
            case 0:
                month = "Január";
                break;
            case 1:
                month = "Február";
                break;
            case 2:
                month = "Március";
                break;
            case 3:
                month = "Április";
                break;
            case 4:
                month = "Május";
                break;
            case 5:
                month = "Június";
                break;
            case 6:
                month = "Július";
                break;
            case 7:
                month = "Augusztus";
                break;
            case 8:
                month = "Szeptember";
                break;
            case 9:
                month = "Október";
                break;
            case 10:
                month = "November";
                break;
            case 11:
                month = "December";
                break;
        }
        switch (week_day){
            case 0:
                week_day = "vasárnap";
                break;
            case 1:
                week_day = "hétfő";
                break;
            case 2:
                week_day = "kedd";
                break;
            case 3:
                week_day = "szerda";
                break;
            case 4:
                week_day = "csütörtök";
                break;
            case 5:
                week_day = "péntek";
                break;
            case 6:
                week_day = "szombat";
                break;
        }
        clock.textContent = year + '. ' + month + '. ' + month_day + " | " + week_day;
    });
});