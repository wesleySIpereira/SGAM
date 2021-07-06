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

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class FichaModel extends Model
{
    protected $table      = 'tb_ficha';
    protected $primaryKey = 'id_ficha';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['fk_ficha','dt_cadastro','td_saida'];

    protected $useTimestamps = false;
   // protected $createdField  = 'created_at';
   // protected $updatedField  = 'updated_at';
   // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

  public function show($data){
    $db = db_connect();
    $builder = $db->table('tb_ficha f'); 
    $builder->join('tb_pessoa p','p.id_pessoa=f.fk_ficha');
    $builder->join('tb_endereco e','e.fk_endereco=p.fk_endpessoa');
    $builder->join('tb_contato c','p.id_pessoa=c.fk_contato');
   // $builder->where($data);
    $builder->like($data, 'match');
    return $query=$builder->get()->getResultArray();
  }



}