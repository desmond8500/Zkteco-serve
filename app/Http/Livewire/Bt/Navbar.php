<?php

namespace App\Http\Livewire\Bt;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.bt.navbar',[
            'user' => Auth::user(),
        ]);
    }
}
