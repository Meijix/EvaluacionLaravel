<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {

        // dd ($this->all());
        Customer::create($this->all());
        $this->reset();
    }
}
