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
        Schema::create('vnps', function (Blueprint $table) {
            $table->id();
            $table->string('vnp_Amount');
            $table->string('vnp_BankCode')->nullable();
            $table->string('vnp_BankTranNo')->nullable();
            $table->string('vnp_CardType')->nullable();
            $table->string('vnp_OrderInfo')->nullable();
            $table->dateTime('vnp_PayDate')->nullable();
            $table->string('vnp_ResponseCode')->nullable();
            $table->string('vnp_TmnCode');
            $table->string('vnp_TransactionNo')->nullable();
            $table->string('vnp_TransactionStatus')->nullable();
            $table->string('vnp_TxnRef');
            $table->string('vnp_SecureHash')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vnps');
    }
};
