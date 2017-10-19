<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('actividad', function(Blueprint $table)
    {
      $table->foreign('ev_id', 'fk_ac_evento')
            ->references('ev_id')
            ->on('evento')
            ->onDelete('cascade');

      $table->foreign('ta_id', 'fk_ac_tipo_actividad')
            ->references('ta_id')
            ->on('tipo_actividad')
            ->onDelete('cascade');

    });


    Schema::table('entradas_auditorio', function(Blueprint $table)
    {
      $table->foreign('ba_id', 'fk_ea_butacas_auditorio')
            ->references('ba_id')
            ->on('butacas_auditorio')
            ->onDelete('cascade');

      $table->foreign('pfa_id', 'fk_ea_precios_fechas_actividad')
            ->references('pfa_id')
            ->on('precios_fechas_actividad')
            ->onDelete('cascade');
    });

    Schema::table('fechas_actividad', function(Blueprint $table)
    {
      $table->foreign('ac_id', 'fk_fa_actividad')
            ->references('ac_id')
            ->on('actividad')
            ->onDelete('cascade');
    });

    Schema::table('lugares_actividad', function(Blueprint $table)
    {
      $table->foreign('ac_id', 'fk_la_actividad')
            ->references('ac_id')
            ->on('actividad')
            ->onDelete('cascade');

      $table->foreign('lg_id', 'fk_la_lugares')
            ->references('lg_id')
            ->on('lugares')
            ->onDelete('cascade');
    });

    Schema::table('organizador_evento', function(Blueprint $table)
    {
      $table->foreign('ev_id', 'fk_oe_evento')
            ->references('ev_id')
            ->on('evento')
            ->onDelete('cascade');

      $table->foreign('org_id', 'fk_oe_organizador')
            ->references('org_id')
            ->on('organizador')
            ->onDelete('cascade');
    });

    Schema::table('precios_fechas_actividad', function(Blueprint $table)
    {
      $table->foreign('fa_id', 'fk_pfa_fechas_actividad')
            ->references('fa_id')
            ->on('fechas_actividad')
            ->onDelete('cascade');

      $table->foreign('te_id', 'fk_pfa_tipos_entrada')
            ->references('te_id')
            ->on('tipos_entrada')
            ->onDelete('cascade');
    });

    Schema::table('ticket', function(Blueprint $table)
    {
      $table->foreign('uc_id', 'fk_tk_usuarios_clientes')
            ->references('uc_id')
            ->on('usuarios_clientes')
            ->onDelete('cascade');

      $table->foreign('us_id', 'fk_tk_usuarios_sys')
            ->references('us_id')
            ->on('usuarios_sys')
            ->onDelete('cascade');

      $table->foreign('pfa_id', 'fk_tk_precios_fechas_actividad')
            ->references('pfa_id')
            ->on('precios_fechas_actividad')
            ->onDelete('cascade');

      $table->foreign('ea_id', 'fk_tk_entradas_auditorio')
            ->references('ea_id')
            ->on('entradas_auditorio')
            ->onDelete('cascade');
    });

    Schema::table('tipos_entrada', function(Blueprint $table)
    {
      $table->foreign('ac_id', 'fk_te_actividad')
            ->references('ac_id')
            ->on('actividad')
            ->onDelete('cascade');
    });
  }
 

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('actividad', function(Blueprint $table)
    {
      $table->dropForeign('fk_ac_evento');
      $table->dropForeign('fk_ac_tipo_actividad');
    });

    Schema::table('entradas_auditorio', function(Blueprint $table)
    {
      $table->dropForeign('fk_ea_butacas_auditorio');
      $table->dropForeign('fk_ea_precios_fechas_actividad');
    });

    Schema::table('fechas_actividad', function(Blueprint $table)
    {
      $table->dropForeign('fk_fa_actividad');
    });

    Schema::table('lugares_actividad', function(Blueprint $table)
    {
      $table->dropForeign('fk_la_actividad');
      $table->dropForeign('fk_la_lugares');
    });

    Schema::table('organizador_evento', function(Blueprint $table)
    {
      $table->dropForeign('fk_oe_evento');
      $table->dropForeign('fk_oe_organizador');
    });

    Schema::table('precios_fechas_actividad', function(Blueprint $table)
    {      
      $table->dropForeign('fk_pfa_fechas_actividad');
      $table->dropForeign('fk_pfa_tipos_entrada');
    });

    Schema::table('ticket', function(Blueprint $table)
    {
      $table->dropForeign('fk_tk_usuarios_clientes');
      $table->dropForeign('fk_tk_usuarios_sys');
      $table->dropForeign('fk_tk_precios_fechas_actividad');
      $table->dropForeign('fk_tk_entradas_auditorio');
    });

    Schema::table('tipos_entrada', function(Blueprint $table)
    {
      $table->dropForeign('fk_te_actividad');
    });

  }
}
