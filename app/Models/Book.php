<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['judul', 'penulis', 'kategori', 'stok'];

    private static $instance = null;

    /**
     * Mendapatkan instance tunggal dari model Book.
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Mutator (Setter): Memastikan judul selalu dalam format title case.
     */
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = ucwords($value);
    }

    /**
     * Accessor (Getter): Menambahkan "Penulis: " ke nama penulis.
     */
    public function getPenulisAttribute(): string
    {
        return "Penulis: " . $this->attributes['penulis'];
    }

    /**
     * Mutator (Setter): Memastikan kategori disimpan dalam huruf kecil.
     */
    public function setKategoriAttribute($value)
    {
        $this->attributes['kategori'] = strtolower($value);
    }

    /**
     * Accessor (Getter): Menambahkan "Stok Tersedia: " ke jumlah stok.
     */
    public function getStokAttribute(): string
    {
        return "Stok Tersedia: " . $this->attributes['stok'];
    }
}
