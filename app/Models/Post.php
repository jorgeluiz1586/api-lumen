<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'theme',
        'date',
        'image',
        'text1',
        'text2',
        'text3'
    ];

    public function rules()
    {
        return [
            // 'title' => 'required',
            // 'theme' => 'required',
            // 'date' => 'required',
            // 'image' => 'required',
            // 'text1' => 'required',
            // 'text2' => 'required',
            // 'text3' => 'required'
        ];
    }

    public function arquivo($id)
    {
        $data = $this->find($id);
        return $data->image;
    }
}