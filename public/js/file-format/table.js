$(document).ready(function() {
    loadFormatTable();
});

function loadFormatTable(data = null) {
    ajaxRequest("GET", "/api/file-format/list", function (response) {
        if (response.data) {
            console.log(response);
            t = $("#file-format-table").DataTable({
                destroy: true,
                processing: true,
                scrollX: false,
                searching: false,
                bInfo: false,
                order: false,
                pageLength: 10,
                dom: "rtpl",
                data: response.data,

                columns: [
                    {
                        data: "name",
                    },
                    {
                        data: 'id'
                    },
                ],
                columnDefs: [{
                    "className": "data actions",
                    "targets": -1,
                    "render": function(data, type, full, meta) {
                        return loadActionButtons(full);
                    }
                }],
            });

        } else {
            //add no data found into data table
        }

        if (t.data().count() <= 10) {
            $(".dataTables_paginate").hide();
        }
    });
}

function loadActionButtons(full) {
    var html = '';
    html += '<div><button type="button" value="' + full["id"] +
        '" style="background-color: tranparent; border: none; float: right;" class="fa fa-pencil edit" aria-hidden="true"></button></div>';

    return html;
}

$(document).on("click", ".edit", function() {
    window.location.href = "/file-format/" + $(this).val();
});

$(document).on("click", "#create-new", function() {
    window.location.href = "/create-file-format";
});
