<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('amount');
            $table->date('project_start_date');
            $table->date('payment_released_date');
            $table->timestamps();
        });

        DB::table('projects')->insert([
            [
                'name' => 'P1',
                'amount' => '200',
                'project_start_date' => '2023-06-22',
                'payment_released_date' => '2023-07-10'
            ],
            [
                'name' => 'P2',
                'amount' => '500',
                'project_start_date' => '2023-06-30',
                'payment_released_date' => '2023-07-05'
            ],
            [
                'name' => 'P3',
                'amount' => '1000',
                'project_start_date' => '2023-07-10',
                'payment_released_date' => '2023-08-01'
            ],
            [
                'name' => 'P4',
                'amount' => '300',
                'project_start_date' => '2023-07-22',
                'payment_released_date' => '2023-07-27'
            ],
            [
                'name' => 'P5',
                'amount' => '300',
                'project_start_date' => '2023-03-23',
                'payment_released_date' => '2023-07-28'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
