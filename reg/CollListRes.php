<html>
<head>
<title>College</title>
</head>
<style type="text/css">
    #wrapper {
        width:800px;
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
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
	select{
	color: #373737;
	padding: 8px 6px;
	

        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
		font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);}
    input,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
	
    input[type="text"],
    input[type="password"]{
        padding: 8px 6px;
        height: 22px;
        width:280px;
    }
	.short{
	padding: 8px 6px;
        height: 22px;
        width:150px;}
    input[type="submit"]{
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
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
    .small {
        line-height:14px;
        font-size:12px;
        color:#999898;
        margin-bottom:3px;
    }
	.big{
	line-height:14px;
        font-size:16px;
        color:#999898;
        margin-bottom:3px;
		}
</style>
<script>
function myFunction(){
window.print();
}
</script>
<?php 
	
	  $mysqli= new mysqli("10.100.9.70","hashtrix","geek","hashtrix") ;
		if($mysqli -> connect_errno)
		{
		print '<div id="wrapper"><legend><center>Error Occured try again later</center></legend></div>';
		die("CONNECTION FAILED") ;
		}
		print '<div id="wrapper" class="short"><fieldset><legend>College Details</legend>';
		$qur='select * from colleges where clg_id="'.$_POST['College'].'"';
		$chk=mysqli_query($mysqli,$qur);
		$col=mysqli_fetch_array($chk);
		print '<table width="800" border="0"><tr><td width="50">Reference Id</td><td width="200">: '.$_POST['College'].'</td></tr><tr><td width="50">College </td><td width="200">: '.$col['clg_name'].'</td></tr>';
		$qur = 'select * from directors where clg_id="'.$_POST['College'].'"';
		$chk = mysqli_query($mysqli,$qur);
		$det=mysqli_fetch_array($chk);
		print  '<tr><td width="50">Director </td><td width="250">: '.$det['dir_name'].'</td></tr>';
		print  '<tr><td width="50">Mobile </td><td width="250">: '.$det['phone'].'</td></tr>';
		print  '<tr><td width="50">Email </td><td width="250">: '.$det['e_mail'].'</td></tr>';
		print  '<tr><td width="50">No. of Participants </td><td width="200">: '.$det['no_of_participants'].'</td></tr></table></br>';
		print  '<b>Participation Details:</b></br></br>';
		$qur = 'select participant_name from participants where clg_id="'.$_POST['College'].'" and event_id="#EVE01"';
		$chk = mysqli_query($mysqli,$qur);
		$det=mysqli_fetch_array($chk);
		print '<table width="800" border="1"><tr><td width="50"><b>Techwiz </b></td><td width="105">'.$det['participant_name'].'</td><td width="35"></td>';
		$det=mysqli_fetch_array($chk);
		print '<td width="150">'.$det['participant_name'].'</td><td width="35"></td></tr>';
		$qur = 'select participant_name from participants where clg_id="'.$_POST['College'].'" and event_id="#EVE02"';
		$chk = mysqli_query($mysqli,$qur);
		$det = mysqli_fetch_array($chk);
		print '<tr><td width="50"><b>TakeDiversion </b></td><td width="105">'.$det['participant_name'].'</td><td width="35"></td>';
		$det=mysqli_fetch_array($chk);
		print '<td width="150">'.$det['participant_name'].'</td><td width="35"></td></tr>';
		$qur = 'select participant_name from participants where clg_id="'.$_POST['College'].'" and event_id="#EVE03"';
		$chk = mysqli_query($mysqli,$qur);
		$det = mysqli_fetch_array($chk);
		print '<tr><td width="50"><b>WordMaestro </b></td><td width="105">'.$det['participant_name'].'</td><td width="35"></td>';
		$det=mysqli_fetch_array($chk);
		print '<td width="150">'.$det['participant_name'].'</td><td width="35"></td></tr>';
		$qur = 'select participant_name from participants where clg_id="'.$_POST['College'].'" and event_id="#EVE04"';
		$chk = mysqli_query($mysqli,$qur);
		$det = mysqli_fetch_array($chk);
		print '<tr><td width="50"><b>Presentrix </b></td><td width="105">'.$det['participant_name'].'</td><td width="35"></td>';
		$det=mysqli_fetch_array($chk);
		print '<td width="150">'.$det['participant_name'].'</td><td width="35"></td></tr>';
		$qur = 'select participant_name from participants where clg_id="'.$_POST['College'].'" and event_id="#EVE05"';
		$chk = mysqli_query($mysqli,$qur);
		$det = mysqli_fetch_array($chk);
		print '<tr><td width="50"><b>HashMarket </b></td><td width="105">'.$det['participant_name'].'</td><td width="35"></td>';
		$det=mysqli_fetch_array($chk);
		print '<td width="150">'.$det['participant_name'].'</td><td width="35"></td></tr>';
		$det=mysqli_fetch_array($chk);
		print '<tr><td width="50">&nbsp;</td><td width="150">'.$det['participant_name'].'</td><td width="35"></td>';
		$det=mysqli_fetch_array($chk);
		print '<td width="150">'.$det['participant_name'].'</td><td width="35"></td></tr>';
		$qur = 'select participant_name from participants where clg_id="'.$_POST['College'].'" and event_id="#EVE06"';
		$chk = mysqli_query($mysqli,$qur);
		$det = mysqli_fetch_array($chk);
		print '<tr><td width="50"><b>Spiderz </b></td><td width="105">'.$det['participant_name'].'</td><td width="35"></td>';
		$det=mysqli_fetch_array($chk);
		print '<td width="150">'.$det['participant_name'].'</td><td width="35"></td></tr>';
		$qur = 'select participant_name from participants where clg_id="'.$_POST['College'].'" and event_id="#EVE07"';
		$chk = mysqli_query($mysqli,$qur);
		$det = mysqli_fetch_array($chk);
		print '<tr><td width="50"><b>Rivalz </b></td><td width="105">'.$det['participant_name'].'</td><td width="35"></td>';
		$det=mysqli_fetch_array($chk);
		print '<td width="150">'.$det['participant_name'].'</td><td width="35"></td></tr>';
		$qur = 'select participant_name from participants where clg_id="'.$_POST['College'].'" and event_id="#EVE08"';
		$chk = mysqli_query($mysqli,$qur);
		$det = mysqli_fetch_array($chk);
		print '<tr><td width="50"><b>UltimateHashtrix </b></td><td width="105">'.$det['participant_name'].'</td><td width="35"></td><td width="105">&nbsp;</td><td width="35"></td></tr>';
		print '</table><br/><center><button value="Print" onclick="myFunction()">Print</button></center></fieldset></div>';
		?>