$(function () {
    $('.user-li').parent('ul').closest('.nav-item').addClass('menu-open');
    $('.user-li').parent('ul').siblings('.nav-link').addClass('active');
    $('.user-li').find('a').addClass('active');
    callBackDataTables();

    $('#new').on('click', function () {
        AppModal.loadData('admin/settings/user/create', 'New User', userCall, {size: 'small'});
    });
});

function callBackDataTables() {
    $('#dataTable').DataTable({
        order: [[0, 'asc']],
        columns: [
            {data: 'id', searchable: false, visible: false},
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'name', 'class': 'name'},
            {data: 'role_name'},
            {data: 'email'},
            {data: 'phone'},
            {
                data: 'name', orderable: false, render: function (data, type, row) {
                    let content = '<div class="d-flex justify-content-start">';
                    if (row.write_access === "1") {
                        content += '<a href="javascript:void(0)" class="menu-edit fa-tip mx-3"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pen text-success"></i></a>';
                    }
                    if (row.delete_access === "1" && row.role_id !== 1) {
                        content += '<a href="javascript:void(0)" class="menu-delete mr-3 fa-tip"  data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash text-danger"></i></a>';
                    }
                    if (row.role_id !== 1) {
                        content += '<a href="javascript:void(0)" class="menu-mail fa-tip"  data-toggle="tooltip" data-placement="top" title="Send Login Credentials"><i class="fa fa-envelope text-info"></i></a>';
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

                AppModal.loadData(`admin/settings/user/${id}/edit`, `User - ${name}`, userCall, {size: 'medium'});
            });

            $('.menu-delete').on('click', function () {
                let id = $(this).closest('tr').data('id');

                Ajax.delete(`/admin/settings/user/${id}/delete`);
            });

            $('.menu-mail').on('click', function () {
                let id = $(this).closest('tr').data('id');

                Ajax.send(`admin/settings/user/${id}/send-login-credentials`);
            });
        },
        buttons: DT.exportButtons('Role')
    });
}

function userCall() {
    let form = $('#form'),
        url = form.find('#data-url').val();

    $('#role_id').select2();

    $('#submit').on('click', function () {
        if (form.valid())
            Ajax.submit(url);
    });
}
