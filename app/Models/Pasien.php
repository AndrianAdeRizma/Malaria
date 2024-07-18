<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','tgl_lahir', 'gol_darah','user_id'];
    public $timestamps = false;
    // protected $with = ['products'];

    public function testing(): hasMany
    {
        return $this->hasMany(Testing::class, 'pasien_id', 'id');
    }

    public function user(): belongsTo
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }
}
