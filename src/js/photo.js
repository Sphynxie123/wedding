var image = document.querySelector('#image');
var images = ['W02.jpg', 'W03.jpg', 'W04.jpg', 'W05.jpg', 'W06.jpg', 'W07.jpg'];

setInterval(function () {
  var random = Math.floor(Math.random() * images.length);
  image.src = "images/" + images[random];
}, 2000);