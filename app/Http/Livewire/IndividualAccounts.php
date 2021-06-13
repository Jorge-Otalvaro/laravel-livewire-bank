<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\IndividualAccount;

class IndividualAccounts extends Component
{
	public $parametro;
	
    public function render()
    {
        $accounts   = IndividualAccount::where('user_id', auth()->id())
                            ->latest('id')
                            ->get();

        return view('livewire.individual-accounts',compact('accounts'));
    }

    protected $listeners = [
        'event' => 'show'
    ];

    public function show($param)
    {
        $this->parametro = $param;        
    }
}
