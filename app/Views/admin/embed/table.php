<div  class="table datatable-bordered datatable-head-custom datatable-hover" id="kt_datatable" >
<table style="display: none;">
<thead >
  <tr>
    <th class="text-center">No</th>
    <th>Kode Embed</th>
    <th>Uniqcode</th>
    <th>Keterangan</th>
    <th>Actions</th>
  </tr>
</thead>
<tbody id="tb-data">
<?php $no=1; foreach ($Embed as $row): ?>
<tr>
	<td class="text-center"><?=$no++ ?></td>
	<td><?=$row['kode_embed'] ?></td>
	<td><?=$row['uniqkode'] ?></td>
	<td><?=$row['keterangan'] ?></td>
	<td nowrap="nowrap">
		<a class="btn btn-sm btn-icon btn-light-success mr-2" href="#" onclick="formEdit(<?=$row['id_embed'] ?>)">
			<i class="fas fa-pen"></i>
		</a>
		<a class="btn btn-sm btn-icon btn-light-danger" href="#" onclick="hapus(<?=$row['id_embed'] ?>)">
			<i class="flaticon2-rubbish-bin-delete-button"></i>
		</a>
	</td>
</tr>
<?php endforeach ?>
 </tbody>
</table>
</div>