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
        Schema::table('addresses', function (Blueprint $table) {
            // adicionar foreign key
            // address_id referencia o campo id na tabela addresses
            // só funciona quando já existe a tabela criada no banco de dados
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                // dessa forma, quando fizer o delete na tabela de endereços, vai setar o foreign key para nulo e permitir a exclusão
                ->onDelete('SET NULL')
                // existe outras actions que podem ser passadas, por exemplo CASCADE, onde todas as relações dessa exclusão serão apagadas também
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            //
            $table->dropForeign('user_id');
        });
    }
};
