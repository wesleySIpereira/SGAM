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

class ContatoModel extends Model
{
    protected $table      = 'tb_contato';
    protected $primaryKey = 'id_contato';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['fk_contato','n_telefone','nm_email'];

    protected $useTimestamps = false;
   // protected $createdField  = 'created_at';
   // protected $updatedField  = 'updated_at';
   // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function veficaContato($data)
    {
      $contato=$this->where(array('n_telefone'=>$data['n_telefone'],'nm_email'=>$data['nm_email']))->findAll();
      
      return $contato;
    }


}

?>