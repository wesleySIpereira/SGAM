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
   ####################
   CONTROLE DE BUGS
   001 BUG COM ENDEREÇO QUE JÁ EXISTE: VERIFICAR LINHA 92
   002 FAZER BUSCADOR TELA VISUALIZAR
*/
namespace App\Controllers;

use App\Models\ContatoModel;
use App\Models\EnderecoModel;
use App\Models\FichaModel;
use App\Models\PessoaModel;
use App\Models\V_fichaModel;
use CodeIgniter\HTTP\Request;
use DateTime;
use FPDF;

helper('funcao');
helper('fpdf');
class Pessoa extends BaseController
{     
	
    private $PessoaModel ;//cria variavel do model pessoa
    private $EnderecoModel;// cria variavel do model endereço
	private $ContatoModel;//cria variavel do model contato
    private $FichaModel; //cria variavel do model ficha
	
	
	
	public function index()
	{  $session = \Config\Services::session();
	 $modal=$session->getFlashdata();	
      $data=array('titulo'=>'Cadastrar Ficha Aluno',
	               'subtitulo'=>'Nova ficha',
				    't_titulo'=>'Aluno',
					 'l_titulo'=>base_url().'/index.php/pessoa'
				   
	 
	);
	 
	

	
	  echo view('template/header',$data);
	  
	  if(count($modal)!==0){ 
		echo view('modais/modal',$modal);
	  }
	   echo view('aluno/add',$data);
	   echo view('template/footer',$data);
	  
      


	}
	public function etiqueta()
	{  $session = \Config\Services::session();
	
		$modal=$session->getFlashdata();	
        $data=array('titulo'=>'Gerar etiquetas',
	               'subtitulo'=>'Nova ficha',
				    't_titulo'=>'Aluno',
					 'l_titulo'=>base_url().'/index.php/pessoa'
				   
	 
	);
	 
	

	
	  echo view('template/header',$data);
	  
	  if(count($modal)!==0){ 
		echo view('modais/modal',$modal);
	  }
	    
	  echo view('aluno/geratag',$data);
	   echo view('template/footer',$data);
	  
      


	}

	public function inserir(){
    
        /*
		   PEGAR OS DADOS VINDOS DO FRONT 
		   1º CADASTRAR PESSOA.
		      1-1 Verifica  PESSOA JÁ ESTA CADASTRADA CASO SIM, REDIRECIONA E  ARMAZENA MSG ERRO FLAHSDATA
			  1-2 CASA NÃO EXISTA CADASTRAR PESSOA E PASSAR PARA  2ª.
		   2º VERIFICAR SE SE JÁ EXISTE O ENDEREÇO. 
		       2-1 CASO SIM ATUALIZA PESSOA LEVANDO O ID DO ENDEREÇO.
			   2-2 CASO NÃO CRIAR NOVO ENDEREÇO E ADICIONAR ID DA PESSOA. 
		   3ª ADICIONAR CONTATO E LEVAR O ID DA PESSOA PARA O CONTATO.
		   4º ADICIONAR NOVA FICHA LEVANDO O ID DA PESSOA.   
		*/
     $data=$this->request->getPost();

     $this->PessoaModel= $obj =new PessoaModel(); //cria objto e passa para variavel global PessoaModel.
     $this->EnderecoModel= $obj = new EnderecoModel();// cria objeto e passa para variavel global endereço model.
	 $this->ContatoModel = $obj = new ContatoModel();//cria objeto e passa variavel global ContatoModel
	 $this->FichaModel  = $obj = new FichaModel(); // cria objeto e passa variavel global fichaModel
	 
	 //FORMATAR DATA PARA PADRAO MYSQL
	 $dtantiga=$data['pessoa']['dt_nascimento'];
     $data['pessoa']['dt_nascimento']=formataBD($dtantiga);
     
	
	 # 1º CADASTRAR PESSOA.
	 
	 if(count($this->PessoaModel->veficaPessoa($data['pessoa']))==0){
     # 1-2 CASA NÃO EXISTA CADASTRAR PESSOA E PASSAR PARA  2ª.
     
	 $id_pessoa=$this->PessoaModel->insert($data['pessoa']);//CADASTRA A PESSOA E PEGA O ID GERADO.
      
	          #2º VERIFICAR SE SE JÁ EXISTE O ENDEREÇO. 
	   		 if(count($end=$this->EnderecoModel->veficaEndereco($data['endereco']))==0)
				{
				  #2-2 CASO NÃO CRIAR NOVO ENDEREÇO E ADICIONAR ID DA PESSOA. 
				  //pego o id do endereço
				  $id_endereco=$this->EnderecoModel->insert($data['endereco']);
				  
                  $data['pessoa']['fk_endpessoa']=$id_endereco;
				  //atualizar novamente na tabela endereço 
				  $data['endereco']['fk_endereco']=$id_endereco;

				 

				  #atualiza o endereço com fk do endereço
				  $this->PessoaModel->update($id_pessoa,$data['pessoa']);
				  
				  $this->EnderecoModel->update($id_endereco,$data['endereco']);
				  # 3ª ADICIONAR CONTATO E LEVAR O ID DA PESSOA PARA O CONTATO.
				  $data['contato']['fk_contato']=$id_pessoa;

				 
				  $this->ContatoModel->insert($data['contato']);
			
				 # 4º ADICIONAR NOVA FICHA LEVANDO O ID DA PESSOA. 
				
                  //criar array da tabela ficha 
				  $hoje=date('Y-m-d');
				  $ficha=array(
					  'fk_ficha'=>$id_pessoa,
					  'dt_cadastro'=>$hoje
				  );
                  // var_dump($data['ficha']);
				
			      $id= $this->FichaModel->insert($ficha);//insere a ficha e retorna o ID-ficha
				    
				    #salva os dados da flashdata 
				    $session = \Config\Services::session();
				    $modal= array(
					'tipo'=>'success',
					'msg'=>'Salva com sucesso!',
					'titulo'=>'SGAM',
					'stitulo'=>'Ficha: '.$id.' | Aluno: '.$data['pessoa']['nm_pessoa'],
					'fa'=>'fa-check'

				    );

				$session->setFlashdata($modal);// set o valor da flashdata 
				
				return redirect()->to(base_url('index.php/pessoa')); // redireciona 

				}else{
					#2-1 CASO SIM ATUALIZA PESSOA LEVANDO O ID DO ENDEREÇO.
					
					
					$id_endereco=$end[0]['id_endereco'];
					
					
				
					//$this->PessoaModel->update($id_pessoa,$data['pessoa']);
					$data['contato']['fk_contato']=$id_pessoa;//adiciona id_pessoa
                    
					$this->ContatoModel->insert($data['contato']); 
					
					$data['pessoa']['fk_endpessoa']=$id_endereco; 
					$data['endereco']['fk_endereco']=$id_endereco;
					
					$this->PessoaModel->update($id_pessoa,$data['pessoa']);
					$this->EnderecoModel->update($id_endereco,$data['endereco']);
					# 4º ADICIONAR NOVA FICHA LEVANDO O ID DA PESSOA. 
				
				
					//criar array da tabela ficha 
					$hoje=date('Y-m-d');
					$ficha=array(
						'fk_ficha'=>$id_pessoa,
						'dt_cadastro'=>$hoje
					);
  
					$id= $this->FichaModel->insert($ficha);//insere a ficha e retorna o ID-ficha
					  
					  #salva os dados da flashdata 
					  $session = \Config\Services::session();
					  $modal= array(
					  'tipo'=>'success',
					  'msg'=>'Salva com sucesso!',
					  'titulo'=>'SGAM',
					  'stitulo'=>'Ficha: '.$id.' | Aluno: '.$data['pessoa']['nm_pessoa'],
					  'fa'=>'fa-check'
  
					  );
  
				  $session->setFlashdata($modal);// set o valor da flashdata 
				  
				  return redirect()->to(base_url('index.php/pessoa')); // redireciona 
				}
       


	 }else{
    
      #1-1 Verifica  PESSOA JÁ ESTA CADASTRADA CASO SIM, REDIRECIONA E  ARMAZENA MSG ERRO FLAHSDATA
	  $session = \Config\Services::session();
      $modal= array(
        'tipo'=>'danger',
		'msg'=>'Ficha já está cadastrada verificar!',
		'titulo'=>'SGAM',
		'stitulo'=>'Erro',
		'fa'=>'fa-warning'

	  );

	  $session->setFlashdata($modal);
	 
	  return redirect()->to(base_url('index.php/pessoa'));



	 }



	}

   public function show() 
   {   
	
       $FichaModel = new FichaModel();
      
	  //BUSCA  ALUNO

      $data=$this->request->getPost();//PEGA OS DADOS DO FORMULARIO DE BUSCA
     
	  if(!empty($data)){//se tiver dados do formulario faz a pesquisa.
	   // $aluno['aluno']=$V_fichaModel->where($data['pessoa'])->findAll();
		$aluno['aluno']=$FichaModel->show($data['pessoa']);
	   
		
	  }
	  
	   $pager = \Config\Services::pager();
       
	  
	   //INFORMAÇÃO DA PAGINA 
	  $data=array('titulo'=>'Busca ficha',
	  'subtitulo'=>'Fichas',
	   't_titulo'=>'Aluno',
		'l_titulo'=>base_url().'/index.php/pessoa'
	
         );   
      
	  echo view('template/header',$data);
	  if(isset($aluno)and (!empty($aluno))){ 
        #busca pela ficha do aluno caso tenha valor faça a busca.
		 /* ["id_ficha"]=> string(2) "16" 
		   ["nm_pessoa"]=> string(6) "wesley" 
		   ["nm_mae"]=> string(5) "nelia" 
		   ["nm_pai"]=> string(7) "vicente" 
		   ["n_cpf"]=> string(14) "091.171.666-16" 
		   ["n_rg"]=> string(6) "mg 654"
		    ["dt_nascimento"]=> string(10) "1986-06-18" 
			["cep"]=> string(9) "38740-402"
			 ["logradouro"]=> string(15) "Rua Afonso Pena"
			  ["cidade"]=> string(11) "Patrocínio" 
			  ["uf"]=> string(2) "MG"
			   ["bairro"]=> string(14) "Santo Antônio"
			    ["n_endereco"]=> string(4) "3215" 
				 ["n_telefone"]=> string(15) "(34) 98873-9676" 
				 ["nm_email"]=> string(23) "wesley_cras@hotmail.com"  */
		
		echo view('aluno/find',$aluno);
		echo view('modais/ver_aluno');
	  }else{
	  echo view('aluno/find');
	  }
	  echo view('template/footer',$data);
	  
   }


  
}
