<script>//just to allow inclusion of script
//THIS LOGIN FUNCTION WILL DEAL WITH TOGGLING LOGIN FORM ON ALL PLATFORMS
function loginForm(){
    return $('.showAfter').show();
}
var  hideForm= function(){
     $('.closeme').click(function(event){//this function is not working well
          $('.showAfter').hide();
      });
}
  var login=function(){
      $('.login').click(function(event){//we are sure click event happened
          $('.showAfter').toggle(loginForm());
      });
  }
  $(hideForm);
  $(login);
</script>