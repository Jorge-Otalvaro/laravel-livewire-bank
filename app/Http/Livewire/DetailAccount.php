<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;

class DetailAccount extends Component
{
    public function render()
    {
    	$account = Account::where('user_id', auth()->id())->get()->sum('saldo');

        return view('livewire.detail-account', compact('account'));
    }
}
