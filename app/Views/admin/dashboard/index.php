<?=$this->extend("layout"); ?>

<?=$this->section("content"); ?>

<?=view('admin/dashboard/subheader'); ?>

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">

	<!--begin::Container-->
	<div class="container-fluid">
		<!--begin::Dashboard-->

		<!--begin::Row-->
		<div class="row">
			<div class="col-lg-12 col-xxl-12">

				<!--begin::Mixed Widget 1-->
				<div class="card card-custom bg-gray-100 card-stretch gutter-b">

					<!--begin::Header-->
					<div class="card-header border-0 bg-danger py-5">
						<h3 class="card-title font-weight-bolder text-white">Dashboard</h3>
					</div>

					<!--end::Header-->

					<!--begin::Body-->
					<div class="card-body p-0 position-relative overflow-hidden">

						<!--begin::Chart-->
						<div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>

						<!--end::Chart-->

						<!--begin::Stats-->
						<div class="card-spacer mt-n25">

							<!--begin::Row-->
							

							<!--end::Row-->

							<!--end::Row-->
						</div>

						<!--end::Stats-->
					</div>

					<!--end::Body-->
				</div>

				<!--end::Mixed Widget 1-->

				

			</div>
			<div class="col-lg-12">
				<div class="card card-custom card-stretch gutter-b">

					<!--begin::Header-->
					<div class="card-header border-0  py-5">
						<h3 class="card-title font-weight-bolder ">Thumbnail Layout</h3>
						<button class="btn btn-light-primary " id="btn-edit"><i class="flaticon2-pen"></i>Edit</button>
						<button class="btn btn-light-danger d-none" id="btn-cancel"><i class="flaticon2-delete"></i>Batal</button>
					</div>

					<!--end::Header-->

					<!--begin::Body-->
					<div class="card-body p-0 position-relative overflow-hidden">
						<form id="form-edit" action="" method="_post" enctype="multipart/form-data" >
							<div class="form-group col-12 mt-4">
								
								<div>
								<div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(/main_thumbnail/image.jpg); width: 100%; height: 500px;">
	 								<div class="image-input-wrapper" style="width: 100%; height: 500px;"></div>

									 <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow d-none" data-action="change" title="Ubah Gambar" id="file">
									  <i class="fa fa-pen icon-sm text-muted"></i>
									  <input type="file" name="file" accept=".png, .jpg, .jpeg"/>
									  <input type="hidden" name="profile_avatar_remove"/>
									 </label>

									 <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Batal Gambar">
									  <i class="ki ki-bold-close icon-xs text-muted"></i>
									 </span>

									 <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Hapus Gambar">
									  <i class="ki ki-bold-close icon-xs text-muted"></i>
									 </span>
									</div>
								</div>
							</div>
							<div class="form-group col-12">
							    <label>Keterangan <span class="text-danger">*</span></label>
							    <input type="text" readonly="true" name="keterangan" class="form-control"  placeholder="Keterangan" id="ket" value="<?=$Thumbnail['keterangan'] ?>" />
							</div>
							<center><button type="hidden" class="btn btn-primary mt-4 mb-4 d-none" id="kt_btn_1">Simpan</button></center>
							
					</form>
					</div>

					<!--end::Body-->
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

<script>
	function toggleEdit() {
		$('#file').toggleClass('d-none');

		$('#ket').attr('readonly') ? $('#ket').attr('readonly',false) : $('#ket').attr('readonly', true);
		$("#kt_btn_1").toggleClass('d-none');
		$("#btn-edit").toggleClass('d-none');
		$("#btn-cancel").toggleClass('d-none');
	}


	$(window).on('load', function () {
		var avatar5 = new KTImageInput('kt_image_5');
		$('#btn-edit').click(function (e) {
			e.preventDefault();
			toggleEdit();

		});
		$('#btn-cancel').click(function (e) {
			e.preventDefault();
			toggleEdit();

		});
	  
	});
	$('#form-edit').submit(function(event) {
				const btn = KTUtil.getById("kt_btn_1");
				event.preventDefault();
				KTUtil.btnWait(btn);
				
				Crud.post('/admin/Dashboard/updateThumb',new FormData(this),(result)=>{
					Dialog.toast(result.type,result.message);
					KTUtil.btnRelease(btn);
					toggleEdit();
				})
			});
	

</script>
<?=$this->endSection(); ?>