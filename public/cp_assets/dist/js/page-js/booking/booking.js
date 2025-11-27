$(function () {
    $('.booking-li').find('a').addClass('active');
    callBackDataTables();
});

function callBackDataTables() {
    var table = $('#dataTable').DataTable({
        order: [[1, 'asc']],
        columns: [
            // details control column (expand/collapse)
            {className: 'details-control', orderable: false, searchable: false, data: null, defaultContent: '<span class="badge badge-primary pointer-icon details-control-icon">+</span>'},
            {data: 'id', searchable: false, visible: false},
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {
                data: 'full_name', render: function (data, type, row) {
                    return `<span>${row.full_name} <small class="text-muted">${row.company_name}</small></span>`;
                }
            },
            {data: 'email', 'class': 'name'},
            {data: 'billing_address'},
            {
                data: 'total_amount', render: function (data, type, row) {
                    return `AED ${data}`;
                }
            },
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
        // after draw: attach delegated click handler for details control
        initComplete: function () {
            // row details formatter
            function format(row) {
                var items = row.bookingProduct || row.booking_product || [];

                if (!items || items.length === 0) {
                    return '<div class="p-3">No products added for this booking</div>';
                }

                var html = '<div class="p-3"><table class="table table-sm table-bordered mb-0"><thead><tr>' +
                    '<th>Product Name</th><th>Qty</th><th>Unit Price</th><th>Total</th><th>Notes</th>' +
                    '</tr></thead><tbody>';

                items.forEach(function (p) {
                    // prefer the eager-loaded relation product.product_name, then booking-product's own fields
                    var productName = '';
                    if (p.product && p.product.product_name) {
                        productName = p.product.product_name;
                    } else if (p.product_name !== undefined && p.product_name !== null) {
                        productName = p.product_name;
                    } else if (p.product_id !== undefined && p.product_id !== null) {
                        productName = p.product_id;
                    }

                    html += '<tr>' +
                        '<td>' + productName + '</td>' +
                        '<td>' + (p.product_quantity !== undefined ? p.product_quantity : '') + '</td>' +
                        '<td>' + (p.unit_price !== undefined ? p.unit_price : '') + '</td>' +
                        '<td>' + (p.total_amount !== undefined ? p.total_amount : '') + '</td>' +
                        '<td>' + (p.additional_notes !== undefined ? p.additional_notes : '') + '</td>' +
                        '</tr>';
                });

                html += '</tbody></table></div>';
                return html;
            }

            // use delegated event on table body so it survives redraws
            $('#dataTable tbody').off('click', 'td.details-control').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // close
                    row.child.hide();
                    tr.removeClass('shown');
                    $(this).find('.details-control-icon').text('+');
                } else {
                    // open
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                    $(this).find('.details-control-icon').text('-');
                }
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
