<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\IndividualAccount;
use App\Models\Account;
use App\Models\Transfer;
use App\Models\Movement;

class IndividualAccounts extends Component
{
    public $newaccount, $name, $number_account, $user_id, $account;
    public $mount, $destination, $origin, $moverSaldo;
    // public $account = 0;

    public function mount()
    {
        $this->newaccount   = 0;
        $this->user_id      = auth()->id();
        $this->origin       = 0;
        $this->mount        = $this->mount;    
        $this->destination  = $this->destination;    
        $this->account      = Account::where('user_id', auth()->id())->get()->sum('saldo');
        // $this->account      = 1;
        $this->moverSaldo   = false;
    }

    public function render()
    {
        $destinations   = IndividualAccount::where('user_id', auth()->id())->latest('id')->get();

        $accounts       = Account::where('user_id', auth()->id())->latest('id')->get();

        return view('livewire.individual-accounts', compact('destinations','accounts'));
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
        $this->origin           = 0;
        $this->mount            = '';
    }

    public function store()
    {
        $this->validate([
            'name'              => 'required',
            'number_account'    => 'required',
        ]);
   
        IndividualAccount::create(
        [
            'user_id'           => $this->user_id,
            'name'              => $this->name,
            'number_account'    => $this->number_account
        ]);  

        $this->alert('success', 'Cuenta propia registrada.', [
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

    public function check()
    {
        // $saldo = Account::where('user_id', $this->user_id)->sum('saldo');        
        // $this->moverSaldo = $saldo <= 0 ? false : true;  

        // $saldo  = Account::where('user_id', auth()->id())->get()->sum('saldo');
        // $this->moverSaldo = $saldo <= 0 ? false : true;  
    }

    public function registertransaction()
    {
        $this->validate([
            'user_id'       => 'required',
            'origin'        => 'required',
            'mount'         => 'required',
        ]);    
        
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

        $this->updateBalance();

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

        $this->newaccount   = 0;
        $this->account      = Account::where('user_id', auth()->id())->get()->sum('saldo');
        $this->resetInputFields();
    }

    public function updateBalance()
    {
        $balance = Account::find($this->origin);    

        $total          = $balance->saldo;
        $subtraction    = $this->mount;

        $saldo          = $total - $subtraction;

        
        $balance->update([
            'saldo' => $saldo
        ]); 

        // $this->alert('error', '¡No tiene fondos suficientes!', [
        //     'position' =>  'bottom-end', 
        //     'timer' =>  3000,  
        //     'toast' =>  true, 
        //     'text' =>  'Revisa tu saldo disponible, e intenta de nuevo', 
        //     'confirmButtonText' =>  'Ok', 
        //     'cancelButtonText' =>  'Cancel', 
        //     'showCancelButton' =>  false, 
        //     'showConfirmButton' =>  false, 
        // ]); 
    }
}
