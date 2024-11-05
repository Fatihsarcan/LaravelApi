<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pdf_files', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->string('file_path');
            $table->string('sertifikaNo');
            $table->string('isim');
            $table->string('soyisim');
            $table->timestamps(); // created_at ve updated_at sütunları
        });
    }
    public function down()
    {
        Schema::dropIfExists('pdf_files');
    }
};
