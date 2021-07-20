

$(document).ready(function () {
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
    // $('#example2').DataTable({
    //     "processing": true, //Feature control the processing indicator.
    //     "serverSide": true, //Feature control DataTables' server-side processing mode.
    //     "order": [], //Initial no order.

    //     // Load data for the table's content from an Ajax source
    //     "ajax": {
    //         "url": url_list,
    //         "type": "POST",
    //         error: function (jqXHR, textStatus, errorThrown) {
    //             console.log(jqXHR.responseText);
    //         }
    //     },

    //     //Set column definition initialisation properties.
    //     "columnDefs": [
    //         {
    //             "targets": [-1], //last column
    //             "orderable": false, //set not orderable
    //         },
    //     ],

    // });
});