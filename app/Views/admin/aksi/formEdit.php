<div class="modal fade"  id="bry-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data <?=$title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <form id="edit-form" action="" method="_post">
      	<input type="hidden" name="id_aksi" value="<?=$data['id_aksi']?>">
	      <div class="modal-body sc" style="height: 500px; overflow-y: auto;">
	      	<div class="row">
					  <div class="form-group col-12">
					    <label>Nama Aksi <span class="text-danger">*</span></label>
					    <input type="text" value="<?=$data['nama_aksi']?>" name="nama_aksi" class="form-control"  placeholder="Nama Aksi" required="" />
					  </div>
					  <div class="form-group col-12">
							<label class="">Gambar <span class="text-danger">*</span></label>
							<div>
							<div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(/gambarAksi/<?=$data['gambar']?>); width: 100%;">
 								<div class="image-input-wrapper" style="width: 100%;"></div>

								 <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" title="Ubah Foto">
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
					    <label>Deskripsi<span class="text-danger">*</span></label>
					    <textarea name="deskrpsi" class="summernote">
					    	<?=$data['deskrpsi']?>
					    </textarea>
					  </div>
				  </div>
				  
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-text-danger btn-hover-light-danger mr-5" data-dismiss="modal">Batal</button>
	        <button type="submit" class="btn btn-primary" id="kt_btn_1">Update</button>
	      </div>
    	</form>
    </div>
  </div>
</div>