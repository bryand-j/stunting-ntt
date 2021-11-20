<?=$this->extend("layout"); ?>

<?=$this->section("content"); ?>

<?=view('profile/subheader'); ?>

<div class="d-flex flex-column-fluid">
	<div class="container-fluid" >

		<!--begin::Row-->
		<div class="row">
			<div class="card card-custom gutter-b col-6">
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-title">
						<h3 class="card-label">Profile
					</div>
				</div>
				<div class="card-body">
			<?php if (session()->getFlashdata('success')) :?>
			<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
		    <div class="alert-icon"><i class="flaticon2-checkmark"></i></div>
		    <div class="alert-text"><?=session()->getFlashdata('success')?></div>
		    <div class="alert-close">
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true"><i class="ki ki-close"></i></span>
		        </button>
		    </div>
			</div>
			<?php endif ?>
			<?php if (session()->getFlashdata('error')) :?>
			<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
		    <div class="alert-icon"><i class="flaticon2-warning"></i></div>
		    <div class="alert-text"><?=session()->getFlashdata('error')?></div>
		    <div class="alert-close">
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true"><i class="ki ki-close"></i></span>
		        </button>
		    </div>
			</div>
			<?php endif ?>
			<form id="form-update" method="post" action="/MyProfile/update">
			<?php $level=session()->get('Level'); ?>
				<input type="hidden" name="id_user" value="<?=$data['id_user']?>">
				<div class="form-group">
				    <label>Username </label>
				    <input type="text" disabled="" value="<?=session()->get('Username') ?>" name="username" class="form-control"  placeholder="Masukan Username" required="" />
				</div>

				<div class="form-group" id="lv">
				    <label>Level</label>
				    <input type="text" name="level" value="<?=session()->get('Level') ?>" disabled class="form-control"  placeholder="Masukan Username" required="" />
				 </div>
			
				<div id="pass" class="d-none">
					<div class="form-group input-icon input-icon-right">
					    <label>Password Lama <span class="text-danger">*</span></label>
					    <input type="password"  name="oldPass" class="form-control"  placeholder="Masukan Password" required=""/>
					    <span id="toggle1">
							<i class="far fa-eye text-muted  "></i>
							<i class="far fa-eye-slash text-muted d-none"></i>
						</span>
					    <p class="form-text text-muted">&nbsp;</p>
					 </div>
					<div class="form-group input-icon input-icon-right">
					    <label>Password Baru <span class="text-danger">*</span></label>
					    <input type="password" value="" name="password" class="form-control"  placeholder="Masukan Password" required=""/>
					    <span id="toggle2">
							<i class="far fa-eye  text-muted  "></i>
							<i class="far fa-eye-slash  text-muted d-none"></i>
						</span>
					    <p class="form-text text-muted">&nbsp;</p>
					</div>
			  	</div>
			  <div id="action" class="d-none">
			  	<a href="" class="btn btn-light-danger mr-3" id="batal">
				    <i class="flaticon2-delete"></i> Batal
				</a>
			
			  	<button type="submit" class="btn btn-primary" id="simpan">
				    <i class="flaticon2-check-mark"></i> Simpan
				</button>
			  </div>
			 </form>
					<!--end: Datatable-->
			<a href="#" class="btn btn-success" id="edit">
			    <i class="flaticon2-pen"></i> Edit Profile
			</a>
			</div>
			</div>
		
		
		</div>
		<!--end::Row-->

	</div>
	<!--end::Container-->

</div>


<!--end::Entry-->
<?= view("partials/_script") ?>
<?= view("partials/_utils/crud") ?>
<script src="/assets/js/pages/crud/datatables/basic/basic1ff3.js?v=7.1.2"></script>
<script>
	$("#edit").click(function(e) {
		$("#edit").hide();
		$("#action").toggleClass('d-none');
		$("#pass").toggleClass('d-none');
		$("#lv").toggleClass('d-none');
		$('input').attr('disabled', false);
	});
</script>
<script>
		$('#toggle1').click(function(event) {
			if ($('[name="oldPass"]').attr('type') =='password') {
				$('[name="oldPass"]').attr('type', 'text');
			} 
			else {
				$('[name="oldPass"]').attr('type', 'password');
			}
			$('#toggle1 .fa-eye ,#toggle1 .fa-eye-slash').toggleClass('d-none');
		});

		$('#toggle2').click(function(event) {
			if ($('[name="Password"]').attr('type') =='password') {
				$('[name="Password"]').attr('type', 'text');
			} 
			else {
				$('[name="Password"]').attr('type', 'password');
			}
			$('#toggle2 .fa-eye , #toggle2 .fa-eye-slash').toggleClass('d-none');
		});
		</script>

<?=$this->endSection(); ?>