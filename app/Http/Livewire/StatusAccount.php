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

        if (count($movements) < 1) {
            $this->alert('error', 'No existen movimientos para mostrar!', [
                'position' =>  'top-end', 
                'timer' =>  3000,  
                'toast' =>  true, 
                'text' =>  '', 
                'confirmButtonText' =>  'Ok', 
                'cancelButtonText' =>  'Cancel', 
                'showCancelButton' =>  false, 
                'showConfirmButton' =>  false, 
            ]);
        }

        if (count($movements) > 0) {
            $this->alert('success', 'Listando movimientos', [
                'position' =>  'top-end', 
                'timer' =>  3000,  
                'toast' =>  true, 
                'text' =>  '', 
                'confirmButtonText' =>  'Ok', 
                'cancelButtonText' =>  'Cancel', 
                'showCancelButton' =>  false, 
                'showConfirmButton' =>  false, 
            ]);
        }

        return view('livewire.status-account', compact('accounts', 'movements'));
    }

    public function resetFilters()
    {
    	$this->reset(['account_id']);
    }
}
