<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';
    protected $primaryKey = 'gallery_id'; // Set the primary key column name

    protected $fillable = [
        'gallery_id',
        'project_id',
        'gallery_image'
       
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'project_id');
    }

}
