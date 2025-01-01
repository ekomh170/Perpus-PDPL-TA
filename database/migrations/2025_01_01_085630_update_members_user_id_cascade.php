<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Hapus foreign key lama
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Tambahkan cascade
        });
    }

    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Hapus foreign key baru
            $table->foreign('user_id')->references('id')->on('users'); // Kembalikan ke default tanpa cascade
        });
    }
};
