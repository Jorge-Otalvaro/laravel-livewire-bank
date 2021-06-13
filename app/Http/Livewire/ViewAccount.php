<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OtherAccount;
use App\Models\IndividualAccount;

class ViewAccount extends Component
{
	public $account;

	public function mount()
	{
		$this->account = 0;
	}

    public function render()
    {
    	// Cuentas terceros
    	if ($this->account == 1) {
    		$destinations   = OtherAccount::where('user_id', auth()->id())->latest('id')->get();

    		if(count($destinations) < 1) {
	            $this->alert('error', 'No tiene cuentas de terceros registradas hasta el momento, primero debe registrar una.', [
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

    	// Cuentas propias
    	if ($this->account == 2) {
    		$destinations   = IndividualAccount::where('user_id', auth()->id())->latest('id')->get();

    		if(count($destinations) < 1) {
	            $this->alert('error', 'No tiene cuentas propias registradas hasta el momento, primero debe registrar una.', [
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

        return view('livewire.view-account');
    }
}
