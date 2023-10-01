<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
{
Schema::create('carts', function (Blueprint $table) {
$table->id();
$table->foreignId('user_id')->onDelete('cascade')->onUpdate('cascade');
$table->foreignId('product_id')->onDelete('cascade')->onUpdate('cascade');
$table->float('quantity')->default(0);
$table->float('price')->default(0);
$table->float('total')->default(0);
$table->timestamps();
});
}

public function down()
{
Schema::dropIfExists('carts');
}
};
