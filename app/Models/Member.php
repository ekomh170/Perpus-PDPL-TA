<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    protected $fillable = [
        'user_id',
        'nama',
        'email',
        'telepon',
        'alamat',
        'status',
    ];

    private static $instance = null;

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    private function __clone()
    {
        // Mencegah kloning
    }
}
