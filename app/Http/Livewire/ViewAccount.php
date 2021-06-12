<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewAccount extends Component
{
	public $account;

	public function mount()
	{
		$this->account = 0;
	}

    public function render()
    {
        return view('livewire.view-account');
    }
}
