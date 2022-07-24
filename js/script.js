function checkWidth() {
    if ($(window).width() > 970){
        $('#modal').addClass('col-2');
        // $('#serv').removeClass('card-logo');
    } else {
        $('#modal').removeClass('col-2');
        // $('#serv').addClass('card');
    }
}

 