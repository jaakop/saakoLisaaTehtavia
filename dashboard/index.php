<?php
if(isset($_COOKIE['loggedin']) && $_COOKIE['loggedin'] == "true"){    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pinkit Unicorit &#124; Dashboard</title>
</head>
<header>
    <h1>Welcome!</h1>
</header>
<body>
    <p>You brave traveller have found this secret page. Now continua your <a style="text-decoration: none; color: black;" href="https://www.jypatipt.com/tipt18a/tammivuori">quest!</a></p>
</body>
</html> 
<?php }
else{
    header('Location: ../');
}?>