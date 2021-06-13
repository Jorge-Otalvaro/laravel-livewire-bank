<?php

namespace App\Http\Livewire;

use App\Models\Account;
use App\Models\Movement;
use Livewire\Component;

class StatusAccount extends Component
{
	public $account_id;

    public function render()
    {
    	$accounts 	= Account::where('user_id', auth()->id())
    						->latest('id')
    						->take(5)->get();

    	$movements 	= Movement::where('user_id', auth()->id())
    						->where('account_id', $this->account_id)
    						->latest('id')
    						->take(5)->get();

        return view('livewire.status-account', compact('accounts', 'movements'));
    }

    public function resetFilters()
    {
    	$this->reset(['account_id']);
    }
}
