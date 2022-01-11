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
            let button = $(event.target);
            if (isLike) {
                if (button.hasClass('far fa-thumbs-up')) {
                    button.removeClass('far fa-thumbs-up').addClass('fas fa-thumbs-up');
                    button.removeClass('text-secondary').addClass('text-success');
                } else {
                    button.removeClass('fas fa-thumbs-up').addClass('far fa-thumbs-up');
                    button.removeClass('text-success').addClass('text-secondary');
                }
            } else {

                if (button.hasClass('far fa-thumbs-down')) {
                    button.removeClass('far fa-thumbs-down').addClass('fas fa-thumbs-down');
                    button.removeClass('text-secondary').addClass('text-danger');
                } else {
                    button.removeClass('fas fa-thumbs-down').addClass('far fa-thumbs-down');
                    button.removeClass('text-danger').addClass('text-secondary');
                }
            }

            if (isLike) {
                button.next().removeClass('fas fa-thumbs-down').addClass('far fa-thumbs-down');
                button.next().removeClass('text-danger').addClass('text-secondary');
                button.removeClass('text-secondary').addClass('text-success');
            } else {
                button.prev().removeClass('fas fa-thumbs-up').addClass('far fa-thumbs-up');
                button.prev().removeClass('text-success').addClass('text-secondary');
                button.removeClass('text-secondary').addClass('text-danger');
            }

            $(event.target).parent().prev().text(data[0]);
            $(event.target).parent().next().text(data[1]);
        })
});
