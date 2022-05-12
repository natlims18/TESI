<?php
    class tipoModel extends CI_Model {
        public function selecionarTodos() {
            $dados = $this->db->query("SELECT * FROM tipo_produto ORDER BY tipo")->result();

            return $dados;
        }

        public function inserir($dados) {
            try {
                $this->db->insert('tipo', $dados);
                return true;
            }
            catch (Exception $ex) {
                return false;
            }
        }
    }
?>