<!DOCTYPE html PUBLIC "">
<html>
<head>
<title>Participans List</title>
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
<body>
		<div id="wrapper">
		<form action="CollListRes.php" method="post">
		<fieldset>
                <legend>Participant list</legend>
                <div>
					<div class="big">
					  <p>Select college  
					   <select name="College" required>
					   <option value="" disabled="disabled">--Choose a College--</option>
                        <option value="#1587">Adithya Institute of Technology</option>
<option value="#1574">AG Arts and Science College for Women</option>
<option value="#1545">AJK College of Arts and Science</option>
<option value="#1546">Avinashilingam College of Arts and Science</option>
<option value="#1523">Ayyan Thiruvalluvar College of Arts and Science</option>
<option value="#1596">Bannari Amman Institute of Technology</option>
<option value="#1561">Bharathiar University</option>
<option value="#1524">Bharathidasan College of Arts and Science</option>
<option value="#1550">Bishop Ambrose College of Arts and Science</option>
<option value="#1548">Bishop Appasamy College of Arts and Science</option>
<option value="#1503">CBM College of Arts and Science</option>
<option value="#1577">Cherraan's Arts and Science College</option>
<option value="#1578">Chikkaiah Naicker College of Arts and Science</option>
<option value="#1504">Chikkanna Government Arts College</option>
<option value="#15109">Christ The King Engineering College</option>
<option value="#1516">CMS College of Arts and Science</option>
<option value="#15104">Coimbatore Institute of Engineering and Technology</option>
<option value="#1509">Coimbatore Institute of Technology</option>
<option value="#1514">Dr. G.R. Damodaran College of Science</option>
<option value="#1525">Dr. R.A.N.M. Arts and Science College</option>
<option value="#1519">Dr. SNS Rajalakshmi College of Arts and Science</option>
<option value="#1541">Dr.N.G.P. Arts and Science College</option>
<option value="#15108">Dr.N.G.P. Institute of Technology</option>
<option value="#1526">Erode Arts and Science College</option>
<option value="#1579">Erode Arts and Science College</option>
<option value="#1527">Erode Christian College of Arts and Science for Women</option>
<option value="#1521">Gobi Arts and Science College</option>
<option value="#1505">Government College of Arts and Science, Coimbatore</option>
<option value="#15103">Government College of Technology</option>
<option value="#1513">Hindustan College of Arts & Science</option>
<option value="#15100">Hindusthan College of Engineering and Technology</option>	
<option value="#15102">Indus College of Engineering</option>
<option value="#1588">Info Institute of Engineering</option>
<option value="#1573">Jasons School of Business</option>
<option value="#1563">Jayandra Saraswathi Mahavidhyalaya College of Arts and Science</option>
<option value="#1576">Kaamadhenu College of Arts and Science</option>
<option value="#1551">Kairali Arts and Science College</option>
<option value="#15105">Kalaignar Karunanidhi Institute of Technology</option>
<option value="#1547">Karpagam College of Arts and Science</option>
<option value="#1593">Karpagam College of Engineering</option>
<option value="#1594">Karunya University</option>
<option value="#1528">Karuppannan Mariappan College</option>
<option value="#1598">Kathir College of Engineering</option>
<option value="#1539">Kongu Arts and Science College</option>
<option value="#1506">Kongunadu Arts and Science College</option>
<option value="#1552">Kovai Kalaimagal College of Arts and Science</option>
<option value="#1510">Krishnammal College of Arts and Science</option>
<option value="#1512">KSG College of Arts and Science</option>
<option value="#15110">KTVR Knowledge Park for Engineering and Technology</option>
<option value="#1575">Kullathungan College of Arts and Science</option>
<option value="#1582">Kumaraguru College of Technology</option>
<option value="#1553">Lakshmi Narayana Visalakshi Arts and Science College</option>
<option value="#1572">LRG College of Arts and Science for Women</option>
<option value="#1529">Maharaja Arts and Science College</option>
<option value="#1554">Maharaja Arts and Science College</option>
<option value="#1530">Maharani College for Womens</option>
<option value="#1555">Michael JOB College of Arts and Science</option>
<option value="#1540">Nallamuthu Gounder Mahalingam College</option>
<option value="#1531">Nandha Arts and Science College</option>
<option value="#1532">Navarasam Arts and Science College for Women</option>
<option value="#1501">Nehru College of Arts and Science</option>
<option value="#1542">Nirmala College for Women</option>
<option value="#1533">P.K.R. Arts College for Women</option>
<option value="#1571">Parks College of Arts and Science</option>
<option value="#1556">Pioneer College of Arts and Science</option>
<option value="#1590">PPG Institute of Technology</option>
<option value="#1591">Professional Group of Institution</option>
<option value="#1538">Providence College for Women</option>
<option value="#1508">PSG College of Arts and Science</option>
<option value="#1549">R.V. Arts and Science College</option>
<option value="#1564">Ramakrishna College of Arts and Science for Women</option>
<option value="#1511">Rathinam College of Arts and Science</option>
<option value="#1584">Rathinam College of Engineering</option>
<option value="#1502">RVS College of Arts and Science</option>
<option value="#1592">RVS College of Engineering and Technology</option>
<option value="#1557">S.M.S. College of Arts and Science</option>
<option value="#1515">Sankara College of Arts and Science</option>
<option value="#1534">Saratha College of Arts and Science</option>
<option value="#15107">Sasurie College of Engineering</option>
<option value="#1558">Shri Kumaran College of Arts and Science</option>
<option value="#1559">Shri Nehru Maha Vidyalaya College of Arts and Science</option>
<option value="#1518">SNR Sons College</option>
<option value="#1585">SNS College of Engineering</option>
<option value="#1586">SNS College of Technology</option>
<option value="#1535">Sree Amman Arts and Science College</option>
<option value="#1560">Sree Narayana Guru College of Arts and Science</option>
<option value="#1599">Sri Eshwar College of Engineering</option>
<option value="#1562">Sri Gee College of Arts and Science</option>
<option value="#1520">Sri Krishna Arts and Science College</option>
<option value="#1583">Sri Krishna College of Engineering and Technology</option>
<option value="#15106">Sri Ramakrishna Engineering College</option>
<option value="#1543">Sri ramakrishna Vidyalaya College of Arts and Science</option>
<option value="#1565">Sri Ramalinga Sowdambigai College of Arts and Science</option>
<option value="#1580">Sri Ramu COllege of Arts and Science</option>
<option value="#1595">Sri Ranganathar Institute of Engineering and Technology</option>
<option value="#1597">Sri Shakthi Institute of Engineering and Technology</option>
<option value="#1581">Sri Subash Arts and Science College</option>
<option value="#1536">Sri Vasavi College</option>
<option value="#1589">SriGuru Institute of Technology</option>
<option value="#1566">St. Joseph College for Women</option>
<option value="#1567">Terf's Academy College of Arts and Science</option>
<option value="#1568">Texcity College of Arts and Science</option>
<option value="#1544">Thavathiru Santhalinga Adigalar Arts and Science College</option>
<option value="#1517">The Principal GRG Polytechnic College</option>
<option value="#1570">Tiruppur Kumaran College for Women</option>
<option value="#15101">United Institute of Technology</option>
<option value="#1537">Vellakoil Arts and Science College</option>
<option value="#1522">Vellalar College For Women</option>
<option value="#1507">VLB Janakiammal College of Arts and Science</option>
<option value="#1569">VN Krishnaswamy Naidu College of Arts and Science for Women</option>

                       </select></p>
					  <p><center><input type="submit" name="submit" value="Details"></center></p>
				  </div>
	    </div>
</fieldset>
</body>
</html>
