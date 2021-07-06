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

class EnderecoModel extends Model
{
    protected $table      = 'tb_endereco';
    protected $primaryKey = 'id_endereco';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['cep','logradouro','cidade','uf','bairro','n_endereco','fk_endereco'];

    protected $useTimestamps = false;
   // protected $createdField  = 'created_at';
   // protected $updatedField  = 'updated_at';
   // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

public function veficaEndereco($data)
{
  $endereco=$this->where(array('cidade'=>$data['cidade'],'cep'=>$data['cep']))->findAll();
  
  return $endereco;
}
    

}

?>