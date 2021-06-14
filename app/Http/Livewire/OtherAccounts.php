<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OtherAccount;
use App\Models\Account;
use App\Models\Transfer;
use App\Models\Movement;

class OtherAccounts extends Component
{
    public $newaccount, $name, $number_account, $user_id;
    public $mount, $destination, $origin;

    public function mount()
    {
        $this->newaccount   = 0;
        $this->user_id      = auth()->id();
        $this->origin       = $this->origin;
        $this->mount        = $this->mount;    
    }

    public function render()
    {
        $destinations   = OtherAccount::where('user_id', auth()->id())->latest('id')->get();

        $accounts       = Account::where('user_id', auth()->id())->latest('id')->get();

        return view('livewire.other-accounts', compact('destinations','accounts'));
    }

    public function create()
    {
        $this->newaccount   = 1;
        $this->resetInputFields();
    }

    private function resetInputFields()
    {
        $this->name             = '';
        $this->number_account   = '';
        $this->destination      = '';
        $this->origin           = '';
        $this->mount            = '';
    }

    public function store()
    {
        $this->validate([
            'name'              => 'required',
            'number_account'    => 'required',
        ]);
   
        OtherAccount::create(
        [
            'user_id'           => $this->user_id,
            'name'              => $this->name,
            'number_account'    => $this->number_account
        ]);  

        $this->alert('success', 'Cuenta de tercero registrada.', [
            'position' =>  'top-end', 
            'timer' =>  3000,  
            'toast' =>  true, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
        ]);

        $this->newaccount   = 0;
        $this->resetInputFields();
    }

    public function registertransaction()
    {
        $this->validate([
            'user_id'       => 'required',
            'origin'        => 'required',
            'mount'         => 'required',
        ]);




        if ($approved) {            
            $transfer = Transfer::create(
            [
                'user_id'           => $this->user_id,
                'account_id'        => $this->origin,
                'uuid'              => $this->destination,
                'mount'             => $this->mount
            ]);  

            Movement::create(
            [
                'user_id'           => $this->user_id,
                'account_id'        => $this->origin,
                'transfer_id'       => $transfer->id
            ]); 

            $this->alert('success', 'Transferencia registrada. Numero de Aprobación '. $transfer->id .'.', [
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

        $this->alert('error', '¡No tiene fondos suficientes!', [
            'position' =>  'bottom-end', 
            'timer' =>  3000,  
            'toast' =>  true, 
            'text' =>  'Revisa tu saldo disponible, e intenta de nuevo', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
        ]);          

        $this->newaccount   = 0;
        $this->resetInputFields();
    }
}
