<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    use HasFactory;
    protected $table = 'testings';
    protected $primaryKey = 'id';
    protected $fillable = ['pasien_id', 'training_id', 'prediksi_hasil', 'class_hasil'];
    public $timestamps = true;
    // protected $with = ['products'];

    public function training(): BelongsTo
    {
        return $this->belongsTo(Testing::class, 'training_id', 'id');
    }
}
