const btn = document.querySelector('.btn');
const menu = document.querySelector('.menu');

const box = document.querySelectorAll('.up');
const up = document.querySelectorAll('.newone');

up[0].addEventListener('click', ()=>{
    up[0].classList.toggle('upper--fly')
    box[0].classList.toggle('box--fly')
})

up[1].addEventListener('click', ()=>{
    up[1].classList.toggle('upper--fly')
    box[1].classList.toggle('box--fly')
})

up[2].addEventListener('click', ()=>{
    up[2].classList.toggle('upper--fly')
    box[2].classList.toggle('box--fly')
})

console.log(up)

const vkn = ()=>{
    btn.classList.toggle('btn--active')
    menu.classList.toggle('menu--active')
}
btn.addEventListener('click', vkn)

$(document).ready(function(){

    $('#one').click(function(){
        $('.article-first').show()
        $('.article-sec').hide()
        $('.article-th').hide()
        $('.article-fth').hide()
        $('.article-fvth').hide()
        
    })
    $('#two').click(function(){
        $('.article-first').hide()
        $('.article-sec').show()
        $('.article-th').hide()
        $('.article-fth').hide()
        $('.article-fvth').hide()
    })
    $('#three').click(function(){
        $('.article-first').hide()
        $('.article-sec').hide()
        $('.article-th').show()
        $('.article-fth').hide()
        $('.article-fvth').hide()
    })
    $('#four').click(function(){
        $('.article-first').hide()
        $('.article-sec').hide()
        $('.article-th').hide()
        $('.article-fth').show()
        $('.article-fvth').hide()
    })
    $('#five').click(function(){
        $('.article-first').hide()
        $('.article-sec').hide()
        $('.article-th').hide()
        $('.article-fth').hide()
        $('.article-fvth').show()
    })
    $('.clean').click(function(){
        $('.article-first').hide()
        $('.article-sec').hide()
        $('.article-th').hide()
        $('.article-fth').hide()
        $('.article-fvth').hide()
    })

    $('.disc3').click(function(){
        $('.sro').slideToggle()
        $('.bb').slideToggle()
        
    })

    $('.disc2').click(function(){
        $('.rig').slideToggle()
        $('.on').slideToggle()
    })

    $('.disc1').click(function(){
        $('.lew').slideToggle()
        $('.en').slideToggle()
    })
})

