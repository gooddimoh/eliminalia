<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class AddApprovalFields extends Migration
{
    public function up()
    {
        User::all()->each(function (App\User $user) {
            $user->update(['approved' => true,]);
        });
    }

    public function down()
    {
        Schema::drop('roles');
    }
}
