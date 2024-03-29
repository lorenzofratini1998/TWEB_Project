function getErrorHtml(elemErrors) {
    if ((typeof (elemErrors) === 'undefined') || (elemErrors.length < 1))
        return;
    var out = '<ul class="errors">';
    for (var i = 0; i < elemErrors.length; i++) {
        out += '<li>' + elemErrors[i] + '</li>';
    }
    out += '</ul>';
    return out;
}

function doElemValidation(id, actionUrl, formId) {
    var formElems;
    function addFormToken() {
        var tokenVal = $("#" + formId + " input[name=_token]").val();
        formElems.append('_token', tokenVal);
    }

    function sendAjaxReq() {
        $.ajax({
            type: 'POST',
            url: actionUrl,
            data: formElems,
            dataType: "json",
            error: function (data) {
                if (data.status === 422) {
                    var errMsgs = JSON.parse(data.responseText);
                    if(elem.attr('type')=='password') {
                        elem.each(function() {
                            $(this).parent().find('.errors').remove();
                            $(this).after(getErrorHtml(errMsgs[$(this).attr('id')]));
                        })
                    } else {
                            $("#" + id).parent().find('.errors').remove();
                            $("#" + id).after(getErrorHtml(errMsgs[id]));
                     }
                    
                }
            },
            contentType: false,
            processData: false
        });
    }

    var elem = $("#" + formId + " :input[id=" + id + "]");
    if (elem.attr('type') === 'file') {
    // elemento di input type=file valorizzato
        if (elem.val() !== '') {
            inputVal = elem.get(0).files[0];
        } else {
            inputVal = new File([""], "");
        }
    } else{
        // elemento di input type != file
        inputVal = elem.val();
    }
    formElems = new FormData();
    //Caso in cui si deve validare un elemento di tipo password
    if(elem.attr('type')=='password') {
        var elem=$("#"+formId + " :input[type=password]");
        elem.each(function() {
            inputVal=$(this).val();
            inputName=$(this).attr('name');
            formElems.append(inputName,inputVal);
        });
        addFormToken();
        sendAjaxReq();
    } else {
        formElems.append(id, inputVal);
        addFormToken();
        sendAjaxReq();
    }
}

function doFormValidation(actionUrl, formId) {

    var form = new FormData(document.getElementById(formId));
    $.ajax({
        type: 'POST',
        url: actionUrl,
        data: form,
        dataType: "json",
        error: function (data) {
            if (data.status === 422) {
                var errMsgs = JSON.parse(data.responseText);
                $.each(errMsgs, function (id) {
                    $("#" + id).parent().find('.errors').remove();
                    $("#" + id).after(getErrorHtml(errMsgs[id]));
                });
            }
        },
        success: function (data) {
            window.location.replace(data.redirect);
        },
        contentType: false,
        processData: false
    });
}




