let texto = document.getElementById('texto');
let imagem = document.getElementById('imagem'); 
// Cortinas do site
let bloco1 = document.getElementById('bloco1');
let bloco2 = document.getElementById('bloco2');
let bloco3 = document.getElementById('bloco3');
let bloco4 = document.getElementById('bloco4');
let bloco5 = document.getElementById('bloco5');
let bloco6 = document.getElementById('bloco6');
// 



window.addEventListener('scroll', () =>{
    let value = window.scrollY;
    console.log(value);
    
    texto.style.right = value * -3 + 'px';
    imagem.style.left = value * -5 + 'px';
    bloco1.style.left = value * 3 + 'px';
    bloco2.style.right = value * 3 + 'px';
    

});



// // script.js
// const element = document.querySelector('#Quem');
// element.classList.add('animate__animated', 'animate__fadeInLeft', 'animate__delay-1s');

// let isAnimating = false;

// window.addEventListener('scroll', () => {
//     if (!isAnimating) {
//         animation.classList.add('play-animation');
//         isAnimating = true;
//     }
// });

// animation.addEventListener('animationiteration', () => {
//     animation.classList.remove('play-animation');
//     isAnimating = false;
// });