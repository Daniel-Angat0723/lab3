<?php
namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model{
    protected $table = "ddangat_myguests";
    public function getGuest($id = false)
    {
        if ($id === false) {
          return $this->findAll();
        }
    
        return $this->where(['id' => $id])->first();
    }
}