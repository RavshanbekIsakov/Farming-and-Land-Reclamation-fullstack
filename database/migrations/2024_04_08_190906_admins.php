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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string("fullname");
            $table->string("username");
            $table->string("photo");
            $table->string("password");
            $table->timestamps();
        });

        $password = \Illuminate\Support\Facades\Hash::make('admin');

        \Illuminate\Support\Facades\DB::table("admins")
            ->insert([
                'fullname' => 'admin',
                'username' => 'admin',
                'photo' => 'no_photo.jpg',
                'password' => "{$password}",
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
