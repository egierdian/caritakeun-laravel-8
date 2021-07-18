var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
var host = window.location.origin + '/';
var url = window.location.href;
var url_list = host + "admin/list_data/";
var url_edit = host + "admin/edit/";
var url_hapus = host + "admin/delete/";
var url_active = host + "admin/active/";
var url_simpan = host + "admin/save";
var url_update = host + "admin/update";

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