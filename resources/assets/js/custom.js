let axios = require('axios');

$('body').on('click', '.dom-delete-bookmark', domDeleteBookmark);

function domDeleteBookmark() {
    let id = $(this).data('id');

    axios.delete('/bookmarks/' + id,
    ).then(function(response) {
        window.location.reload();
    }).catch(function (error) {
        console.log(error);
    });
}
