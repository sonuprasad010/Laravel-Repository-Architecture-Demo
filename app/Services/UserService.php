<?php
namespace App\Services;

use App\Interfaces\Repositories\UserRepository;

class UserService{
    protected $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function getAllUsers(){
        $this->userRepository->all();
    }

}