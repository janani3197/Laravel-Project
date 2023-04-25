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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('Booked_date');
            $table->foreignId('user_id');

            // TODO: Link the booking to a given user (patient) (see 'forgeignIdFor')
            // TODO: Need a way of capturing when the booking is scheduled for
            // TODO: Link to the user that is fulfilling the booking (caretaker) (nullable)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
