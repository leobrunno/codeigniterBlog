<?php 

    class Usuario extends CI_COntroller {

        public function index(){
            $this->load->view('administracao/index');
        }

        public function autenticar(){
            $usuario = $this->input->post('usuario');
            $senha = $this->input->post('senha');
            
            $teste = $this->Usuarios_model->logar($usuario, $senha);


            if($teste){
                $this->session->set_userdata("usuario_logado", $usuario);
                $this->session->set_flashdata('success', 'Usuário logado com sucesso!');
                redirect(base_url().'Home/index');
            }else{
                $this->session->set_flashdata('error', 'Usuário ou senha inválido!');
                redirect(base_url().'usuario/index');
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect(base_url('usuario/index'));
        }

        public function cadastro(){
            $this->load->view('administracao/cadastro');
        }

        public function cadastrar(){
            $usuario = $this->input->post();
            $this->Usuarios_model->inserirUsuario($usuario);
            redirect(base_url('usuario/index'));
        }
    }