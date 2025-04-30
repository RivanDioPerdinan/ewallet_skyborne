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
        Schema::create('sky_splits', function (Blueprint $table) {
            $table->id('split_id');
            $table->foreignId('transaction_id')->constrained('transactions','transaction_id')->onDelete('cascade');
            $table->integer('jumlah_orang');
            $table->decimal('total_tagihan', 15, 2);
            $table->decimal('per_orang', 15, 2);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sky_splits');
    }
};
