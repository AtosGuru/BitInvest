$(document).ready(function () {
    // CSS Class for showing output
    var daysClass = document.querySelector(".days");
    var hoursClass = document.querySelector(".hours");
    var minutesClass = document.querySelector(".minutes");
    var secondsClass = document.querySelector(".seconds");

    // Get data-attr 
    var daysAttr = daysClass.getAttribute("data-days");
    var hoursAttr = hoursClass.getAttribute("data-hours");
    var minutesAttr = minutesClass.getAttribute("data-minutes");
    var secondsAttr = secondsClass.getAttribute("data-seconds");

    // Set the date we're counting down to
    var countDownDate = new Date(daysAttr + ' ' + hoursAttr + ':' + minutesAttr + ':' + secondsAttr).getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"

        daysClass.innerHTML = days;

        hoursClass.innerHTML = hours;

        minutesClass.innerHTML = minutes;

        secondsClass.innerHTML = seconds;


        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);

            daysClass.style.fontSize = '22px';
            daysClass.innerHTML = 'EXPIRED';
            hoursClass.style.fontSize = '22px';
            hoursClass.innerHTML = 'EXPIRED';
            minutesClass.style.fontSize = '22px';
            minutesClass.innerHTML = 'EXPIRED';
            secondsClass.style.fontSize = '22px';
            secondsClass.innerHTML = 'EXPIRED';

        }
    }, 1000);
});