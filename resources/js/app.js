require('./bootstrap');
let postId = -1;

$('.like').on('click',function (event){
    event.preventDefault();
    let isLike = event.target.previousElementSibling == null;
    postId = event.target.parentNode.dataset['postid'];
    $.ajax({
        method: 'POST',
        url: urlLike,
        data:{isLike: isLike, postId:postId, _token: token},

    })
        .done(function (data){
            console.log('2')

           event.target.innerText = isLike ? event.target.innerText === 'Like' ? 'You like this' : 'Like' : event.target.innerText === 'Dislike' ? 'You dont like this' : 'Dislike';
            if (isLike) {
                event.target.nextElementSibling.innerText = 'Dislike';
            } else {
                event.target.previousElementSibling.innerText = 'Like';
            }
        })
   console.log(isLike);
   console.log(postId);



});
