$(document).ready(function () {

    var base_url = 'http://' + window.location.hostname;
    var add = document.querySelector('#add_value');
    var url = add.dataset.url;
    
    $('button[type=submit]').on('click', function (e) {
        e.preventDefault();

        $data = {};
        $data.name = $('#add_value').val();
        $data.type = $('#type_id').val();

        $.ajax({
            type: "POST",
            url : base_url + url,
            data : $data,
            cache: false,
            success: function(response) {
                if (response.status === 200) {
                    location.reload();
                }
            },
            error: function(err) {
                console.log(err.responseJSON);
            }
        });
        
    });
    
    
});