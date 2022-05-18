<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<p><center><legend><font color='#008000' size='18'>This system allows all registered users to vote for their favorite POLITICAL PARTY.</p>
<p>In order to make a vote you have to register first and then login.</font></legend></center>
<a href="login_admin.php"> <input type="submit" name="login" value="login" > </a>
    <p>&nbsp;&nbsp;</p>
<?php include "footer.php";?>
