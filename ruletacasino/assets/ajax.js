const url = adminajaxurl.ajaxurl;


let postPage = 2;
let gamePage = 2;
function sendRequestPosts(target, type) {
    let data = {};

    if (type == 'post') {
        data = {
            'action': 'load_more_posts',
            'page': postPage,
        }

        jQuery.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (data) {
                if (data == '0') {
                    allPostsLoaded(target);
                    target.remove();
                }
                else {
                    loadPosts(target, data)
                    postPage++;
                }
            }
        });
    }
    else if (type == 'game') {
        data = {
            'action': 'load_more_games',
            'page': gamePage,
        }

        jQuery.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (data) {
                if (data == '0') {
                    allGamesLoaded(target);
                    target.remove();
                }
                else {
                    loadGames(target, data)
                    gamePage++;
                }
            }
        });
    }
}

function allPostsLoaded(target) {
    const blog = target.closest('.main');
    const grid = blog.querySelector('.category__articles');

    let div = `<div class="finish">All Posts Loaded</div>`;

    grid.insertAdjacentHTML('beforeend', div);
}

function loadPosts(target, data) {
    const blog = target.closest('.main');
    const grid = blog.querySelector('.category__articles');
    grid.insertAdjacentHTML('beforeend', data);
}

function allGamesLoaded(target) {
    const blog = target.closest('.main');
    const grid = blog.querySelector('.main__content-casino');

    let div = `<div class="finish">All Games Loaded</div>`;

    grid.insertAdjacentHTML('beforeend', div);
}

function loadGames(target, data) {
    const blog = target.closest('.main');
    const grid = blog.querySelector('.main__content-casino');
    grid.insertAdjacentHTML('beforeend', data);
}


document.addEventListener('click', function (e) {
    let targetEl = e.target;

    if (targetEl.classList.contains('category__articles-more')) {
        e.preventDefault();
        sendRequestPosts(targetEl, 'post');
    }

    if (targetEl.classList.contains('games-more')) {
        e.preventDefault();
        sendRequestPosts(targetEl, 'game');
    }
})


// load the game iframe


function sendRequestIframe(id) {
    let data = {
        'action': 'load_game_iframe',
        'id': id,
    }

    jQuery.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (data) {
            if (data == '0') {
                alert('No game iframe');
            }
            else {
                popupGame.insertAdjacentHTML('afterbegin', data)
            }
        }
    });
}

const popupGame = document.querySelector('.popup__body');
document.addEventListener('click', function (e) {
    let targetEl = e.target;

    if (targetEl.classList.contains('open-popup')) {
        e.preventDefault();

        const game = targetEl.closest('.casino-slide');
        const gameId = game.id;
        sendRequestIframe(gameId)
    }
})