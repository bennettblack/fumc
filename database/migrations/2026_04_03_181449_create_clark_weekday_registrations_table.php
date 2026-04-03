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
        Schema::create('clark_weekday_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('child_name');
            $table->date('child_dob');
            $table->string('child_siblings')->nullable();
            $table->string('parent_names');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('schedule');
            $table->boolean('extended_care')->default(false);
            $table->boolean('multiple_children')->default(false);
            $table->text('other_children')->nullable();
            $table->boolean('church_member')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clark_weekday_registrations');
    }
};
