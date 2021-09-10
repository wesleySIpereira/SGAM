<?php
/*
  SISTEMA SGAM- SISTEMA DE GESTÃO DE ARQUIVO MORTO ESCOLAR 
  DESENVOLVIDO ORGULHOSAMENTE COM CI4  
  MOdulo Documentos
  19:49   05/09/2021 
  AUTOR : WESLEY DA SILVA PEREIRA 

  A ideia do software aqui é servir de auxilio para escolas controlarem seus aquivos de aluno
  que já se formaram na instituição. Mantendo uma forma de organizar e buscar esses dados quando
  solicitados.

   VARIAVEIS DE CONTROLE PAGINA: TITULO, SUBTITULO  E BREADCUMBS
   ####################
   CONTROLE DE BUGS
 
*/
namespace App\Controllers;

use App\Models\SalaModel;

class Documento extends BaseController
{     
	#cria objetos para usar no controller
  private $SalaModel;
    
	public function index()
	{  $session = \Config\Services::session();
	 $modal=$session->getFlashdata();	
      $data=array('titulo'=>'Gerir Locais',
	               'subtitulo'=>'Novo local',
				    't_titulo'=>'Locais',
					 'l_titulo'=>base_url().'/index.php/documento'
				   
	 
	);
	 
  #pega todos as salas cadastradas  para mostrar.
 #cria o objeto e passa para escope global facilita a vida em mais 70%

 $this->SalaModel= $obj = new SalaModel();
 $data['sala']=$this->SalaModel->findAll();

    echo view('template/header',$data);
	  
    if(count($modal)!==0){ 
      echo view('modais/modal',$modal);
    }
     echo view('sala/index',$data);
     echo view('template/footer',$data);
  
}

 public function add(){

  $session = \Config\Services::session();
  $modal=$session->getFlashdata();	
     $data=array('titulo'=>'Gerir Locais',
                'subtitulo'=>'Nova Sala',
           't_titulo'=>'Local',
          'l_titulo'=>base_url().'/index.php/documento'
          
  
 );
  
 
   echo view('template/header',$data);
   
   if(count($modal)!==0){ 
     echo view('modais/modal',$modal);
   }
    echo view('sala/add',$data);
    echo view('template/footer',$data);
 

 }

public function add_sala(){

 # INSERIR  PEGAR O REQUEST POST SALVA EM $DATA[] COMO ARRAY FACILITA A VIDA EM 70%

 $data=$this->request->getPost();

 $this->SalaModel= $obj = new SalaModel();

#salva no banco so p/ teste 08-09-2021
 
$id_pasta=$this->SalaModel->insert($data['sala']);

 #salva os dados da flashdata 
 $session = \Config\Services::session();
 $modal= array(
'tipo'=>'success',
'msg'=>'Salva com sucesso!',
'titulo'=>'SGAM',
'stitulo'=>'SALA ADICIONADA COM SUCESSO',
'fa'=>'fa-check'

 );

$session->setFlashdata($modal);// set o valor da flashdata 

return redirect()->to(base_url('index.php/documento')); // redireciona 

}


public function estante($id_sala=null){
 /* BUSCAR PRIMEIRAMENTE A SALA PELO ID SALA 

    DEPOIS FAZER FOREACH BUSCANDO PELAS ESTANTES DESSA MESMA SALA
    */



  $session = \Config\Services::session();
	 $modal=$session->getFlashdata();	
      $data=array('titulo'=>'Gerir Locais',
	               'subtitulo'=>'Novo local',
				    't_titulo'=>'Locais',
					 'l_titulo'=>base_url().'/index.php/documento'
				   
	 
	);
	 
  #pega todos as salas cadastradas  para mostrar.
 #cria o objeto e passa para escope global facilita a vida em mais 70%

 $this->SalaModel= $obj = new SalaModel();
 $data['sala']=$this->SalaModel->find($id_sala);
     
     var_dump($data['sala']);
    
    echo view('template/header',$data);
	  
    if(count($modal)!==0){ 
      echo view('modais/modal',$modal);
    }
     echo view('estante/index',$data);
     echo view('template/footer',$data);
  
}

}
