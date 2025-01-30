<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $address = '';
    public $birthday = '';

    protected $rules = [
        'name' => 'required|regex:/^[\pL\s]+$/u|max:50', // Solo letras y espacios
        'email' => 'required|email|unique:customers,email',
        'phone' => 'required|regex:/^[0-9]+$/|min:10|max:15|unique:customers,phone', // Solo números y mínimo 10 dígitos
        'address' => 'required|max:255',
        'nacimiento' => 'required|date|before:today',
    ];

    // EXPRESION REGULAR
    // /^[\pL\s]+$/u solo permite letras y espacios
    // /^[0-9]+$/ Solo permite números 

    protected $messages = [
        'name.required' => 'El campo nombre es obligatorio.',
        'name.regex' => 'El nombre solo puede contener letras y espacios.',
        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'Ingrese un correo válido.',
        'email.unique' => 'Este correo ya está registrado.',
        'phone.required' => 'El número de teléfono es obligatorio.',
        'phone.regex' => 'El teléfono solo puede contener números.',
        'phone.min' => 'El teléfono debe tener al menos 10 dígitos.',
        'phone.max' => 'El teléfono no puede tener más de 15 dígitos.',
        'phone.unique' => 'El número de teléfono ya está registrado.',
        'address.required' => 'La dirección es obligatoria.',
        'birthday.required' => 'La fecha de nacimiento es obligatoria.',
        'birthday.date' => 'Ingrese una fecha válida.',
        'birthday.before' => 'La fecha de nacimiento debe ser anterior a hoy.',
    ];

    public function save()
    {
        $this->validate(); // Ejecuta la validación con las reglas definidas

        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'birthday' => $this->birthday,
        ]);
        
        // Limpia los campos del formulario después de crear un cliente mostrando un mensaje de éxito
        $this->reset();
        session()->flash('message', 'Cliente creado exitosamente.'); 
    }

    public function render()
    {
        return view('livewire.create-customer');
    }
}


