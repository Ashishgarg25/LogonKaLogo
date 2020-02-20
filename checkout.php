<?php 

	include_once("conn.php");

	if($_GET["id"] == "sfs363"){
		$Amt = 400;
	  }else if($_GET["id"] == "klr572"){
		$Amt = 600;
	  }else if($_GET["id"] == "gkd981"){
		$Amt = 1000;
	  }else{
		header("Location: http://localhost/LogonKaLogo/plan_india.php"); 
	  }

	 
?>

<form method="post" action="payTm/PayTmKit/pgRedirect.php" >
		<table border="1" style="display:none;">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
						value="<?php echo  "LKL" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $Amt; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<input value="CheckOut" id="ckout" type="submit"	onclick="">
	</form>
	<div class="logo_img noselect">
		<!----<img src="img/img2.png" class="bg_logo animated bounceInDown slow" alt="Logo_img">-->
		<a href="index.php"><img src="img/Logo.png" class="logo animated bounceInUp slow" alt="logo"></a>
	</div>
	<script>
		window.onload = function(){
			document.getElementById("ckout").click();
		}
	</script>