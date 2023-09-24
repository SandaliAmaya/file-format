$(document).ready(function() {
    getFileFormatDetails();
    sortColumns();
});

var url;
var id;

url = window.location.href;
id = url.substring(url.lastIndexOf('/') + 1);

$("#update").on("click", function() {
    updateFileFormat();
});

$(".delete").on("click", function() {
    $(this).closest("li").remove();
});

function getFileFormatDetails() {
    ajaxRequest("GET", "/api/file-format/" + id, null, function (response) {
        if (response.status) {
            $("#file-format-name").val(response.data.name);
            var html = "";
            response.data.columns.sort(function(a, b) {
                return a.position - b.position;
            });
            $.each(response.data.columns, function (key, value) {
                html += '<li>';
                html += '<span>' + value.name + '</span>';
                html += '<label for="label' + value.name + '">New order:</label>';
                html += '<input id="' + value.name + '" name="' + value.name + '" type="number" min="1" data-initial-value="'+ value.position+'" hidden="">';
                html += '<div class="delete fa fa-trash-o"></div>';
                html += '</li>';
            });
            $("#columns").html(html);
        }
    });
}

function sortColumns() {
    $('#sort-it ol').sortable({
        onDrop: function(item) {
            $(item).removeClass("dragged").removeAttr("style");
            $("body").removeClass("dragging");

            updatePosition('#sort-it li');
        }
    });

    updatePosition('#sort-it li');
}

function updatePosition(obj){
    var num = 1;
    $(obj).each(function(){
        //set object initial order data based on order in DOM
        $(this).find('input[type="number"]').val(num).attr('data-initial-value', num);
        num++;
    });

    //max attr based on num of objects
    $(obj).find('input[type="number"]').attr('max', $(obj).length);
}

function updateFileFormat(){
    var updatedColumns = [];

    $("#columns li").each(function() {
        var inputElement = $(this).find("input[type='number']");
        var position = parseInt(inputElement.attr('data-initial-value'));
        var name = inputElement.attr('name');
        var jsonObj = {
            'name': name,
            'position': position
        };

        updatedColumns.push(jsonObj);
    });

    var data = {
        'id': id,
        'name': $("#file-format-name").val(),
        'columns': updatedColumns
    };

    ajaxRequest("POST", "/api/file-format/create-update", data, function (response) {
        if (response.status) {
            window.location.href = "/file-formats";
        }
    });
}
