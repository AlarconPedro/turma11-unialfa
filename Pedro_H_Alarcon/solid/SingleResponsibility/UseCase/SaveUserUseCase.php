<?php

use Illuminate\Support\Facades\Mail;

class SaveUserUseCase
{
    private $clienteRepository;
    private $mailer;
    private $cliente;

    public function __construct(array $cliente)
    {
        //Enviar os dados do cliente para uma entidade de negocio.
        $this->cliente= new Cliente($cliente);

        //Enviar a entidade para o repositorio.
        $this->clienteRepository= new ClienteRepository();
        $this->clienteRepository->create($this->cliente);
        //Enviar o email
        $this->mailer = new Mailer();
        $this->mailer->sendEmail(
            'Bem vindo ao sistema',
            'Cadastrado com sucesso',
            ["robson@gmail.com"],
            [""]
        );
    }
}