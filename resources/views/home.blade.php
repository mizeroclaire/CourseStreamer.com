@extends('app')

@section('content')
  <div class="col-md-1 settings">
    <div class="row setting-options">
        <div class="profile">
            <p>Upload your profile picture </p>
        </div>
        <p>Edit profile</p>
        <p class="setting progress">10%</p>
        <li><span class="glyphicon glyphicon-exclamation-sign"></span>My portifolo</li>
        <li><span class="glyphicon glyphicon-user"></span>My mates</li>
        <li><span class="glyphicon glyphicon-paperclip"></span>My links</li>
        <li><span class="glyphicon glyphicon-user"></span>My tutorials</li>
        <li><span class="glyphicon glyphicon-user"></span>My music</li>
        <div class="row top-service-indicator">
          <button class="btn btn form-control">Jump to class</button>
        </div>
    </div>
  </div>
  <div class="col-md-1 chat-area chat-textarea single-chat">
    <div class="chat-section">
        <p >Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
        <p class="second">Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
         <p >Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
        <p class="second">Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
         <p >Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
        <p class="second">Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
         <p >Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
        <p class="second">Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
         <p >Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
        <p class="second">Hi dude can you please tell me where i can learn php please tell me a good lecture</p>
    </div>
    <textarea></textarea>
  </div>
  <div class="row">
  <div class="col-md-1 friends">
    <div class="row main-action">
        <img style="width:80px;margin-left:35px;" class="img-square"  src="/img/team-1.jpg"><span>Current chat</span>
    </div>
    <div class="row search">
        <p class="">Search here...</p>
        <span><input class="form-control" type="text" placeholder="Search mates,job and more.."></span>
        <p>....<img src="/img/loading.gif"></p>
    </div><br>
    <div class="row mates-list">
        here
    </div>
  </div>
  
</div>
@endsection
