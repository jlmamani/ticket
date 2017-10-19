<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('actividad', function(Blueprint $table)
    {
      $table->increments('ac_id');
      $table->integer('ev_id')->unsigned()->index();
      $table->integer('ta_id')->unsigned()->index();
      $table->text('ac_nombre')->nullable();
      $table->date('ac_fec_ini')->nullable();
      $table->date('ac_fec_fin')->nullable();
      $table->integer('ac_aforo_web')->nullable();
      $table->integer('ac_aforo_taquillas')->nullable();
      $table->date('ac_fecini_venta')->nullable();
      $table->date('ac_fecfin_venta')->nullable();
      $table->decimal('ac_precio', 10)->nullable();
      $table->date('ac_fec_creacion')->nullable();
      $table->date('ac_fec_modificacion')->nullable();
      $table->date('ac_fec_elim')->nullable();
      $table->boolean('ac_sw_auditorio')->nullable();
    }); 

    Schema::create('butacas_auditorio', function(Blueprint $table)
    {
      $table->increments('ba_id');
      $table->integer('ba_nro')->nullable();
      $table->string('ba_codigo', 20)->nullable();
      $table->decimal('ba_x', 20, 10)->nullable();
      $table->decimal('ba_y', 20, 10)->nullable();
    });

    Schema::create('entradas_auditorio', function(Blueprint $table)
    {
      $table->increments('ea_id');
      $table->integer('ba_id')->unsigned()->index();
      $table->integer('pfa_id')->unsigned()->index();
    });

    Schema::create('evento', function(Blueprint $table)
    {
      $table->increments('ev_id');
      $table->text('ev_desc')->nullable();
      $table->date('ev_fec_ini')->nullable();
      $table->date('ev_fec_fin')->nullable();
      $table->string('ev_banner', 100)->nullable();
      $table->text('ev_contenido')->nullable();
      $table->string('ev_pdf', 100)->nullable();
      $table->boolean('ev_sw_venta')->nullable();
      $table->string('ev_video', 100)->nullable();
      $table->boolean('ev_publlicar')->nullable();
      $table->date('ev_fec_creacion')->nullable();
      $table->date('ev_fec_modificacion')->nullable();
      $table->date('ev_fec_eliminacion')->nullable();
      $table->boolean('ev_sw_eliminado')->nullable();
    });

    Schema::create('fechas_actividad', function(Blueprint $table)
    {
      $table->increments('fa_id');
      $table->integer('ac_id')->unsigned()->index();
      $table->date('fa_fecha')->nullable();
      $table->date('fa_hora_inicio_evento')->nullable();
      $table->date('fa_hora_fin_evento')->nullable();
      $table->date('fa_fecha_inicio_venta')->nullable();
      $table->date('fa_fecha_fin_venta')->nullable();
      $table->boolean('es_gratis')->nullable();
    });

    Schema::create('lugares_actividad', function(Blueprint $table)
    {
      $table->integer('ac_id')->unsigned();
      $table->integer('lg_id')->unsigned();
      $table->primary(['ac_id', 'lg_id']);
    });

    Schema::create('lugares', function(Blueprint $table)
    {
      $table->increments('lg_id');
      $table->text('lg_nombre')->nullable();
      $table->string('lg_bloque', 5)->nullable();
      $table->boolean('lg_sw_auditorio')->nullable();
    });

    Schema::create('organizador_evento', function(Blueprint $table)
    {
      $table->integer('ev_id')->unsigned();
      $table->integer('org_id')->unsigned();
      $table->primary(['ev_id', 'org_id']);
    });

    Schema::create('organizador', function(Blueprint $table)
    {
      $table->increments('org_id');
      $table->string('org_nombre', 200)->nullable();
      $table->string('org_logo', 100)->nullable();
      $table->string('org_contacto', 200)->nullable();
      $table->string('org_web', 200)->nullable();
    });

    Schema::create('precios_fechas_actividad', function(Blueprint $table)
    {
      $table->increments('pfa_id');
      $table->integer('fa_id')->unsigned()->index();
      $table->integer('te_id')->unsigned()->index();
      $table->decimal('pfa_precio', 10)->nullable();
    });

    Schema::create('ticket', function(Blueprint $table)
    {
      $table->increments('tk_id');
      $table->integer('uc_id')->unsigned()->index();
      $table->integer('us_id')->unsigned()->index();
      $table->integer('pfa_id')->unsigned()->index();
      $table->integer('ea_id')->unsigned()->index();
      $table->string('tk_hash', 100)->nullable();
      $table->date('tk_fecha')->nullable();
      $table->decimal('tk_precio', 10)->nullable();
      $table->decimal('tk_descuento', 10)->nullable();
      $table->boolean('tk_sw_auditorio')->nullable();
      $table->string('tk_estado', 5)->nullable();
      $table->date('tk_fec_generacion')->nullable();
      $table->date('tk_fec_compra')->nullable();
      $table->integer('tk_nro')->nullable();
    });

    Schema::create('tipo_actividad', function(Blueprint $table)
    {
      $table->increments('ta_id');
      $table->string('ta_nombre', 200)->nullable();
    });

    Schema::create('tipos_entrada', function(Blueprint $table)
    {
      $table->increments('te_id');
      $table->integer('ac_id')->unsigned()->index();
      $table->string('te_nombre', 100)->nullable();
      $table->string('te_rango', 5)->nullable();
      $table->integer('te_cant')->nullable();
      $table->decimal('te_precio', 10)->nullable();
    });

    Schema::create('usuarios_clientes', function(Blueprint $table)
    {
      $table->increments('uc_id');
      $table->text('uc_email')->index();
      $table->text('uc_password')->nullable();
      $table->text('uc_nombres')->nullable();
      $table->text('uc_apellidos')->nullable();
      $table->text('uc_telefono')->nullable();
      $table->boolean('uc_verificado')->nullable();
      $table->boolean('uc_estado')->nullable();
      $table->date('uc_fec_registro')->nullable();
    });

    Schema::create('usuarios_sys', function(Blueprint $table)
    {
      $table->increments('us_id');
      $table->text('us_email')->index();
      $table->text('us_password')->nullable();
      $table->text('us_nombres')->nullable();
      $table->text('us_apellidos')->nullable();
      $table->text('us_cargo')->nullable();
      $table->text('us_telefono')->nullable();
      $table->date('us_fec_registro')->nullable();
      $table->date('us_fec_modificacion')->nullable();
      $table->date('us_fec_eliminacion')->nullable();
      $table->boolean('us_estado')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('actividad');
    Schema::dropIfExists('auditorio');
    Schema::dropIfExists('butacas_auditorio');
    Schema::dropIfExists('evento');
    Schema::dropIfExists('fechas_actividad');
    Schema::dropIfExists('lugares_actividad');
    Schema::dropIfExists('lugares');
    Schema::dropIfExists('organizador_evento');
    Schema::dropIfExists('organizador');
    Schema::dropIfExists('precios_fechas_actividad');
    Schema::dropIfExists('ticket');
    Schema::dropIfExists('tipo_actividad');
    Schema::dropIfExists('tipos_entrada');
    Schema::dropIfExists('usuarios_clientes');
    Schema::dropIfExists('usuarios_sys');
  }
}
