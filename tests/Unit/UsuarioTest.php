<?php

namespace Tests\Feature;

use App\Usuario;
use App\User;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    /**
     * @test 01 cadastro de usuario
     */
    public function test_create_usuario()
    {
        User::create([
            'email' => $this->generateRandomString() . '@gmail.com',
            'password' => bcrypt(123456),
        ]);
        Usuario::create([
            'nome' => 'João Pedro',
            'dataDeNascimento' => '1991-06-06',
            'sexo' => 'Masculino',
            'cpf' => '03216598752',
            'telefone' => '54982471452',
            'cidade' => 'Nova Araçá',
            'bairro' => 'Centro',
            'rua' => 'Professor Adão Andreani',
            'numero' => 56,
        ]);

        $usuario = Usuario::where('nome', 'João Pedro')->get();
        $this->assertTrue($usuario->count() > 0);
    }

    //gera string aleatória
    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * @test 02 alterar cadastro
     */
    public function test_update_pessoa()
    {

        $user = new User();
        $user->email = "danilo@gmail.com";
        $user->password = bcrypt("123456");
        $user->save();

        $email = $user->email;
        $password = $user->password;
        
        $user->email = "dani@gmail.com";
        $user->password = bcrypt("123456");

        $usuario = new Usuario();
        $usuario->nome = "Danilo";
        $usuario->dataDeNascimento = "1995-06-06";
        $usuario->sexo = "Masculino";
        $usuario->cpf = "25814254125";
        $usuario->telefone = "54819256987";
        $usuario->cidade = "Bassano";
        $usuario->bairro = "Aparecida";
        $usuario->rua = "Dois de Maio";
        $usuario->numero = 10;
        $usuario->save();

        $nome = $usuario->nome;
        $dataDeNascimento = $usuario->dataDeNascimento;
        $sexo = $usuario->sexo;
        $cpf = $usuario->cpf;
        $telefone = $usuario->telefone;
        $cidade = $usuario->cidade;
        $bairro = $usuario->bairro;
        $rua = $usuario->rua;
        $numero = $usuario->numero;

        $usuario->nome = "Pedro";
        $usuario->dataDeNascimento = "1990-03-23";
        $usuario->sexo = "Masculino";
        $usuario->cpf = "03216591234";
        $usuario->telefone = "54253698749";
        $usuario->cidade = "Passo Fundo";
        $usuario->bairro = "Centro";
        $usuario->rua = "Dois de Maio";
        $usuario->save();

        $userNew = User::where('email', $email)->first();
        $userNew->delete();
        $this->assertFalse(strcmp($nome, $userNew->nome) == 0);
    }
    /**
     * @test 03 excluir pessoa
     */
    public function test_delete_usuario()
    {
        $user = new User();
        $user->email = "danilo@gmail.com";
        $user->password = bcrypt("123456");
        $user->save();

        $usuario = new Usuario();
        $usuario->nome = "Danilo";
        $usuario->dataDeNascimento = "1995-06-06";
        $usuario->sexo = "Masculino";
        $usuario->cpf = "25814578965";
        $usuario->telefone = "54819256987";
        $usuario->cidade = "Bassano";
        $usuario->bairro = "Aparecida";
        $usuario->rua = "Dois de Maio";
        $usuario->numero = 10;
        $usuario->save();

        $usuarios = User::where('email', "danilo@gmail.com")->first();
        $usuarios->delete();
        $this->assertTrue($usuarios->email == 0);
        
    }
    /**
     * @test 01 cadastro de pessoa
     */
    /**public function test_campos_obrigatorios()
    {
        $this->get('/login')
        ->assertStatus(200)
        ->type('Email', 'Senha')
        ->type('tati@gmail.com', '123456');
        

    }*/
        /**
     * @test 04 campos obrigatorios do cadastro de pessoas 
     */
    /**public function test_camppos_obrigatorios()
    {
        Pessoa::create([
            'nome' => 'Cris',
            'dataDeNascimento' => '1990-06-24',
            'telefone' => '54 982471452',
            'tipo_id' => 1,
        ]);

        $pessoas = Pessoa::where('nome', 'Cris')->get();
        $this->assertTrue($pessoas->count() > 0);
    }

    //gera string aleatória
    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }*/



}
