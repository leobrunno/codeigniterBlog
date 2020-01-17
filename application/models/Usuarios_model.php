<?php 
    class Usuarios_model extends CI_Model{
        public function logar($usuario, $senha){
            $this->db->where('usuario', $usuario);
            $this->db->where('senha', $senha);
            $usuario = $this->db->get("usuarios")->row_array();
            return $usuario;
        }

        public function inserirUsuario($usuario) {
            return $this->db->insert('usuarios', $usuario);
        }
    }