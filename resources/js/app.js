require('./bootstrap');
let postId = -1;

$('.like').on('click', function (event) {
    event.preventDefault();
    let temp = event.target;

    let isLike = event.target.previousElementSibling == null;

    postId = temp.parentNode.dataset['postid'];
    $.ajax({
        method: 'POST',
        url: urlLike,
        data: {isLike: isLike, postId: postId, _token: token},

    })
        .done(function (data) {
            //FAR JE PLAZDNY LIKE a FAS JE PRNY LIKE
            /*uložim do premenej button element na ktory som klikol*/
            let button = $(event.target);
            if (isLike) {
                if (button.is('.far')) {
                    button.removeClass('far').addClass('fas');
                    button.removeClass('text-secondary').addClass('text-success');
                } else {
                    button.removeClass('fas').addClass('far');
                    button.removeClass('text-success').addClass('text-secondary');
                }
            } else {

                if (button.is('.far')) {
                    button.removeClass('far').addClass('fas');
                    button.removeClass('text-secondary').addClass('text-danger');
                } else {
                    button.removeClass('fas').addClass('far');
                    button.removeClass('text-danger').addClass('text-secondary');
                }
            }
            /*Kontrola aby bolo iba jedno tlačidlo stlačene*/
            if (isLike) {
                button.next().removeClass('fas fa-thumbs-down').addClass('far fa-thumbs-down');
                button.next().removeClass('text-danger').addClass('text-secondary');
            } else {
                button.prev().removeClass('fas fa-thumbs-up').addClass('far fa-thumbs-up');
                button.prev().removeClass('text-success').addClass('text-secondary');
            }

            $(event.target).parent().prev().text(data[0]);
            $(event.target).parent().next().text(data[1]);
        })
});


$('.commentButton').on('click', function (event) {
    event.preventDefault();
    $('#commentWrapper').slideToggle('fast')
});

$('#commentText').keypress(function (event) {
    if (event.keyCode === 13 && !event.shiftKey) {

        event.preventDefault();
        let temp = event.target;

        let commentText = $('#commentText').val();

        postId = temp.parentNode.dataset['postid'];
        $.ajax({
            method: 'POST',
            url: urlComment,
            data: {commentText: commentText, postId: postId, _token: token},

        })
            .done(function (data) {
                /* tu zmenit stranku */

                if (data !== false) {

                    $('#commentsList').prepend(' <div class="d-flex justify-content mt-2 border-top border-dark">\n' +
                        '                            <div class="col-1 p-0  mw-100">\n' +
                        '\n' +
                        '                                <img\n' +
                        '                                    src="https://eu.ui-avatars.com/api/?size=75&name=' + data.author + '&background=random">\n' +
                        '                            </div>\n' +
                        '                            <div class="col-11 p-0 d-flex flex-column">\n' +
                        '                                <div>\n' +
                        '                                    <div class="pt-2 pl-2">\n' +
                        '                                        <h6>' + data.author + '</h6>\n' +
                        '                                        <p class="comment-timestamp"><i\n' +
                        '                                                class="far fa-clock pr-1"></i>' + data.timestamp + '\n' +
                        '                                        </p>\n' +
                        '                                    </div>\n' +
                        '                                </div>\n' +
                        '                                <div class="pt-2 pl-2">\n' +
                        '                                    <p class="preserve">' + data.text + '</p>\n' +
                        '                                </div>\n' +
                        '                            </div>\n' +
                        '                        </div>');
                    $('#commentWrapper').slideToggle('fast');
                    $('#commentText').val('');
                }


            })
            .fail(function (data) {
                if (data.status === 422) {
                    $('#commentsList-p').toggle().delay(3000).fadeToggle(500);
                }
            })
    }
});

