<div class="modal fade"  id="bry-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
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
			    <label>Username <span class="text-danger">*</span></label>
			    <input type="text" name="username" class="form-control"  placeholder="Masukan Username" required="" />
			  </div>
			  <div class="form-group input-icon input-icon-right">
			    <label>Password <span class="text-danger">*</span></label>
			    <input type="password" id="password" value="user" name="password" class="form-control"  placeholder="Masukan Password" required=""/>
			    <span id="toggle">
					<i class="far fa-eye text-muted add1 "></i>
					<i class="far fa-eye-slash add2 text-muted d-none"></i>
				</span>
			    <p class="form-text text-muted">Default Password: <code>user</code></p>
			  </div>
			  <div class="form-group">
			    <label>Level <span class="text-danger">*</span></label>
			    <select class="form-control selectp" name="level" style="width: 100%;">
				    <option value="Admin">Admin</option>
				    <option value="Operator">Operator</option>
				</select>
				
			  </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-text-danger btn-hover-light-danger mr-5" data-dismiss="modal">Cancel</button>
	        <button type="submit" class="btn btn-primary" id="kt_btn_1">Save</button>
	      </div>
    	</form>
    </div>
  </div>
</div>