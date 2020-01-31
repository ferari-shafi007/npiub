// function myFunction() {
//     var input, filter, table, tr, td, i, txtValue;
//     input = document.getElementById("department");
//     filter = input.value.toUpperCase();
//     table = document.getElementById("studentTable");
//     tr = table.getElementsByTagName("tr");
//     for (i = 0; i < tr.length; i++) {
//         td = tr[i].getElementsByTagName("td")[0];
//         if (td) {
//             txtValue = td.textContent || td.innerText;
//             if (txtValue.toUpperCase().indexOf(filter) > -1) {
//                 tr[i].style.display = "";
//             } else {
//                 tr[i].style.display = "none";
//             }
//         }
//     }
// }

// function myFunction() {
//     var input, filter, table, tr, td, i;
//     input = document.getElementById("department");
//     filter = input.value.toUpperCase();
//     table = document.getElementById("studentTable");
//     tr = table.getElementsByTagName("tr");
//     for (i = 0; i < tr.length; i++) {
//         td = tr[i].getElementsByTagName("td")[0];
//         if (td) {
//             if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
//                 tr[i].style.display = "";
//             } else {
//                 tr[i].style.display = "none";
//             }
//         }
//     }
// }

function myFunction() {
    // Variables
    let dropdown, table, rows, cells, department, filter;
    dropdown = document.getElementById("department");
    table = document.getElementById("StudentTable");
    rows = table.getElementsByTagName("tr");
    filter = dropdown.value;

    // Loops through rows and hides those with countries that don't match the filter
    for (let row of rows) { // `for...of` loops through the NodeList
        cells = row.getElementsByTagName("td");
        department = cells[3] || null; // gets the 2nd `td` or nothing
        // if the filter is set to 'All', or this is the header row, or 2nd `td` text matches filter
        if (filter === "All" || !department || (filter === department.textContent)) {
            row.style.display = ""; // shows this row
        } else {
            row.style.display = "none"; // hides this row
        }
    }
}