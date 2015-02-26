@extends('app')

@section('content')
<div class="row col-lg-12" style="width:100%;">
  <div class="visible-phone" style="background:#00baff;">
      <img class="img-circle" style="width:60px;height:70px;" src="/img/team-3.jpg">
  </div>
  <div class="row col-md-1 settings visible-desktop" style="margin-left:0px;">
    <div class="row setting-options">
        <div class="profile">
            <p>Upload your profile picture </p>
        </div>
        <p>Edit profile</p>
        <p class="setting progress">10%</p>
        <li><span class="glyphicon glyphicon-exclamation-sign"></span><a style="color:#2B587A;" href="#">My portifolo</a></li>
        <li><span class="glyphicon glyphicon-user"></span><a style="color:#2B587A;" href="#">My mates</a>&nbsp;&nbsp;&nbsp;</li>
        <li><span class="glyphicon glyphicon-link"></span><a style="color:#2B587A;" href="#">My links</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li><span class="glyphicon glyphicon-star"></span><a style="color:#2B587A;" href="#">My Community</a></li>
        <li><span class="glyphicon glyphicon-comment"></span>Write thinking post</li>
        <div class="row top-service-indicator">
          <button class="jump-class btn btn form-control" id="4eYSpIz2FjU" >Jump to...</button>
        </div>
    </div>
  </div>
  @foreach($tutorials as $tut)
      
    <div class="col-md-5 chat-area chat-textarea single-chat">
      <div class="row" style="background:#00baff;min-height:280px;color:#fff;">
        Lesson preview here
        
        <video width="1220" height="240" controls>
          <source src="/video/{{$tut->tutorial_url}}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    @endforeach
    <div class="chat-section">
      
         <p >Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
        <p class="second">Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
         <p >Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
        <p class="second">Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
         
    </div>
    <form id="chat">
      <input id="userId" value="40" type="hidden"><!--this will be given by Laravel by first application load-->
      <input id="receiverId" value="140" type="hidden">
      <textarea></textarea>
      
    </form>
  </div>
  <div class="col-md-2 visible-desktop" style=";width:22.3%;min-height:650px;">    
     <div class="row" style="background:#fff;min-height:180px;">
        <img style="width:60px;height:70px;" class="img-circle" src="/img/team-4.jpg">
     </div> 
     <div class="row" style="background:#00baff;min-height:180px;border-bottom:8px solid #fff;">
        <p align="center" style="color:#fff;">Featured lessons</p>
     </div> 
     <div class="row" style="background:#00baff;min-height:180px;border-bottom:8px solid #fff;">
        <p align="center" style="color:#fff;">  Business you follow</p> 
     </div> 
     <div class="row" style="background:#00baff;min-height:99.9px;">
     
        <p align="center" style="color:#fff;">Mates's tags</p> 
     </div> 
  </div>
</div>
@endsection
