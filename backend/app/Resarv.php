<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resarv extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
    'user_id' => 'required',
    'ticket_title' => 'required',
    'price' => 'required',
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
