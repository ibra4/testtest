<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasSubDomain extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_en', 'abas_domain_id', 'category', 'description', 'description_en', 'code'];

    protected $appends = ['translated_category'];

    public function domain()
    {
        return $this->belongsTo(AbasDomain::class, 'abas_domain_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany(AbasQuestion::class, 'abas_sub_domain_id', 'id')->orderBy('question_number', 'ASC');
    }

    public function getTranslatedCategoryAttribute()
    {
        return __($this->category);
    }
}
