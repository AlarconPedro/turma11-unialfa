<?php

namespace Unialfa\PhpXDebug\Domain;

use Exception;

class Cliente
{
    protected string $nome;
    protected string $email;
    protected int $idade;
    protected string $cpf;
    protected Endereco $endereco;

    public function populaCliente(array $cliente, Endereco $endereco)
    {
        $this->setNome($cliente['nome']);
        $this->setEmail($cliente['email']);
        $this->setIdade($cliente['idade']);
        $this->setCpf($cliente['cpf']);
        $this->endereco = $endereco;
    }

    public function imprimeDadosCliente()
    {
        return [
            'nome' => $this->nome,
            'email' => $this->email,
            'idade' => $this->idade,
            'cpf' => $this->cpf,
            'endereco' => $this->endereco->imprimeEndereco(),
        ];
    }

    private function setNome(string $nome)
    {
        if(empty($nome)) {
            throw new Exception('Nome não pode ser vazio');
        }

        $this->nome = $nome;

        return $this;
    }
    
    private function setEmail(string $email)
    {
        return $this->email = $email;

        return $this;
    }

    private function setIdade(int $idade)
    {
        return $this->idade = $idade;

        return $this;
    }

    private function setCpf(string $cpf)
    {
        return $this->cpf = $cpf;

        return $this;
    }
}
