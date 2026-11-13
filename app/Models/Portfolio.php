<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $primaryKey = 'project_id'; // Set the primary key column name

    protected $fillable = [
        'project_id',
        'project_name',
        'project_slug',
        'project_client',
        'project_type',
        'project_event',
        'project_description',
        'project_image',
    ];

     // Define the relationship with Gallery
     public function galleries()
     {
         return $this->hasMany(Gallery::class, 'project_id');
     }

}
