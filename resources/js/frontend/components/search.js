import $ from 'jquery'

$('#location').on('keyup', function () {
    const search = $('#location').val();
    const render  = $('#resultRender');
    if (search.length > 2) {
        $.ajax({
            type: "GET",
            url: '/search',
            data: {_search: search},
            dataType: 'json',
            delay: 220,
            autofocus: true,
            success: function (response) {
                if (response.search) {
                    render.html(response.search)
                }
                render.html(response.empty)
            }
        })
    }
})
