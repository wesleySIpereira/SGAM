<?php
/*
  SISTEMA SGAM- SISTEMA DE GESTÃO DE ARQUIVO MORTO ESCOLAR 
  DESENVOLVIDO ORGULHOSAMENTE COM CI4  
  01:49   23/06/2021 
  AUTOR : WESLEY DA SILVA PEREIRA 

  A ideia do software aqui é servir de auxilio para escolas controlarem seus aquivos de aluno
  que já se formaram na instituição. Mantendo uma forma de organizar e buscar esses dados quando
  solicitados.

   VARIAVEIS DE CONTROLE PAGINA: TITULO, SUBTITULO  E BREADCUMBS

*/
namespace App\Controllers;

use App\Models\ContatoModel;
use App\Models\EnderecoModel;
use App\Models\PessoaModel;

class Pessoa extends BaseController
{

	public function index()
	{  $session = \Config\Services::session();
	  //var_dump($session->getFlashdata());	
      $data=array('titulo'=>'Cadastrar Ficha Aluno',
	               'subtitulo'=>'Nova ficha',
				    't_titulo'=>'Aluno',
					 'l_titulo'=>base_url().'/index.php/pessoa'
				   
	 
	);
	 
	  echo view('template/header',$data);
	   echo view('aluno/add',$data);
	   echo view('template/footer',$data);
	
	}

	public function inserir(){
     /*
       PARA FACILITAR SEMPRE TRABALHAR COM ARRAY VINDO DO FRONT 
	   NOMENCLATURA EX: PESSOA   pessoa['nm_pessoa'] 

	 */

	  $data=$this->request->getPost(); //pega todos os dados do front
	  $PessoaModel = new PessoaModel(); //cria variavel do model pessoa
	 
	  $cid_pessoa= $PessoaModel->insert($data['pessoa']);

	  $EnderecoModel = new EnderecoModel(); //cria a variavel endereco model
      
	   
       $data['endereco']['cid_pessoa']=$cid_pessoa;
	   
     
	  #VERIFICA SE JÁ EXISTE O ENDEREÇO CASO TRUE PEGA SOMENTE O ID_

	  if (count($id_endereco=$EnderecoModel->veficaEndereco($data['endereco']))==0) {
		 //Não existe endereço adiciona o endereço aqui
         $EnderecoModel->insert($data['endereco']);
         $PessoaModel->update($cid_pessoa,$data['pessoa']);

	  }else{
		  // 'EXISTE O ENDERÇO JÁ SOMENTE ADICIONA O CID_PESSOA AO REGISTRO DA TABELA';
           
		   $data['pessoa']['cid_endereco']=$id_endereco[0]['id_endereco'];
		   $PessoaModel->update($cid_pessoa,$data['pessoa']);
           $session = \Config\Services::session();
		   $session->setFlashdata(['tipo'=>'success','msg'=>'Cadastro salvo!']);
		    return redirect()->to('http://localhost/SGAM/public/index.php/pessoa');
	  }
	
	   
     

	}

  
}

?>