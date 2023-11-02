<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }
    public function create()
    {
        return view('contacts.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:5',
            'contact' => 'required|digits:9|unique:contacts',
            'email' => 'required|email|unique:contacts',
        ]);

        Contact::create($validatedData);

        return redirect('/contacts')->with('success', 'Contato adicionado com sucesso');
    }
    public function show($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return redirect('/contacts')->with('error', 'Contato não encontrado');
        }

        return view('contacts.show', compact('contact'));
    }
    public function edit($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return redirect('/contacts')->with('error', 'Contato não encontrado');
        }

        return view('contacts.edit', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return redirect('/contacts')->with('error', 'Contato não encontrado');
        }

        // Valide os dados do formulário
        $validatedData = $request->validate([
            'name' => 'required|string|min:5',
            'contact' => 'required|digits:9|unique:contacts,contact,' . $id,
            'email' => 'required|email|unique:contacts,email,' . $id,
        ]);

        $contact->update($validatedData);

        return redirect('/contacts')->with('success', 'Contato atualizado com sucesso');
    }
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return redirect('/contacts')->with('error', 'Contato não encontrado');
        }

        $contact->delete();

        return redirect('/contacts')->with('success', 'Contato excluído com sucesso');
    }
}
