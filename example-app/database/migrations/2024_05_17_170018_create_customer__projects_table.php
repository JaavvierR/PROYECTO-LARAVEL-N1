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
        Schema::create('customer_project', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("customer_id")->constrained("customers");
            $table->foreignId("project_id")->constrained("projects");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer__projects');
    }
};
