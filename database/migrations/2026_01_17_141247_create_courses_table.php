<?php

use App\Models\Course;
use App\Models\User;
use App\Models\Module;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('length');
            $table->string('mode');
            $table->string('offer');
            $table->string('start');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('course_module', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Course::class, 'courses_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Module::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('course_user', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Course::class, 'courses_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'users_id')->constrained()->cascadeOnDelete();
            $table->boolean('approved')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('course_module');
        Schema::dropIfExists('course_user');
    }
};
