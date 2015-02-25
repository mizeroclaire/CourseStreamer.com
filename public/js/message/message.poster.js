$(document).ready(function(){
	$('#chat button').click(function(){
		var message  	= $('textarea').val();
		var userId   	= $('#userId').val();
		var receiverId 	= $('#receiverId').val();
		console.log('userId:'+userId+'receiverId'+receiverId);
	});
})
 /*$(document).ready(function(){
       $(".jump-class").on("click",function(){
       		alert("hello");
       })
 })*/

$(document).ready(function(){
       $(".jump-class").on("click",function(){
       		 $(".jump-class").YouTubePopup({ autoplay: 0 });
       		alert("hello");
       })
 })

 $(function () {
              $(".jump-class").YouTubePopup({ autoplay: 0 });
    })