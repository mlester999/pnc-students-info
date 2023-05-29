<?php

namespace App\Models;

use CodeIgniter\Model;

class UserInfoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user_info';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'section', 'student_number', 'contact_number'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'name' => 'required',
        'section' => 'required',
        'student_number' => 'required|numeric|min_length[7]|max_length[7]',
        'contact_number' => 'required|numeric|min_length[11]|max_length[11]',
    ];
    protected $validationMessages   = [
        'name' => [
            'required' => 'This field is required.',
        ],
        'section' => [
            'required' => 'This field is required.',
        ],
        'student_number' => [
            'required' => 'This field is required.',
            'numeric' => 'Please input numerics only.',
            'min_length' => 'Must be 7 characters only.',
            'max_length' => 'Must be 7 characters only.',
        ],
        'contact_number' => [
            'required' => 'This field is required.',
            'numeric' => 'Please input numerics only.',
            'min_length' => 'Must be 11 characters only.',
            'max_length' => 'Must be 11 characters only.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}

// Made by Mark Lester T. Acak
