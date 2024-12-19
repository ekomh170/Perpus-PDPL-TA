<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->Foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->unsignedBigInteger('book_id');
            $table->Foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian')->default(null);
            $table->enum('status', ['peminjaman', 'pengembalian'])->default('peminjaman');
            $table->decimal('denda', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
