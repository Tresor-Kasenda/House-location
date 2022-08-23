import $ from 'jquery'
import 'jquery-ui/ui/widgets/autocomplete';

$('#location').on('keyup', function () {
    const search = $('#location').val();
    const render  = $('#resultRender');
    if(search != null){
        $.ajax({
            type: "GET",
            url: '/search',
            data: {_search : search},
            dataType: 'json',
            delay: 220,
            minLength: 4,
            autofocus: true,
            success: function (response) {
                if(response.search){
                    render.html(response.search)
                }
                render.html(response.empty)
            }
        })
    } else {
        render.html("")
    }
})
