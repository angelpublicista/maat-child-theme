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