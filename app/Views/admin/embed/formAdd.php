<div class="modal fade"  id="bry-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data <?=$title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <form id="add-form" action="" method="_post">
	      <div class="modal-body" data-scroll="false" data-height="500">
				  <div class="form-group">
				    <label>Kode Embed <span class="text-danger">*</span></label>
				    <textarea class="form-control" rows="7" name="kode_embed" required=""placeholder="Masukan Kode Embed"></textarea>
				  </div>
				  <div class="form-group">
				    <label>Uniqkode <span class="text-danger">*</span></label>
				    <input type="text" name="uniqkode" class="form-control"  placeholder="Masukan Uniqkode" required="" />
				  </div>
				  <div class="form-group">
				    <label>Keterangan <span class="text-danger">*</span></label>
				    <textarea class="form-control" rows="3" name="keterangan" required=""placeholder="Masukan Keterangan"></textarea>
				  </div>
				  
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-text-danger btn-hover-light-danger mr-5" data-dismiss="modal">Batal</button>
	        <button type="submit" class="btn btn-primary" id="kt_btn_1">Simpan</button>
	      </div>
    	</form>
    </div>
  </div>
</div>