<?=$this->extend("layout"); ?>

<?=$this->section("content"); ?>

<?=view('admin/kategoryE/subheader'); ?>

<div class="d-flex flex-column-fluid">
  <div class="container-fluid" >

    <!--begin::Row-->
    <div class="row">
      <div class="card card-custom gutter-b col-12">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
          <div class="card-title">
            <h3 class="card-label">Tabel Data <?=$title ?> 
            </h3>
          </div>
        </div>
        <div class="card-body">
          <!--begin: Datatable-->
          <div class="row align-items-center">
						<div class="col-lg-9 col-xl-8">
							<div class="row align-items-center">
								<div class="col-md-4 my-2 my-md-0">
									<div class="input-icon">
										<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
										<span>
											<i class="flaticon2-search-1 text-muted"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>

				<div id="dt-table"></div>
          
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

//tampil tabel
function getTable() {
	Crud.getHtml('/admin/KategoriEdukasi/table',(result)=> {
	  	$('#dt-table').html(result);
	  	KTDatatableHtmlTableDemo.init();
	});
}

getTable();


// tampil form add

  $("#add-new").click(function(e) {
  	Crud.getHtml('/admin/KategoriEdukasi/formAdd',(result)=> {
	  	$('#modal-place').html(result);
	  	$("#bry-modal").modal("show");
  		// tambah data
  		$('#add-form').submit(function(event) {
				const btn = KTUtil.getById("kt_btn_1");
				event.preventDefault();
				KTUtil.btnWait(btn);
				
				Crud.post('/admin/KategoriEdukasi/save',new FormData(this),(result)=>{
					Dialog.toast(result.type,result.message);
					KTUtil.btnRelease(btn);
					$("#bry-modal").modal("hide");
					getTable();
				})
			});
	  });	
  });


// hapus dataPaket

function hapus(id) {
	del('/admin/KategoriEdukasi/delete',id,()=>{
		getTable();
	})
}

// tampil form edit
function formEdit(id) {
	Crud.getHtml('/admin/KategoriEdukasi/formEdit/'+id,(result)=> {
  	$('#modal-place').html(result);
  	$("#bry-modal").modal("show");

  	//update data
  	$('#edit-form').submit(function(event) {
				const btn = KTUtil.getById("kt_btn_1");
				event.preventDefault();
				KTUtil.btnWait(btn);
				
				Crud.post('/admin/KategoriEdukasi/update',new FormData(this),(result)=>{
					Dialog.toast(result.type,result.message);
					KTUtil.btnRelease(btn);
					$("#bry-modal").modal("hide");
					getTable();
				})
			});
  });
}

</script>

<?=$this->endSection(); ?>