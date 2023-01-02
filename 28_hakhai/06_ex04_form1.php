<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="06_ex04_form1.php" method="post">   
    <table>   
    <tr><td>Name:</td><td> 
        <input type="text" name="name"/></td></tr>  
    <tr><td>Password:</td><td> 
        <input type="password" name="password"/></td></tr>   
    <tr><td colspan="2"><input type="submit" value="login"/>  </td></tr>  
    </table>  
    </form>   
    <?php  
        @$name=$_POST["name"];
        @$password=$_POST["password"];
        echo "Welcome: $name, your password is: $password";  
    ?>      
</body>
</html>