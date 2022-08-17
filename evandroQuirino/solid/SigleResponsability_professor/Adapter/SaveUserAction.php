<?php 

class SaveUserAction
{
    protected function handle( string $name, string $cpf, int $age) : array
    {
       $input = [
        "name" => $name,
        "cpf" => $cpf,
        "age" => $age
       ];

       //nosso caso de uso
       $createUser = new SaveUserUseCase($input);
       return [];
    }
}