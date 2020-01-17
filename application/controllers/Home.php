<?php

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('usuario_logado')) {
            redirect(base_url('usuario/index'));
        }
    }

    public function index() {

        $parametro['postagens'] = $this->Postagem_model->acessoPost();

        $this->load->view('cabecalho');
        $this->load->view('menu_post', $parametro);
        $this->load->view('conteudo', $parametro);
    }

    public function buscar() {

        $parametro['postagens'] = $this->Postagem_model->acessoPost();
        $busca = $this->input->post('busca');
        $data2['busca'] = $busca;

        $this->db->like('titulo', $busca);
        $this->db->or_like('conteudo', $busca);
        $data2['postagens'] = $this->Postagem_model->acessoPost();

        $this->load->view('cabecalho');
        $this->load->view('menu_post', $parametro);
        $this->load->view('resultado_busca', $data2);
    }

    public function visualizar($id) {
        $parametro['postagens'] = $this->Postagem_model->acessoPost();
        $parametro2['postagens'] = $this->Postagem_model->getPost($id);

        $this->load->view('cabecalho');
        $this->load->view('menu_post', $parametro);
        $this->load->view('visualizar', $parametro2);
    }

    public function salvar() {
        $postagem = $this->input->post();
        $this->Postagem_model->inserir($postagem);
        redirect();
    }

    public function novo(){
        $this->load->view('cabecalho');
        $this->load->view('novo');
    }

    public function editar($id){
        $parametro['postagens'] = $this->Postagem_model->getPost($id);
        $this->load->view('cabecalho');
        $this->load->view('edicao', $parametro);
    }

    public function atualizar(){
        $postagem = $this->input->post();
        $this->Postagem_model->atualizar($postagem);
        redirect('home/index');
    }

    public function excluir($id){
        $this->Postagem_model->deletar($id);
        redirect('home/index');
    }
}

?>