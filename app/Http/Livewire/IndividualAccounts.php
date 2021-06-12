<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IndividualAccounts extends Component
{
	public $parametro;
	
    public function render()
    {
        return view('livewire.individual-accounts');
    }

    protected $listeners = [
        'event' => 'show'
    ];

    public function show($param)
    {
        $this->parametro = $param;        
    }
}
