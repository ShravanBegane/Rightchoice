<form class="form-horizontal" role="login" id="email_market" method="post" action="https://email.my360crm.com/users/login/custom">
    <input type="hidden" name="next" value="{{next}}" />   
    <!-- <label for="usernameMain" class="col-sm-2 control-label">username</label> -->
    <input type="hidden" class="form-control" name="username" id="usernameMain" value="admin" autofocus required>
    <!-- <label for="passwordMain" class="col-sm-2 control-label">password</label> -->
    <input type="hidden" class="form-control" name="password" id="passwordMain" value="test" required>
    <!--  -->
  
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
     $("#email_market").submit();
});
</script>