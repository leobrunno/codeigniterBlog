<?php 

class Postagem_model extends CI_Model {
    public function acessoPost() {
        $query = $this->db->get('postagem')->result_array();
        return $query;
    } 

    public function getPost($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('postagem');
        return $query->row_array();
    }

    public function inserir($postagem) {
        return $this->db->insert('postagem', $postagem);
    }

    public function atualizar($postagem){
        $this->db->where('id', $postagem['id']);
        return $this->db->update('postagem', $postagem);
    }

    function deletar($id) {
        $this->db->where('id', $id);
        return $this->db->delete('postagem');
    }
}