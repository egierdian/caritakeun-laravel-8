let table;
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $("[name=csrf-token]").val()
        }
    });
    table = $('#table-content').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/content",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ],
        order: [[0, 'desc']]
    });
    $("#content-content").hide();
    $('.summernote').summernote();
    list_category();
});

function save() {
    let title = $('#Title').val();
    let CategoryID = $('#category').val();
    let ContentID = $('[name=ContentID]').val();
    let content = $('textarea[name=content]').val();
    $("#btnSave").text('Saving..');
    $("#btnSave").attr('disabled', true);
    if (ContentID) {
        id = ContentID;
        url = "/content/post/" + id;
    } else {
        id = '';
        url = "/content/post";
    }
    data_post = {
        _token: $("#csrf").val(),
        type: 1,
        id: id,
        title: title,
        category_id: CategoryID,
        content: content,
    };
    // console.log(data_post);
    if (title != '' || CategoryID != 'none' || content != '') {
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
                $('#form-content')[0].reset();
                $('[name=ContentID]').val('');
                $('#category').val('none');
                $('#Title').val('');
                $('.summernote').summernote('code','');
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
    $('#content-content').show(300);
    $('#form-content')[0].reset();
    $('[name=ContentID]').val('');
    $('#category').val('none');
    $('#Title').val('');
    $('.summernote').summernote('code','');
}
function close_form() {
    $('#content-content').hide(300);
}
function reload_table() {
    table.ajax.reload(null, false); //reload datatable ajax
}
function edit(id) {
    $.ajax({
        url: "/content/edit/" + id,
        type: "POST",
        data: {
            _token: $("#csrf").val(),
            type: 1,
            id: id,
        },
        success: function (res) {
            console.log(res);
            var dataResult = JSON.parse(res);
            if (dataResult.status) {
                $('#content-content').show(300);
                $('#Title').val(dataResult.data.title);
                $('#category').val(dataResult.data.category_id);
                $('.summernote').summernote('code',dataResult.data.content);
                $('[name=ContentID]').val(dataResult.data.id);
            }
        }
    });
}
function delete_data(id){
    $.ajax({
        url: "/content/delete/" + id,
        type: "POST",
        data: {
            _token: $("#csrf").val(),
            type: 1,
            id: id,
        },
        success: function (res) {
            var dataResult = JSON.parse(res);
            if (dataResult.status) {
                alert(dataResult.message);
                reload_table();
            } else {
                alert('Error !');
            }
        }
    });
}
function list_category(){
    let item = '';
    $.ajax({
        url: "/content/list_category",
        type: "POST",
        data: {
            _token: $("#csrf").val(),
        },
        success: function (res) {
            var dataResult = JSON.parse(res);
            console.log(dataResult);
            $.each( dataResult.data, function( key, value ) {
                item += "<option value="+value.id+">"+value.name+"</option>";
                
            });
            $("#category").append(item);
        }
    });
}