<?php namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table      = 'profil';
    protected $primaryKey = 'id_profil';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_profil','logo','kontak1','kontak2','email','youtube','alamat','deskripsi','tentang_kami','latar_belakang','struktur_org','regulasi','peran_pokja'];

    protected $deletedField  = 'delete_at'; 
 
}