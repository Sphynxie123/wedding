// MY_PHP/js/DOM/2022-06-09/4rd/dom crud/self-employment2/
// file:///C:/Users/Malu/Desktop/code-academy/front-end-finish/index.html

const countDownDate = new Date("July 23, 2021 14:00:00").getTime();
// Update the count down every 1 second
if (date) {   
  setInterval(function() {

      
    // Get today's date and time
    let now = new Date().getTime();    
    // Find the distance between now and the count down date
    let distance = now - countDownDate;    
    
    let years = Math.floor(distance / (1000 * 60 * 60 * 24 * 365)); 
    let days = Math.floor(distance % (1000 * 60 * 60 * 24 * 365) / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.querySelector("#date").innerHTML =years + "y " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
        
  setInterval();   
  }, 1000);
}


