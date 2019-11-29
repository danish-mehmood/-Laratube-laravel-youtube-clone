<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Subscription;
use Faker\Generator as Faker;

$factory->define(Subscription::class, function (Faker $faker) {
    return [
        //
        'user_id' =>function(){
            return factory(Subscription::class)->create();
        },
        'channel_id' =>function(){
            return factory(Channel::class)->create();
        }
    ];
});
