<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OtherAccount;

class OtherAccounts extends Component
{
	public $parametro;

    public function render()
    {
        $accounts   = OtherAccount::where('user_id', auth()->id())
                            ->latest('id')
                            ->get();

        return view('livewire.other-accounts', compact('accounts'));
    }

   	protected $listeners = [
        'event' => 'show'
    ];

    public function show($param)
    {
        $this->parametro = $param;        
    }
}
