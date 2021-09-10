<?php
/*
  SISTEMA SGAM- SISTEMA DE GESTÃO DE ARQUIVO MORTO ESCOLAR 
  DESENVOLVIDO ORGULHOSAMENTE COM CI4  
  01:49   23/06/2021 
  AUTOR : WESLEY DA SILVA PEREIRA 

  A ideia do software aqui é servir de auxilio para escolas controlarem seus aquivos de aluno
  que já se formaram na instituição. Mantendo uma forma de organizar e buscar esses dados quando
  solicitados.

*/
namespace App\Models;

use CodeIgniter\Model;

class SalaModel extends Model
{
    protected $table      = 'tb_sala';
    protected $primaryKey = 'id_sala';

   protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

   protected $allowedFields = ['nm_sala','txt_sala'];

    protected $useTimestamps = false;
   // protected $createdField  = 'created_at';
   // protected $updatedField  = 'updated_at';
   // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function veficaPessoa($data)
    {
      $pessoa=$this->where(array('nm_pessoa'=>$data['nm_pessoa'],'n_cpf'=>$data['n_cpf'],'n_rg'=>$data['n_rg']))->findAll();
      
      return $pessoa;
    }
   

}

?>