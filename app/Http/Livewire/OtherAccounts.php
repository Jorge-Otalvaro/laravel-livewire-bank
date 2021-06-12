<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OtherAccounts extends Component
{
	public $parametro;

    public function render()
    {
        return view('livewire.other-accounts');
    }

   	protected $listeners = [
        'event' => 'show'
    ];

    public function show($param)
    {
        $this->parametro = $param;        
    }
}
