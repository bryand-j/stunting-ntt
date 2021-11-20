<div class="modal fade"  id="bry-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data <?=$title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <form id="edit-form" action="" method="_post">
	      <div class="modal-body" data-scroll="false" data-height="500">
	      	<input type="hidden" name="id_kategori" value="<?=$data['id_kategori'] ?>">
				  <div class="form-group">
				    <label>Nama Kategori <span class="text-danger">*</span></label>
				    <input type="text" value="<?=$data['nm_kategori']?>" name="nm_kategori" class="form-control"  placeholder="Masukan Nama Kategori" required="" />
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