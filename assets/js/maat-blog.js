let title = document.querySelector('.blog .maat-heading-blog__entry__title')

if(title){
    title.innerText = "Blog";
}

const formFilter = document.querySelector('#maat-filter-form')

if(formFilter){
    formFilter.addEventListener('change', function(){
        formFilter.submit()
    })
}

const btnCopyUrl = document.querySelectorAll('.maat-single-blog-share__icons__links.link-copy');

if(btnCopyUrl){
    btnCopyUrl.forEach(element => {
        element.addEventListener('click', function(e) {
            e.preventDefault()
            new ClipboardJS('.maat-single-blog-share__icons__links.link-copy');
            alert('Enlace copiado')
        })
    });
}