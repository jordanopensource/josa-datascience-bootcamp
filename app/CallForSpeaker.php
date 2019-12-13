<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallForSpeaker extends Model
{
    public function setJosaMemberAttribute($value) {
        $this->attributes['josa_member'] = $value?"Yes":"No";
    }

    public function setlastDataScienceBootcampTrainerAttribute($value) {
        $this->attributes['last_data_science_bootcamp_trainer'] = $value?"Yes":"No";
    }

}
