$(document).ready(function () {
    $('svg.menu').click(function () {
      $('ul.nav').toggleClass('show');
    });

    $('nav ul li a').click(function () {
      $('ul.nav').removeClass('show');
    });
  });
