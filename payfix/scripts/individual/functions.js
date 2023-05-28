function getURLParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
}

function hideAllForms() {
    $('form').hide();
    $('#loading').addClass('d-none');
}

function showAutoStep(step) {
    $('#cmt-auto #step' + step + 'Form').removeClass('d-none').show();
    $('#cmt-auto #step' + (step + 1) + 'Header').removeClass('disabled').addClass('active');
    $('form').find('button').prop('disabled', false);
}


function showManuelStep(step) {
    $('#cmt-auto').addClass('d-none');
    $('#cmt-manuel #manuelStep' + step + 'Form').removeClass('d-none').show();
}

function completedStep(step1) {
    $('#step' + step1 + 'Header').removeClass('active').addClass('complete');
    $('#step' + (step1 + 1) + 'Header').removeClass('disabled').addClass('active');
}

function showAlert(type, message) {
    $('form').find('button').prop('disabled', true);
    $('#result').html(message).removeAttr('class').addClass('alert alert-' + type);
    $("html, body").animate({ scrollTop: $('#result').offset().top - 20 }, 200);
    $('#loading').addClass('d-none');
}

function hideAlert() {
    $('#result').removeAttr('class').addClass('d-none');
}
