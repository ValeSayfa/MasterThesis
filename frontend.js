var idAscend = true;
var yearAscend = true;
var scoreAscend = true;
var relevanceAscend = true;


// Sort the result table by mode (column): 0 - sort by id ; 2 - sort by Year ; 4 - sort by Score ; 3 - sort by Relevance;
function sortTable(page, mode) {
    switch (mode) {
        case (0): //Sort by id
            sort(0, idAscend);
            idAscend = !idAscend;
            break;
        case (2): //Sort by Year
            sort(0, true); //reset table by sorting by id ascend
            if (page == 1) {//sort in search.php
                sort(6, false); //higer relevant conreibution have higher priority
            }else{//sort in showall.php
                sort(4, false); //higer relevant conreibution have higher score
            }
            sort(2, yearAscend);
            yearAscend = !yearAscend;
            break;
        case (4): //Sort by Score
            sort(0, true); //reset table by sorting by id ascend
            if (page == 1) {//sort in search.php
                sort(6, false); //higer relevant conreibution have higher priority
            }
            sort(4, scoreAscend);
            scoreAscend = !scoreAscend;
            break;
        case (6): //Sort by Relevance
            sort(0, true); //reset table by sorting by id ascend
            sort(6, relevanceAscend);
            relevanceAscend = !relevanceAscend;
            break;
    }
}


//Integrated sorting modified from W3C
function sort(mode, order) {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("ResultTable");
    switching = true;

    /*Make a loop that will continue until no switching has been done:*/
    while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[mode];
            y = rows[i + 1].getElementsByTagName("TD")[mode];

            if (order == true) { //ascend
                //check if the two rows should switch place:
                if (Number(x.innerHTML) > Number(y.innerHTML)) {
                    //if so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            } else { //descend
                if (Number(x.innerHTML) < Number(y.innerHTML)) {
                    //if so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
        }
    }
}

//Ascend sorting from W3C
function sortAscend(mode) {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("ResultTable");
    switching = true;

    /*Make a loop that will continue until no switching has been done:*/
    while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[mode];
            y = rows[i + 1].getElementsByTagName("TD")[mode];
            //check if the two rows should switch place:
            if (Number(x.innerHTML) > Number(y.innerHTML)) {
                //if so, mark as a switch and break the loop:
                shouldSwitch = true;
                break;
            }
        }
        if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
        }
    }
}


//Descned sorting modified from W3C
function sortDescend(mode) {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("ResultTable");
    switching = true;

    /*Make a loop that will continue until no switching has been done:*/
    while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[mode];
            y = rows[i + 1].getElementsByTagName("TD")[mode];
            //check if the two rows should switch place:
            if (Number(x.innerHTML) < Number(y.innerHTML)) {
                //if so, mark as a switch and break the loop:
                shouldSwitch = true;
                break;
            }
        }
        if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
        }
    }
}