const iniciar=document.querySelector('.iniciar')
const registrarce=document.querySelector('.registrarce')
const formbox=document.querySelector('.form-box')
const body=document.querySelector('body')
registrarce.onclick=function(){
    formbox.classList.add('active')
    body.classList.add('active')
}
iniciar.onclick=function(){
    formbox.classList.remove('active')
    body.classList.remove('active')
}