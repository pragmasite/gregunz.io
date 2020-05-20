  $(document).ready(function(){
      $(".report-item-answer").click(function(){
        if ($(this).hasClass("report-item-answer-ticked")){
          $(this).removeClass("report-item-answer-ticked"); 
        } else {
          $(this).addClass("report-item-answer-ticked"); 
        }
      });
  });
  
  var nextIsSolutions = true;
  
  function display_solutions(){
    var correct = "rgb(155, 242, 146)";
    var wrong_txt = "white";
    var correct_txt = "rgb(55, 65, 75)";
    var wrong = "rgb(132, 0, 34)";
    var def = "rgb(90, 100, 110)";
    var i;
    
    var errors = 0;
    var corrects = document.getElementsByClassName("report-item-answer-correct");
    for (i = 0; i < corrects.length; i++) {
        if(nextIsSolutions){
          corrects[i].style.backgroundColor = correct;
          corrects[i].style.color = correct_txt;
          if ( ! $(corrects[i]).hasClass("report-item-answer-ticked") ){
            errors = errors + 1;
          }
        } else {
          corrects[i].style.backgroundColor = def;
          corrects[i].style.color = wrong_txt;
        }
    }
    var wrongs = document.getElementsByClassName("report-item-answer-wrong");
    for (i = 0; i < wrongs.length; i++) {
        if(nextIsSolutions){
          wrongs[i].style.backgroundColor = wrong;
          if ( $(wrongs[i]).hasClass("report-item-answer-ticked") ){
            errors = errors + 1;
          }
        } else {
          wrongs[i].style.backgroundColor = def;
        }
    }
    if(nextIsSolutions){
      document.getElementById('errors-container').style.display = "block";
      document.getElementById('errors').innerHTML = errors;
    } else {
      document.getElementById('errors-container').style.display = "none";
    }
    nextIsSolutions = !nextIsSolutions;
  }