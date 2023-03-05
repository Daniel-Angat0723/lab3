<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'ddangat_news';

    protected $allowedFields = ['title', 'slug', 'body'];

    public function getNews($id = false)
    {
        if ($id === false) {
          return $this->findAll();
        }
    
        return $this->where(['id' => $id])->first();
    }
    
}