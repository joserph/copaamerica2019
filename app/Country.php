<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = [
        'name', 
        'flag', 
        'points',
        'matches',
        'success',
        'draws',
        'defeats',
        'goals_in_favor',
        'goals_against',
        'difference'];
}
