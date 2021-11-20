<div  class="table datatable-bordered datatable-head-custom datatable-hover" id="kt_datatable" >
<table style="display: none;">
<thead >
  <tr>
    <th class="text-center">No</th>
    <th>Nama Pulikasi</th>
    <th>Keterangan</th>
    <th>Link</th>
    <th>File</th>
    <th>Tanggal Publikasi</th>
    <th>Hint</th>
    <th>Author</th>
    <th>Actions</th>
  </tr>
</thead>
<tbody id="tb-data">
<?php $no=1; foreach ($Publikasi as $row): ?>
<tr>
	<td class="text-center"><?=$no++ ?></td>
	<td><?=$row['nm_publikasi'] ?></td>
	<td><?=$row['keterangan'] ?></td>
	<td><a href="<?=$row['link'] ?>" target="_blank" ><?=$row['link'] ?></a></td>
	<td><a href="/FilePublikasi/<?=$row['file'] ?>" target="_blank">Download</a></td>
	<td><?=$row['tgl_publikasi'] ?></td>
	<td><?=$row['hint'] ?></td>
	<td><?=$row['username'] ?></td>
	<td nowrap="nowrap">
		<a class="btn btn-sm btn-icon btn-light-success mr-2" href="#" onclick="formEdit(<?=$row['id_publikasi'] ?>)">
			<i class="fas fa-pen"></i>
		</a>
		<a class="btn btn-sm btn-icon btn-light-danger" href="#" onclick="hapus(<?=$row['id_publikasi'] ?>)">
			<i class="flaticon2-rubbish-bin-delete-button"></i>
		</a>

	</td>
</tr>
<?php endforeach ?>
 </tbody>
</table>
</div>
