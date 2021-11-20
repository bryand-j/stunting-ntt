<div  class="table datatable-bordered datatable-head-custom datatable-hover" id="kt_datatable" >
<table style="display: none;">
<thead >
  <tr>
    <th class="text-center">No</th>
    <th>Kategori</th>
    <th>Tanggal</th>
    <th>Judul</th>
    <th>Deskripsi</th>
    <th>Actions</th>
  </tr>
</thead>
<tbody id="tb-data">
<?php $no=1; foreach ($Bahan as $row): ?>
<tr>
	<td class="text-center"><?=$no++ ?></td>
	<td><?=$row['nm_kategori'] ?></td>
	<td><?=$row['tgl_bahan'] ?></td>
	<td><?=$row['judul_bahan'] ?></td>
	<td>.....</td>
	<td nowrap="nowrap">
		<a class="btn btn-sm btn-icon btn-light-primary mr-2" href="#" >
			<!-- link menuju view berita dengan judul ini-->
			<i class="far fa-eye"></i>
		</a>
		<a class="btn btn-sm btn-icon btn-light-success mr-2" href="#" onclick="formEdit(<?=$row['id_bahan'] ?>,<?=$row['kategori_bahan'] ?>)">
			<i class="fas fa-pen"></i>
		</a>
		<a class="btn btn-sm btn-icon btn-light-danger" href="#" onclick="hapus(<?=$row['id_bahan'] ?>)">
			<i class="flaticon2-rubbish-bin-delete-button"></i>
		</a>

	</td>
</tr>
<?php endforeach ?>
 </tbody>
</table>
</div>
