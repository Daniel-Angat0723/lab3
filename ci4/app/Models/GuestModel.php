<?php
namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model{
    protected $table = "ddangat_myguests";
    protected $allowedFields = [
        'fname',
        'lname',
        'tagline'
    ];

    public function getGuest($id = false)
    {
      if ($id === false) {
        return $this->findAll();
      }
  
      return $this->where(['id' => $id])->first();
    }
}