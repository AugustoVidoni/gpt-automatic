<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ApiGpt extends BaseController
{
    public function index()
    {
         // Verifica se a requisição é do tipo POST
         if ($this->request->getMethod() === 'post') {
            // Obtém os dados enviados pela API
            $pergunta = $this->request->getPost('pergunta');
            $url = $this->request->getPost('url');
            $url = $_POST["url"];
            $splited_url = explode(' ', $url);
            
            $tag_html = $this->request->getPost('tag_html');
            foreach($splited_url as $single) {
                echo $single;
            }
            

            // Aqui você pode fazer o tratamento dos dados recebidos
            // Por exemplo, exibir os dados em uma página de resposta
                // echo "Pergunta: " . $pergunta ;
                // echo "URL: " . $url;
                // echo "Tag HTML: " . $tag_html ; 

            

            // Você também pode realizar outras ações, como salvar no banco de dados ou chamar outras APIs
            // ...

            // Por fim, você pode enviar a resposta em formato JSON, caso queira retornar um resultado para o frontend
            return $this->response->setJSON(['success' => true, 'message' => 'Dados recebidos com sucesso!']);
        } else {
            // Se a requisição não for POST, retorna uma resposta de erro
            return $this->response->setStatusCode(400)->setJSON(['error' => 'Requisição inválida']);
        }
    }
}
