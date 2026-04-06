<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Ubah ke varchar
        DB::statement("ALTER TABLE donations MODIFY anonymous VARCHAR(10)");

        // Konversi data lama
        DB::statement("UPDATE donations SET anonymous = 'ya' WHERE anonymous = 1");
        DB::statement("UPDATE donations SET anonymous = 'tidak' WHERE anonymous = 0");

        // Ubah ke enum
        DB::statement("ALTER TABLE donations MODIFY anonymous ENUM('ya','tidak') DEFAULT 'tidak'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE donations MODIFY anonymous BOOLEAN DEFAULT false");
    }
};
