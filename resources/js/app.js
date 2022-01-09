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

            console.log(event.target);
            //FAR JE PRAZDNY LIKE a FAS JE PLNY LIKE
            if (isLike) {
                if ($(event.target).hasClass('far fa-thumbs-up')) {
                    $(event.target).removeClass('far fa-thumbs-up').addClass('fas fa-thumbs-up');
                } else {
                    $(event.target).removeClass('fas fa-thumbs-up').addClass('far fa-thumbs-up');
                }
            } else {

                if ($(event.target).hasClass('far fa-thumbs-down')) {
                    $(event.target).removeClass('far fa-thumbs-down').addClass('fas fa-thumbs-down');
                } else {
                    $(event.target).removeClass('fas fa-thumbs-down').addClass('far fa-thumbs-down');
                }
            }

            if (isLike) {
                $(event.target).next().removeClass('fas fa-thumbs-down').addClass('far fa-thumbs-down');
            } else {
                $(event.target).prev().removeClass('fas fa-thumbs-up').addClass('far fa-thumbs-up');
            }
            console.log($(event.target).parent().prev(), data[0], isLike, postId);
            $(event.target).parent().prev().text(data[0]);
            $(event.target).parent().next().text(data[1]);
        })
});
