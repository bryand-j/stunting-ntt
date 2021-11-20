<?=$this->extend("layout"); ?>

<?=$this->section("content"); ?>

<?=view('admin/profile/subheader'); ?>

<div class="d-flex flex-column-fluid">
  <div class="container-fluid" >

    <!--begin::Row-->
    <div class="row">
      <div class="card card-custom gutter-b col-12">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
          <div class="card-title">
            <h3 class="card-label">Data <?=$title ?> 
            </h3>
          </div>
        </div>
        <div class="card-body">
        <form id="edit-form"  action="" method="_post"> 
        <div class="row">       
		      <div class="col-12 col-lg-8 ">
		      	<div class="row">
						  <div class="form-group col-12 ">
						    <label>Nama Instansi</label>
						    <input type="text" value="<?=$data['nama_profil']?>" name="nama_profil" class="form-control" required="" />
						  </div>

						  <div class="form-group col-12 ">
						    <label>Alamat</label>
						    <textarea name="alamat" class="form-control"><?=$data['alamat']?></textarea>
						  </div>
						  <div class="form-group col-6">
						    <label>Kontak 1</label>
						    <input type="text" value="<?=$data['kontak1']?>" name="kontak1" class="form-control" required="" />
						  </div>
						  <div class="form-group col-6">
						    <label>Kontak 2</label>
						    <input type="text" value="<?=$data['kontak2']?>" name="kontak2" class="form-control" required="" />
						  </div>
						  <div class="form-group col-6">
						    <label>Email</label>
						    <input type="text" value="<?=$data['email']?>" name="email" class="form-control" required="" />
						  </div>
						  <div class="form-group col-6">
						    <label>Youtube</label>
						    <input type="text" value="<?=$data['youtube']?>" name="youtube" class="form-control" required="" />
						  </div>
						  
					  </div>
		      </div>
		      <div class="col-12 col-lg-4">
		      	<div class="form-group">
							<label class="">Logo</label>
							<div>
							<div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(/logo/<?=$data['logo']?>); width: 100%; height: 300px;">
 								<div class="image-input-wrapper" style="width: 100%;  height: 300px;"></div>

								 <label class="ubah d-none btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" title="Ubah Foto">
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
	        </div>
	        <div class="form-group col-12">
				    <label>Latar Belakang</label>
				    <textarea rows="5" name="latar_belakang" class="form-control summernote"><?=$data['latar_belakang']?></textarea>
				  </div>
				  <div class="form-group col-12">
				    <label>Regulasi</label>
				    <textarea rows="5" name="regulasi" class="form-control summernote"><?=$data['regulasi']?></textarea>
				  </div>
				  <div class="form-group col-12">
				    <label>Tentang Kami</label>
				    <textarea rows="5" name="tentang_kami" class="form-control summernote"><?=$data['regulasi']?></textarea>
				  </div>
				  <div class="form-group col-12">
				    <label>Peran Pokja</label>
				    <textarea rows="5" name="peran_pokja" class="form-control summernote"><?=$data['peran_pokja']?></textarea>
				  </div>
				  <div class="form-group col-12">
							<label class="">Struktur Organisasi</label>
							<div>
							<div class="image-input image-input-empty image-input-outline" id="kt_image_6" style="background-image: url(/struktur_org/<?=$data['struktur_org']?>); width: 100%; height: 300px;">
 								<div class="image-input-wrapper" style="width: 100%;  height: 300px;"></div>

								 <label class="ubah d-none btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" title="Ubah Foto">
								  <i class="fa fa-pen icon-sm text-muted"></i>
								  <input type="file" name="struktur_org" accept=".png, .jpg, .jpeg"/>
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
				    <label>Deskripsi</label>
				    <textarea rows="5" name="deskripsi" class="form-control summernote"><?=$data['deskripsi']?></textarea>
				  </div>
      	</div>
	      <div class="modal-footer d-none justify-content-center">
	        <button type="submit" class="btn btn-primary " id="kt_btn_1">Update</button>
	      </div>
    	</form>
    	
		
          
        </div>
        <!-- end:: card body-->

      </div>
      <!-- end:: card -->
    
    
    </div>
    <!--end::Row-->

  </div>
  <!--end::Container-->

</div>

<div id="modal-place"></div>

<!--end::Entry-->
<?= view("partials/_script") ?>
<script src="/assets/js/pages/crud/ktdatatable/base/html-table1ff3.js?v=7.1.2"></script>
<?= view("partials/_utils/crud") ?>
<script>


// tampil form edit
var avatar5 = new KTImageInput('kt_image_5');
var avatar6 = new KTImageInput('kt_image_6');

$('input , textarea').attr('disabled', true);

$('#edit-new').click(function (e) {
	e.preventDefault();
	$('.ubah').removeClass('d-none');
	$('.modal-footer').removeClass('d-none');
	$('#cancel').removeClass('d-none');
	$('#edit-new').addClass('d-none');
	$('input , textarea').attr('disabled', false);
	$('.summernote').summernote({
   height: 180
 });
});
$('#cancel').click(function (e) {
	e.preventDefault();
	window.location.reload(false);

});

$('#edit-form').submit(function(event) {
	const btn = KTUtil.getById("kt_btn_1");
	event.preventDefault();
	KTUtil.btnWait(btn);
	
	Crud.post('/admin/Profile/update',new FormData(this),(result)=>{
		Dialog.toast(result.type,result.message);
		KTUtil.btnRelease(btn);
		window.location.reload(false);
	})
});

</script>

<?=$this->endSection(); ?>