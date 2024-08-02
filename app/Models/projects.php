<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class projects extends Model
{
    use HasFactory;

    protected $fillable = [
        "type_id",
        "nome",
        "descrizione",
        "data_inizio",
        "data_fine",
        "completato",
        "image",


    ];

    public function type()
    {
        return $this->belongsTo(type::class);
    }
    public function technologies()
    {
        return $this->belongsToMany(technology::class);
    }
}
