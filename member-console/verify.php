<?php

?><!doctype html>
<html>
<head><link href="https://www.authy.com/form.authy.min.css" media="screen" rel="stylesheet" type="text/css">
    <script src="https://www.authy.com/form.authy.min.js" type="text/javascript"></script>
  <link href="authy2fa-laravel-master/src/sample.css" media="screen" rel="stylesheet" type="text/css">
   <link href="//cdnjs.cloudflare.com/ajax/libs/authy-form-helpers/2.3/form.authy.min.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/authy-form-helpers/2.3/form.authy.min.js" type="text/javascript"></script>

</head>
<body>

   

<script type="text/javascript">

</script>

   
<? //https://api.authy.com/onetouch/json/users/2/approval_requests?api_key=0TAf2JYyd86NZnB2UKGm3wWauhl5OUFx;?>

  <div class="login-form">
    <form method="get" action="https://api.authy.com/onetouch/json/users/2/approval_requests?api_key=0TAf2JYyd86NZnB2UKGm3wWauhl5OUFx">
     <select id="authy-countries"></select>
      <h3>Two-Factor Verification</h3>
      Token: <input id="authy-token" name="authy-token" type="text" value=""/>
      <br/>
      <button type="submit" name="submit">send</button>
      <a href="#" id="authy-help">help</a>
    </form>
  </div>

</body>
</html>