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
        Schema::table('users', function (Blueprint $table) {
            $table->string( column: 'surname')->nullable();  
            $table->string( column: 'patronymic')->nullable();  
            $table->integer( column: 'age')->nullable();  
            $table->string( column: 'address')->nullable();  
            $table->unsignedSmallInteger( column: 'gender')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn( column: 'surname');  
            $table->dropColumn( column: 'patronymic');  
            $table->dropColumn( column: 'age');  
            $table->dropColumn( column: 'address');  
            $table->dropColumn( column: 'gender');
        });
    }
};
