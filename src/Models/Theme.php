<?php

namespace DevDojo\Themes\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //
    protected $table = 'themes';
    protected $fillable = ['name', 'folder', 'version'];

    public function options(){
    	return $this->hasMany('\Themes\Models\ThemeOptions', 'theme_id');
    }
}
