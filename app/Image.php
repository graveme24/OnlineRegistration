<?php

namespace App;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Image extends Model
{
    public function up(){
        Schema::create('data', function(Blueprint $table){
            $table->id;
            $table->string('report_card');
            $table->string('birth_cert');
            $table->string('gcash_payment');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('images');
    }
}
