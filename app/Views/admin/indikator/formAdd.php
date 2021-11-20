<div class="modal fade"  id="bry-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data <?=$title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <form id="add-form" action="" method="_post" enctype="multipart/form-data" >
	      <div class="modal-body sc" style="height: 400px; overflow-y: auto;">
	      	<div class="row">
					  <div class="form-group col-12">
					    <label>Nama Indikator <span class="text-danger">*</span></label>
					    <input type="text" name="nm_indikator" class="form-control"  placeholder="Nama Indikator" required="" />
					  </div>
						<div class="form-group col-12">
					    <label>Deskripsi<span class="text-danger">*</span></label>
					    <textarea name="deskripsi" class="summernote">
					    </textarea>
					  </div>
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