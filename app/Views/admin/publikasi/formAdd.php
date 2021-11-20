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
					    <label>Nama Publikasi<span class="text-danger">*</span></label>
					    <input type="text" name="nm_publikasi" class="form-control"  placeholder="Nama Publikasi" required="" />
					  </div>
					  <div class="form-group col-12">
					    <label>Keterangan<span class="text-danger">*</span></label>
					    <textarea class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
					  </div>
					  <div class="form-group col-md-6">
					    <label>Link <span class="text-danger">*</span></label>
					    <input type="link" name="link" class="form-control"  placeholder="Ex:http://abc.com" required="" />
					  </div>
					  <div class="form-group col-md-6">
					    <label>Tanggal Publikasi<span class="text-danger">*</span></label>
					    <input type="date" name="tgl_publikasi" class="form-control"  placeholder="Tanggal" required="" />
					  </div>
					  <div class="form-group col-12">
							<label class="">File<span class="text-danger">*</span></label>
							<input type="file" name="file" class="form-control"  placeholder="Pilih File" required="" />
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