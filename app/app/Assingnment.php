<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assingnment extends Model
{
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
}