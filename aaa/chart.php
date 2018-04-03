<?php include_once("header.php"); ?>

   <script type="text/javascript">
        function PrintDiv() {
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=1200,height=800');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
    <div class="wrapper">

        <div class="pcontent">
       <div id="divToPrint" >
        	<div class="pbox" style="height:960px; width:100%;">
            <?php
				//print_r($_SESSION);

				@$user_id		=	$_SESSION['id'];
				$outbox		=	$_SESSION['outbox'];
				$ear		=	$_SESSION['ear'];

				$test5		=	$_SESSION['test5'];
				$test6		=	$_SESSION['test6'];
				$test7		=	$_SESSION['test7'];
				$test8		=	$_SESSION['test8'];
				$test9		=	$_SESSION['test9'];
				$test10		=	$_SESSION['test10'];
				$test11		=	$_SESSION['test11'];

				$cal		=	$test7+$test8+$test9;
				$final		=	$cal/3;
				$_SESSION['final']	=	$final;
				$name		=	$_SESSION['name'];
				$age		=	$_SESSION['age'];
				$email		=	$_SESSION['email'];
				$case		=	$_SESSION['case'];
				$date		=	date("Y-m-d");
//$sql="INSERT INTO `tbl_result`(user_id,test_id,average,loss, date) VALUES ('$user_id','$test_id','$average','$loss','$date')";
//$result=mysqli_query($con,$sql1);
?>

            	<form name="form1" action="step13.php" method="post">
                <table width="966" height="278" style="font-size:20px; border:1px solid #CCCCCC; padding:5px;"  cellpadding="0" cellspacing="0">
<tr>
                    	<td height="44" colspan="2" align="center"><b>HEARING ASSESSMENT</b></td>
                  </tr>

                  <tr>
                    	<td height="45"  colspan="2" align="center" style="border-bottom:1px solid #CCCCCC;">Audiogram</td>
                  </tr>
   	  				<tr>
                    	<td width="648" height="30" style="font-size:15px;">Case Name: <?php echo $name; ?></td>
       				  <td width="242"  style="font-size:15px;">Case No: <?php echo $id ?></td>
                  	</tr>
                    <tr>

                    	<td width="648" height="35"  style="font-size:15px;">Age: <?php echo $age; ?></td>

       				  <td width="242"  style="font-size:15px;">Date: <?php echo $date ?></td>
              </tr>

                    <tr
       	  				<td height="64" colspan="2" align="left"  style="border-top:1px solid #CCCCCC;"><?php echo $ear; ?> PTA Average: <?php echo $final;  ?></td>
        </tr>




                  <?php

				  ?>

              <tr>
       	  				<td height="58" colspan="2"  align="left" >Diagnosis: <?php echo "Moderate Hearing Loss"; ?></td>
       	  	  	  </tr>

               <tr>
                    	<td height="44" colspan="2" align="center"> <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<head>
   <script type="text/javascript">
    google.load('visualization', '1.1', {packages: ['line']});
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Frequency (Hz)');
      data.addColumn('number', '');


      data.addRows([
        [8000,  <?php echo $test11; ?>],
        [4000,  <?php echo $test10; ?>],
        [2000,  <?php echo $test9; ?>],
        [1000,  <?php echo $test8; ?>],
        [500,   <?php echo $test7; ?>],
        [250,   <?php echo $test6; ?>],
        [125,   <?php echo $test5; ?>]
      ]);

      var options = {
        chart: {
          title: 'HEARING ASSESSMENT',
          subtitle: 'Audiogram'
        },
        width: 800,
        height: 500,
        axes: {
          x: {
            0: {side: 'bottom'}
          }

        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, options);
    }
  </script>
  <div id="line_top_x"></div></td>
                  </tr>
              </table>
              </form>
               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="button" value="print" onclick="PrintDiv();" class="btn" style="margin-left:30px; margin-top:20px; float:left;" />

<a href="hearing_loss.php" ><input type="button" value="RESULT DETAILS"  class="btn" style="margin-left:30px; margin-top:20px; float:left;">  </a>
              <a href="product.php" ><input type="button" value="BUY HEARING AID"  class="btn" style="margin-left:30px; margin-top:20px; float:left;">  </a>
                  </div>
                  </div>
              </div>


        </div>
    </div>
    </div>
    </div>
    <div class="footer">
    	<div class="wrapper">
        	<div class="qtitle">GET IN TOUCH</div>
            <div class="qcon">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maurissemper eu turpis sed,<br /> mollis vehicula neque. Ut in urna ante. Etiam sit amet arcu ante.</div>
            <div class="footer_menu">
            	<ul>
                	<li><a href="#">ABOUT HEARING</a></li>
                    <li><a href="#">HEARING TEST</a></li>
                    <li><a href="#">HEARING LOSS</a></li>
                    <li><a href="#">HEARING AIDS</a></li>
                    <li><a href="#">HEARING FOCUS</a></li>
                    <li><a href="#">SIGN LANGUAGE</a></li>
                </ul>
            </div>
            <div class="line"></div>
            <div class="copyright">IDEKU © 2017 All Rights Reserved   |   Privacy Policy</div>
        </div>
    </div>
</body>
</html>
