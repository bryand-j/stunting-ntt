<?php namespace App\Models;

use CodeIgniter\Model;

class ThumbModel extends Model
{
    protected $table      = 'thumnail_utama';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['thumbnail','keterangan'];
 
}