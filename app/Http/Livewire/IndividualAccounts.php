<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\IndividualAccount;
use App\Models\Account;


class IndividualAccounts extends Component
{
    public $parametro;

    public $newaccount, $name, $number_account, $user_id;

    public function mount()
    {
        $this->newaccount   = 0;
        $this->user_id      = auth()->id();
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
        $this->name = '';
        $this->number_account = '';
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

    protected $listeners = [
        'event' => 'show'
    ];

    public function show($param)
    {
        $this->parametro = $param;        
    }
}
