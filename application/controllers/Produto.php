<?php

    class produto extends CI_Controller {

        public function __construct() {
            parent::__construct();
            
            // if (    !isset($_SESSION["barba"]) ) {
            //     header("location: /index.php/login");
            // }
        }

        public function index() {
            $this->load->model("ProdutoModel");

            $produtos = $this->ProdutoModel->selecionarTodos();
            $tabela = "";

            foreach($produtos as $item ) {
                //GET
                $tabela = $tabela . "<tr>";

                if ( isset($_SESSION["barba"])) {
                    $tabela = $tabela . "
                        <td style='cursor: pointer'>
                            <a href='/index.php/produto/alterar?codigo=" . $item->id . "'>
                                ✏️
                            </a>
                            <a href='/index.php/produto/excluir?codigo=" . $item->id . "'>
                                ❌    
                            </a>
                        </td>";
                }

                $tabela = $tabela . "
                        <td>" . $item->produto ."</td>
                        <td>" . $item->perecivel ."</td>
                        <td>" . $item->tipo ."</td>
                        <td>" . $item->valor ."</td>
                        <td>
                            <img src='" . $item->imagem . "' style='width:150px' />
                        </td>
                    </tr>
                ";
            }

            $variavel = array(
                "lista_produtos" => $produtos,
                "tabela" => $tabela,
                "titulo" => "Você está Barba's Backery",
                "sucesso" => "Produto add com sucesso",
                "erro" => "Erro"
            );

            $this->template->load("templates/adminTemp", "produtos/index.php", $variavel );
        }

        //Alteração de veículo
        public function alterar() {
            $this->load->model("ProdutoModel");

            $id = $_GET["codigo"];

            $retorno = $this->ProdutoModel->buscarId( $id );
            
            $data = array(
                "titulo"=>"Alteração de produtos",
                "produto"=>$retorno[0],
                "opcoes"=>$this->montaComboTipo($retorno[0]->tipo) //3, 4, 5
            );

            $this->template->load("templates/adminTemp", "produtos/formAlterar", $data);


        }

        //Salva os dados atualizados 
        public function salvaralteracao() {
            $this->load->model("ProdutoModel");

            $id = $_POST["id"];
            $perecivel = $_POST["perecivel"];
            $produto = $_POST["produto"];
            $tipo = $_POST["tipo"];
            $valor = $_POST["valor"];
            

            $retorno = $this->ProdutoModel->salvaraltercao(
                $id, $perecivel, $produto, $tipo, $valor
            );

            if ($retorno == true) {
                header('location: /index.php/produto');
            }
            else {
                echo "Erro na alteração";
            }
        }
        
        //Criar produto
        public function formNovo() {
             
            // $opcao = $this->montaComboCores( 0 );
            
            // $data = array(
            //     'opcoes' => $opcao
            // );

            $this->template->load("templates/adminTemp","produtos/formNovo");
        }

        // private function montaComboCores( $idCor ) {
        //     $this->load->model("CorModel");
        //     $cores = $this->CorModel->selecionarTodos();

        //     $option = "";
        //     foreach($cores as $linha) {
        //         $selecionado = "";

        //         if ( $idCor == $linha->id )
        //             $selecionado = "selected";


        //         $option .= "<option 
        //                         value='" . $linha->id . "'
        //                         " . $selecionado . "
        //                     >" 
        //                         . $linha->cor . 
        //                     "</option>"; 
        //     }

        //     return $option;
        // }

        //Salvar novo produto
        public function salvarnovo() {
            
            $this->load->model("ProdutoModel");

            $perecivel = $_POST["perecivel"];
            $produto = $_POST["produto"];
            $tipo = $_POST["tipo"];
            $valor = $_POST["valor"];
            $imagem = $_POST["imagem"];
            
            $retorno = $this->ProdutoModel->buscarProduto($perecivel, $produto, $tipo, $valor, $imagem);

            //var_dump( $_POST );

            if ( $retorno[0]->total > 0 ) {
                echo "Não pode incluir, já existe um total de " . $retorno[0]->total;
            } else {
                $retorno = $this->ProdutoModel->salvarnovo(
                    $perecivel, $produto, $tipo, $valor, $imagem
                ); 
                
                header("location: /index.php/produto");
            }
        }

        //Excluir 
        public function excluir() {
            $this->load->model("ProdutoModel");

            $id = $_GET["codigo"];

            $this->ProdutoModel->excluir($id);

            header("location: /index.php/produto");
        }

    }
?>