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
        Schema::create('empleoyees', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname");
            $table->integer("age");
            $table->string("position");
            $table->timestamps();
            //$table->foreignId("status_id")->constrained("statuses")
        });
        
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleoyees');
    }
};
