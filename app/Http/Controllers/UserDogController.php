<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserDogController extends Controller
{
    public function __construct(private UserService $us)
    {
    }

    /**
     * Retourne les chiens d'un utilisateur
     *
     * @param User $user
     * @return JsonResponse
     */
    public function index(User $user): JsonResponse
    {
        $dogs = $this->us->getDogs($user);

        return response()->json($dogs);
    }
}
