<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Visit;
use Illuminate\View\View;

class AnimalController extends Controller
{
    public function show(int $animalId, ?int $visitId = null): View
    {
        $animal = Animal::findOrFail($animalId);

        if (isset($visitId)) {
            $visit = Visit::findOrFail($visitId);
        } else {
            $visit = new Visit;
        }

        return view('animal.show', compact('animal','visit'));
    }
}
