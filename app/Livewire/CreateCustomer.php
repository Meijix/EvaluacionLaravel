<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $edad = '';
    public $nacimiento = '';

    protected $rules = [
        'name' => 'required|regex:/^[\pL\s]+$/u|max:255', // Solo letras y espacios
        'email' => 'required|email|unique:customers,email',
        'phone' => 'required|regex:/^[0-9]+$/|min:10|max:15|unique:customers,phone', // Solo números y mínimo 10 dígitos
        'edad' => 'required|integer|min:1|max:120',
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
        'edad.required' => 'La edad es obligatoria.',
        'edad.integer' => 'La edad debe ser un número entero.',
        'edad.min' => 'La edad mínima permitida es 1 año.',
        'edad.max' => 'La edad máxima permitida es 120 años.',
        'nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
        'nacimiento.date' => 'Ingrese una fecha válida.',
        'nacimiento.before' => 'La fecha de nacimiento debe ser anterior a hoy.',
    ];

    public function save()
    {
        $this->validate(); // Ejecuta la validación con las reglas definidas

        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'edad' => $this->edad,
            'nacimiento' => $this->nacimiento,
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


