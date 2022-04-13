<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Saves extends Component
{
    public function render()
    {
        return view('livewire.saves',[
            'fichiers' => Storage::disk('public')->files('saves')
        ])->extends('layout.app')->section('content');
    }
}
