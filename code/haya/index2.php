<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
  <title>Computer and Internet Architecture Laboratory - CSIE
-NCKU</title>


  <link rel="stylesheet" type="text/css" media="screen" href="../css/main_display.css" />

  <link rel="shortcut icon" href="../favicon.ico" />

</head>


<body>
<?php
include('incsession.php');

echo '這是會員區';
?>
<!-- BEGIN #container -->
<div id="container">
<div id="header"></div>

<!-- BEGIN #navigation -->
<div id="nav"> <u1> 

<li><a href="../index.html" title="Home">Home</a> | </li>
<li><a href="../faculty/" title="Faculty">Faculty</a>| </li>
<li><a href="../publication/" title="Publication">Publication</a>| </li>
<li><a href="../research/" title="Research">Research</a>| </li>
<li><a href="../members/" title="Members">Members</a>| </li>
<li><a href="../course/" title="Courses">Courses</a>| </li>
<li><a href="../presentation/index.php" title="Presentation">Presentation</a>| </li>
<li><a href="../callforpaper/" title="Call for paper">Call for paper</a> | </li>
<li><a href="http://album.blog.yam.com/cial" title="Album">Album</a></li>

</u1> </div>

<!-- END #navigation --><!-- BEGIN #content -->
<div id="content"><!-- #content:main -->
<div id="main">
<table style="border-collapse: collapse;" class="present" border="3" bordercolor="#666666" cellpadding="0" cellspacing="0">

	<tbody width="2000">
		<tr>
			<td height="41">Date</td>
			<td height="41">Speaker</td>
			<td height="41" width="1000">Paper Title</td>
			<td height="41">Year</td>
			<td height="41">Publications</td>
			<td height="41">Author</td>
			<td height="41" width="800">PDF | PPT</td>
		</tr>
		
		<?php
			$file = fopen("./database4","r");
			while(!feof($file)){
				$line = fgets($file);
				if(strlen($line)<4)break;
				echo "<tr>";
				$word = strtok($line, "\t");
				for($count=0;$count<6;$count++){
					echo '<td  height="36">'.$word.'</td>';
					$word = strtok("\t");
				}
				echo '<td><a href="group_pdf/'.$word.'"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>';
				$word = strtok("\t");
				echo '<a href="group_ppt/'.$word.'"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>';
				$word = strtok("\t");
				echo '<a href="group_word/'.$word.'"><img src="img/word.gif" border="0" height="20" width="20" /></a></td></tr>';
			}
			fclose($file);
		?>
		
		<?php
			$file = fopen("./database3","r");
			while(!feof($file)){
				$line = fgets($file);
				if(strlen($line)<4)break;
				echo "<tr>";
				$word = strtok($line, "\t");
				for($count=0;$count<6;$count++){
					echo '<td  height="36">'.$word.'</td>';
					$word = strtok("\t");
				}
				echo '<td><a href="group_pdf/'.$word.'"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>';
				$word = strtok("\t");
				echo '<a href="group_ppt/'.$word.'"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>';
				$word = strtok("\t");
				echo '<a href="group_word/'.$word.'"><img src="img/word.gif" border="0" height="20" width="20" /></a></td></tr>';
			}
			fclose($file);
		?>
		
		<?php
			$file = fopen("./database2","r");
			while(!feof($file)){
				$line = fgets($file);
				if(strlen($line)<4)break;
				echo "<tr>";
				$word = strtok($line, "\t");
				for($count=0;$count<6;$count++){
					echo '<td  height="36">'.$word.'</td>';
					$word = strtok("\t");
				}
				echo '<td><a href="group_pdf/'.$word.'"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>';
				$word = strtok("\t");
				echo '<a href="group_ppt/'.$word.'"><img src="img/ppt.gif" border="0" height="20" width="20" /></a></td></tr>';
			}
			fclose($file);
		?>
		<!--
		<tr>
			<td height="36"></td>
			<td height="36"></td>
			<td height="36"></td>
			<td height="36"></td>
			<td></td>
			<td></td>
			<td height="36">&nbsp</td>
		</tr>		 
		-->
		<tr>
			<td height="36">2009/08/18</td>
			<td height="36">李春億</td>
			<td height="36">Space and Speed Tradeoffs in TCAM Hierarchical Packet Classification</td>
			<td height="36">2008</td>
			<td>Sarnoff Symposium</td>
			<td>Alex Kesselman, Kirill Kogan, Sergey Nemzer, Michael Segal</td>
			<td height="36">
				<a href="group_pdf/Space and Speed Tradeoffs in TCAM Hierarchical Packet Classification.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Space and Speed Tradeoffs in TCAM Hierarchical Packet Classification.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/07/28</td>
			<td height="36">張鎮宇</td>
			<td height="36">A Fast and Memory Efficient Dynamic IP Lookup Algorithm Based on B-Tree</td>
			<td height="36">2009</td>
			<td>AINA</td>
			<td>Yeim-Kuan Chang and Yung-Chieh Lin</td>
			<td height="36">
				<a href="group_pdf/A Fast and Memory Efficient Dynamic IP Lookup Algorithm Based on B-Tree.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/A Fast and Memory Efficient Dynamic IP Lookup Algorithm Based on B-Tree.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/07/28</td>
			<td height="36">張呈榕</td>
			<td height="36">Regular Expression Matching in Reconfigurable Hardware</td>
			<td height="36">2008</td>
			<td>Journal of Signal Processing Systems</td>
			<td>Ioannis Sourdis , Jo˜ao Bispo, Jo˜ao M.P. Cardoso and Stamatis Vassiliadis</td>
			<td height="36">
				<a href="group_pdf/Regular Expression Matching in Reconfigurable Hardware.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Regular Expression Matching in Reconfigurable Hardware.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/07/21</td>
			<td height="36">江宇平</td>
			<td height="36">Blooming Trees for Minimal Perfect Hashing</td>
			<td height="36">2008</td>
			<td>GLOBECOM</td>
			<td>Gianni Antichi, Domenico Ficara, Stefano Giordano, Gregorio Procissi, Fabio Vitucci</td>
			<td height="36">
				<a href="group_pdf/Blooming Trees for Minimal Perfect Hashing.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Blooming Trees for Minimal Perfect Hashing.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
				<tr>
			<td height="36">2009/07/21</td>
			<td height="36">李春億</td>
			<td height="36">Counting bloom filters for pattern matching and anti-evasion at the wire speed</td>
			<td height="36">2009</td>
			<td>IEEE Network</td>
			<td>Gianni Antichi, Domenico Ficara, Stefano Giordano, Gregorio Procissi, Fabio Vitucci</td>
			<td height="36">
				<a href="group_pdf/Counting bloom filters for pattern matching and anti-evasion at the wire speed.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Counting bloom filters for pattern matching and anti-evasion at the wire speed.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/05/20</td>
			<td height="36">蘇正建</td>
			<td height="36">Wire-Speed TCAM-Based Architectures for Multimatch Packet Classification</td>
			<td height="36">2009</td>
			<td>IEEE Transactions on Computers</td>
			<td>Faezipour, M. Nourani, M.</td>
			<td height="36">
				<a href="group_pdf/Wire-Speed TCAM-Based Architectures for Multimatch Packet Classification.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Wire-Speed TCAM-Based Architectures for Multimatch Packet Classification.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/05/20</td>
			<td height="36">楊淇祿</td>
			<td height="36">Virtual calibration for RSSI-based indoor localization with IEEE802.15.4</td>
			<td height="36">2009</td>
			<td>IEEE International Conference on Communications</td>
			<td>Paolo Barsocchi, Stefano Lenzi, Stefano Chessa, Gaetano Giunta</td>
			<td height="36">
				<a href="group_pdf/Virtual calibration for RSSI-based indoor localization with IEEE802.15.4.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Virtual calibration for RSSI-based indoor localization with IEEE802.15.4.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/05/13</td>
			<td height="36">林意勝</td>
			<td height="36">Scalable packet classification with controlled cross-producting</td>
			<td height="36">2009</td>
			<td>Computer Networks</td>
			<td>Pi-Chung Wang</td>
			<td height="36">
				<a href="group_pdf/Scalable packet classification with controlled cross-producting.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Scalable packet classification with controlled cross-producting.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/05/13</td>
			<td height="36">張家銘</td>
			<td height="36">Self-Addressable Memory-Based FSM:A Scalable Intrusion Detection Engine</td>
			<td height="36">2009</td>
			<td>IEEE Network</td>
			<td>Benfano Soewito, Lucas Vespa, Atul Mahajan, Ning Weng, and Haibo Wang</td>
			<td height="36">
				<a href="group_pdf/Self-Addressable Memory-Based FSM A Scalable Intrusion Detection Engine.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Self-Addressable Memory-Based FSM A Scalable Intrusion Detection Engine.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/05/06</td>
			<td height="36">張呈榕</td>
			<td height="36">Regular Expression Matching for Reconfigurable Constraint Repetition Inspection</td>
			<td height="36">2008</td>
			<td>IEEE GLOBECOM</td>
			<td>Miad Faezipour and Mehrdad Nourani</td>
			<td height="36">
				<a href="group_pdf/Regular Expression Matching for Reconfigurable Constraint Repetition Inspection.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Regular Expression Matching for Reconfigurable Constraint Repetition Inspection.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/04/29</td>
			<td height="36">郭芳辰</td>
			<td height="36">A fast scalable automaton-matching accelerator for embedded content processors</td>
			<td height="36">2009</td>
			<td>ACM TECS</td>
			<td>KUO-KUN TSENG, YUAN-CHENG LAI, YING-DAR LIN and TSERN-HUEI LEE</td>
			<td height="36">
				<a href="group_pdf/A fast scalable automaton-matching accelerator for embedded content processors.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/A fast scalable automaton-matching accelerator for embedded content processors.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>			
		<tr>
			<td height="36">2009/04/29</td>
			<td height="36">林呈俞</td>
			<td height="36">A throughput efficient packet classification with n bloom filters</td>
			<td height="36">2008</td>
			<td>IEEE GLOBECOM</td>
			<td>Heeyeol Yu and Rabi Mahapatra</td>
			<td height="36">
				<a href="group_pdf/A throughput efficient packet classification with n bloom filters.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/A throughput efficient packet classification with n bloom filters.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/04/22</td>
			<td height="36">張家銘</td>
			<td height="36">A Hybrid Finite Automaton for Practical Deep Packet Inspection</td>
			<td height="36">2007</td>
			<td>ACM</td>
			<td>Michela Becchi,Patrick Crowley</td>
			<td height="36">
				<a href="group_pdf/A Hybrid Finite Automaton for Practical Deep Packet Inspection.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/A Hybrid Finite Automaton for Practical Deep Packet Inspection.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/04/22</td>
			<td height="36">郭涵蓁</td>
			<td height="36">High-performance Longest Prefix Match Logic Supporting Fast Updates for IP Forwarding Devices</td>
			<td height="36">2009</td>
			<td>IACC</td>
			<td>Arun Kumar S P</td>
			<td height="36">
				<a href="group_pdf/High-performance Longest Prefix Match Logic Supporting Fast Updates for IP Forwarding Devices.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/High-performance Longest Prefix Match Logic Supporting Fast Updates for IP Forwarding Devices.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/03/25</td>
			<td height="36">陳宥佐</td>
			<td height="36">Indoor Localization System Using RSSI Measurement Of Wireless Sensor Network Based On ZIGBEE Standard</td>
			<td height="36">2006</td>
			<td>Wireless Sensor Networks</td>
			<td>Masashi Sugano, Tomonori Kawazoe, Yoshikazu Ohta, and Masayuki Murata</td>
			<td height="36">
				<a href="group_pdf/INDOOR LOCALIZATION SYSTEM USING RSSI MEASUREMENT OF WIRELESS SENSOR NETWORK BASED ON ZIGBEE STANDARD.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/INDOOR LOCALIZATION SYSTEM USING RSSI MEASUREMENT OF WIRELESS SENSOR NETWORK BASED ON ZIGBEE STANDARD.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/03/25</td>
			<td height="36">張鎮宇</td>
			<td height="36">Efficient Multidimensional Packet Classification with Fast Updates</td>
			<td height="36">2009</td>
			<td>IEEE TRACNSACTIONS ON COMPUTERS</td>
			<td>Yeim-Kuan Chang</td>
			<td height="36">
				<a href="group_pdf/Efficient Multidimensional Packet Classification with Fast Updates.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Efficient Multidimensional Packet Classification with Fast Updates.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/03/18</td>
			<td height="36">張凱焯</td>
			<td height="36">Generalized Aho-Corasick Algorithm for Signature Based Anti-Virus Applications</td>
			<td height="36">2008</td>
			<td>IEEE ICCCN</td>
			<td>Tsern-Huei Lee</td>
			<td height="36">
				<a href="group_pdf/Generalized Aho-Corasick Algorithm for Signature Based Anti-Virus Applications.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Generalized Aho-Corasick Algorithm for Signature Based Anti-Virus Applications.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/03/18</td>
			<td height="36">張家銘</td>
			<td height="36">Memory-Efficient Regular Expression Search Using State Merging</td>
			<td height="36">2007</td>
			<td>IEEE INFOCOM</td>
			<td>Michela Becchi,Srihari Cadambi</td>
			<td height="36">
				<a href="group_pdf/Memory-Efficient Regular Expression Search Using State Merging.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Memory-Efficient Regular Expression Search Using State Merging.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/03/11</td>
			<td height="36">李春億</td>
			<td height="36">Fast Packet Classification Using Bit Compression with Fast Boolean Expansion</td>
			<td height="36">2008</td>
			<td>Journal of Information Science and Engineering</td>
			<td>Chien Chen, Chia-Jen Hsu and Chi-Chia Huang</td>
			<td height="36">
				<a href="group_pdf/Fast Packet Classification Using Bit Compression with Fast Boolean Expansion.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Fast Packet Classification Using Bit Compression with Fast Boolean Expansion.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/03/11</td>
			<td height="36">林意勝</td>
			<td height="36">On a trie partitioning algorithm for power-efficient TCAMs</td>
			<td height="36">2008</td>
			<td>INTERNATIONAL JOURNAL OF COMMUNICATION SYSTEMS</td>
			<td>Haibin Lu</td>
			<td height="36">
				<a href="group_pdf/On a trie partitioning algorithm for power-efficient TCAMs.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/On a trie partitioning algorithm for power-efficient TCAMs.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/03/04</td>
			<td height="36">張呈榕</td>
			<td height="36">A High Throughput String Matching Architecture for Intrusion Detection and Prevention</td>
			<td height="36">2005</td>
			<td>International Symposium on Computer Architecture(ISCA)</td>
			<td>Lin Tan, Timothy Sherwood</td>
			<td height="36">
				<a href="group_pdf/A High Throughput String Matching Architecture for Intrusion Detection and Prevention.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/A High Throughput String Matching Architecture for Intrusion Detection and Prevention.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/03/04</td>
			<td height="36">張家銘</td>
			<td height="36">An Efficient and Scalable Pattern Matching Scheme for Network Security Applications</td>
			<td height="36">2008</td>
			<td>ICCCN</td>
			<td>Tsern-Huei Lee, Nai-Lun Huang</td>
			<td height="36">
				<a href="group_pdf/An Efficient and Scalable Pattern Matching Scheme for Network Security Applications.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/An Efficient and Scalable Pattern Matching Scheme for Network Security Applications.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/02/25</td>
			<td height="36">林呈俞</td>
			<td height="36">Efficient Prefix Updates for IP Router Using Lexicographic Ordering and Updatable Address Set</td>
			<td height="36">2008</td>
			<td>IEEE Transactions on Computers</td>
			<td>Sieteng Soh, Lely Hiryanto, Suresh Rai</td>
			<td height="36">
				<a href="group_pdf/Efficient Prefix Updates for IP Router Using Lexicographic Ordering and Updatable Address Set.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Efficient Prefix Updates for IP Router Using Lexicographic Ordering and Updatable Address Set.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/02/25</td>
			<td height="36">蘇正建</td>
			<td height="36">Efficient Multi-Match Packet Classification with TCAM</td>
			<td height="36">2004</td>
			<td>IEEE Communications Surveys</td>
			<td>Fang Yu  and  Randy H. Katz</td>
			<td height="36">
				<a href="group_pdf/Efficient Multi-Match Packet Classification with TCAM.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/20090224.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/02/25</td>
			<td height="36">蘇正建</td>
			<td height="36">TCAM Razor - A Systematic Approach Towards Minimizing Packet Classifiers in TCAMs</td>
			<td height="36">2007</td>
			<td>ICPN</td>
			<td>Chad R. Meiners, Alex X. Liu,  Eric Torng</td>
			<td height="36">
				<a href="group_pdf/TCAM Razor - A Systematic Approach Towards Minimizing Packet Classifiers in TCAMs.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/20090224.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/02/25</td>
			<td height="36">蘇正建</td>
			<td height="36">Packet Classifiers in Ternary CAMs Can Be Smaller</td>
			<td height="36">2006</td>
			<td>SIGMETRICS</td>
			<td>Qunfeng Dong, Suman Banerjee, Jia Wang</td>
			<td height="36">
				<a href="group_pdf/Packet Classifiers in Ternary CAMs Can Be Smaller.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/20090224.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/02/25</td>
			<td height="36">蘇正建</td>
			<td height="36">Layered Interval Codes for TCAM-Based Classification</td>
			<td height="36">2008</td>
			<td>SIGMETRICS</td>
			<td>Anat Bremler-Barr, David Hay, Danny Hendler</td>
			<td height="36">
				<a href="group_pdf/Layered Interval Codes for TCAM-Based Classification.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/20090224.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/02/25</td>
			<td height="36">蘇正建</td>
			<td height="36">DRES: Dynamic Range Encoding Scheme for TCAM Coprocessors</td>
			<td height="36">2008</td>
			<td>IEEE TRANSACTIONS ON COMPUTERS</td>
			<td>Hao Che, Zhijun Wang, Bin Liu</td>
			<td height="36">
				<a href="group_pdf/DRES - Dynamic Range Encoding Scheme for TCAM Coprocessors.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/20090224.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/02/18</td>
			<td height="36">丁義偉</td>
			<td height="36">A Survey of Multipoint Relay based Broadcast Schemes in Wireless Ad Hoc Networks</td>
			<td height="36">2007</td>
			<td>IEEE Communications Surveys</td>
			<td>OU LIANG, Y. AHMET S¸ EKERCIOG˘ LU, NALLASAMY MANI</td>
			<td height="36">
				<a href="group_pdf/A Survey of Multipoint Relay based Broadcast Schemes in Wireless Ad Hoc Networks.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/A Survey of Multipoint Relay based Broadcast Schemes in Wireless Ad Hoc Networks.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>		
		<tr>
			<td height="36">2009/02/10</td>
			<td height="36">江宇平</td>
			<td height="36">HEXA: Compact Data Structures or Faster Packet Processing</td>
			<td height="36">2007</td>
			<td>ICNP</td>
			<td>Sailesh Kumar, Jonathan Turner, Patrick Crowley, Michael Mitzenmacher</td>
			<td height="36">
				<a href="group_pdf/HEXA - Compact Data Structures or Faster Packet Processing.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/HEXA - Compact Data Structures or Faster Packet Processing.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>
		<tr>
			<td height="36">2009/02/10</td>
			<td height="36">陳宥佐</td>
			<td height="36">Enhanced RSSI-based Real-time User Location Tracking System for Indoor and Outdoor Environments</td>
			<td height="36">2008</td>
			<td>JSSIS</td>
			<td>Erin-Ee-Lin Lau, Boon-Giin Lee, Seung-Chul Lee, and Wan-Young Chung</td>
			<td height="36">
				<a href="group_pdf/Enhanced RSSI-based Real-time User Location Tracking System for Indoor and Outdoor Environments.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Enhanced RSSI-based Real-time User Location Tracking System for Indoor and Outdoor Environments.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr> 
		<tr>
			<td height="36">2009/02/03</td>
			<td height="36">張凱焯</td>
			<td height="36">Automatic Synthesis of Efficient Intrusion Detection Systems on FPGAs</td>		
			<td height="36">2008</td>
			<td>IEEE TRANSACTIONS ON DEPENDABLE AND SECURE COMPUTING</td>
			<td>Wei Lin, Bin Liu</td>
			<td height="36">		
				<a href="group_pdf/Automatic Synthesis of Efficient Intrusion Detection Systems on FPGAs.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Automatic Synthesis of Efficient Intrusion Detection Systems on FPGAs.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>			
			</td>
		</tr>	
		<tr>
			<td height="36">2009/02/03</td>
			<td height="36">張家銘</td>
			<td height="36">Pipelined Parallel AC-based Approach for Multi-String Matching</td>		
			<td height="36">2008</td>
			<td>IEEE International Conference on Parallel and Distributed Systems</td>
			<td>Wei Lin, Bin Liu</td>
			<td height="36">		
				<a href="group_pdf/Pipelined Parallel AC-based Approach for Multi-String Matching.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Pipelined Parallel AC-based Approach for Multi-String Matching.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>  
		<tr>
			<td height="36">2008/12/24</td>
			<td height="36">張鎮宇</td>
			<td height="36">Performance Evaluation of IPv6 Packet Classfication With Caching</td>		
			<td height="36">2008</td>
			<td>ChinaCom 2008</td>
			<td>Kai-Yuan Ho and Yaw-Chung Chen</td>
			<td height="36">		
				<a href="group_pdf/Performance Evaluation of IPv6 Packet Classfication With Caching.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Performance Evaluation of IPv6 Packet Classfication With Caching.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>	 
		<tr>
			<td height="36">2008/12/24</td>
			<td height="36">林勇傑</td>
			<td height="36">A Dynamic Binary Hash Scheme for IPv6 Lookup</td>
			<td height="36">2008</td>
			<td>IEEE GLOBECOM</td>
			<td>Weirong Jiang and Viktor K. Prasanna</td>
			<td height="36">		
				<a href="group_pdf/A Dynamic Binary Hash Scheme for IPv6 Lookup.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/A Dynamic Binary Hash Scheme for IPv6 Lookup.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>	
		<tr>
			<td height="36">2008/12/17</td>
			<td height="36">張家銘</td>
			<td height="36">A Memory Efficient Multiple Pattern Matching Architecture for Network Security</td>
			<td height="36">2008</td>
			<td>IEEE INFOCOM</td>
			<td>Tian Song, Wei Zhang</td>
			<td height="36">		
				<a href="group_pdf/A Memory Efficient Multiple Pattern Matching Architecture for Network Security.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/A Memory Efficient Multiple Pattern Matching Architecture for Network Security.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>
		<tr>
			<td height="36">2008/12/10</td>
			<td height="36">林意勝</td>
			<td height="36">Parallel IP lookup using multiple SRAM-based pipelines</td>
			<td height="36">2008</td>
			<td>IPDPS, IEEE International Symposium on</td>
			<td>Weirong Jiang; Prasanna, V.K.</td>
			<td height="36">		
				<a href="group_pdf/Parallel IP Lookup using Multiple SRAM-based Pipelines.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Parallel IP Lookup using Multiple SRAM-based Pipelines.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>	
		<tr>
			<td height="36">2008/12/03</td>
			<td height="36">林呈俞</td>
			<td height="36">Space-Efficient TCAM-based Classification Using Gray Coding</td>
			<td height="36">2007</td>
			<td>IEEE INFOCOM</td>
			<td>Anat Bremler-Barr and Danny Hendler</td>
			<td height="36">		
					<a href="group_pdf/Space-Efficient TCAM-based Classification Using Gray Coding.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
			<a href="group_ppt/Space-Efficient TCAM-based Classification Using Gray Coding.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>	
		<tr>
			<td height="36">2008/11/26</td>
			<td height="36">張鎮宇 </td>
			<td height="36">An Efficient IP Lookup Architecture with Fast Update Using Single-Match TCAMs</td>
			<td height="36">2008</td>
			<td>WWIC</td>
			<td>Jinsoo Kim and Junghwan Kim</td>
			<td height="36">		
				<a href="group_pdf/An Efficient IP Lookup Architecture with Fast Update Using Single-Match TCAMs.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/An Efficient IP Lookup Architecture with Fast Update Using Single-Match TCAMs.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>		
		<tr>
			<td height="36">2008/11/19</td>
			<td height="36">江宇平</td>
			<td height="36">Scalable High-throughput SRAM-Based Architecture For IP-Lookup Using FPGA</td>
			<td height="36">2008</td>
			<td>FPL</td>
			<td>Hoang Le, Weirong Jiang, Prasanna, V.K.</td>
			<td height="36">		
				<a href="group_pdf/Scalable High-throughput SRAM-Based Architecture For IP-Lookup Using FPGA.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Scalable High-throughput SRAM-Based Architecture For IP-Lookup Using FPGA.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>	
		<tr>
			<td height="36">2008/11/12</td>
			<td height="36">張呈榕</td>
			<td height="36">Optimization of Pattern Matching Circuits for Regular Expression on FPGA</td>
			<td height="36">2007</td>
			<td>IEEE TRANSACTIONS ON VLSI SYSTEMS</td>
			<td>Cheng-Hung Lin, Chih-Tsun Huang, Chang-Ping Jiang, Shih-Chieh Chang</td>
			<td height="36">
				<a href="group_pdf/Optimization of Pattern Matching Circuits for Regular Expression on FPGA.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Optimization of Pattern Matching Circuits for Regular Expression on FPGA.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>	 
		<tr>
			<td height="36">2008/11/05</td>
			<td height="36">陳宥佐</td>
			<td height="36">Location Estimation in ZigBee Network Based on Fingerprinting</td>
			<td height="36">2007</td>
			<td>Vehicular Electronics and Safety, ICVES</td>
			<td>Qingming Yao, Fei-Yue Wang, Hui Gao, Kunfeng Wang and Hongxia Zhao</td>
			<td height="36">
				<a href="group_pdf/Location Estimation in ZigBee Network Based on Fingerprinting.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Location Estimation in ZigBee Network Based on Fingerprinting.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>	
		<tr>
			<td height="36">2008/10/29</td>
			<td height="36">張鎮宇</td>
			<td height="36">Fast binary and multiway prefix searches for packet forwarding</td>
			<td height="36">2007</td>
			<td>COMPUTER NETWORKS, SCI</td>
			<td>Yeim-Kuan Chang</td>
			<td height="36">
				<a href="group_pdf/Fast binary and multiway prefix searches for packet forwarding.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Fast binary and multiway prefix searches for packet forwarding.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>
		<tr>
			<td height="36">2008/10/22</td>
			<td height="36">郭芳辰</td>
			<td height="36">Wire Speed Packet Classification Without TCAMs A Few More Registers (And A Bit of Logic) Are Enough</td>
			<td height="36">2007</td>
			<td>SIGMETRICS</td>
			<td>Qunfeng Dong, Suman Banerjee, Jia Wang, Dheeraj Agrawal</td>
			<td height="36">
				<a href="group_pdf/Wire Speed Packet Classification Without TCAMs A Few More Registers (And A Bit of Logic) Are Enough.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Wire Speed Packet Classification Without TCAMs A Few More Registers (And A Bit of Logic) Are Enough.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr> 
		<tr>
			<td height="36">2008/10/22</td>
			<td height="36">張凱焯</td>
			<td height="36">Processor Array Architectures for Deep Packet Classification</td>
			<td height="36">2006</td>
			<td>IEEE TRANSACTIONS ON PARALLEL AND DISTRIBUTED SYSTEMS</td>
			<td>Fayez Gebali, A.N.M. Ehtesham Rafiq</td>
			<td height="36">
				<a href="group_pdf/Processor Array  Architectures for Deep Packet Classification.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Processor Array  Architectures for Deep Packet Classification.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>	
		<tr>
			<td height="36">2008/10/15</td>
			<td height="36">陳宥佐</td>
			<td height="36">An innovative low-cost Classification Scheme for combined multi-Gigabit IP and Ethernet Networks</td>
			<td height="36">2006</td>
			<td>IEEE ICC</td>
			<td>Ioannis Papaefstathiou, Vassilis Papaefstathiou</td>
			<td height="36">
				<a href="group_pdf/[Y2006 ICC]An innovative low-cost Classification Scheme for combined multi-GigabitIP and Ethernet Networks.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/[Y2006 ICC]An innovative low-cost Classification Scheme for combined multi-GigabitIP and Ethernet Networks.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>
		<tr>
			<td height="36">2008/10/08</td>
			<td height="36">李春億</td>
			<td height="36">A Memory-Balanced linear Pipeline Architecture for Trie-Based IP lookup</td>
			<td height="36">2007</td>
			<td>IEEE Symposium on High-Performance Interconnects</td>
			<td>Weirong Jiang, Viktor K. Prasanna</td>
			<td height="36">
				<a href="group_pdf/A Memory-Balanced Linear Pipeline Architecture for Trie-based IP Lookup.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/A Memory-Balanced Linear Pipeline Architecture for Trie-based IP Lookup.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>
		<tr>
			<td height="36">2008/10/08</td>
			<td height="36">張鎮宇</td>
			<td height="36">Database caching in MANETs Based on Separation of Queries and Responses</td>
			<td height="36">2005</td>
			<td height="36">WiMob&#39;</td>
			<td height="36">Socrates Demetriades, Michel Hanna, Sangyeun Cho and Rami Melhem</td>
			<td height="36">
				<a href="group_pdf/Database caching in MANETs Based on Separ.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Database caching in MANETs Based on Separ.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>
		<tr>
			<td height="36">2008/10/01</td>
			<td height="36">林意勝</td>
			<td height="36">Two Stage Packet Classification Using Most Specific Filter Matching And Transport Level Sharing</td>
			<td height="36">2007</td>
			<td height="36">Computer Networks 51</td>
			<td height="36">M.E. Kounavis *, A. Kumar, R. Yavatkar, H. Vin</td>
			<td height="36">
				<a href="group_pdf/Two stage packet classification using most specific filter matching and transport level sharing.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/Two stage packet classification using most specific filter matching and transport level sharing.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>	
		<tr>
			<td height="36">2008/10/01</td>
			<td height="36">江宇平</td>
			<td height="36">A Multipattern Matching Algorithm Using Sampling and Bit Index</td>
			<td height="36">2008</td>
			<td height="36">Computer Systems and Applications, AICCSA.</td>
			<td height="36">Jinhui Chen, Zhongfu Ye, Mn Tang</td>
			<td height="36">
				<a href="group_pdf/A_Multipattern_Matching_Algorithm_Using_Sampling_and_Bit_Index.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/A_Multipattern_Matching_Algorithm_Using_Sampling_and_Bit_Index.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>
		<tr>
			<td height="36">2008/09/24</td>
			<td height="36">林呈俞</td>
			<td height="36">High-Performance TCAM-based IP Lookup Engines</td>
			<td height="36">2008</td>
			<td height="36">INFOCOM</td>
			<td height="36">Hui Yu,&nbsp; Jing Chen,&nbsp; Jianping Wang&nbsp;&nbsp; Zheng, S.Q.</td>
			<td height="36">
				<a href="group_pdf/High-Performance_TCAM-based_IP_Lookup_Engines.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/High-Performance_TCAM-based_IP_Lookup_Engines.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>
		<tr>
			<td height="36">2008/09/17</td>
			<td height="36">丁義偉</td>
			<td height="36">COACS: A Cooperative and Adaptive Caching System for MANETs</td>
			<td height="36">2008</td>
			<td height="36">IEEE TRANSACTIONS ON MOBILE COMPUTING</td>
			<td height="36">Hassan Artail, Haidar Safa, Khaleel Mershad, Zahy Abou-Atme, and Nabeel Sulieman</td>
			<td height="36">
				<a href="group_pdf/COACS_A_Cooperative_and_Adaptive_Caching_System_for_MANETs.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
				<a href="group_ppt/COACS_A_Cooperative_and_Adaptive_Caching_System_for_MANETs.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
			</td>
		</tr>
		<tr>

		<td height="36">2008/09/17</td>

		<td height="36">江宇平</td>
		<td height="36">Multi-terabit ip lookup using parallel bidirectional pipelines</td>
		<td height="36">2008</td>
		<td height="36">ACM, Computing frontiers</td>
		<td height="36">Weirong Jiang, Viktor K. Prasanna</td>
		<td height="36">
			<a href="group_pdf/Multi-terabit_ip_lookup_using_parallel_bidirectional_pipelines.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
			<a href="group_ppt/Multi-terabit_ip_lookup_using_parallel_bidirectional_pipelines.ppt"><img src="img/ppt.gif" border="0" height="20" width="20" /></a>
		</td>

	</tr>
<tr>

		<td height="36">2008/09/02</td>

		<td height="36">郭涵蓁</td>

		<td height="36">
		Parallel-Search Trie-based Scheme for Fast IP Lookup</td>

		<td height="36">
		2007</td>

		<td height="36">
		IEEE GLOBECOM 2007</td>

		<td height="36">Roberto Rojas-Cessa, Lakshmi Ramesh, Ziqian Dong, Lin Cai, and Nirwan 
		Ansari</td>

		<td height="36">
		<a href="group_pdf/Parallel-Search_Trie-based_Scheme_for_Fast_IP_Lookup.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
		<a href="group_ppt/Parallel-Search_Trie-based_Scheme_for_Fast_IP_Lookup.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>
<tr>

		<td height="36">2008/08/26</td>

		<td height="36">蘇正建</td>

		<td height="36">Energy efficient packet classification hardware 
		accelerator</td>

		<td height="36">2008</td>

		<td height="36">IPDPS 2008. IEEE</td>

		<td height="36">Alan Kennedy, Xiaojun Wang and Bin Liu&nbsp;</td>

		<td height="36">
		<a href="group_pdf/Energy_Efficient_Packet_Classification_Hardware_Accelerator.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
		<a href="group_ppt/Energy_Efficient_Packet_Classification_Hardware_Accelerator.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>
<tr>

		<td height="36">2008/08/26</td>

		<td height="36">張凱焯</td>

		<td height="36">Fast Regular Expression Matching using FPGAs</td>

		<td height="36">2001</td>

		<td height="36">FCCM 2001. IEEE</td>

		<td height="36">Reetinder Sidhu and Viktor K. Prasanna</td>

		<td height="36">
		<a href="group_pdf/Energy_Efficient_Packet_Classification_Hardware_Accelerator.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
		<a href="group_ppt/Energy_Efficient_Packet_Classification_Hardware_Accelerator.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>
<tr>

		<td height="36">2008/08/12</td>

		<td height="36">林意勝</td>

		<td height="36">LOW POWER TCAM FORWARDING ENGINE FOR IP PACKETS</td>

		<td height="36">2007</td>

		<td height="36">MILCOM 2007. IEEE</td>

		<td height="36">Mahini, Alireza; Berangi, Reza; Fatemeh, Seyedeh; 
		Firouzabadi, Khatami; Mahini, Hamidreza</td>

		<td height="36">
		<a href="group_pdf/LOW_POWER_TCAM_FORWARDING_ENGINE_FOR_IP_PACKETS.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
		<a href="group_ppt/LOW_POWER_TCAM_FORWARDING_ENGINE_FOR_IP_PACKETS.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>
<tr>

		<td height="36">2008/08/12</td>

		<td height="36">林勇傑</td>

		<td height="36">Fast Packet Classification Using Field-Level Trie</td>

		<td height="36">2003</td>

		<td height="36">IEEE GLOBECOM 2003</td>

		<td height="36">Guansong Zhang and H. Jonathan Chao, and Jinoo Joung</td>

		<td height="36">
		<a href="group_pdf/Fast_Packet_Classiﬁcation_Using_Field-Level_Trie.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a>
		<a href="group_ppt/Fast_Packet_Classiﬁcation_Using_Field-Level_Trie.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>
<tr>

		<td>2008/8/5</td>

		<td>林呈俞</td>

		<td>Performing packet content inspection by longest prefix matching technology</td>

		<td>2007</td>

		<td>IEEE GLOBECOM, 2007</td>

		<td>Nen-Fu Huang, Yen-Ming Chu, Yen-Min Wu and Chia-Wen Ho </td>

		<td><a href="group_pdf/[Y2007]Performing Packet Content Inspection by Longest Prefix Matching Technology.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Performing packet content inspection by longest prefix matching technology.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr><tr>

		<td>2008/8/5</td>

		<td>陳宥佐</td>

		<td>Memory-Efficient 5D Packet Classification At 40 Gbps </td>

		<td>2007</td>

		<td>IEEE INFOCOM 2007 </td>

		<td>Ioannis Papaefstathiou, and Vassilis Papaefstathiou </td>

		<td><a href="group_pdf/Memory-Efficient_5D_Packet_Classification.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Memory-Efficient_5D_Packet_Classification.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>
	<tr>

		<td>2008/7/8</td>

		<td>張凱焯</td>

		<td>FPGA-Based Intrusion Detection System for 10 Gigabit
Ethernet </td>

		<td>2007</td>

		<td>IEICE TRANS. INF. &amp; SYST 2007 </td>

		<td>Toshihiro KATASHITA, Yoshinori YAMAGUCHI, Atusi
MAEDA,and Kenji TODA </td>

		<td><a href="group_pdf/1923.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/0709.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/7/8</td>

		<td>郭芳辰</td>

		<td>High-performance packet classification algorithm for
multithreaded IXP network processor </td>

		<td>2008</td>

		<td>ACM Transactions on Embedded Computing Systems (TECS)
2008 </td>

		<td> Duo Liu, Zheng Chen, Bei Hua, Nenghai Yu, Xinan Tang </td>

		<td><a href="group_pdf/%28TECS_2008%29_High-performance_packet_class.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/20080709.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/7/1</td>

		<td>林意勝</td>

		<td>All-Match Based Complete Redundancy Removal for Packet
Classifiers in TCAMs </td>

		<td>2008</td>

		<td>IEEE INFOCOM 2008 </td>

		<td> Alex X. Liu, Chad R. Meiners, and Yun Zhou </td>

		<td><a href="group_pdf/All-Match%20Based%20Complete%20Redundancy%20Removal%20for%20Packet%20Classifiers%20in%20TCAMs.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/All-Match%20Based%20Complete%20Redundancy%20Removal%20for%20Packet%20Classifiers%20in%20TCAMs.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/7/1</td>

		<td>林呈俞</td>

		<td>DRES:Dynamic Range Encoding Scheme for TCAM
Coprocessors </td>

		<td>2008</td>

		<td>IEEE Transactions on Computers, 2008 </td>

		<td> Hao Che, Zhijun Wang, Kai Zheng and Bin Liu </td>

		<td><a href="group_pdf/%5BY2008%5DDynamic%20Range%20Encoding%20Scheme%20for%20TCAM%20Coprocessors.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Dynamic%20range%20encoding%20scheme%20for%20TCAM%20coprocessors.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/6/10</td>

		<td>張凱焯</td>

		<td>Algorithms for Advanced Packet Classification with
Ternary CAMs </td>

		<td>2008</td>

		<td>sigcomm 2005 </td>

		<td> Karthik Lakshminarayanan Anand Rangarajan Srinivasan
Venkatachary </td>

		<td><a href="group_pdf/paper-LakRan.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/%28Y2008%29Low%20Power%20TCAMs%20For%20Very%20Large%20Forwarding%20Tables.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/6/3</td>

		<td>劉晏誠</td>

		<td>Beyond TCAMs: An SRAM-based Parallel Multi-Pipeline
Architecture for Terabit IP Lookup</td>

		<td>2008</td>

		<td>INFOCOM 2008 </td>

		<td> Weirong Jiang ViktorK.Prasanna</td>

		<td><a href="group_pdf/jiang08infocom.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/alanok.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/5/13</td>

		<td>林意勝</td>

		<td>Low Power TCAMs For Very Large Forwarding Tables</td>

		<td>2008</td>

		<td>INFOCOM 2008 </td>

		<td> Wencheng Lu and Sartaj Sahni</td>

		<td><a href="group_pdf/%28Y2008%29Low%20Power%20TCAMs%20For%20Very%20Large%20Forwarding%20Tables.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/%28Y2008%29Low%20Power%20TCAMs%20For%20Very%20Large%20Forwarding%20Tables.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/5/6</td>

		<td>林呈俞</td>

		<td>Parallel-Search Trie-based Scheme for Fast IP Lookup</td>

		<td>2007</td>

		<td>IEEE Globecom 2007 </td>

		<td> Roberto Rojas-Cessa, Lakshmi Ramesh, Ziqian Dong, Lin
Cai, and Nirwan Ansari</td>

		<td><a href="group_pdf/Parallel-search%20Trie-based%20Scheme%20for%20Fast%20IP%20Lookup.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Parallel%20search%20Trie-based%20Scheme%20for%20Fast%20IP%20Lookup.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/5/6</td>

		<td>陳宥佐</td>

		<td>ReCPU:a Parallel and Pipelined Architecture for Regular
Expression Matching</td>

		<td>2007</td>

		<td>Very Large Scale Integration, 2007 </td>

		<td> Marco Paolieri, Ivano Bonesana, Marco D. Santambrogio</td>

		<td><a href="group_pdf/%5BIFIP-VLSI%202007%5DReCPU_a%20Parallel%20and%20Pipelined%20Architecture%20for%20Regular%20Expression%20Matching.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="%5BIFIP-VLSI%202007%5DReCPU_a%20Parallel%20and%20Pipelined%20Architecture%20for%20Regular%20Expression%20Matching.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/4/22</td>

		<td>吳仲展</td>

		<td>An adaptable FPGA-based System for Regular Expression
Matching</td>

		<td>2008</td>

		<td>IEEE DATE 2008 </td>

		<td> Ivano Bonesana. Marco Paolieri.Marco D.Santambrogio</td>

		<td><a href="group_pdf/04484852.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/An%20adaptable%20FPGA-based%20System%20for%20Regular%20Expression%20Matching.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/4/17</td>

		<td>張士晉</td>

		<td>Principles and Protocols for Power Control in Wireless
Ad Hoc Networks</td>

		<td>2008</td>

		<td>IEEE JOURNAL ON SELECTED AREAS IN COMMUNICATIONS </td>

		<td>Vikas Kawadia and P.R.Kumar </td>

		<td><a href="group_pdf/%5BY2005%5D%5BIJSV%5DPrinciples%20and%20Protocols%20for%20Power%20Control%20in%20Wireless%20Ad%20Hoc%20Networks.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/%5BY2005%5D%5BIJSV%5DPrinciples%20and%20Protocols%20for%20Power%20Control%20in%20Wireless%20Ad%20Hoc%20Networks.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/4/17</td>

		<td>張凱焯</td>

		<td>Scalable Multigigabit Pattern Matching for Packet
Inspection</td>

		<td>2008</td>

		<td>IEEE transactions on VLSI 2008 </td>

		<td>Ioannis Sourdis.Dionosios N.Pnevmatikatos and Stamatis
Vassiliadis</td>

		<td><a href="group_pdf/Scalable%20Multigigabit%20Pattern%20Matching%20for%20Packet%20Inspection.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Scalable%20Multigigabit%20Pattern%20Matching%20for%20Packet%20Inspection.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/3/11</td>

		<td>林意勝</td>

		<td>An Efficient IP Address Lookup Algorithm Using a
Priority Trie</td>

		<td>2006</td>

		<td>IEEE GLOBECOM 2006 </td>

		<td>Hyesook Lim and Ju Hyoung Mun </td>

		<td><a href="group_pdf/An_Efficient_IP_Address_Lookup_Algorithm_.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/An_Efficient_IP_Address_Lookup_Algorithm_.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/3/11</td>

		<td>蔡旻原</td>

		<td>Fei Dai and Jie Wu</td>

		<td>2005</td>

		<td>Parallel and Distributed Processing Symposium,2005.
Proceedings. 19th IEEE International </td>

		<td>M.Nourani and P. Katta</td>

		<td><a href="group_pdf/%5BY2005%5D%5BJDBC%5D%20On%20Constructing%20k-Connected%20k-Dominating%20Set%20in%20Wireless%20Networks.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/%5BY2005%5D%5BJDBC%5D%20On%20Constructing%20k-Connected%20k-Dominating%20Set%20in%20Wireless%20Networks.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/3/4</td>

		<td>林呈俞</td>

		<td>Partition Filter Set for Power-Efficient Packet
Classification</td>

		<td>2006</td>

		<td>IEEE GLOBECOM 2006 </td>

		<td>Haibin Lu, MianPan</td>

		<td><a href="group_pdf/%5BY2006%5DPartition%20Filter%20Set%20for%20Power-Efficient%20Packet%20Classification.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Partition%20Filter%20Set%20for%20Power-Efficient%20Packet%20Classification.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/3/4</td>

		<td>鐘宇儒</td>

		<td>bloom filter accelerator for string matching</td>

		<td>2007</td>

		<td>IEEE ICCCN 2007(international conference on computer
communications and networks) </td>

		<td>M.Nourani and P. Katta</td>

		<td><a href="group_pdf/bloom%20filter%20accelerator%20for%20string%20matching.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/bloom%20filter%20accelerator%20for%20string%20matching.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/2/26</td>

		<td>陳宥佐</td>

		<td>Performance Improvement of Two-Dimensional Packet
Classification by Filter Rephrasing</td>

		<td>2007</td>

		<td>IEEE/ACM TRANSACTIONS ON NETWORKING </td>

		<td>Pi-Chung Wang, Chun-Liang Lee, Chia-Tai Chan, and
Hung-Yi Chang</td>

		<td><a href="group_pdf/%5BTN%202007%5DPerformance%20Improvement%20of%20Two-Dimensional%20Packet%20Classification%20by%20Filter%20Rephrasing.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/%5BTN%202007%5DPerformance%20Improvement%20of%20Two-Dimensional%20Packet%20Classification%20by%20Filter%20Rephrasing.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/1/22</td>

		<td>林勇傑</td>

		<td>Power Efficient IP Lookup with Supernode Caching</td>

		<td>2007</td>

		<td>IEEE GLOBECOM 2007 </td>

		<td>Lu Peng, Wencheng Lu*, and Lide Duan</td>

		<td><a href="group_pdf/Power%20Efficient%20IP%20Lookup%20with%20Supernode%20Caching.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Power_Efficient_IP_Lookup_with_Supernode_.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/1/22</td>

		<td>張凱焯</td>

		<td>FPGA based High speed and low area cost pattern matching</td>

		<td>2005</td>

		<td>TENCON 2005 2005 IEEE Region 10</td>

		<td>Jian Huang, Zongkai Yang, Xu Du, and Wei Liu</td>

		<td><a href="group_pdf/20080122.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/20080122.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2008/1/8</td>

		<td>張凱焯</td>

		<td>An Improved Algorithm to Accelerate Regular Expression
Evaluation</td>

		<td>2007</td>

		<td>ANCS'07</td>

		<td>Michela Becchi and Patrick Crowley</td>

		<td><a href="group_pdf/p145-becchi.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/20080108.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/1/8</td>

		<td>劉晏誠</td>

		<td>A Memory-Balanced Linear Pipeline Architecture for
Trie-based IP Lookup</td>

		<td>2007</td>

		<td>IEEE Symposium on High-Performance Interconnects, 07</td>

		<td>Weirong Jiang ViktorK.Prasanna</td>

		<td><a href="group_pdf/wjiang07hoti.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/A%20Memory-Balanced%20Kinear%20Pipline%20Arichitecture%20for%20Trie-Based%20IP%20lookup.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/12/25</td>

		<td>郭芳辰</td>

		<td>Hybrid cache architecture for high-speed
packet processing</td>

		<td>2007</td>

		<td>Computers &amp; Digital Techniques, IET; Volume 1,
Issue 2, March 2007 Page(s):105 &ndash; 112</td>

		<td>Z. Liu, K. Zheng and B. Liu</td>

		<td><a href="group_pdf/%28IET%20Journal%202007%29%20Hybrid%20cache%20architecture%20for%20high-speed%20packet%20processing.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Hybrid%20cache%20architecture%20for%20high-speed%20packet%20processing.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/12/11</td>

		<td>吳仲展</td>

		<td>A simple fast hybrid pattern-matching algorithm</td>

		<td>2007</td>

		<td>Journal of Discrete Algorithms 2007</td>

		<td>Frantisek Franek, Christopher G. Jennings , W. F. Smyth
		</td>

		<td><a href="group_pdf/%28Elsevier%202007%29%20A%20simple%20fast%20hybrid%20pattern-matching%20algorithm.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/A%20simple%20fast%20hybrid%20pattern-matching%20algorithm.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/11/20</td>

		<td>陳宥佐</td>

		<td>Regular expression matching with input compression：a
hardware design for use within network intrusion detection systems</td>

		<td>2007</td>

		<td>Journal in Computer Virology, 19?March?2007</td>

		<td>Gerald Tripp</td>

		<td><a href="group_pdf/%5BJCV%202007%5DRegular%20expression%20matching%20with%20input%20compression%20a%20hardware%20design%20for%20use%20within%20network%20intrusion%20detection%20systems.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/%5BJCV%202007%5DRegular%20expression%20matching%20with%20input%20compression%20a%20hardware%20design%20for%20use%20within%20network%20intrusion%20detection%20systems.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/11/13</td>

		<td>林呈俞</td>

		<td>Fast Filter Updates for Packet Classification using TCAM</td>

		<td>2006</td>

		<td>GLOBECOM 2006, IEEE</td>

		<td>Haoyu Song, Jonathan Turner</td>

		<td><a href="group_pdf/%5BY2006%5DFast%20filter%20updates%20for%20packet%20classification%20using%20TCAM.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Fast%20Filter%20Updates%20fo%20Packet%20Classification%20using%20TCAM.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/11/13</td>

		<td>何冠穎</td>

		<td>Recursively Partitioned Static IP Router Table</td>

		<td>2007</td>

		<td>ISCC 2007</td>

		<td>Wencheng Lu, Sartaj Sahni </td>

		<td><a href="group_pdf/recursively%20partitioned%20static%20ip%20router%20table.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Recursively%20Partitioned%20Static%20IP%20Router%20Table.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/11/06</td>

		<td>陳宥佐</td>

		<td>Fast and Memory-Efficient Regular Expression Matching
for Deep Packet Inspection</td>

		<td>2006</td>

		<td>ANCS'06, December 3&ndash;5, 2006</td>

		<td>Fang Yu, Zhifeng Chen, Yanlei Diao, T.V. Lakshman and
Randy H. Katz</td>

		<td><a href="group_pdf/%5BANCS%202006%5DFast%20and%20Memory-Efficient%20Regular%20Expression%20Matching%20for%20Deep%20Packet%20Inspection.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/%5BANCS%202006%5DFast%20and%20Memory-Efficient%20Regular%20Expression%20Matching%20for%20Deep%20Packet%20Inspection.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/10/30</td>

		<td>楊淇祿</td>

		<td>Packet classification using diagonal-based tuple space
search</td>

		<td>2006</td>

		<td>Computer Networks 50 (2006) 1831&ndash;1842</td>

		<td>Fu-Yuan Lee , Shiuhpyng Shieh</td>

		<td><a href="group_pdf/2006Packet%20classification%20using%20diagonal-based%20tuple%20space%20search.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Packet%20classification%20using%20diagonal-based%20tuple%20space%20search.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/10/23</td>

		<td>張凱焯</td>

		<td>Two-dimensional packet classification algorithm using a
quad-tree</td>

		<td>2007</td>

		<td>computer communications</td>

		<td>Hyesook Lim,Min Young Kang and Changhoo Yim</td>

		<td><a href="group_pdf/Two-dimensional%20packet%20classification%20algorithm%20using%20a%20quad-tree.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Two-dimensional%20packet%20classification%20algorithm%20using%20a%20quad-tree.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/10/23</td>

		<td>張士晉</td>

		<td>How Optimal are Wireless Scheduling Protocols</td>

		<td>2007</td>

		<td>IEEE INFOCOM 2007</td>

		<td>Thomas Moscibroda, Yvonne Anne Oswald and Roger
Wattenhofer</td>

		<td><a href="group_pdf/How%20Optimal%20are%20Wireless%20Scheduling%20Protocols.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/%5BY2007%5D%5BINFOCOM%5DHow%20Optimal%20are%20Wireless%20Scheduling%20Procotols.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/10/17</td>

		<td>蔡旻原</td>

		<td>Minimum-energy broadcasting in multi-hop wireless
networks using a single broadcast tree</td>

		<td>2006</td>

		<td>Mobile Networks and Applications 11, 361&ndash;375,
2006</td>

		<td>Ioannis Papadimitriou and Leomidas Georgiadis</td>

		<td><a href="group_pdf/%5BY2006%5D%5BMNA%5DMinimum-energy%20broadcasting%20in%20multi-hop%20wireless%20networks%20using%20a%20single%20broadcast%20tree.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/%5BY2006%5D%5BMNA%5DMinimum-energy%20broadcasting%20in%20multi-hop%20wireless%20networks%20using%20a%20single%20broadcast%20tree.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/10/03</td>

		<td>丁義偉</td>

		<td>GroCoca: Group-based Peer-to-Peer Cooperative Caching
in Mobile Environment</td>

		<td>2007</td>

		<td>IEEE JOURNAL ON SELECTED AREAS IN COMMUNICATIONS, VOL.
25, NO. 1, JANUARY 2007</td>

		<td>Chi-Yin,Hong Va Leong,Alvin T. S. Chan</td>

		<td><a href="group_pdf/%5BY2007%5D%20GroCoca%20Group-based%20Peer-to-Peer%20Cooperative%20Caching%20in%20Mobile%20Environment.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/GROCOCA%20Group-based%20peer-to-peer%20cooperative%20caching%20in%20mobile%20environment.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/09/18</td>

		<td>鍾宇儒</td>

		<td>Efficient Memory Utilization on Network Processors for
Deep Packet Inspection</td>

		<td>2006</td>

		<td>ANCS&rsquo;06, December 3&ndash;5, 2006</td>

		<td>Piti Piyachon and Yan Luo</td>

		<td><a href="group_pdf/%5BY2006%5DEfficient%20Memory%20Utilization%20on%20Network%20Processors%20for%20Deep%20Packet%20%09%09%09Inspection.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/Efficient%20Memory%20Utilization%20on%20Network%20Processors%20for%20Deep%20Packet%20Inspection.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/09/11</td>

		<td>何冠穎</td>

		<td>Shape Shifting Tries for Faster IP Route Lookup</td>

		<td>2005</td>

		<td>ICNP 2005</td>

		<td>Haoyu Song, Jonathan Turner, John Lockwood</td>

		<td><a href="group_pdf/Shape%20Shifting%20Tries%20for%20Faster%20IP%20Route%20Lookup.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> </td>

	</tr>

	<tr>

		<td>2007/08/21</td>

		<td>劉晏誠</td>

		<td>A memory-efficient scheme for Address Lookup using
Compact Prefix Tries</td>

		<td>2003</td>

		<td>IEEE INFOCOM '03</td>

		<td>Anand Sarda, Arunabha Sen</td>

		<td><a href="group_pdf/01258969.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/08/15</td>

		<td>吳仲展</td>

		<td>Algorithms to Accelerate Multiple Regular Expressions
Matching for Deep Packet Inspection</td>

		<td>2006</td>

		<td>SIGCOMM'06, September 11-15, 2006</td>

		<td>Sailesh Kumar, Sarang Dharmapurikar, Fang Yu, Patrick
Crowley, Jonathan Turner</td>

		<td><a href="group_pdf/Algorithms%20to%20Accelerate%20Multiple%20Regular%20Expressions%20Matching%20for%20Deep%20Packet%20Inspection.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/08/15</td>

		<td>林勇傑</td>

		<td>A scalable IPv6 route lookup scheme via dynamic
variable-stride bitmap compression and path compression</td>

		<td>2006</td>

		<td>Computer Communications, Volume 29, Issue 16, 12
October 2006, Pages 3037-3050</td>

		<td>Kai Zheng, Zhen Liu and Bin Liu</td>

		<td><a href="group_pdf/ATT00002.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/08/01</td>

		<td>蔡旻原</td>

		<td>Hop Count Distance in Flooding-Based Mobile Ad Hoc
Networks With High Node</td>

		<td>2007</td>

		<td>IEEE TRANSACTIONS ON VEHICULAR TECHNOLOGY, VOL. 56, NO.
3, MAY 2007</td>

		<td>Jia-Chun Kuo, and Wanjiun Liao</td>

		<td><a href="group_pdf/%5BY2007%5D%5BTVT%5DHop%20Count%20Distance%20in%20Flooding-Based%20Mobile%20Ad%20Hoc%20Networks%20With%20High%20Node%20Density.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/08/01</td>

		<td>張士晉</td>

		<td>Pipelined Heap (Priority Queue) Management for Advanced
Scheduling in High-Speed Networks</td>

		<td>2007</td>

		<td>IEEE/ACM Transactions on Networking (ToN), 2007</td>

		<td>Aggelos Ioannou, Manolis Katevenis</td>

		<td><a href="group_pdf/Pipelined%20Heap%20%28Priority%20Queue%29%20Management%20for%20Advanced%20Scheduling%20in%20High-Speed%20Networks.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/07/18</td>

		<td>鍾宇儒</td>

		<td>A Computationally Efficient Engine for Flexible
Intrusion Detection</td>

		<td>2005</td>

		<td>IEEE TRANSACTIONS ON VERY LARGE SCALE INTEGRATION
(VLSI) SYSTEMS, VOL. 13, NO. 10, OCTOBER 2005</td>

		<td>Z.K.Baker, V.K.Prasanna</td>

		<td><a href="group_pdf/a%20computationally%20efficient%20engine%20for%20flexible%20intrusion%20detection.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/06/26</td>

		<td>劉晏誠</td>

		<td>Routing Table Partitioning for Speedy Packet Lookups in
Scalable Routers</td>

		<td>2006</td>

		<td>IEEE TPDS 2006</td>

		<td>Nian-Feng Tzeng</td>

		<td><a href="group_pdf/spal.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/06/12</td>

		<td>何冠穎</td>

		<td>TriBiCa-Trie Bitmap Content Analyzer for High-Speed
Network Intrusion Detection</td>

		<td>2007</td>

		<td>IEEE INFOCOM 2007</td>

		<td>N. Sertac Artan, H. Jonathan Chao</td>

		<td><a href="group_pdf/TriBiCa-%20Trie%20Bitmap%20Content%20Analyzer%20for%20High-Speed%20Network%20Intrusion%20Detection.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/06/05</td>

		<td>吳仲展</td>

		<td>Beyond Bloom Filters: From Approximate Membership
Checks to Approximate State Machines</td>

		<td>2006</td>

		<td>SIGCOMM&rsquo;06, September 11&ndash;15, 2006</td>

		<td>Flavio Bonomi, Michael Mitzenmacher, Rina Panigrahy,
Sushil Singh, George Varghese</td>

		<td><a href="group_pdf/Beyond%20Bloom%20Filters_From%20Approximate%20Membership%20Checks%20to%20Approximate%20State%20Machines.pdf">
		<img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/05/29</td>

		<td>蘇正建</td>

		<td>Multi-pattern Signature Matching for Hardware Network
Intrusion Detection Systems</td>

		<td>2005</td>

		<td>IEEE GLOBECOM 2005</td>

		<td>Haoyu Song, John W. Lockwood</td>

		<td><a href="group_pdf/Multi-pattern_Signature_Matching-Globecom2005-CN-2_3.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/05/15</td>

		<td>蔡旻原</td>

		<td>A Distributed and Efficient Flooding Scheme Using 1-Hop
Information in Mobile Ad Hoc Networks</td>

		<td>2007</td>

		<td>IEEE TRANSACTIONS ON PARALLEL AND DISTRIBUTED SYSTEMS,
VOL. 18, NO. 5, MAY 2007</td>

		<td>Hai Liu, Xiaohua Jia, Peng-Jun Wan, Xinxin Liu, and
Frances F. Yao</td>

		<td><a href="group_pdf/%5BY2007%5D%5BTPDS%5DA%20Distributed%20and%20Efficient%20Flooding%20Scheme%20Using%201-Hop%20Information%20in%20Mobile%20Ad%20Hoc%20Networks.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a> <a href="group_ppt/%5BY2007%5D%5BTPDS%5DA%20Distributed%20and%20Efficient%20Flooding%20Scheme%20Using%201-Hop%20Information%20in%20Mobile%20Ad%20Hoc%20Networks.ppt">
		<img src="img/ppt.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/05/15</td>

		<td>張士晉</td>

		<td>CAMP: Fast and Efficient IP Lookup Architecture</td>

		<td>2006</td>

		<td>ANCS'06, December 3-5, 2006</td>

		<td>Sailesh Kumar, Michela Becchi, Patrick Crowley,
Jonathan Turner</td>

		<td><a href="group_pdf/ancs5139-kumar1.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/05/08</td>

		<td>鍾宇儒</td>

		<td>A Memory-Efficient Parallel String Matching
Architecture for High-Speed Intrusion Detection</td>

		<td>2006</td>

		<td>Digital Object Identifier: 10.1109/JSAC.2006.877221
Oct. 2006 Volume: 24 , Issue: 10 On page(s): 1793 - 1804</td>

		<td>Hongbin LU, Kai Zheng, Bin Liu Xin Zhang, Yunhqo Liu</td>

		<td><a href="group_pdf/a%20memory-efficient%20parallel%20string%20match.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/05/08</td>

		<td>郭芳辰</td>

		<td>O(log W) Multidimensional Packet Classification </td>

		<td>2007</td>

		<td>Networking, IEEE/ACM Transactions on Volume 15, Issue
2, April 2007 Page(s):462 - 472</td>

		<td>Haibin Lu, Sartaj Sahni</td>

		<td><a href="group_pdf/O%28log%20W%29%20Multidimensional%20Packet%20Classification.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/05/01</td>

		<td>劉晏誠</td>

		<td>Two-level Mapping based Cache Index Selection for
Packet Forwarding Engines</td>

		<td>2006</td>

		<td>PACT&rsquo;06, September16 &ndash;20, 2006,
Seattle, Washington, USA6</td>

		<td>Kaushik Rajan, R. Govindarajan</td>

		<td><a href="group_pdf/pact17-rajan2.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/04/24</td>

		<td>丁義偉</td>

		<td>DiCAS: An Efficient Distributed Caching Mechanism for
P2P Systems</td>

		<td>2005</td>

		<td>IEEE TRANSACTIONS ON PARALLEL AND DISTRIBUTED SYSTEMS,
VOL. 17, NO. 10, OCTOBER 2006</td>

		<td>Chen Wang, Li Xiao, Yunhao Liu, Pei Zheng</td>

		<td><a href="group_pdf/%5BY2006%5D%5BTPDS%5D%20DiCAS%20An%20Efficient%20Distributed%20Caching%20Mechanism%20for%20P2P%20Systems.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/04/17</td>

		<td>何冠穎</td>

		<td>Adaptive Data Structures for IP Lookups</td>

		<td>2006</td>

		<td>IEEE INFOCOM '03 / ACM JEA(Journal of Experimental
Algorithmics) '06</td>

		<td>Ioannis Ioannidis, Ananth Grama, Mikhail Atallah</td>

		<td><a href="group_pdf/%5BINFOCOM%20%2703%5DAdaptive%20Data%20Structures%20for%20IP%20Lookups.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/04/10</td>

		<td>林勇傑</td>

		<td>Packet Classification via Improved Space Decomposition
Techniques</td>

		<td>2005</td>

		<td>INFOCOM 2005</td>

		<td>Filippo Geraci, Marco Pellegrini, Paolo Pisati, Luigi
Rizzo</td>

		<td><a href="group_pdf/ATT00052.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/04/03</td>

		<td>吳仲展</td>

		<td>High Speed Pattern Matching for Network IDS/IPS</td>

		<td>2006</td>

		<td>ICNP '06. Proceedings of the 2006 14th IEEE
International Conference</td>

		<td>Mansoor Alicherry, M.Muthuprasanna, Vijay Kumar</td>

		<td><a href="group_pdf/s5a4.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/03/27</td>

		<td>梁晏銘</td>

		<td>Wire Speed Packet Classification Without TCAMs: A Few
More Registers (And A Bit of Logic) Are Enough</td>

		<td>2007</td>

		<td>SIGMETRICS, June 12-16, 2007</td>

		<td>Qunfeng Dong, Suman Banerjee, Jia Wang, Dheeraj Agrawal</td>

		<td><a href="group_pdf/Wire%20Speed%20Packet%20Classification%20Without%20TCAMs%20A%20Few%20More%20Registers%20%28And%20A%20Bit%20of%20Logic%29%20Are%20Enough.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/03/20</td>

		<td>張剴為</td>

		<td>Performance Evaluation and Design Trade-Offs For
Network-on-Chip Interconnect Architectures</td>

		<td>2005</td>

		<td>IEEE TRANSACTIONS ON COMPUTERS, VOL. 54, NO. 8, AUGUST
2005</td>

		<td>Partha Pratim Pande, Cristian Grecu, Andre Ivanov,
Resve Saleh</td>

		<td><a href="group_pdf/%5BY2005%5DPerformance%20Evaluation%20and%20Design%20Trade-Offs%20For%20Network-on-Chip%20Interconnect%20Architectures.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/03/20</td>

		<td>蘇正建</td>

		<td>Implementation of a Content-Scanning Module for an
Internet Firewall</td>

		<td>2003</td>

		<td>Proceedings of the 11th Annual IEEE Symposium on
Field-Programmable Custom Computing Machines(FCCM&rsquo;03)</td>

		<td>James Moscola, John Lockwood, Ronald P. Loui, Michael
Pachos</td>

		<td><a href="group_pdf/%5BY2003%5DImplementation%20of%20a%20Content-Scanning%20Module%20for%20an%20Internet%20Firewall.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/03/06</td>

		<td>蔡明利</td>

		<td>Packet Pre-filtering for Network Intrusion Detection</td>

		<td>2006</td>

		<td>ANCS 2006 December</td>

		<td>Ioannis Sourdis, Vasilis Dimopoulos, Dionisios
Pnevmatikatos, Stamatis Vassiliadis</td>

		<td><a href="group_pdf/%5BY2006%5DPacket%20Pre-filtering%20for%20Network%20Intrusion%20Detection.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/01/30</td>

		<td>黃榮仁</td>

		<td>Scalable Packet Classification Optimization Framework
via Rule Set Pre-Processing</td>

		<td>2006</td>

		<td>Proc. of the 11th IEEE Symposium on Computers and
Communications (ISCC'06)</td>

		<td>Kai Zheng, Zhiyong Liang, Yi Ge</td>

		<td><a href="group_pdf/%5BY2006%5DScalable%20Packet%20Classification%20Optimization%20Framework%20via%20Rule%20Set%20Pre-Processing.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/01/23</td>

		<td>梁晏銘</td>

		<td>Longest Prefix Matching Using Bloom Filters</td>

		<td>2006</td>

		<td>IEEE TRANSACTIONS ON NETWORKING, VOL. 14, NO2, APRIL
2006</td>

		<td>Sarang Dharmapurikar, Praveen Krishnamurthy,and David
E. Taylor</td>

		<td><a href="group_pdf/%5BY2006%5DLongest%20Prefix%20Matching%20Using%20Bloom%20Filters.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/01/16</td>

		<td>郭芳辰</td>

		<td>Evaluating Network Processors using NetBench</td>

		<td>2006</td>

		<td>ACM Transactions on Embedded Computing Systems (TECS)</td>

		<td>GOKHAN MEMIK, WILLIAM H. MANGIONE-SMITH</td>

		<td><a href="group_pdf/%5BY2006%5DEvaluating%20Network%20Processors%20using%20NetBench.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/01/09</td>

		<td>吳仲展</td>

		<td>Efficient Packet Classification for Network Intrusion
Detection using FPGA</td>

		<td>2005</td>

		<td>FPGA&rsquo;05, February 20&ndash;22, 2005</td>

		<td>Haoyu Song, John W. Lockwood</td>

		<td><a href="group_pdf/%5BY2005%5DEfficient%20Packet%20Classification%20for%20Network%20Intrusion%20Detection%20using%20FPGA.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/01/09</td>

		<td>蔡明利</td>

		<td>Scalable IP Lookup for Programmable Routers</td>

		<td>2006</td>

		<td>INFOCOM-2002</td>

		<td>David E. Taylor, John W. Lockwood, Todd S. Sproull,
Jonathan S. Turner, David B. Parlour</td>

		<td><a href="group_pdf/%5BY2006%5DScalable%20IP%20Lookup%20for%20Programmable%20Routers.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/01/02</td>

		<td>丁義偉</td>

		<td>Frame-based Proportional Round-Robin</td>

		<td>2006</td>

		<td>TRANSACTION ON COMPUTERS</td>

		<td>Arnab Sarkar</td>

		<td><a href="group_pdf/%5BY2006%5DFrame-based%20Proportional%20Round-Robin.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2007/01/02</td>

		<td>羅偉恩</td>

		<td>A Single-Cycle Multi-Match Packet Classification Engine
Using TCAMs</td>

		<td>2006</td>

		<td>Symposium on High-Performance Interconnects</td>

		<td>Miad Faezipour and Mehrdad Nourani</td>

		<td><a href="group_pdf/%5BY2006%5DA%20Single-Cycle%20Multi-Match%20Packet%20Classification%20Engine%20Using%20TCAMs.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2006/12/26</td>

		<td>黃榮仁</td>

		<td>High-performance Packet Classification Algorithm for
Many-core and Multithreaded Network Processor</td>

		<td>2006</td>

		<td>Compilers, architecture and synthesis for embedded
systems CASES '06</td>

		<td>Duo Liu, Bei Hua, Xianghui Hu, and Xinan Tang</td>

		<td><a href="group_pdf/%5BY2006%5DHigh-performance%20Packet%20Classification%20Algorithm%20for%20Many-core%20and%20Multithreaded%20Network%20Processor.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td>2006/12/19</td>

		<td>吳仲展</td>

		<td>A FAST ALGORITHM FOR MULTI-PATTERN SEARCHING</td>

		<td>1993</td>

		<td>N/A</td>

		<td>Sun Wu and Udi Manber</td>

		<td><a href="group_pdf/%5BY1993%5DA%20FAST%20ALGORITHM%20FOR%20MULTI-PATTERN%20SEARCHING.pdf"><img src="img/pdf.gif" border="0" height="20" width="20" /></a></td>

	</tr>

	<tr>

		<td></td>

		<td></td>

		<td></td>

		<td></td>

		<td></td>

		<td></td>





		<td></td>

	</tr>

  </tbody>
</table>

</div>

<!-- END #content:main --><!-- BEGIN #content:extra -->
<div id="extra">
<div id="profile-containerb">
<h2>Links</h2>

<div class="xdatablock">
<ul>

    <li><strong class="linearrow">&raquo; </strong><a href="schedule.html">Pattern Match Solution Classification</a>
       <img src="../pics/firstnew.gif" width="18" height="12" /></li>
    <li><strong class="linearrow">&raquo; </strong><a target="_blank" href="upload2018.html">Update List</a></li>
    <li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/presentation/special_topic_course_107.php">Special Topics Presentation List for 2018 Fall</a>
		<img src="../pics/firstnew.gif" width="18" height="12" /></li>
	<li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/presentation/special_topic_course_106_1.php">Special Topics Presentation List for 2017 Fall</a>
    <li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_105_1.html">Special Topics Presentation List for 2016 Fall</a>
	<li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_104_1.html">Special Topics Presentation List for 2015 Fall</a>
	<li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_103_1.html">Special Topics Presentation List for 2014 Fall</a></li>
	<li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_102_1.html">Special Topics Presentation List for 2013 Fall</a></li>
	<li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_101_1.html">Special Topics Presentation List for 2012 Fall</a></li>
    <li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_100_1.html">Special Topics Presentation List for 2011 Fall</a></li>
    <li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_99_1.html">Special Topics Presentation List for 2010 Fall</a></li>
    <li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_98_1.html">Special Topics Presentation List for 2009 Fall</a></li>
    <li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_97_1.html">Special Topics Presentation List for 2008 Fall</a></li>
	<li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/groupmeeting.html">Group Meeting List before 2007</a></li>
	<li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_95_1.html">Special Topics Presentation List for 2006 Fall</a></li>
	<li><strong class="linearrow">&raquo; </strong>
	<a href="http://cial.csie.ncku.edu.tw/special_topic_course_96_1.html">Special Topics Presentation List for 2007 Fall</a></li>

</ul>

</div>

</div>

<div id="profile-container">
<h2>Contact Us</h2>

<div class="xdatablock"> <strong>Address</strong>
<p>No. 1, Ta-Hsueh Road, Tainan,Taiwan 701.</p>

<strong>Office TEL</strong>
<p>886-6-275-7575 Ext.62539</p>

<strong>Lab TEL</strong>
<p>886-6-275-7575 Ext.62500-66</p>

<strong>FAX</strong>
<p>886-6-274-7076</p>

</div>

</div>

</div>

<!-- END #content:extra --> </div>

<!-- END #content --><!-- BEGIN #footer -->
<div id="footer">
<p>Copyright&copy; 2002-2013 <a href="http://www.ncku.edu.tw" title="National Cheng Kung University">NCKU</a> <a href="http://www.csie.ncku.edu.tw" title=" Department of Computer Science and Information Engineering">CSIE</a>
Computer and Internet Architecture Lab. Best view with 1024*768
resolution. Click <a href="mailto:p7695119@mail.ncku.edu.tw">here</a>
if unable to view this page.<br />

Powered by XHTML | CSS.</p>

</div>

<!--END #footer--></div>

<!-- END #container -->
</body>
</html>
