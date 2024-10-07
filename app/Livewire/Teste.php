<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Teste extends Component
{
    public String $search = '';

    public function render()
    {
        return view('livewire.teste', [
            'users' => User::query()
                ->where('name', 'like', "%{$this->search}%")
                ->get()
        ]);}
}
