@extends('app')

@section('content')
    <div class="col-lg-12">
        <div class="friends">
            <div class="active">
            	<img class="img-circle" src="/img/you.png">
            	<span class="first">Richard Muragijimana</span><br>
            	<span class="second">Strim(5)</span>
            	<span class="">record(5)</span>
            </div>
            <div class="active">
            	<img class="img-circle" src="/img/team-1.jpg">
            	<span class="first">Fold arnold mwumvaneza</span><br>
            	<span class="second">Strim(15)</span>
            	<span class="">record(3)</span>
            </div>
        </div>
        <div class="chat-wrapper">
        	chat here
        </div>
        <div class="publications">
        	<div class="service-img">
        		<img src="/img/s4.png">
        		<span>StrimUp mix</span>
        	</div>
        	<div class="service-img">
        		<img src="/img/s4.png">
        		<span>StrimUp bizz</span>
        	</div>
        	<div class="service-img">
        		<img src="/img/s4.png">
        		<span>StrimUp learn</span>
        	</div>
        	<div class="newUpdates">
        		<span style="color:#fff;">here</span>
        	</div>
        	<div class="newUpdates">
        		<span style="color:#fff;">here</span>
        	</div>
        	<div class="buttons">
        		<button class="btn btn-primary">See Updates</button>
        	</div>
        </div>
    </div>
@endsection
