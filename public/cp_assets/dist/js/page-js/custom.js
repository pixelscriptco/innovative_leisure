$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

const domainName = document.location.origin, domainURL = domainName + '/',
    CSRF = $('#csrfToken').attr('content');

$.ajaxSetup({
    headers: {
        'X-CSRF-Token': CSRF,
        'timezone': Intl.DateTimeFormat().resolvedOptions().timeZone
    },
    statusCode: {
        401: function () {
            pageReload();
        },
        419: function () {
            pageReload();
        }
    }
});

function pageReload() {
    location.reload();
}

$('input[type="file"]').change(function (e) {
    console.log(e);
    var fileName = e.target.files[0].name;
    $('.custom-file-label').html(fileName);
});

$.fn.dataTable.ext.errMode = function (res, opt, error) {
    let option = {
        type: 'dark',
        text: error,
        icon: 'la la-spinner la-spin'
    };
    // Popup.error(option, 'DT Error');
};
$.extend(true, $.fn.dataTable.defaults, {
    ajax: {
        url: 'list',
        type: 'POST',
        error: function (err) {
            let responseJSON = err.responseJSON,
                text = responseJSON ? (err.responseJSON.message || err.responseJSON.exception) : err.responseText;
            // Popup.error({text: text}, 'DT Ajax Error');
        }
    },
    dom: 'r<".dt_grouped d-flex align-items-center"<".dt_controls row ml-auto align-items-center"flB>>t<".dt_foot"ip>',//p:paginate t:table l:length-change i:info f:search r:processing
    bDestroy: true,
    bProcessing: true,
    bServerSide: true,
    bOrdering: true,
    stateSave: true,
    //responsive: true,
    bDeferRender: true,//writes few rows to dom and rest will draw on demand
    bFixedHeader: false,
    language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_',
        processing: `<div class='text-muted d-flex align-items-center justify-content-center'>
                     <div class="spinner-border spinner-border-sm mr-1 text-orange" role="status"></div>
                     <span class="text-orange">Fetching...</span>
                     </div>`,

    },
    iDisplayLength: 10,
    aLengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, 'All']],
});

class DT {
    static exportButtons(title, options) {
        let button, buttonCommon, defaults = {
            columns: ":visible , .to-export",
            exportFormat: false,
            refreshCallBack: true,
            footerCallBack: false,
        };
        jQuery.extend(defaults, options);

        buttonCommon = {
            title: title,
            footer: true,
            className: 'btn btn-outline-dark',
            exportOptions: defaults.exportFormat || {
                columns: defaults.columns,
                stripHtml: true,
                format: {
                    /* header : function (data, columnIndex, th) {
                         return data.replace(/(<([^>]+)>)/g, " ").trim();
                     },*/
                    body: function (data, rowIndex, columnIndex, td) {
                        return $(td).contents().first().text().trim();
                    }
                }
            }
        };
        button = [
            // $.extend(true, {}, buttonCommon, {
            //     extend: 'colvis',
            //     text: "<i class='fa fa-eye'></i>",
            //     titleAttr: 'Column Visibility',
            // }),
            // $.extend(true, {}, buttonCommon, {
            //     extend: 'copy',
            //     text: "<i class='fa fa-copy'></i>",
            //     titleAttr: 'Copy',
            //     /*customize: function (a) {
            //         return a.replace(/(<([^>]+)>)/g, " ").trim();
            //     }*/
            // }),
            // $.extend(true, {}, buttonCommon, {
            //     extend: 'csv',
            //     text: "<i class='fas fa-file-csv'></i>",
            //     titleAttr: 'CSV',
            // }),
            // $.extend(true, {}, buttonCommon, {
            //     extend: 'pdf',
            //     text: "<i class='fas fa-file-pdf'></i>",
            //     titleAttr: 'PDF',
            //     orientation: 'landscape'
            // }),
            $.extend(true, {}, buttonCommon, {
                extend: 'excel',
                text: "<i class='fa fa-file-excel'></i>",
                titleAttr: 'Export Excel',
                autoFilter: true,
                customize: function (doc) {
                    let sheet = doc.xl.worksheets['sheet1.xml'];
                    $('row:eq(1) c', sheet).attr('s', '42');
                }
            }),
        ];

        // button.push(printButton());
        if (defaults.refreshCallBack)
            button.push(refreshButton());
        return button;

        function refreshButton() {
            return {
                text: '<i class="fas fa-sync"></i>',
                titleAttr: 'Refresh Data',
                className: 'btn btn-outline-dark',
                action: function (e, dt) {
                    dt.state.clear();
                    if (defaults.refreshCallBack)
                        if (typeof defaults.refreshCallBack === 'function')
                            defaults.refreshCallBack();
                        else if (typeof callBackDataTables === 'function')
                            callBackDataTables();
                        else $('#search').trigger('click');
                }
            }
        }

        function printButton() {
            return {
                extend: 'print',
                text: "<i class='fa fa-print'></i>",
                titleAttr: 'Print',
                title: '',
                className: 'btn btn-outline-dark',
                autoPrint: true,
                exportOptions: {
                    columns: ":visible",
                    format: {
                        body: function (data, rowIndex, columnIndex, td) {
                            return td.innerHTML;
                        }
                    }
                },
                customize: function (win) {
                    let doc = $(win.document), body = doc.find('body');

                    doc.find('head').find('title').html(title + ' Print');

                    body.css('font-size', '10pt')
                        .find('table')
                        .addClass('compact')
                        .removeClass('dataTable')
                        .css('font-size', 'inherit');

                    // setPrintHeaderFooter(body);
                }
            }
        }

        function setPrintHeaderFooter(element) {
            $.ajax({
                url: '/logo',
                type: 'GET',
                data: '',
                success: function (response) {
                    element.prepend(response).find('#printTitle').html(title)
                        .end().find('#printSubTitle').html('Print');
                    if (defaults.footerCallBack)
                        defaults.footerCallBack(element.find('table'));
                },
            });
        }
    }
}

class AppModal {
    static loadData(url, name, callBack, options) {
        let defaults = {
            size: 'large',
            data: '',
            height: 'auto',
            loadingMsg: '',
            buttons: true,
            customButtons: false,
            customUrl: false,
            method: 'GET',
            enable_full_screen: false,
            left_btn_color: ['btn-secondary'],
            right_btn_color: ['btn-success'],
            left_btn_name: ['Close'],
            right_btn_name: ['Submit'],
            left_btn_id: ['close'],
            right_btn_id: ['submit']
        }, title;
        jQuery.extend(defaults, options);
        url = defaults.customUrl ? url : domainURL + url;
        title = name;
        name = name.replace(/[^a-zA-Z ]/g, "");
        name = name.replace(/[ ]/g, "-");
        this.show(name, defaults, title);
        this.processBody(url, name, callBack, defaults, title);

        let modals = $(".modal");
        let lastModal = modals.last();
        if (modals.length > 1) {
            $(".modal-backdrop:last").css('z-index', '99998');
            lastModal.css('z-index', '99999');
        }
        lastModal.focus();
    }

    static show(header, opt, name) {
        let newModal,
            modalDialog,
            id = header.replace(/ +/g, "").toLowerCase(),
            modalSize = {
                'modal-fullscreen': "modal-fullscreen",
                'x-large': "modal-xl",
                'large': "modal-lg",
                'medium': 'modal-md',
                'x-small': "modal-sm",
            }, oldModal = $('#modal-' + id);

        if (oldModal.length) {
            oldModal.remove();
            $(".modal-backdrop:last").remove();
        }
        $('body').append(Loader.modalSkeleton(opt.buttons, id, opt.height, opt.left_btn_color, opt.right_btn_color, opt.left_btn_name, opt.right_btn_name, opt.left_btn_id, opt.right_btn_id, opt.enable_full_screen));

        newModal = $("#modal-" + id);
        newModal.find(".modal-title").html(name ?? header);
        modalDialog = newModal.find(".modal-dialog");
        modalDialog.addClass(modalSize[opt.size]);
        // if (modalSize[opt.size] === 'modal-fullscreen') {
        //     modalDialog.removeClass('modal-dialog').removeClass('modal-dialog-centered').removeClass('modal-dialog-scrollable ');
        // }
        newModal.modal({
            backdrop: 'static',//prevent closing modal on outside mouse-click
            keyboard: true//closes if esc key pressed
        }).on('hidden.bs.modal', function () {
            $(this).remove();
            // toastr.remove();
        })
    }

    static processBody(url, name, callBack, options = {data: ''}) {
        name = name.replace(/ +/g, "").toLowerCase();
        let modal = $("#modal-" + name),
            modalBody = modal.find(".modal-body");

        modalBody.html(Loader.progressLoader());
        if (options.customButtons) {
            modal.find("#modal-buttons").append(options.customButtons);
        }

        $.ajax({
            url: url,
            type: options.method,
            data: options.data,
            success: function (response) {
                modalBody.html(response);
                let form = $("#modal-" + name).find(".modal-body").find('#form');
                if (callBack) {
                    callBack(options);
                    //AppModal.modelCallBackFn();//for multiple modal
                }
            },
            error: function (res) {
                let message;
                if (typeof res === 'string') {
                    message = res;
                } else {
                    let error = res.responseJSON;
                    if (error)
                        message = error.message + ' ' + error.exception;
                    else
                        message = res.responseText;
                }
                // modalBody.html(Loader.bugInfo(message));
            }
        });
    }

    static destroy() {
        let modals = $('.modal');
        if (modals.length > 1) {
            $(".modal-backdrop:last").remove();
        }
        modals.last().modal('hide');
    }
}

class BootUp {
    static resetForm(form) {
        form[0].reset();
        this.initDatePicker(form);
        form.find('select.selectpicker').selectpicker('refresh');
        // form.find('tr.dynamic-row').cleanRows();
        form.find("label.error").remove();
        form.find(".is-invalid").each(function () {
            $(this).tooltip('dispose').removeAttr("data-toggle").removeAttr('title');
        }).removeClass('is-invalid');
        $('.bs-container.dropdown.bootstrap-select').remove();
    }
}

class Loader {
    static modalSkeleton(button, id, height, left_btn_color, right_btn_color, left_btn_name, right_btn_name, left_btn_id, right_btn_id, enable_full_screen) {
        let modal_buttons = "<div>";
        if (button) {
            let left_btn_length = left_btn_id.length,
                right_btn_length = right_btn_id.length;
            for (var i = 0; i < left_btn_length; i++) {
                let dismissContent = "";
                if (left_btn_id[i] === "close") {
                    dismissContent = 'data-dismiss="modal"';
                }
                modal_buttons += '<button type="button" class="btn ' + left_btn_color[i] + ' btn-flat btn-sm mr-1" ' + dismissContent + ' id="' + left_btn_id[i] + '">' + left_btn_name[i] + '</button>';
            }
            modal_buttons += '</div><div>';
            for (var j = 0; j < right_btn_length; j++) {
                modal_buttons += '<button type="button" class="btn ' + right_btn_color[j] + ' btn-flat btn-sm ml-1" id="' + right_btn_id[j] + '">' + right_btn_name[j] + '</button>';
            }
        }
        modal_buttons += '</div>';
        let full_screen_option = "";
        if (enable_full_screen) {
            full_screen_option = '<a href="javascript:void" id="enable-full-screen"><i class="fas fa-expand text-dark"></i></a>';
        }
        button = button ? modal_buttons : '';
        let show_footer = button ? 'd-flex justify-content-between' : 'd-none';
        return `<div class="modal fade ui-front" id="modal-${id}" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content" style="height: ${height}">
                        <div class="modal-header">
                        <h6 class="modal-title align-self-center font-weight-bold"></h6>
                        <div class="d-flex align-items-center">
                        ${full_screen_option}
                        <button type="button" class="btn close-modal align-self-center" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times"></i></span>
                        </button>
                        </div>
                        </div>
                        <div class="modal-body p-3"></div>
                        <div class="modal-footer ${show_footer}" id="modal-buttons">
                            ${modal_buttons}
                         </div>
                    </div>
                </div>
             </div>`;
    }

    static bugInfo(message) {
        return `<div class="text-center d-flex flex-wrap align-content-center height-80-per">
            <div class="text-danger flex-fill">
                <i class="fas fa-4x fa-bug"></i><h5 class="mt-2">Error !, While loading data</h5>
            </div>
            <div class="alert alert-secondary">${message}</div>
        </div>`;
    }

    static progressLoader() {
        return `<div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="spinner-grow" role="status"></div>
                         <small class="mt-2 ml-1"> Loading...</small>
                    </div>
                </div>`;
    }

    static btnLoader(elm) {
        elm.prop('disabled', true).addClass('loaded').prepend(`<span class="modal-spin spinner-border spinner-border-sm mr-1" role="status"></span>`);
    }

    static modalBtnLoader() {
        $('#modal-buttons').find('button').each(function () {
            Loader.btnLoader($(this));
        });
    }

    static destroyBtnLoader() {
        $('button.loaded').prop('disabled', false).removeClass('loaded');
        $('.modal-spin').remove();
    }
}

class Ajax {
    // Sending data to server while submit
    static submit(url, options) {
        let defaults = {
            form: "form",
            method: "POST",
            data: '',
            alert: true,
            closeModal: true,
            reload: false,
            extras: undefined,
            dataTable: true,
            callBack: false,
            reset: false,
            confirm: false,
            keepOpenOnCreate: false
        };

        jQuery.extend(defaults, options);

        let title, focus, first, form = $('#' + defaults.form),
            disabledFields = form.find(':disabled');

        if (url.includes('/create') && defaults.keepOpenOnCreate) {
            defaults.reset = true;
            defaults.closeModal = false;
        }
        if (form.find('input[name=_method]').length > 0) {
            defaults.method = form.find('input[name=_method]').val();
        }
        disabledFields.prop('disabled', false);

        if (defaults.confirm)
            Popup.confirm({title: defaults.title, confirmCallBack: submitRequest, text: defaults.text});
        else
            submitRequest();

        function submitRequest() {
            form.ajaxSubmit({
                type: "POST",
                url: url,
                method: defaults.method,
                dataType: "json",
                data: defaults.data,
                beforeSend: function () {
                    Loader.modalBtnLoader();
                    focus = defaults.closeModal ? false : function () {
                        first = form.find(':input.form-control').first();
                        if (first.hasClass('selectpicker') && first.val() === '') {
                            first.selectpicker('toggle');
                        } else {
                            first.not('.datepicker').focus();
                        }
                    };
                },
                success: function (res) {
                    disabledFields.prop('disabled', true);
                    // disabledFields.find('select.selectpicker').selectpicker('refresh');
                    Loader.destroyBtnLoader();
                    title = 'Success';
                    if (defaults.alert === 'notify') {
                        if (res.title)
                            title = res.title;
                        Toastr.success(title, res.message);
                    } else if (defaults.alert) {
                        Popup.alert(title, {type: 'green', text: res.message, timer: 3000, onDestroy: focus});
                    }
                    if (typeof callBackDataTables == 'function' && defaults.dataTable)
                        callBackDataTables(defaults.extras);
                    if (defaults.reload)
                        pageReload();
                    if (defaults.reset)
                        BootUp.resetForm(form);
                    if (defaults.closeModal)
                        AppModal.destroy();
                    if (defaults.callBack) {
                        (typeof defaults.callBack == "string") ? window[defaults.callBack](res, defaults.extras) : defaults.callBack(res, defaults.extras);
                    }
                },
                error: function (err) {
                    disabledFields.prop('disabled', true);
                    // disabledFields.find('select.selectpicker').selectpicker('refresh');
                    Loader.destroyBtnLoader();
                    let responseJSON = err.responseJSON, message = err.responseText, title = 'Error';
                    if (responseJSON) {
                        message = responseJSON.message;
                        title = responseJSON.title
                    }
                    if (err.status === 422) {
                        title = 'Validation Error';
                        message = responseJSON.errors;
                        message = $.map(message, function (n) {
                            return n;
                        });
                        message = {'text': message};
                    }

                    // SweetAlert.error(message, title);
                    Popup.error(message, title);
                }
            });
        }
    }

    static delete(url, options, callBack = false) {
        let defaults = {
            data: '',
            title: 'Delete!',
            notify: true,
            reload: false,
            extras: undefined,
            dataTable: true,
            confirm: true,
            type: 'DELETE',
            text: 'Are you sure you want to continue?'
        };

        jQuery.extend(defaults, options);

        if (defaults.confirm)
            Popup.confirm({title: defaults.title, confirmCallBack: deleteRequest, text: defaults.text});
        else
            deleteRequest();

        function deleteRequest() {
            $.ajax({
                url: url,
                type: defaults.type,
                dataType: 'json',
                data: defaults.data,
                success: function (res) {
                    let title = 'Done';
                    if (typeof res === 'string') {
                        Popup.error(res);
                    } else {
                        if (defaults.notify) {
                            if (res.title)
                                title = res.title;
                            Toastr.success(title, res.message);
                        }
                        if (defaults.reload)
                            pageReload();
                        if (typeof callBackDataTables == 'function' && defaults.dataTable)
                            callBackDataTables(defaults.extras);
                        if (callBack) {
                            (typeof callBack == "string") ? window[callBack](res, defaults.extras) : callBack(res, defaults.extras);
                        }
                    }
                },
                error: function (err) {
                    let responseJSON = err.responseJSON, message = err.responseText, title = 'Error';
                    if (responseJSON) {
                        message = responseJSON.message;
                        title = responseJSON.title
                    }
                    Toastr.error(title, message);
                }
            });
        }
    }

    static send(url, callBack, options) {
        let defaults = {
            type: 'POST',
            alert: 'notify',
            title: 'Confirm!',
            popup_message: 'Are you sure you want to continue?',
            reload: false,
            confirm: false,
            data: '',
            extras: ''
        };
        jQuery.extend(defaults, options);

        if (defaults.confirm)
            Popup.confirm({title: defaults.title, text: defaults.popup_message, confirmCallBack: sendRequest});
        else
            sendRequest();

        function sendRequest() {
            $.ajax({
                type: defaults.type,
                url: domainURL + url,
                dataType: 'json',
                data: defaults.data,
                success: function (res) {
                    if (defaults.reload) {
                        // pageReload();
                        return;
                    }
                    if (defaults.alert) {
                        let title = (res.title) ? res.title : 'Success';
                        if (defaults.alert === 'notify')
                            Toastr.success(res.title, res.message);
                        else {
                            Popup.alert(title, res.message);
                        }
                    }

                    if (typeof callBack === 'function') {
                        if (callBack.name === 'callBackDataTables')
                            callBackDataTables();
                        else
                            callBack(res, options);
                    }
                },
                error: function (err) {
                    let responseJSON = err.responseJSON, message = err.responseText, title = 'Error';
                    if (responseJSON) {
                        message = responseJSON.message;
                        title = responseJSON.title
                    }
                    if (defaults.alert === 'notify')
                        Toastr.error(title, message);
                    else {
                        Popup.error(message, title);
                    }
                }
            });
        }
    }
}

class Toastr {
    static success(title, msg, options = {}) {
        this._notify('success', title, msg, options)
    }

    static error(title, msg, options = {}) {
        this._notify('error', title, msg, options)
    }

    static warning(title, msg, options = {}) {
        this._notify('warning', title, msg, options)
    }

    static info(title, msg, options = {}) {
        this._notify('info', title, msg, options)
    }

    static _notify(type, title, msg, options) {
        let defaults = {
            time: 5000,
            position: 'toast-top-right'
        };
        toastr.clear();
        jQuery.extend(defaults, options);

        toastr.options = {
            closeButton: true,
            progressBar: true,
            tapToDismiss: false,
            positionClass: defaults.position,
            timeOut: defaults.time,
        };
        toastr[type](msg, title);
    }
}

class Popup {

    static alert(title, options) {
        let defaults = {
            timer: 0,
            type: false,
            text: 'Successfully Processed',
            animation: 'top',
            icon: false,
            onDestroy: false
        };
        (typeof options === 'object')
            ? jQuery.extend(defaults, options)
            : defaults.text = options;
        if (defaults.type === 'red') {
            defaults.icon = 'la la-exclamation-triangle';
        } else if (defaults.type === 'green') {
            defaults.icon = 'la la-2x la-check-circle text-success';
        }
        let timer = (defaults.timer) ? 'confirm|' + defaults.timer : false;
        $.alert({
            title: title,
            content: defaults.text,
            type: defaults.type,
            autoClose: timer,
            icon: defaults.icon,
            buttons: {
                confirm: {
                    text: 'Ok',
                    keys: ['enter'],
                    btnClass: 'btn-success',
                },
            },
            onDestroy: defaults.onDestroy,
        });
    }

    /*Confirm Box*/
    static confirm(options, data) {
        let defaults = {
            title: 'Caution',
            text: 'Are you sure you want to continue?',
            type: 'default',
            confirmButtonText: 'Yes',
            cancelButtonText: 'Cancel',
            cancelCallBack: false,
            confirmCallBack: false,
        };
        (typeof options === 'object')
            ? jQuery.extend(defaults, options)
            : defaults.confirmCallBack = options;
        $.confirm({
                title: defaults.title,
                content: defaults.text,
                type: defaults.type,
                draggable: true,
                icon: 'fas fa-exclamation-circle text-danger',
                buttons: {
                    cancel: {
                        text: defaults.cancelButtonText,
                        btnClass: 'btn-secondary',
                        action: function () {
                            if (defaults.cancelCallBack) {
                                defaults.cancelCallBack();
                            }
                        },
                    },
                    confirm: {
                        text: defaults.confirmButtonText,
                        btnClass: 'btn-success',
                        action: function () {
                            if (defaults.confirmCallBack) {
                                defaults.confirmCallBack(data);
                            }
                        },
                    },
                },
            },
        );
    }

    /* Error Box */
    static error(options, title = 'Error') {
        let defaults = {
            type: 'red',
            text: 'Something went wrong while processing..',
            title: title,
            icon: 'fa fa-exclamation-triangle fa-flash'
        };
        if (typeof options === "object")
            jQuery.extend(defaults, options);
        else if (typeof options == 'string')
            defaults.text = options;
        $.alert({
            title: defaults.title,
            content: defaults.text,
            type: defaults.type,
            icon: defaults.icon,
            buttons: {
                confirm: {
                    text: 'Ok',
                    btnClass: 'btn-default',
                }
            }
        });
    }

    /* Info Box */
    static info(options, title = 'Info') {
        let defaults = {
            type: 'blue',
            text: 'Something went wrong while processing..',
            title: title,
            icon: 'fa fa-exclamation-triangle fa-flash'
        };
        if (typeof options === "object")
            jQuery.extend(defaults, options);
        else if (typeof options == 'string')
            defaults.text = options;
        $.alert({
            title: defaults.title,
            content: defaults.text,
            type: defaults.type,
            icon: defaults.icon,
            buttons: {
                confirm: {
                    text: 'Ok',
                    btnClass: 'btn-primary',
                }
            }
        });
    }
}

$(document).on('keypress', ".numberValidation", function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        e.preventDefault();
    }
});

$(document).on('show.bs.modal', '.modal', function () {
    $(this).find('.modal-dialog').draggable({
        handle: ".modal-header"
    });
});

$('#sidabarCollapse').on('click', function (e) {
    e.preventDefault();

    if ($('.sidebar-mini').hasClass('sidebar-collapse')) {
        $(document).find('.logo-company').attr('src', '/backend/images/hrm-logo-white.png').attr('width', '150').closest('.brand-link').removeClass('text-center');
    } else {
        $(document).find('.logo-company').attr('src', '/backend/images/logo-circle-white.png').attr('width', '40').closest('.brand-link').addClass('text-center');
    }
});

$(document).on('mouseover', '.main-sidebar', function (e) {
    e.preventDefault();

    $(document).find('.logo-company').attr('src', '/backend/images/hrm-logo-white.png').attr('width', '150').closest('.brand-link').removeClass('text-center');
});

$(document).on('mouseout', '.main-sidebar', function (e) {
    e.preventDefault();

    if ($('.sidebar-mini').hasClass('sidebar-collapse')) {
        $(document).find('.logo-company').attr('src', '/backend/images/logo-circle-white.png').attr('width', '40').closest('.brand-link').addClass('text-center');
    } else {
        $(document).find('.logo-company').attr('src', '/backend/images/hrm-logo-white.png').attr('width', '150').closest('.brand-link').removeClass('text-center');
    }
});

$(document).on('click', '#enable-full-screen', function (e) {
    var modalDialog = $(this).closest('.modal').find('.modal-dialog');

    if (modalDialog.hasClass('modal-fullscreen')) {
        modalDialog.removeClass('modal-fullscreen');
        $(this).children('i').addClass('fa-expand').removeClass('fa-compress');
    } else {
        modalDialog.addClass('modal-fullscreen');
        $(this).children('i').removeClass('fa-expand').addClass('fa-compress');
    }
});
