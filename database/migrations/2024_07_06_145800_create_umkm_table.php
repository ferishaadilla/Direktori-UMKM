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
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();

            $table->string('nama');
            $table->double('modal');
            $table->string('pemilik');
            $table->string('alamat');
            $table->string('website');
            $table->string('email');
            $table->integer('rating');

            $table->foreignId('kategori_id')->constrained('kategori_umkm');
            $table->foreignId('kabkota_id')->constrained('kab_kota');
            $table->foreignId('pembina_id')->constrained('pembina');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};