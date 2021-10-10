/*=========================================================================================
    File Name: datatables-basic.js
    Description: Basic Datatable
    ----------------------------------------------------------------------------------------
    Item Name: Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit
    Version: 1.2
    Author: ThemeSelection
    Author URL: https://themeselection.com/
==========================================================================================*/

$(document).ready(function () {

    /****************************************
     *       js of zero configuration        *
     ****************************************/

    $('.zero-configuration').DataTable();

    /**************************************
     *       js of default ordering        *
     **************************************/

    $('.default-ordering').DataTable({
        "order": [
            [1, "asc"]
        ],
        "displayLength": -1,
        "aLengthMenu": [ -1, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 200, 400, 500, 800, 900, 1000, ],
        "sLengthMenu": "Rows: _MENU_",
        "sSearch": "Find:",
        "sPrevious": "←",
        "sNext": "→",
        "sInfo": "Showing _START_ to _END_ of _TOTAL_ Entries"
    });

    /************************************
     *       js of multi ordering        *
     ************************************/

    $('.multi-ordering').DataTable({
        columnDefs: [{
            targets: [0],
            orderData: [0, 1]
        }, {
            targets: [1],
            orderData: [1, 0]
        }, {
            targets: [4],
            orderData: [4, 0]
        }]
    });

    /*************************************
     *       js of complex headers        *
     *************************************/

    $('.complex-headers').DataTable();

    /*************************************
     *       js of dom positioning        *
     *************************************/

    $('.dom-positioning').DataTable({
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    });

    /************************************
     *       js of alt pagination        *
     ************************************/

    $('.alt-pagination').DataTable({
        "pagingType": "full_numbers"
    });

    /*************************************
     *       js of scroll vertical        *
     *************************************/

    $('.scroll-vertical').DataTable({
        "scrollY": "200px",
        "scrollCollapse": true,
        "paging": false
    });

    /************************************
     *       js of dynamic height        *
     ************************************/

    $('.dynamic-height').DataTable({
        scrollY: '50vh',
        scrollCollapse: true,
        paging: false
    });

    /***************************************
     *       js of scroll horizontal        *
     ***************************************/

    $('.scroll-horizontal').DataTable({
        "scrollX": true
    });

    /**************************************************
     *       js of scroll horizontal & vertical        *
     **************************************************/

    $('.scroll-horizontal-vertical').DataTable({
        "scrollY": 200,
        "scrollX": true
    });

    /**********************************************
     *       Language - Comma decimal place        *
     **********************************************/

    $('.comma-decimal-place').DataTable({
        "language": {
            "decimal": ",",
            "thousands": "."
        }
    });


});