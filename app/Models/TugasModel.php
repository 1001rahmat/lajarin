<?php

namespace App\Models;

use CodeIgniter\Database\PDO\Builder;
use CodeIgniter\Model;

class TugasModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'list_tugas';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'id',
        'username',
        'id_tugas',
        'id_submit',
        'path',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    // create function of two variables, the secon variable can be null
    public function get_assignment_submissions($username = null, $id_tugas = null)
    {
        $builder = $this->db->table('list_tugas a');
        $builder->select('a.*, u.*');
        $builder->join('upload_tugas u', 'a.id_tugas = u.id_tugas', 'left');

        if ($id_tugas !== null && $username !== null) {
            $builder->where([
                'u.username' => $username,
                'a.id_tugas' => $id_tugas,
            ]);
        } elseif ($username !== null && $id_tugas === null) {
            $builder->where('u.username', $username);
        } elseif ($username === null && $id_tugas !== null) {
            $builder->where('a.id_tugas', $id_tugas);
        } else {
            die('Error: TugasModel::get_assignment_submissions()' . PHP_EOL . 'Message: Invalid parameters');
        }

        $query = $builder->get();
        return $query->getResult();
    }
}
