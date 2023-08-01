<?php

namespace App\Models;

use App\Models\BullyType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    protected $guarded = [
        'id'
    ];
    use HasFactory;
    public function bully_type()
    {
        // wan tu wan
        return $this->belongsTo(BullyType::class);
    }
    public function user()
    {
        // wan tu wan
        return $this->belongsTo(User::class);
    }
}