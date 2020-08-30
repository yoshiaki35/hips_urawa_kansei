<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $fillable = [
        'name'
    ];

    public function bloodltype()
    {
        return $this->belongsTo('App\Bloodltype');
    }

    public function icon1()
    {
        return $this->belongsTo('App\Icon1');
    }

    public function icon2()
    {
        return $this->belongsTo('App\Icon2');
    }

    public function kenmei()
    {
        return $this->belongsTo('App\Kenmei');
    }

    public function last_time()
    {
        return $this->belongsTo('App\Lasttime');
    }

    public function open_time()
    {
        return $this->belongsTo('App\Opentime');
    }

    public function tag1()
    {
        return $this->belongsTo('App\Tag1');
    }

    public function tag2()
    {
        return $this->belongsTo('App\Tag2');
    }

    public function option1()
    {
        return $this->belongsTo('App\Option');
    }

    public function option2()
    {
        return $this->belongsTo('App\Option');
    }

    public function option3()
    {
        return $this->belongsTo('App\Option');
    }

    public function option4()
    {
        return $this->belongsTo('App\Option');
    }

    public function option5()
    {
        return $this->belongsTo('App\Option');
    }

    public function option6()
    {
        return $this->belongsTo('App\Option');
    }

    public function option7()
    {
        return $this->belongsTo('App\Option');
    }

    public function option8()
    {
        return $this->belongsTo('App\Option');
    }

    public function option9()
    {
        return $this->belongsTo('App\Option');
    }

    public function option10()
    {
        return $this->belongsTo('App\Option');
    }

    public function option11()
    {
        return $this->belongsTo('App\Option');
    }

    public function option12()
    {
        return $this->belongsTo('App\Option');
    }

    public function option13()
    {
        return $this->belongsTo('App\Option');
    }

    public function option14()
    {
        return $this->belongsTo('App\Option');
    }

    public function option15()
    {
        return $this->belongsTo('App\Option');
    }

    public function option16()
    {
        return $this->belongsTo('App\Option');
    }

}
