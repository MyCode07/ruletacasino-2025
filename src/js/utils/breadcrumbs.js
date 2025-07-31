const titles = [...document.querySelectorAll('.flex__content h2')]
    .concat(...document.querySelectorAll('.flex__content h3'))
    .concat(...document.querySelectorAll('.flex__content h4'))
    .concat(...document.querySelectorAll('.flex__content h5'))
    .concat(...document.querySelectorAll('.flex__content h6'));

if (titles.length) {
    titles.forEach(title => {
        const text = title.innerText;
        title.id = text.toLowerCase();
    })
}