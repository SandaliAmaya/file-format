$(document).ready(function() {
    getAllColumns();
});

$("#view").on("click", function() {
    window.location.href = "/file-formats";
});

$("#create").on("click", function() {
    createFormat();
});

$(".dropdown dt a").on('click', function() {
    $(".dropdown dd ul").slideToggle('fast');
});

$(".dropdown dd ul li a").on('click', function() {
    $(".dropdown dd ul").hide();
});

$(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
});

$('.mutliSelect input[type="checkbox"]').on('click', function() {
    var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
        title = $(this).val() + ",";

    if ($(this).is(':checked')) {
        var html = '<span title="' + title + '">' + title + '</span>';

        $('.multiSel').append(html);
        $(".hida").hide();
    } else {
        $('span[title="' + title + '"]').remove();
        var ret = $(".hida");
        $('.dropdown dt a').append(ret);

    }
});

function getAllColumns() {
    ajaxRequest("GET", "/api/file-format/column-list", null, function (response) {
        if (response.status) {
            console.log(response)
            var html = "";
            $.each(response.data, function (key, value) {
                html += '<li>';
                html += '<input type="checkbox" value="'+ value +'" />';
                html += '<span>' + value + '</span>';
                html += '</li>';
            });
            $("#all-columns").html(html);
        }
    });
}

function createFormat() {
    var selectedColumnNames = $(".multiSel").text().replace(/,*$/, '');
    var columnNamesArr = selectedColumnNames.split(',');
    console.log(columnNamesArr);
    var position = 1;
    var columns = [];

    $.each(columnNamesArr, function (key, value) {
        console.log(value)
        var columnsObj = {
            'name': value,
            'position': position
        }
        position++;
        columns.push(columnsObj);
    });

    var data = {
        'id': null,
        'name': $("#new-format-name").val(),
        'columns': columns
    };
    ajaxRequest("POST", "/api/file-format/create-update", data, function (response) {
        console.log(response)
        if (response.status) {
            window.location.href = "/file-formats";
        }
    });
}

