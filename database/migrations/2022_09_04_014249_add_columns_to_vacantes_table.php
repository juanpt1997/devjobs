<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacantes', function (Blueprint $table) {
            $table->string('titulo');
            $table->foreignId('salario_id')->constrained()->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->string('empresa');
            $table->date('ultimo_dia');
            $table->text('descripcion');
            $table->string('imagen');
            $table->integer('publicado')->default(1);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacantes', function (Blueprint $table) {
            // $table->dropColumn('titulo');
            // $table->dropColumn('salario_id');
            // $table->dropColumn('categoria_id');
            // $table->dropColumn('empresa');
            // $table->dropColumn('ultimo_dia');
            // $table->dropColumn('descripcion');
            // $table->dropColumn('imagen');
            // $table->dropColumn('publicado');
            // $table->dropColumn('user_id');

            // ? Primero borramos las llaves foráneas
            $table->dropForeign('vacantes_categoria_id_foreign');
            $table->dropForeign('vacantes_salario_id_foreign');
            $table->dropForeign('vacantes_user_id_foreign');
            // ? Luego borramos los campos, se pueden incluir directo en un arreglo
            $table->dropColumn([
                'titulo',
                'salario_id',
                'categoria_id',
                'empresa',
                'ultimo_dia',
                'descripcion',
                'imagen',
                'publicado',
                'user_id'
            ]);
        });
    }
};
