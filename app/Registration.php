<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function setJosaMemberAttribute($value) {
        $this->attributes['josa_member'] = $value?"Yes":"No";
    }
}
