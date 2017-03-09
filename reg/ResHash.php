<!DOCTYPE HTML PUBLIC ""
    >
<html lang="en">
<head>
    <title>Registration Status</title>
</head>
<style type="text/css">
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family:Verdana, sans-serif;
    }
    legend {
        color:#FF9933;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
		
    }
	 input[type="button"]{
        background: #222;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: #eee;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
	</style>

<?php
$mysqli= new mysqli("10.100.9.70","hashtrix","geek","hashtrix") ;
    if($mysqli -> connect_errno)
	{
		print '<div id="wrapper"><legend><center>Error Occured try again later<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	     die("CONNECTION FAILED") ;
	}
	//print "<h1><center>Success</center><h1>";
	if($_POST['College']==NULL)
	{
	print '<div id="wrapper"><legend><center>Error occured please try again<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	die("");
	}
	$chk=mysqli_query($mysqli,"select clg_id from directors");
	while($ck=mysqli_fetch_array($chk))
	{
	 if($ck['clg_id'] == $_POST['College'])
	 {
	  print '<div id="wrapper"><legend><center>Your college was already registered <br>Your Reference Id is '.$_POST['College'].'<br>Incase of any change in participants please contact our coordinators<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	  die("");
	 }
	}
	$Dir="INSERT INTO directors(dir_name,phone,e_mail,no_of_participants,clg_id) VALUES('$_POST[dir_name]','$_POST[dir_mob]','$_POST[dir_email]','$_POST[no_participants]','$_POST[College]')";
	if($_POST['text']!=NULL && $_POST['text1']!=NULL)
	{
	$Part1="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text]','#EVE01')";
	$Part2="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text1]','#EVE01')";
	
	}
	else
	{
	if($_POST['text']==NULL && $_POST['text1']==NULL)
	{
	$Part1="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE01')";
	$Part2="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE01')";
	}
	else
	{
	print '<div id="wrapper"><legend><center>Error occured please check the participants name were entered correctly<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	die("");
	}
	}
	if($_POST['text2']!=NULL && $_POST['text3']!=NULL)
	{
	$Part3="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text2]','#EVE02')";
	$Part4="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text3]','#EVE02')";
	}
	else
	{
	if($_POST['text2']==NULL && $_POST['text3']==NULL)
	{
	$Part3="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE02')";
	$Part4="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE02')";
	}
	else
	{
	print '<div id="wrapper"><legend><center>Error occured please check the participants name were entered correctly<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	die("") ;
	}
	}
	if($_POST['text4']!=NULL && $_POST['text5']!=NULL)
	{
	$Part5="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text4]','#EVE03')";
	$Part6="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text5]','#EVE03')";
	}
	else
	{
	if($_POST['text4']==NULL && $_POST['text5']==NULL)
	{
	$Part5="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE03')";
	$Part6="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE03')";
	}
	else
	{
	print '<div id="wrapper"><legend><center>Error occured please check the participants name were entered correctly<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	die("") ;
	}
	}
	if($_POST['text6']!=NULL && $_POST['text7']!=NULL)
	{
	$Part7="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text6]','#EVE04')";
	$Part8="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text7]','#EVE04')";
	}
	else
	{
	if($_POST['text6']==NULL && $_POST['text7']==NULL)
	{
	$Part7="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE04')";
	$Part8="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE04')";
	}
	else
	{
	print '<div id="wrapper"><legend><center>Error occured please check the participants name were entered correctly<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	die("") ;
	}
	}
	if($_POST['text8']!=NULL && $_POST['text9']!=NULL && $_POST['text10']!=NULL && $_POST['text11']!=NULL)
	{
	$Part9="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text8]','#EVE05')";
	$Part10="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text9]','#EVE05')";
	$Part11="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text10]','#EVE05')";
	$Part12="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text11]','#EVE05')";
	}
	else
	{
	if($_POST['text8']==NULL && $_POST['text9']==NULL && $_POST['text10']==NULL && $_POST['text11']==NULL)
	{
	$Part9="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE05')";
	$Part10="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE05')";
	$Part11="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE05')";
	$Part12="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE05')";
	}
	else
	{
	print '<div id="wrapper"><legend><center>Error occured please check the participants name were entered correctly<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	die("") ;
	}
	}
	if($_POST['text12']!=NULL && $_POST['text13']!=NULL)
	{
	$Part13="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text12]','#EVE06')";
	$Part14="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text13]','#EVE06')";
	}
	else
	{
	if($_POST['text12']==NULL && $_POST['text13']==NULL)
	{
	$Part13="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE06')";
	$Part14="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE06')";
	}
	else
	{
	print '<div id="wrapper"><legend><center>Error occured please check the participants name were entered correctly<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	die("") ;
	}
	}
	if($_POST['text14']!=NULL && $_POST['text15']!=NULL)
	{
	$Part15="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text14]','#EVE07')";
	$Part16="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text15]','#EVE07')";
	}
	else
	{
	 if($_POST['text14']==NULL && $_POST['text15']==NULL)
	 {
	  $Part15="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE07')";
	  $Part16="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE07')";
	 }
	 else
	 {
	  print '<div id="wrapper"><legend><center>Error occured please check the participants name were entered correctly<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	  die("") ;
	 }
	}
	if($_POST['text16']!=NULL)
	{
	$Part17="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]','$_POST[text16]','#EVE08')";
	}
	else
	{
	if($_POST['text16']==NULL)
	{
	$Part17="INSERT INTO participants(clg_id,participant_name,event_id) VALUES('$_POST[College]',NULL,'#EVE08')";
	}
	else
	{
	print '<div id="wrapper"><legend><center>Error occured please check the participants name were entered correctly<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	die("") ;
	}
	}
	$mysqli->query($Dir);
	$mysqli->query($Part1);
	$mysqli->query($Part2);
	$mysqli->query($Part3);
	$mysqli->query($Part4);
	$mysqli->query($Part5);
	$mysqli->query($Part6);
	$mysqli->query($Part7);
	$mysqli->query($Part8);
	$mysqli->query($Part9);
	$mysqli->query($Part10);
	$mysqli->query($Part11);
	$mysqli->query($Part12);
	$mysqli->query($Part13);
	$mysqli->query($Part14);
	$mysqli->query($Part15);
	$mysqli->query($Part16);
	$mysqli->query($Part17);
	print '<div id="wrapper"><legend><center>Your College has been registered successfully<br>Your Reference Id is '.$_POST['College'].'<br><a href="../index.html"><input type="button" value="Go to Home page"></a><a href="register.html"><input type="button" value="Go to Registration page"></a></center></legend></div>';
	$mysqli->close();
?>
<body>
</body>
</html>