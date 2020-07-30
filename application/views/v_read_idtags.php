<?php
	$this->load->view("v_header");
?>
<?php
	$this->load->view("header_tags");
?>



<body>
		<h2 align="center">NodeMCU V3 ESP8266 / NFC with MYSQL Database</h2>

		<br>

		<h3 align="center" id="blink">Please Tag to Display ID or User Data</h3>

		<p id="getUID" hidden></p>

		<br>

		<div id="show_user_data">
			<form>
				<table  width="452" border="1" bordercolor="#10a0c5" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
					<tr>
						<td  height="40" align="center"  bgcolor="#10a0c5"><font  color="#FFFFFF">
							<b>User Data</b>
							</font>
						</td>
					</tr>
					<tr>
						<td  bgcolor="#f9f9f9">
							<table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
								<tr>
									<td width="113" align="left" class="lf">ID</td>
									<td style="font-weight:bold">:</td>
									<td align="left">--------</td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Name penumpang</td>
									<td style="font-weight:bold">:</td>
									<td align="left">--------</td>
								</tr>
								<tr>
									<td align="left" class="lf">nomer hp</td>
									<td style="font-weight:bold">:</td>
									<td align="left">--------</td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Email</td>
									<td style="font-weight:bold">:</td>
									<td align="left">--------</td>
								</tr>
								<tr>
									<td align="left" class="lf">saldo</td>
									<td style="font-weight:bold">:</td>
									<td align="left">--------</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</form>
		</div>

		<script>
			var myVar = setInterval(myTimer, 300);
			var myVar1 = setInterval(myTimer1, 300);
			var oldID="";
			clearInterval(myVar1);

			function myTimer() {
				var getID=document.getElementById("getUID").innerHTML;
				oldID=getID;
				if(getID!="") {
					myVar1 = setInterval(myTimer1, 300);
					showUser(getID);
					clearInterval(myVar);
				}
			}

			function myTimer1() {
				var getID=document.getElementById("getUID").innerHTML;
				if(oldID!=getID) {
					myVar = setInterval(myTimer, 300);
					clearInterval(myVar1);
				}
			}

			function showUser(str) {
				console.log(str);
				$.getJSON(`<?= base_url()?>data_penumpang/get_data/${str}`, baru =>{
					console.log(baru)
				})

			}

			// var blink = document.getElementById('blink');
			// setInterval(function() {
			// 	blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
			// }, 300);
		</script>
	</body>
