$(document).ready(function(){
$("#start").click(function(){
$(".menu").fadeOut();
$(".canvas-section").fadeIn();
  document.getElementById("audio").volume = 0.0;
  //document.getElementById("audio-explosion").muted=false;
});

});
 //javascript code

          
  function getScore(sc){
    document.getElementById("score").value =sc;
    document.getElementById("score2").value=sc;
    document.getElementById("score3").value=sc;
  }
  function getTrial(trial){
    if(trial==2){
        document.getElementById("heart1").style.display="none";
          document.getElementById("heart1-1").style.display="none";
    }
    if(trial==1){
        document.getElementById("heart2").style.display="none";
          document.getElementById("heart2-1").style.display="none";
    }
    if(trial==0){
        document.getElementById("heart3").style.display="none";
          document.getElementById("heart3-1").style.display="none";
    }

  }
  function gameOver(){

  $(".canvas-section").fadeOut();

    $(".game-over").fadeIn();
  }
