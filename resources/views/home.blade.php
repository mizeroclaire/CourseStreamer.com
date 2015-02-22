@extends('app')

@section('content')
    <div class="col-lg-12">
        <div class="friends">
            <div class="current-user">
                <div>
                    <img class="img-circle" src="/img/team-1.jpg">
                    <span>Currently logged in user </span>
                </div>
                <div class="search">
                    <input class="form-control " placeholder="Search your mates, job posts and more..">
                </div>
            </div>
            <div class="current-user search">
                <span>search result here(clik on it and follow it)</span>
                <span>Learn and be social!</span>
            </div>
            <div class="friens-options">
                <div class="active ">
                	<img class="img-circle" src="/img/you.png">
                	
                </div>
                <div class="active">
                	<img class="img-circle" src="/img/team-1.jpg">
                	
                </div>
            </div>
           
        </div>

    </div>
    <div class="chat-and-services visible-desktop">
            <button class="btn btn-default">edu<br><span>3</span></button>
            <button class="btn btn-default">bizz<br><span>30</span></button>
            <button class="btn btn-default">mix<br><span>12</span></button>
    </div>
   <div class="chat-area-services">
        
        <div class="chat-for-business-education">
           <div class="single-chat">
                <p class="first">hi dude? i am not understanding this concept please try find out how you can help me! thanks mates!</p>
                <p class="second">yes dude i think that you can check this lecture is very genius but you must pay some cash for him!! hum it's scary!!</p>
                <p class="first">hi dude? i am not understanding this concept please try find out how you can help me! thanks mates!</p>
                <p class="second">yes dude i think that you can check this lecture is very genius but you must pay some cash for him!! hum it's scary!!</p>
                <p class="first">hi dude? i am not understanding this concept please try find out how you can help me! thanks mates!</p>
                <p class="second">yes dude i think that you can check this lecture is very genius but you must pay some cash for him!! hum it's scary!!</p>
           </div>
           <div class="chat-textarea">
                <textarea></textarea>
           </div>
        </div>
        
    </div> 
    
@endsection
