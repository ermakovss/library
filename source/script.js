let burger = document.querySelector('.header__burger');
let menu = document.querySelector('.header__menu__wrapper');

let dropDown = document.querySelectorAll('.triangle--down');
let desctiption = document.querySelectorAll('.books__discription__info');
let desctiption_title = document.querySelectorAll('.books__discription__title');

burger.addEventListener("click", function(){
	burger.classList.toggle('burger__active');
	menu.classList.toggle('menu--active');
});

for(let i = 0; i < dropDown.length; i++){
	dropDown[i].addEventListener("click", function(){
		dropDown[i].classList.toggle('triange--up');
		desctiption[i].classList.toggle('discription__drop');
		desctiption_title[i].classList.toggle('books__discription__title--down');
	});	
}