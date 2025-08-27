function openListQuestion(event, option_questionName) {
  var x = document.getElementsByClassName('option-question');
  for (var i = 0; i < x.length; i++) {
    x[i].style.display = 'none';
  }

  document.getElementById(option_questionName).style.display = 'block';

  var buttons = document.querySelectorAll('.tab_menu_question .w3-bar-item');
  buttons.forEach(function (btn) {
    btn.classList.remove('active');
  });

  event.currentTarget.classList.add('active');
}
