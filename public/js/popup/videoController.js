function playPause(btn,video){
  	
     var vid=document.getElementById(video);
      if(vid.paused){
          vid.play();
          btn.innerHTML = "Pause";
      }else{
        vid.pause();
        btn.innerHTML = "Play";
      }
}