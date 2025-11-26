$(function () {
    $('.product-li').find('a').addClass('active');
    callBackDataTables();

    $('#new').on('click', function () {
        AppModal.loadData('admin/product/create', 'New Product', productCall, {size: 'large'});
    });
});

function callBackDataTables() {
    $('#dataTable').DataTable({
        order: [[0, 'asc']],
        columns: [
            {data: 'id', searchable: false, visible: false},
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {
                data: 'attachment_url', orderable: false, searchable: false, render: function (data, type, row) {
                    return `<img src="${row.attachment_url_formatted}" class="w-25" >`;
                }
            },
            {data: 'product_name', 'class': 'name'},
            {data: 'quantity'},
            {data: 'unit_price'},
            {
                data: 'title', orderable: false, render: function (data, type, row) {
                    let content = '<div class="d-flex justify-content-start">';
                    if (row.write_access === "1") {
                        content += '<a href="javascript:void(0)" class="menu-edit fa-tip mx-3"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pen text-success"></i></a>';
                    }
                    if (row.delete_access === "1") {
                        content += '<a href="javascript:void(0)" class="menu-delete mr-3 fa-tip"  data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash text-danger"></i></a>';
                    }
                    if (row.current_role === "1") {
                        content += '<a href="javascript:void(0)" class="menu-privilege fa-tip"  data-toggle="tooltip" data-placement="top" title="Assign Privileges"><i class="fa fa-user-secret text-info"></i></a>';
                    }
                    content += '</div>';

                    return content;
                }
            }
        ],
        fnDrawCallback: function (settings) {
            $('.menu-edit').on('click', function () {
                let id = $(this).closest('tr').data('id'),
                    name = $(this).closest('tr').find('td.name').text();

                AppModal.loadData(`admin/product/${id}/edit`, `Product - ${name}`, productCall, {size: 'large'});
            });

            $('.menu-delete').on('click', function () {
                let id = $(this).closest('tr').data('id');

                Ajax.delete(`/admin/product/${id}/delete`);
            });
        },
        buttons: DT.exportButtons('products')
    });
}

function productCall() {
    let form = $('#form'),
        url = form.find('#data-url').val();

    $('.custom-file input').change(function (e) {
        var files = [];
        for (var i = 0; i < $(this)[0].files.length; i++) {
            files.push($(this)[0].files[i].name);
        }
        $(this).next('.custom-file-label').html(files.join(', '));
    });

    $('#submit').on('click', function () {
        if (form.valid())
            Ajax.submit(url, {callBack: closeModal});
    });
}

function closeModal(response) {
    if (response.message === "Successfully Submitted") {
        $('.modal').modal('hide');
    }
}
