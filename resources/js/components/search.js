import $ from 'jquery'
import 'jquery-ui/ui/widgets/autocomplete';
const search = $('#location').val();
const render  = $('#resultRender');

if (search.length > 3) {
    search.on('keyup', function () {
        if(search.length > 3){
            $.ajax({
                type: "GET",
                url: '/search',
                data: {_search : search},
                dataType: 'json',
                delay: 220,
                autofocus: true,
                success: function (response) {
                    if(response.search){
                        render.html(response.search)
                    }
                    render.html(response.empty)
                }
            })
        }
    })
}
