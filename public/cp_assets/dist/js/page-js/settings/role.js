$(function () {
    $('.role-li').parent('ul').closest('.nav-item').addClass('menu-open');
    $('.role-li').parent('ul').siblings('.nav-link').addClass('active');
    $('.role-li').find('a').addClass('active');
    callBackDataTables();

    $('#new').on('click', function () {
        AppModal.loadData('admin/settings/role/create', 'New Role', roleCall, {size: 'small'});
    });
});

function callBackDataTables() {
    $('#dataTable').DataTable({
        order: [[0, 'asc']],
        columns: [
            {data: 'id', searchable: false, visible: false},
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'name', 'class': 'name'},
            {data: 'description'},
            {
                data: 'name', orderable: false, render: function (data, type, row) {
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

                AppModal.loadData(`admin/settings/role/${id}/edit`, `Role - ${name}`, roleCall, {size: 'medium'});
            });

            $('.menu-delete').on('click', function () {
                let id = $(this).closest('tr').data('id');

                Ajax.delete(`/admin/settings/role/${id}/delete`);
            });

            $('.menu-privilege').on('click', function () {
                let id = $(this).closest('tr').data('id'),
                    name = $(this).closest('tr').find('td.name').text();

                AppModal.loadData(`admin/settings/role/${id}/privilege`, `Role - ${name}`, privilegeCall, {size: 'large'});
            });
        },
        buttons: DT.exportButtons('Role')
    });
}

function roleCall() {
    let form = $('#form'),
        url = form.find('#data-url').val();

    $('#submit').on('click', function () {
        if (form.valid())
            Ajax.submit(url);
    });
}

function privilegeCall() {
    let form = $('#form'),
        url = form.find('#data-url').val();

    $('#all-privilege').on('click', function () {
        if ($(this).is(':checked')) {
            $(this).prop('checked', true);
            $('.privilege-role').prop('checked', true);
        } else {
            $(this).prop('checked', false);
            $('.privilege-role').prop('checked', false);
        }
    });

    $('#submit').on('click', function () {
        if (form.valid())
            Ajax.submit(url);
    });
}
