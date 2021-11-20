<div  class="table datatable-bordered datatable-head-custom datatable-hover" id="kt_datatable" >
<table style="display: none;">
<thead >
  <tr>
    <th class="text-center">No</th>
    <th>Nama Kategori</th>
    <th>Actions</th>
  </tr>
</thead>
<tbody id="tb-data">
<?php $no=1; foreach ($KategoriE as $row): ?>
<tr>
	<td class="text-center"><?=$no++ ?></td>
	<td><?=$row['nm_kategori'] ?></td>
	<td nowrap="nowrap">
		<a class="btn btn-sm btn-icon btn-light-success mr-2" href="#" onclick="formEdit(<?=$row['id_kategori'] ?>)">
			<i class="fas fa-pen"></i>
		</a>
		<a class="btn btn-sm btn-icon btn-light-danger" href="#" onclick="hapus(<?=$row['id_kategori'] ?>)">
			<i class="flaticon2-rubbish-bin-delete-button"></i>
		</a>
	</td>
</tr>
<?php endforeach ?>
 </tbody>
</table>
</div>