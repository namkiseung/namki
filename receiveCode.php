<!DOCTYPE html>
<html>
  <body>
    <style>
      input{
        width:300px;
      }
    </style>
      <a href="login.html">login</a>
      <form action="https://www.googleapis.com/oauth2/v4/token" method="post" enctype="application/x-www-form-urlencoded">
        code : <input type="text" name="code" value="<?=$_GET['code']?>"><br>
        client_id : <input type="text" name="client_id" value="3870214908-3fur6lisge1riduu6bfncvgq15abs0k2n.apps.googleusercontent.com"><br>
        client_secret : <input type="text" name="client_secret" value="teUYcbqLdUq13UTwd90J6feK"><br>
        redirect_uri : <input type="text" name="redirect_uri" value="http://localhost:8888/receiveCode.php"><br>
        grant_type : <input type="text" name="grant_type" value="authorization_code"><br>
        <input type="submit">
      </form>
 
  </body>
</html>