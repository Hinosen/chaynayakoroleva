const slides = document.querySelectorAll('.slide');
const controls = document.querySelectorAll('.control');
const texts = document.querySelectorAll('.text')
let activeSlide = 0;
let prevActive = 0;
let activeText = 0;
let prevText = 0;

//----Анимация слайдов-----
changeSlides();
let int = setInterval(changeSlides, 10000);

function changeSlides() {
	slides[prevActive].classList.remove('active');
	controls[prevActive].classList.remove('active');

	slides[activeSlide].classList.add('active');
	controls[activeSlide].classList.add('active');
	
	prevActive = activeSlide++;
	
	if(activeSlide >= slides.length) {
		activeSlide = 0;
	}
	
	console.log(prevActive, activeSlide);
}

controls.forEach(control => {
	control.addEventListener('click', () => {
		let idx = [...controls].findIndex(c => c === control);
		activeSlide = idx;

		changeSlides();

		clearInterval(int);
		int = setInterval(changeSlides, 10000);
	});
});


//------Анимация текста------
changeText()
let textInt = setInterval(changeText, 15000)
function changeText() {
	texts [prevText].classList.remove('active');
	texts [activeText].classList.add('active');
	prevText = activeText++;
	if(activeText >= texts.length){
		activeText =0;
	}

	console.log(prevText, activeText);
}