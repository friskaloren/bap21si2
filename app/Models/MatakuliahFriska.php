<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatakuliahFriska extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'matakuliah_friskas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kodeMataKuliah', 'namaMataKuliah', 'sks'];

    
}
