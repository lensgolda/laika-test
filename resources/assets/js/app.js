$(document).ready(function () {

    var base_url = 'http://' + window.location.hostname;
    var add = document.querySelector('#add_value');
    var url = add.dataset.url;
    
    $('button[type=submit]').on('click', function (e) {
        e.preventDefault();

        $data = {};
        $data.name = $('#add_value').val();
        $data.type = $('#selectType').val() || false;

        $.ajax({
            type: "POST",
            url : base_url + url,
            data : $data,
            cache: false,
            success: function(response) {
                if (response.status == 'OK') {
                    location.reload();
                }
            },
            error: function(err) {
                console.log(err.responseJSON);
                //$('.help-block').html(err.responseJSON.select[0] || 'Что-то с селектом...');
                //$('.help-block').html(err.responseJSON.input[0] || 'Что-то с инпутом...');
            }
        });
        
    });
    
    
});