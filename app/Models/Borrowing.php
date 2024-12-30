<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $table = 'borrowings';
    protected $fillable = ['member_id', 'book_id', 'tanggal_peminjaman', 'tanggal_pengembalian', 'status', 'denda'];

    private static $instance = null;

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    private function __clone()
    {
        // Mencegah kloning
    }

}
