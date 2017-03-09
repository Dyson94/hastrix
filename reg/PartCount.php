 <!DOCTYPE HTML PUBLIC ""
    >
<html lang="en">
<head>
    <title>Participant count</title>
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
    input[type="text"]:focus,
    input[type="password"]:focus ,select:focus{
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
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
		$chk=mysqli_query($mysqli,"select sum(no_of_participants) as fn from directors");
		 $row = mysqli_fetch_assoc($chk);
		 $sum = $row['fn'];
		 $chk1=mysqli_query($mysqli,"select count(*) as cn from directors");
		 $row1 = mysqli_fetch_assoc($chk1);
		 $sum1 = $row1['cn'];
		print '<div id="wrapper" class="short"><fieldset>
                <legend>Participant Count</legend><table width="466" border="0"><tr><span class="small"><td width="239">Total no. of Colleges Registered</td><td width="239">:'.$sum1.'</td></tr><tr><td>Total no. of registered participants</td><td>:'.$sum.'</td></span></tr></table>';
		$evepart1=mysqli_query($mysqli,"select count(*) as eve1 from participants where event_id='#eve01' and participant_name!=''");
		 $row = mysqli_fetch_assoc($evepart1);
		 $cou1 = $row['eve1'];
		 print '<br><b>Event wise Count:</b><br><br><table width="466" border="1"><tr><span class="small"><td width="239">TechWiz</td><td width="239"><center>'.$cou1.'</center></td></tr>';
		 
		 $evepart1=mysqli_query($mysqli,"select count(*) as eve1 from participants where event_id='#eve02' and participant_name!=''");
		 $row = mysqli_fetch_assoc($evepart1);
		 $cou1 = $row['eve1'];
		 print '<tr><span class="small"><td width="239">TakeDiversion</td><td width="239"><center>'.$cou1.'</center></td></tr>';
		 
		 $evepart1=mysqli_query($mysqli,"select count(*) as eve1 from participants where event_id='#eve03' and participant_name!=''");
		 $row = mysqli_fetch_assoc($evepart1);
		 $cou1 = $row['eve1'];
		 print '<tr><span class="small"><td width="239">WordMaestro</td><td width="239"><center>'.$cou1.'</center></td></tr>';
		 
		 $evepart1=mysqli_query($mysqli,"select count(*) as eve1 from participants where event_id='#eve04' and participant_name!=''");
		 $row = mysqli_fetch_assoc($evepart1);
		 $cou1 = $row['eve1'];
		 print '<tr><span class="small"><td width="239">Presentrix</td><td width="239"><center>'.$cou1.'</center></td></tr>';
		 
		 $evepart1=mysqli_query($mysqli,"select count(*) as eve1 from participants where event_id='#eve05' and participant_name!=''");
		 $row = mysqli_fetch_assoc($evepart1);
		 $cou1 = $row['eve1'];
		 print '<tr><span class="small"><td width="239">HashMarket</td><td width="239"><center>'.$cou1.'</center></td></tr>';
		 
		 $evepart1=mysqli_query($mysqli,"select count(*) as eve1 from participants where event_id='#eve06' and participant_name!=''");
		 $row = mysqli_fetch_assoc($evepart1);
		 $cou1 = $row['eve1'];
		 print '<tr><span class="small"><td width="239">Spiderz</td><td width="239"><center>'.$cou1.'</center></td></tr>';
		 
		 $evepart1=mysqli_query($mysqli,"select count(*) as eve1 from participants where event_id='#eve07' and participant_name!=''");
		 $row = mysqli_fetch_assoc($evepart1);
		 $cou1 = $row['eve1'];
		 print '<tr><span class="small"><td width="239">Rivalz</td><td width="239"><center>'.$cou1.'</center></td></tr>';
		 
		 $evepart1=mysqli_query($mysqli,"select count(*) as eve1 from participants where event_id='#eve08' and participant_name!=''");
		 $row = mysqli_fetch_assoc($evepart1);
		 $cou1 = $row['eve1'];
		 print '<tr><span class="small"><td width="239">UltimateHashtrix</td><td width="239"><center>'.$cou1.'</center></td></tr></table>';
		 
		print '</br><center><button onclick="myFunction()">Print</button></center></div>';
?>
