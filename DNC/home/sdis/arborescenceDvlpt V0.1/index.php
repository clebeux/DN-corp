<html>

<?php 
	include "lib/php/test_head.php"
?>
<body>
<div id="container">
<?php 
	include "lib/php/head.php"
?>
  <div id="nav">


    <ul>
      <li class="nlink"><a href="">Accueil</a></li>
    </ul>
 </div>
  <div id="content">
    <div id="left"> <span class="flt-lft"></span>
    <form id="formulaire" action="login.php" method="get">
          			<label for="login">Login : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
		       		<input type="text" name="login" id="login"  /><br/><br/>
		
		       		<label for="pswd">Password :</label>
		       		<input type="password" name="pswd" id="pswd" /><br/><br/>
		       		
		       		<input type="submit" value="Valider" />
		       		<br/><br/>
		       		</form>
		       		</div>
    <div style="clear:both"></div>
 </div>
<?php 
	include "lib/php/footer.php"
?>
</div>
</body>
</html>
