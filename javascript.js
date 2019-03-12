$(document).ready(function(){

  //Intro fade in:
  $("header").fadeIn("slow");
  setTimeout(function(){$("#main").fadeIn("slow");}, 500);
  setTimeout(function(){$("footer").fadeIn("slow");}, 1000);

  //Top nav bar highlighting:
  $('#top a').hover(function(){
    $(this).css('background-color', '#ACF02E');
    $(this).css('color', 'black');
  }, function(){
    $(this).css('background-color', '#567817');
    $(this).css('color', 'white');
  });

  //Bottom nav bar highlighting:
  $('#bottom a').hover(function(){
    $(this).parent().css('background-color', '#3DE9FF');
    $(this).css('color', 'black');
  }, function(){
    $(this).parent().css('background-color', 'rgb(35, 97, 146)');
    $(this).css('color', 'white');
  });
  
  //Table styling:
  $('#safetyTable tr:odd').css('background-color', '#E3E3E3');
  $('#safetyTable tr:even').css('background-color', '#CFCFCF');
  $('#clinicalTable tr:odd').css('background-color', '#E3E3E3');
  $('#clinicalTable tr:even').css('background-color', '#CFCFCF');
  $('#efficiencyTable tr:odd').css('background-color', '#E3E3E3');
  $('#efficiencyTable tr:even').css('background-color', '#CFCFCF');
  $('#hcahpsTable tr:odd').css('background-color', '#E3E3E3');
  $('#hcahpsTable tr:even').css('background-color', '#CFCFCF');
  $('.mainRow').css('background-color', '#B0B0B0');
  
});
