<?php
	$this->load->view("v_header");
?>

<div class="well well-sm">
	<div class="">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb" style="margin-bottom: 0;">
					<li>
						<a href="<?php echo site_url(); ?>/beranda">
							<span class="glyphicon glyphicon-home"></span> Beranda
						</a>
					</li>
					<li class="active">
						Data Penumpang
					</li>
				</ol>
			</div>
			<div class="col-md-6 text-right">

				<a href="#modal_penumpang" class="btn btn-default add" data-toggle="modal">
					<span class="glyphicon glyphicon-plus"></span> Tambah
				</a>
				<a href="#modal_confirm" class="btn btn-default delete_all" data-toggle="modal">
					<span class="glyphicon glyphicon-trash"></span> Hapus Semua
				</a>
				<div class="btn-group">
				<button type="button" class="btn btn-default">Export Data</button>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span></button>
				<ul class="dropdown-menu pull-right text-left" role="menu">
					<li><a href="<?php echo site_url();?>penumpang/report_excel">Excel</a></li>
					<li><a href="<?php echo site_url();?>penumpang/report_pdf">PDF</a></li>
				</ul>
					</div>
			</div>
		</div>
		</div>




</div>
	<div class="panel panel-default">
		<div class="panel-body">

		<?php
			if(!empty($status))
			{
				if($status == "error")
				{
		?>

		<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			data penumpang telah ada
		</div>

		<?php
			}
			else if($status == "save_success")
			{
		?>

		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			Simpan Berhasil
		</div>

		<?php

			}
			else
			{
		?>

		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			Perbaharui Berhasil
		</div>

		<?php
				}
			}
		?>




<!-- // Data View// -->

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Nama Penumpang</th>
						<th>ID</th>
						<th>No HP</th>
						<th>Saldo</th>
						<th>Action</th>
					</tr>
				</thead>
			<tbody id="data">


	</tbody>

				</table>
			</div>
		</div>
	</div>
	<script>
	var myVar = setInterval(myTimer, 1000);
	var myVar1 = setInterval(myTimer1, 1000);
	clearInterval(myVar1);
	function myTimer() {
		// var getID=document.getElementById("getUID").innerHTML;
		// oldID=getID;
		// if(getID!="") {
			myVar1 = setInterval(myTimer1, 500);
			// showUser(getID);
			console.log("ada")
			getData();
			clearInterval(myVar);
		}
		function myTimer1() {
			// var getID=document.getElementById("getUID").innerHTML;
			// if(oldID!=getID) {
				myVar = setInterval(myTimer, 500);
				clearInterval(myVar1);
			// }
		}
	getData();
    function getData() {

    var ajax = new XMLHttpRequest();
    ajax.open("GET", "<?= base_url()?>index.php/data_penumpang/get_data", true);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
				// console.log(data);
        var html = "";
				//
        for (var a = 0; a < data.length; a++) {
            html += "<tr>";
            html += "<td>" + data[a].id_penumpang + "</td>";
            html += "<td>" + data[a].nama_penumpang + "</td>";
            html += "<td>" + data[a].no_hp + "</td>";
            html += "<td>" + data[a].saldo + "</td>";
            html += "<td> </td>";
            html += "</tr>";
        }
				//
            document.getElementById("data").innerHTML = html;
        }
    };
    }

    getData();
</script>
