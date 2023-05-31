<?php
namespace App\Repositories;

use App\Http\Resources\WalkCollection;
use App\Models\Walk;

class WalkRepository
{
    /**
     * Retour l'ensemble des Walks sous la forme d'une collection
     */
    public function all()
    {
        $walks = Walk::all();
        return new WalkCollection($walks);
    }
}