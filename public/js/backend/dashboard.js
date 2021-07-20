$(document).ready(function () {
    token = $("[name=token]").val();
    data = {
        _token: token
    }
    console.log(data);
    $.ajax({
        url: '/dashboard/data',
        type: 'POST',
        data: data,
        cache: false,
        success: function (res) {
            var dataResult = JSON.parse(res);
            // console.log(dataResult);
            $('#count-user').text(dataResult.count_user);
            $('#count-content').text(dataResult.count_content);
        }
    });
});