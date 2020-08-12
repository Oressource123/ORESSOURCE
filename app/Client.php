<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';
    public function type_client()
    {
        return $this->belongsTo('App\Type_Client');
    }
}