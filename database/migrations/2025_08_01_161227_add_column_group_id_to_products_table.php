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
        Schema::table('products', function (Blueprint $table) {
             $table->foreignId('group_id')->nullable()->index()->constrained('groups');
             //if (!Schema::hasColumn('products', 'group_id')) {
                //$table->unsignedBigInteger('group_id')->nullable()->index();
             //}
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //if (Schema::hasColumn('products', 'group_id')) {
            $table->dropForeign(['group_id']);
            $table->dropColumn('group_id');
            //}
        });
    }
};
