<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateDomainTables extends Migration {
 public function up(){
Schema::create('categories',function(Blueprint $table){$table->id();$table->string('name')->unique();$table->timestamps();});
Schema::create('notes',function(Blueprint $table){$table->id();$table->string('title',150);$table->string('author',100);$table->dateTime('noted_at');$table->text('body');$table->foreignId('category_id')->constrained()->onDelete('restrict');$table->timestamps();});
}
 public function down(){Schema::dropIfExists('notes');Schema::dropIfExists('categories');}
}
