<?php

    class ProdutoModel extends CI_Model {

        public function selecionarTodos() {
            $retorno = $this->db->query("
                                    SELECT
                                        *
                                    FROM produto            
                                    ");
                                    
            return $retorno->result();
        }

        public function buscarId( $id ) {
            $retorno = $this->db->query( "SELECT * FROM produto WHERE id=" . $id );
            return $retorno->result();
        }
        
        public function buscarProduto($perecivel, $produto, $tipo, $valor, $imagem) {
            $sql = "SELECT COUNT(1) as total FROM produto WHERE perecivel = " . $perecivel . ", produto = '" . $produto . "', tipo = '" . $tipo . "',
                valor = " . $valor . ",
                imagem = '" . $imagem . "';";

            $retorno = $this->db->query( $sql )->result();

            return $retorno;
        }
        
        //Salvar alterações no produto
        public function salvaraltercao( $id, $perecivel, $produto, $tipo, $valor, $imagem) {
            $sql = "UPDATE produto
                    SET
                        perecivel = '" . $perecivel . "',
                        produto = '" . $produto. "',
                        tipo = " . $tipo . ",
                        valor = " . $valor . ",
                        imagem = '" . $imagem. "'
                    WHERE id= " . $id . "
                ";
            $this->db->query( $sql );

            return true;
        }

        public function salvarnovo($perecivel, $produto, $tipo, $valor, $imagem) {
            $sql = "INSERT INTO produto 
                    ( perecivel, produto, tipo, valor, imagem)
                    VALUES
                    (" . $perecivel .", '" . $produto . "', '" . $tipo . "', " . $valor . ", '" . $imagem . "')
                ";

            $this->db->query( $sql );

            return true;
        }

        public function excluir($id) {
            $sql="DELETE FROM produto WHERE id=" . $id;
            $this->db->query( $sql );
            return true;
        }
    }
?>