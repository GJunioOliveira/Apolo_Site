let card1 = document.getElementById('card1');
let card2 = document.getElementById('card2');
let card3 = document.getElementById('card3');



window.addEventListener ('scroll',()=> {
    let value = window.scrollY;
    console.log("Ola filho da puta")

    card1.style.right = value * -0.20 + 'px';
    card2.style.left = value * -0.20 + 'px';  


});