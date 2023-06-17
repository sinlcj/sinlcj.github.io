$(document).ready(function() {
  $('#form-control').mask('00/00/0000');
});

var bannerContainer = document.querySelector('.banner-container');
var prevButton = document.querySelector('.prev-button');
var nextButton = document.querySelector('.next-button');

nextButton.addEventListener('click', function() {
  bannerContainer.appendChild(bannerContainer.firstElementChild);
});

prevButton.addEventListener('click', function() {
  bannerContainer.insertBefore(bannerContainer.lastElementChild, bannerContainer.firstElementChild);
});
