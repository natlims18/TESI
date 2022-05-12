<?php

    class LoginModel extends CI_Model {

    

        public function Registrar($data) {
            //valida se o usuário existe
             /*
            try{
            $this->db->insert('login', $data);
            return true;
            }
            catch(Exception $ex){

                return false;
            } **/
            try {
                if ( $this->ValidaEmail( $data["email"] ) )  {
                    $this->db->insert('usuario', $data);

                    return true;
                }
                else
                    return false;
            }
            catch (Exception $ex) {
                return false;
            }
        }

        public function ValidaEmail( $email ) {
            $sql = "SELECT count(1) as total 
                    FROM usuario
                    WHERE email='" . $email ."' ";
            $retorno = $this->db->query($sql)->result();

            //var_dump( $retorno );

            if ($retorno[0]->total == 0)
                return true;

            return false;
        }

        public function CriarSenha( $email, $senha, $chave) {

            if ( $this->ValidaChave( $email, $chave ) ) {
                $sql= "
                        UPDATE usuario 
                            SET senha='" . $senha . "'
                        WHERE email='" . $email . "'
                            AND chave='" . $chave . "'
                    ";
                try {
                    $this->db->query($sql);
                    return true;
                }
                catch (Exception $ex) {
                    return false;
                }
            }
            return false;
        }

        public function ValidaChave( $email, $chave ) {
            $sql = "SELECT count(1) as total 
                FROM usuario
                WHERE email='" . $email . "'
                and chave='" . $chave . "'
                ";
            $retorno = $this->db->query($sql)->result();

            if ($retorno[0]->total == 0) {
                return false;
            }

            return true;
        }

        public function ValidaLogin( $email, $senha ) {
            $sql= "SELECT COUNT(1) as total FROM usuario 
                    WHERE email='" . $email . "' 
                        AND senha='" . $senha . "'";

            $retorno = $this->db->query($sql)->result();

            if ( $retorno[0]->total == 0) { //Não encontrou
                return false;
            }

            return true;
        }
    }
?>





