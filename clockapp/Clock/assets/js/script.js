let timeEl = document.getElementById('time');
let btn = document.getElementById('cngbtn');
const clock = document.getElementById('analog-clock');
const textResult = document.querySelector('.textscreen');
const secondHand = document.querySelector('.second-hand');
const minsHand = document.querySelector('.min-hand');
const hourHand = document.querySelector('.hour-hand');
let time = getCurrentTime();
timeEl.innerText = time;

setInterval(function() {
    let time = getCurrentTime();
    timeEl.innerText = time;
}, 1000);

function getCurrentTime() {

    let dateOBJ = new Date;

    let time = {
        hours:dateOBJ.getHours(),
        minutes:dateOBJ.getMinutes(),
        seconds:dateOBJ.getSeconds(),
        tt: 'AM'
    }

    if (time.hours == 12) {
        time.ampm = 'PM';
    } else if (time.hours > 12) {
        time.hours -= 12;
        time.tt = 'PM'
    }
    if (time.hours < 10) {
        time.hours = '0' + time.hours
    }
    if (time.minutes < 10) {
        time.minutes = '0' + time.minutes
    }
    if (time.seconds < 10) {
        time.seconds = '0' + time.seconds
    }

    return time.hours + ':' + time.minutes + ':' + time.seconds + '' + time.tt
}

function setDate() {
const now = new Date();
const seconds = now.getSeconds();
const secondsDegrees = ((seconds / 60) * 360) + 90;
secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
const mins = now.getMinutes();
const minsDegrees = ((mins / 60) * 360) + ((seconds/60) * 6) + 90;
minsHand.style.transform = `rotate(${minsDegrees}deg)`
const hour = now.getHours();
const hourDegrees = ((hour / 12) * 360) + ((mins/60) * 30) + 90;
hourHand.style.transform = `rotate(${hourDegrees}deg)`;
}

setInterval(setDate, 1000);

setDate();

btn.addEventListener('click', function() {
    if (timeEl.style.display == "block") {
        timeEl.style.display = "none";
        clock.style.display = "block";
        textResult.textContent = "Digital";
    } else if (timeEl.style.display == "none") {
        timeEl.style.display = "block";
        clock.style.display = "none";
        textResult.textContent = "Analog";
    }
});