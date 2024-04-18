const rates = document.querySelectorAll('input[type="radio"][name="rating"]');
const rateText = document.querySelector('.rate-text');

rates.forEach((radio) => {
    radio.addEventListener('change', () => {
        if (radio.checked) {
            if (radio.value == 1) {
                rateText.innerText = 'Muy Malo 😒';
            } else if (radio.value == 2) {
                rateText.innerText = 'Malo ☹️';
            } else if (radio.value == 3) {
                rateText.innerText = 'Regular 😑';
            } else if (radio.value == 4) {
                rateText.innerText = 'Bueno 😉';
            } else {
                rateText.innerText = '¡ Excelente ! 😍';
            }
        }
    });
})