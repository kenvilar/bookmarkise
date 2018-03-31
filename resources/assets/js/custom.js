let axios = require('axios');

$('document').ready(function() {

    $('body').on('click', '.dom-delete-bookmark', domDeleteBookmark);

    function domDeleteBookmark(e) {
        e.preventDefault();
        let id = $(this).data('id');

        axios.delete(
            '/bookmarks/' + id,
        ).then(function(response) {
            window.location.reload();
        }).catch(function (error) {
            console.log(error);
        });
    }

});
