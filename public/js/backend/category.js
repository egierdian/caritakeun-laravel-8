let table;
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $("[name=csrf-token]").val()
        }
    });
    table = $('#table-category').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/category",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ],
        order: [[0, 'desc']]
    });
    $("#content-category").hide();
});

function save() {
    let name = $('#Name').val();
    let CategoryID = $('[name=CategoryID]').val();
    $("#btnSave").text('Saving..');
    $("#btnSave").attr('disabled', true);
    if (CategoryID) {
        id = CategoryID;
        url = "/category/post/" + id;
    } else {
        id = '';
        url = "/category/post";
    }
    data_post = {
        _token: $("#csrf").val(),
        type: 1,
        id: id,
        name: name,
    };
    if (name != '') {
        $.ajax({
            url: url,
            type: "POST",
            data: data_post,
            cache: false,
            success: function (res) {
                var dataResult = JSON.parse(res);
                console.log(dataResult);
                if (dataResult.status) {
                    alert(dataResult.message);
                } else {
                    alert('Error');
                }
                $('#btnSave').text('Save');
                $('#btnSave').attr('disabled', false);
                $('#form-category')[0].reset();
                $('[name=CategoryID]').val('');
                reload_table();
            }
        });
    }
    else {
        alert('Please fill all the field !');
        $("#btnSave").text('Save');
        $("#btnSave").attr('disabled', false);
    }
};

function add() {
    $('#content-category').show(300);
    $('#form-category')[0].reset();
    $('[name=CategoryID]').val('');
}
function close_form() {
    $('#content-category').hide(300);
}
function reload_table() {
    table.ajax.reload(null, false); //reload datatable ajax
}
function edit(id) {
    $.ajax({
        url: "/category/edit/" + id,
        type: "POST",
        data: {
            _token: $("#csrf").val(),
            type: 1,
            id: id,
        },
        success: function (res) {
            console.log(res);
            var dataResult = JSON.parse(res);
            console.log(dataResult);
            if (dataResult.status) {
                $('#content-category').show(300);
                $('#Name').val(dataResult.data.name);
                $('[name=CategoryID]').val(dataResult.data.id);
                console.log(dataResult.data.id);
            }
        }
    });
}
function delete_data(id){
    $.ajax({
        url: "/category/delete/" + id,
        type: "POST",
        data: {
            _token: $("#csrf").val(),
            type: 1,
            id: id,
        },
        success: function (res) {
            var dataResult = JSON.parse(res);
            console.log(res);
            if (dataResult.status) {
                alert(dataResult.message);
                reload_table();
            } else {
                alert('Error !');
            }
        }
    });
}