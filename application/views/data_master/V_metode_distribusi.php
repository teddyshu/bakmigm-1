<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include (APPPATH.'libraries/session_user.php');
// Tools
$is_continue = true;
$count_notification = 0;
$count_news = 0;
// Notification
$get_data_ext = $this->M_notification->GET_NOTIFICATION_NEW($SESSION_ID);
if (empty($get_data_ext)) {
	$is_continue = false;
}else{
	$count_notification = count($get_data_ext);
}
// News
$get_data_count = $this->M_notification->GET_NEWS_NEW($SESSION_ID);
if(empty($get_data_count)||$get_data_count==""){

}else{
	$count_news = count($get_data_count);	
}
// Jumlah Notification
$count_notification = $count_notification + $count_news;
?>
<!DOCTYPE html>
<html lang="en">
<!------------------------------------------------------------------------------------------------->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="X-Content-Type-Options: nosniff, width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<title><?php echo $this->M_library_module->WEB_TITLE; ?></title>
	<meta name="description" content="RL" />
	<meta name="author" content="RL" />
	<link rel="icon" href="<?php echo base_url('template/rion/'.$this->M_library_module->WEB_ICON); ?>" />

	<!-- CSS / JAVA SCRIPT / BOOTSTRAP / ETC -->
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/font-awesome/4.5.0/css/font-awesome.min.css'); ?>" />

	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/jquery-ui.custom.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/jquery.gritter.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/select2.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/bootstrap-editable.min.css'); ?>" />

	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/prettify.min.css'); ?>" />

	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/chosen.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/bootstrap-datepicker3.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/bootstrap-timepicker.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/daterangepicker.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/bootstrap-datetimepicker.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/bootstrap-colorpicker.min.css'); ?>" />

	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/bootstrap-duallistbox.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/bootstrap-multiselect.min.css'); ?>" />

	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/fonts.googleapis.com.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style'); ?>" />
	<!--[if lte IE 9]>
		<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/ace-part2.min.css" class="ace-main-stylesheet'); ?>" />
	<![endif]-->
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/ace-skins.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/ace-rtl.min.css'); ?>" />
	<!--[if lte IE 9]>
	  <link rel="stylesheet" href="<?php echo base_url('template/backend/assets/css/ace-ie.min.css'); ?>" />
	<![endif]-->
	<script src="<?php echo base_url('template/backend/assets/js/ace-extra.min.js'); ?>"></script>
	<!--[if lte IE 8]>
	<script src="<?php echo base_url('template/backend/assets/js/html5shiv.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/respond.min.js'); ?>"></script>
	<![endif]-->
</head>
<!------------------------------------------------------------------------------------------------->
<body class="no-skin">
	<!------------------------------------------------------------------------------------------------->
	<!-- CONTENT -->
	<div id="navbar" class="navbar navbar-default ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<a href="<?php echo base_url('C_index'); ?>" class="navbar-brand">
					<small>
						<img class="nav-user-photo" src="<?php echo base_url('template/backend/assets/images/avatars/logo.png'); ?>" />
					</small>
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<!-- no content -->
			</div>
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>

		<div id="sidebar" class="sidebar responsive ace-save-state">
			<script type="text/javascript">
				try{ace.settings.loadState('sidebar')}catch(e){}
			</script>

			<div id="user-profile-1" class="user-profile row">
				<div class="col-12 center">
					<span class="profile-picture">
						<img id="avatar" class="editable img-responsive" src="<?php echo base_url('template/backend/assets/images/avatars/profile-pic.jpg'); ?>" />
					</span>
					<br />
					<i class="menu-icon fa fa-user"></i>
					<span class="menu-text">
						<?php echo $SESSION_NAME; ?>
					</span>
					<br />
				</div>
			</div>

			<ul class="nav nav-list">

				<li class="">
					<a href="<?php echo base_url('menu'); ?>">
						<i class="menu-icon fa fa-history"></i>
						<span class="menu-text"> Pencarian </span>
					</a>
					<b class="arrow"></b>
				</li>
				
				<li class="">
					<a href="<?php echo base_url('bookmarks'); ?>">
						<i class="menu-icon fa fa-bookmark"></i>
						<span class="menu-text"> Favorit </span>
					</a>
					<b class="arrow"></b>
				</li>
				
				<?php if(
				$SESSION_ROLES=="PENGGUNA"||
				$SESSION_ROLES=="PENCIPTA"||
				$SESSION_ROLES=="PENDISTRIBUSI"||
				$SESSION_ROLES=="ATASAN PENCIPTA" ||

				$SESSION_ROLES_2=="PENGGUNA"||
				$SESSION_ROLES_2=="PENCIPTA"||
				$SESSION_ROLES_2=="PENDISTRIBUSI"||
				$SESSION_ROLES_2=="ATASAN PENCIPTA" ||

				$SESSION_ROLES_3=="PENGGUNA"||
				$SESSION_ROLES_3=="PENCIPTA"||
				$SESSION_ROLES_3=="PENDISTRIBUSI"||
				$SESSION_ROLES_3=="ATASAN PENCIPTA" ||

				$SESSION_ROLES_4=="PENGGUNA"||
				$SESSION_ROLES_4=="PENCIPTA"||
				$SESSION_ROLES_4=="PENDISTRIBUSI"||
				$SESSION_ROLES_4=="ATASAN PENCIPTA" ||

				$SESSION_ROLES_5=="PENGGUNA"||
				$SESSION_ROLES_5=="PENCIPTA"||
				$SESSION_ROLES_5=="PENDISTRIBUSI"||
				$SESSION_ROLES_5=="ATASAN PENCIPTA"
				){ ?>
				<li class="">
					<a href="<?php echo base_url('notification'); ?>">
						<i class="menu-icon fa fa-exclamation"></i>
						<span class="menu-text">
							Aktifitas
							<span class="badge badge-primary nofication-count"></span>
						</span>
					</a>
					<b class="arrow"></b>
				</li>
				<?php } ?>
				
				<?php if(
				$SESSION_ROLES=="PENCIPTA" ||
				$SESSION_ROLES_2=="PENCIPTA" ||
				$SESSION_ROLES_3=="PENCIPTA" ||
				$SESSION_ROLES_4=="PENCIPTA" ||
				$SESSION_ROLES_5=="PENCIPTA"
				){ ?>
				<li class="">
					<a href="<?php echo base_url('contribution'); ?>">
						<i class="menu-icon fa fa-database"></i>
						<span class="menu-text"> Kontribusi </span>
					</a>
					<b class="arrow"></b>
				</li>
				<?php } ?>
				
				<?php if(
				$SESSION_ROLES=="PENCIPTA"||
				$SESSION_ROLES=="ADMIN DOKUMEN"||

				$SESSION_ROLES_2=="PENCIPTA"||
				$SESSION_ROLES_2=="ADMIN DOKUMEN"||

				$SESSION_ROLES_3=="PENCIPTA"||
				$SESSION_ROLES_3=="ADMIN DOKUMEN"||

				$SESSION_ROLES_4=="PENCIPTA"||
				$SESSION_ROLES_4=="ADMIN DOKUMEN"||

				$SESSION_ROLES_5=="PENCIPTA"||
				$SESSION_ROLES_5=="ADMIN DOKUMEN"
				){ ?>
				<li class="">
					<a href="<?php echo base_url('report'); ?>">
						<i class="menu-icon fa fa-database"></i>
						<span class="menu-text"> Laporan </span>
					</a>
					<b class="arrow"></b>
				</li>
				<?php } ?>

				<?php if(
				$SESSION_ROLES=="ADMIN KONFIGURASI"||
				$SESSION_ROLES_2=="ADMIN KONFIGURASI"||
				$SESSION_ROLES_3=="ADMIN KONFIGURASI"||
				$SESSION_ROLES_4=="ADMIN KONFIGURASI"||
				$SESSION_ROLES_5=="ADMIN KONFIGURASI"
				){ ?>
				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-cog"></i>
						<span class="menu-text"> Setting </span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="">
							<a href="<?php echo base_url('C_setting_data_master'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Data Master
							</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="<?php echo base_url('C_setting_structure_organization'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Struktur Organisasi
							</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="<?php echo base_url('C_setting_user'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								User
							</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="<?php echo base_url('C_setting_structure_document'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Struktur Dokumen
							</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="<?php echo base_url('C_setting_business_rule'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Aturan Bisnis
							</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="<?php echo base_url('C_setting_document_level_access'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Tingkat Akses Dokumen
							</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-cog"></i>
						<span class="menu-text">General Setting </span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="">
							<a href="<?php echo base_url('C_general_setting/welcome_speech'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Welcome Speech
							</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="<?php echo base_url('C_general_setting/nomor'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Nomor Dokumen
							</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="<?php echo base_url('C_general_setting/format_dokumen'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Format Dokumen
							</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="<?php echo base_url('C_general_setting/sharelink'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Sharelink
							</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="<?php echo base_url('C_general_setting/watermark'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Watermark
							</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<?php } ?>

				<li class="">
					<a href="<?php echo base_url('C_menu/logout'); ?>">
						<i class="menu-icon fa fa-power-off"></i>
						<span class="menu-text"> Keluar </span>
					</a>
					<b class="arrow"></b>
				</li>

			</ul><!-- /.nav-list -->
		</div>

		<div class="main-content">
			<div class="main-content-inner">
				<div class="page-content">
					<!------------------------------------------------------------------------------------------------->
					<!-- PAGE CONTENT BEGINS -->
					<!------------------------------------------------------------------------------------------------->
					<div class="row">
						<div class="alert alert-info" style="margin-bottom:0px;">
							Metode Distribusi
						</div>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover" style="cursor:pointer">
							<thead>
								<tr>
									<th>No</th>
									<th>ID</th>
									<th>Nama</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$is_continue = true;
								$no = 1;
								$get_data = $this->M_admin_setting->GET_METHODE_DISTRIBUTION();
								if(empty($get_data)||$get_data==""){
									$is_continue = false;
								}
								?>
								
								<?php
								if($is_continue){
									foreach($get_data as $data_row){
								?>
								<tr data-toggle="modal" data-target="#modal-edit<?= $data_row->DNMD_ID; ?>">
									<td><?= $no; ?></td>
									<td><?php echo $data_row->DNMD_ID; ?></td>
									<td><?php echo $data_row->DNMD_NAME; ?></td>
								</tr>
								<?php
								 $no++;
									}
								}
								?>
								
							</tbody>
						</table>
						<div class="alert alert-info" style="margin-bottom:0;">
							<a class="btn btn-success" href="#" onclick="window.history.back();">Back</a>
						</div>
					</div>
					<!------------------------------------------------------------------------------------------------->
					<!-- PAGE CONTENT ENDS -->
					<!------------------------------------------------------------------------------------------------->
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->

	<!-- MODAL VIEW EDIT -->
	<?php
		$view = $this->M_admin_setting->GET_METHODE_DISTRIBUTION();
		foreach ($view as $view):
	?>
	<div id="modal-edit<?= $view->DNMD_ID ?>" class="modal" tabindex="-1">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="blue bigger">Update Data</h5>
				</div>
				<form method="POST" action="<?= base_url('C_setting_data_master/update') ?>" class="form-horizontal">
				<div class="modal-body" style="margin: 0 15px">
					<div class="row">
						<input type="hidden" name="tipe" value="Metode Distribusi">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="form-group">
								<label for="id">ID :</label>
								<input readonly type="text" name="id" id="id" class="form-control" value="<?= $view->DNMD_ID; ?>">
							</div>
							<div class="form-group">
								<label for="nama">Nama :</label>
								<input type="text" name="nama" id="nama" class="form-control" value="<?= $view->DNMD_NAME; ?>" required>
							</div>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- body -->
				<div class="modal-footer">
					<a href="<?= base_url('C_setting_data_master/delete/MD/'.$view->DNMD_ID); ?>" class="btn btn-danger btn-sm" style="float:left;">Hapus</a>
					<button type="submit" class="btn btn-success btn-sm">Update</button>
				</div><!-- footer -->
				</form>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
	<!-- END MODAL VIEW EDIT -->
	<!------------------------------------------------------------------------------------------------->
	<!-- JAVA SCRIPT / BOOTSTRAP / ETC -->
	<!--[if !IE]> -->
	<script src="<?php echo base_url('template/backend/assets/js/jquery-2.1.4.min.js'); ?>"></script>
	<!-- <![endif]-->
	<!--[if IE]>
	<script src="<?php echo base_url('template/backend/assets/js/jquery-1.11.3.min.js'); ?>"></script>
	<![endif]-->
	<script type="text/javascript">
		if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('template/backend/assets/js/jquery.mobile.custom.min.js'); ?>'>"+"<"+"/script>");
	</script>
	<script src="<?php echo base_url('template/backend/assets/js/bootstrap.min.js'); ?>"></script>

	<!--[if lte IE 8]>
	  <script src="<?php echo base_url('template/backend/assets/js/excanvas.min.js'); ?>"></script>
	<![endif]-->
	<script src="<?php echo base_url('template/backend/assets/js/jquery-ui.custom.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/jquery.ui.touch-punch.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/jquery.gritter.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/bootbox.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/jquery.easypiechart.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/bootstrap-datepicker.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/jquery.hotkeys.index.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/bootstrap-wysiwyg.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/select2.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/spinbox.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/bootstrap-editable.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/ace-editable.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/jquery.maskedinput.min.js'); ?>"></script>

	<script src="<?php echo base_url('template/backend/assets/js/prettify.min.js'); ?>"></script>

	<script src="<?php echo base_url('template/backend/assets/js/chosen.jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/bootstrap-timepicker.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/moment.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/daterangepicker.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/bootstrap-datetimepicker.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/bootstrap-colorpicker.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/jquery.knob.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/autosize.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/jquery.inputlimiter.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/bootstrap-tag.min.js'); ?>"></script>

	<script src="<?php echo base_url('template/backend/assets/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/jquery.dataTables.bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/dataTables.buttons.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/buttons.flash.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/buttons.html5.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/buttons.print.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/buttons.colVis.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/dataTables.select.min.js'); ?>"></script>

	<script src="<?php echo base_url('template/backend/assets/js/jquery.bootstrap-duallistbox.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/jquery.raty.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/bootstrap-multiselect.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/jquery-typeahead.js'); ?>"></script>

	<script src="<?php echo base_url('template/backend/assets/js/ace-elements.min.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/ace.min.js'); ?>"></script>

	<script src="<?php echo base_url('template/rion/jquery_costum.js'); ?>"></script>
	<script src="<?php echo base_url('template/backend/assets/js/sweetalert.min.js'); ?>"></script>
	<?php if ($pesan = $this->session->flashdata('pesan')): ?>
	<script>
		swal("Berhasil!", "<?= $pesan; ?>", "success");
	</script>
	<?php endif; ?>
	<?php if ($pesan_gagal = $this->session->flashdata('pesan_gagal')): ?>
	<script>
		swal("Gagal!", "<?= $pesan_gagal; ?>", "error");
	</script>
	<?php endif; ?>
	
	<script type="text/javascript">
		jQuery(function($) {
			//------------------------------------------------------------------------------------------------//
			//------------------------------------------------------------------------------------------------//
			//------------------------------------------------------------------------------------------------//
			$('#avatar').on('click', function(){
				var modal = 
				'<div class="modal fade">\
				  <div class="modal-dialog">\
				   <div class="modal-content">\
					<div class="modal-header">\
						<button type="button" class="close" data-dismiss="modal">&times;</button>\
						<h4 class="blue">Change Avatar</h4>\
					</div>\
					\
					<form class="no-margin">\
					 <div class="modal-body">\
						<div class="space-4"></div>\
						<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
					 </div>\
					\
					 <div class="modal-footer center">\
						<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
						<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
					 </div>\
					</form>\
				  </div>\
				 </div>\
				</div>';
				
				var modal = $(modal);
				modal.modal("show").on("hidden", function(){
					modal.remove();
				});
			
				var working = false;
			
				var form = modal.find('form:eq(0)');
				var file = form.find('input[type=file]').eq(0);
				file.ace_file_input({
					style:'well',
					btn_choose:'Click to choose new avatar',
					btn_change:null,
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'small',
					before_remove: function() {
						//don't remove/reset files while being uploaded
						return !working;
					},
					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
				});
			
				form.on('submit', function(){
					if(!file.data('ace_input_files')) return false;
					
					file.ace_file_input('disable');
					form.find('button').attr('disabled', 'disabled');
					form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
					
					var deferred = new $.Deferred;
					working = true;
					deferred.done(function() {
						form.find('button').removeAttr('disabled');
						form.find('input[type=file]').ace_file_input('enable');
						form.find('.modal-body > :last-child').remove();
						
						modal.modal("hide");
			
						var thumb = file.next().find('img').data('thumb');
						if(thumb) $('#avatar').get(0).src = thumb;
			
						working = false;
					});
					
					setTimeout(function(){
						deferred.resolve();
					} , parseInt(Math.random() * 800 + 800));
			
					return false;
				});
			});

			$.ajax({
        type: "GET",
        url: "<?php echo base_url();?>C_notification/getNotification/<?php echo $this->session->userdata("session_bgm_edocument_id");?>/true/",             
        dataType: "html",   //expect html to be returned                
        success: function(response){
					$(".nofication-count").text(JSON.parse(response).length);
        }
			});

			window.prettyPrint && prettyPrint();
			$('#id-check-horizontal').removeAttr('checked').on('click', function(){
				$('#dt-list-1').toggleClass('dl-horizontal').prev().html(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
			});

			$('#id-disable-check').on('click', function() {
				var inp = $('#form-input-readonly').get(0);
				if(inp.hasAttribute('disabled')) {
					inp.setAttribute('readonly' , 'true');
					inp.removeAttribute('disabled');
					inp.value="This text field is readonly!";
				}
				else {
					inp.setAttribute('disabled' , 'disabled');
					inp.removeAttribute('readonly');
					inp.value="This text field is disabled!";
				}
			});
			
			if(!ace.vars['touch']) {
				$('.chosen-select').chosen({allow_single_deselect:true}); 
			
				$(window)
				.off('resize.chosen')
				.on('resize.chosen', function() {
					$('.chosen-select').each(function() {
						 var $this = $(this);
						 $this.next().css({'width': $this.parent().width()});
					})
				}).trigger('resize.chosen');
				//resize chosen on sidebar collapse/expand
				$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
					if(event_name != 'sidebar_collapsed') return;
					$('.chosen-select').each(function() {
						 var $this = $(this);
						 $this.next().css({'width': $this.parent().width()});
					})
				});
			
				$('#chosen-multiple-style .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			}
			
			$('[data-rel=tooltip]').tooltip({container:'body'});
			$('[data-rel=popover]').popover({container:'body'});
			
			autosize($('textarea[class*=autosize]'));
			
			$('textarea.limited').inputlimiter({
				remText: '%n character%s remaining...',
				limitText: 'max allowed : %n.'
			});
			
			$.mask.definitions['~']='[+-]';
			$('.input-mask-date').mask('99/99/9999');
			$('.input-mask-phone').mask('(999) 999-9999');
			$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
			$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			$( "#input-size-slider" ).css('width','200px').slider({
				value:1,
				range: "min",
				min: 1,
				max: 8,
				step: 1,
				slide: function( event, ui ) {
					var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
					var val = parseInt(ui.value);
					$('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
				}
			});
			
			$( "#input-span-slider" ).slider({
				value:1,
				range: "min",
				min: 1,
				max: 12,
				step: 1,
				slide: function( event, ui ) {
					var val = parseInt(ui.value);
					$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
				}
			});
			
			$( "#slider-range" ).css('height','200px').slider({
				orientation: "vertical",
				range: true,
				min: 0,
				max: 100,
				values: [ 17, 67 ],
				slide: function( event, ui ) {
					var val = ui.values[$(ui.handle).index()-1] + "";
			
					if( !ui.handle.firstChild ) {
						$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
						.prependTo(ui.handle);
					}
					$(ui.handle.firstChild).show().children().eq(1).text(val);
				}
			}).find('span.ui-slider-handle').on('blur', function(){
				$(this.firstChild).hide();
			});
			
			$( "#slider-range-max" ).slider({
				range: "max",
				min: 1,
				max: 10,
				value: 2
			});
			
			$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
				// read initial values from markup and remove that
				var value = parseInt( $( this ).text(), 10 );
				$( this ).empty().slider({
					value: value,
					range: "min",
					animate: true
					
				});
			});
			
			$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
			$('#id-input-file-1 , #id-input-file-2').ace_file_input({
				no_file:'No File ...',
				btn_choose:'Choose',
				btn_change:'Change',
				droppable:false,
				onchange:null,
				thumbnail:false
			});
			
			$('#id-input-file-3').ace_file_input({
				style: 'well',
				btn_choose: 'Drop files here or click to choose',
				btn_change: null,
				no_icon: 'ace-icon fa fa-cloud-upload',
				droppable: true,
				thumbnail: 'small',
				preview_error : function(filename, error_code) {
				}
			
			}).on('change', function(){
			});
			if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
			 icons: {
				time: 'fa fa-clock-o',
				date: 'fa fa-calendar',
				up: 'fa fa-chevron-up',
				down: 'fa fa-chevron-down',
				previous: 'fa fa-chevron-left',
				next: 'fa fa-chevron-right',
				today: 'fa fa-arrows ',
				clear: 'fa fa-trash',
				close: 'fa fa-times'
			 }
			}).next().on(ace.click_event, function(){
				$(this).prev().focus();
			});
			
			$('#colorpicker1').colorpicker();
			
			$('#simple-colorpicker-1').ace_colorpicker();
			
			$(".knob").knob();
			
			var tag_input = $('#form-field-tags');
			try{
				tag_input.tag(
				  {
					placeholder:tag_input.attr('placeholder'),
					source: ace.vars['US_STATES']
				  }
				)
			
				var $tag_obj = $('#form-field-tags').data('tag');
				$tag_obj.add('Programmatically Added');
				
				var index = $tag_obj.inValues('some tag');
				$tag_obj.remove(index);
			}
			catch(e) {
				tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
			}
			
			$('#modal-form input[type=file]').ace_file_input({
				style:'well',
				btn_choose:'Drop files here or click to choose',
				btn_change:null,
				no_icon:'ace-icon fa fa-cloud-upload',
				droppable:true,
				thumbnail:'large'
			});
			
			$('#modal-form').on('shown.bs.modal', function () {
				if(!ace.vars['touch']) {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				}
			});
			
			$(document).one('ajaxloadstart.page', function(e) {
				autosize.destroy('textarea[class*=autosize]')
				
				$('.limiterBox,.autosizejs').remove();
				$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
			});

			var myTable = $('#dynamic-table')
			.DataTable( {
				AutoWidth: false,
				"aaSorting": [],
				select: {
					style: 'single'
				}
			});
			
			$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
			
			new $.fn.dataTable.Buttons( myTable, {
				buttons: [
				  {
					"extend": "colvis",
					"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
					"className": "btn btn-white btn-primary btn-bold",
					columns: ':not(:first):not(:last)'
				  },
				  {
					"extend": "copy",
					"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
					"className": "btn btn-white btn-primary btn-bold"
				  },
				  {
					"extend": "csv",
					"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
					"className": "btn btn-white btn-primary btn-bold"
				  },
				  {
					"extend": "excel",
					"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
					"className": "btn btn-white btn-primary btn-bold"
				  },
				  {
					"extend": "pdf",
					"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
					"className": "btn btn-white btn-primary btn-bold"
				  },
				  {
					"extend": "print",
					"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
					"className": "btn btn-white btn-primary btn-bold",
					autoPrint: false,
					message: 'This print was produced using the Print button for DataTables'
				  }		  
				]
			} );
			myTable.buttons().container().appendTo( $('.tableTools-container') );
			
			//style the message box
			var defaultCopyAction = myTable.button(1).action();
			myTable.button(1).action(function (e, dt, button, config) {
				defaultCopyAction(e, dt, button, config);
				$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
			});
			
			var defaultColvisAction = myTable.button(0).action();
			myTable.button(0).action(function (e, dt, button, config) {
				
				defaultColvisAction(e, dt, button, config);
				
				
				if($('.dt-button-collection > .dropdown-menu').length == 0) {
					$('.dt-button-collection')
					.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
					.find('a').attr('href', '#').wrap("<li />")
				}
				$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
			});

			setTimeout(function() {
				$($('.tableTools-container')).find('a.dt-button').each(function() {
					var div = $(this).find(' > div').first();
					if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
					else $(this).tooltip({container: 'body', title: $(this).text()});
				});
			}, 500);
			
			myTable.on( 'select', function ( e, dt, type, index ) {
				if ( type === 'row' ) {
					$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
				}
			} );
			myTable.on( 'deselect', function ( e, dt, type, index ) {
				if ( type === 'row' ) {
					$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
				}
			} );			

			$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
			

			$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
				var th_checked = this.checked;//checkbox inside "TH" table header
				
				$('#dynamic-table').find('tbody > tr').each(function(){
					var row = this;
					if(th_checked) myTable.row(row).select();
					else  myTable.row(row).deselect();
				});
			});
			

			$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
				var row = $(this).closest('tr').get(0);
				if(this.checked) myTable.row(row).deselect();
				else myTable.row(row).select();
			});
					
			$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
				e.stopImmediatePropagation();
				e.stopPropagation();
				e.preventDefault();
			});
			var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({infoTextFiltered: '<span class="label label-purple label-lg">Filtered</span>'});
			var container1 = demo1.bootstrapDualListbox('getContainer');
			container1.find('.btn').addClass('btn-white btn-info btn-bold');

			$('.rating').raty({
				'cancel' : true,
				'half': true,
				'starType' : 'i'
			});

			$('.select2').css('width','200px').select2({allowClear:true})
			$('#select2-multiple-style .btn').on('click', function(e){
				var target = $(this).find('input[type=radio]');
				var which = parseInt(target.val());
				if(which == 2) $('.select2').addClass('tag-input-style');
				 else $('.select2').removeClass('tag-input-style');
			});

			$('.multiselect').multiselect({
			 enableFiltering: true,
			 enableHTML: true,
			 buttonClass: 'btn btn-white btn-primary',
			 templates: {
				button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span> &nbsp;<b class="fa fa-caret-down"></b></button>',
				ul: '<ul class="multiselect-container dropdown-menu"></ul>',
				filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
				filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
				li: '<li><a tabindex="0"><label></label></a></li>',
			    divider: '<li class="multiselect-item divider"></li>',
			    liGroup: '<li class="multiselect-item multiselect-group"><label></label></li>'
			 }
			});

			var substringMatcher = function(strs) {
				return function findMatches(q, cb) {
					var matches, substringRegex;
					matches = [];
					substrRegex = new RegExp(q, 'i');
					$.each(strs, function(i, str) {
						if (substrRegex.test(str)) {
							matches.push({ value: str });
						}
					});
			
					cb(matches);
				}
			 }
			
			 $('input.typeahead').typeahead({
				hint: true,
				highlight: true,
				minLength: 1
			 }, {
				name: 'states',
				displayKey: 'value',
				source: substringMatcher(ace.vars['US_STATES']),
				limit: 10
			 });
				
			//in ajax mode, remove remaining elements before leaving page
			$(document).one('ajaxloadstart.page', function(e) {
				$('[class*=select2]').remove();
				$('select[name="duallistbox_demo1[]"]').bootstrapDualListbox('destroy');
				$('.rating').raty('destroy');
				$('.multiselect').multiselect('destroy');
			});
		});
	</script>
</body>
</html>