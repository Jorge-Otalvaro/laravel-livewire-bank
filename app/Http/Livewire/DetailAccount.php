<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;

class DetailAccount extends Component
{
	public $user_id, $number_account, $saldo;

	public function mount()
    {           
        $this->user_id 			= auth()->id();
        $this->number_account   = rand(11111111111, 9999999999);
        $this->saldo   			= 990;
    }

    public function render()
    {
    	$account = Account::where('user_id', auth()->id())->get()->sum('saldo');

    	$newaccount = Account::where('user_id', auth()->id())->get();

        return view('livewire.detail-account', compact('account', 'newaccount'));
    }

    public function store()
    {   
        Account::create(
        [
            'user_id'           => $this->user_id,
            'saldo'             => $this->saldo,
            'number_account'    => $this->number_account
        ]);  

        $this->alert('success', 'Cuenta creada.', [
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
}
