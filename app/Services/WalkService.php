<?php
namespace App\Services;

use App\Repositories\WalkRepository;

class WalkService {

    public function __construct(private WalkRepository $wr)
    {
        
    }

    public function all()
    {
        return $this->wr->all();
    }
}