<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $table = 'trainings';
    protected $primaryKey = 'id';
    protected $fillable = ['demam', 'sakit_kepala', 'mengigil', 'berkeringan', 'mual','diagnosa'];
    public $timestamps = false;
    // protected $with = ['products'];

    public function testing(): HasMany
    {
        return $this->hasMany(Testing::class, 'training_id', 'id');
    }
}
