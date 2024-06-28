<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HosxpPatientImageServer extends Model
{
    use HasFactory;

    protected $connection = 'mysql_image_hxp';
    protected $table = 'patient_image';

    protected $primaryKey = 'hn';

    protected $fillable = ['hn', 'image_name','image'];

    public $incrementing = false;
    protected $keyType = 'string';
}
