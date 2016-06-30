$(document).ready(function () {

    var base_url = 'http://' + window.location.hostname;

    $('button[type=submit]').on('click', function (e) {
        e.preventDefault();

        $data = {};
        $data.input = $('#add_value').val();

        $.ajax({
            type: "POST",
            url : base_url + "/type/add",
            data : $data,
            cache: false,
            success: function(response) {
                if (response.status == 'OK') {
                    location.reload();
                }
            },
            error: function(err) {
                $('.help-block').html(err.responseJSON.input[0]);
            }
        });
        
    });
    
    
});