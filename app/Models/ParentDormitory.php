<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentDormitory extends Model
{
    use HasFactory;

    protected $table = 'dormitories';

    protected $fillable = [
        'name',
        'phone_number',
        'fk_id_dormitory'
    ];

    public function dormitory()
    {
        return $this->belongsTo(Dormitory::class, "fk_id_dormitory");
    }
}
