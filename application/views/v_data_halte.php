<?php
	$this->load->view("v_header");
?>

<!-- //view tabel nafigasi// -->

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
						Data Halte
					</li>
				</ol>
			</div>
			<div class="col-md-6 text-right">
			
				<a href="#modal_halte" class="btn btn-default add" data-toggle="modal">
					<span class="glyphicon glyphicon-plus"></span> Tambah
				</a>
				<a href="<?php echo base_url();?>data_halte" class="btn btn-default delete_all" data-toggle="modal">
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
			data Halte telah ada
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
						<th>Nama Halte</th>
						<th>ID Halte</th>
						<th>harga_halte</th>
						<th>Action</th>
					</tr>
				</thead>
			<tbody>
			
			<?php
				$query = $this->data_halte_m->view();
				if($query->num_rows())
				{
					foreach($query->result() as $row)
						{
			?>
			
			<tr>
				<td>
				
					<?php echo $row->nama_halte; ?>
					
					<input type="hidden" value="<?php echo $row->nama_halte; ?>" id="nama_halte_<?php echo $row->id_halte; ?>" />
				</td>
				<td>
				
					<?php echo $row->id_halte; ?>
					
					<input type="hidden" value="<?php echo $row->id_halte; ?>" id="id_halte_<?php echo $row->id_halte; ?>" />
				</td>
				<td>
				
					<?php echo $row->harga_halte; ?>
					
					<input type="hidden" value="<?php echo $row->harga_halte; ?>" id="harga_halte_<?php echo $row->id_halte; ?>" />
				</td>
				
				<td>
					<a href="<?php echo base_url();?>data_halte" class="btn btn-default edit" data-toggle="modal" id="edit_<?php echo $row->id_halte; ?>">
					<span class="glyphicon glyphicon-pencil"></span> Ubah
				</a>
				<a href="" class="btn btn-default delete" data-toggle="modal" id="delete_<?php echo $row->id_halte; ?>">
					<span class="glyphicon glyphicon-trash"></span> Hapus
				</a>
			</td>
		</tr>
		
		<?php
				}
			}
		?>
		
	</tbody>
	<tfoot>
		<tr>
						<th>Nama Halte</th>
						<th>ID Halte</th>
						<th>harga_halte</th>
						<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
