<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    const STATUS_PENDING = 0;
    const STATUS_PROGRES = 1;
    const STATUS_DECLINE = 2;
    const STATUS_DONE    = 3;

    protected $guarded = [];


    protected static function booted()
    {
        static::creating(function ($query) {
            if(!isset($query->status)) $query->status = self::STATUS_PENDING;
        });
    }

    public function scopePending($query){return $query->where('status', self::STATUS_PENDING);}
    public function scopeProgres($query){return $query->where('status', self::STATUS_PROGRES);}
    public function scopeDecline($query){return $query->where('status', self::STATUS_DECLINE);}
    public function scopeSelesai($query){return $query->where('status', self::STATUS_DONE);}


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
