<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Etat;
use App\Models\User;
class UserController extends Controller
{
  
    public function index()
    {
        $users = User::with('etat')->get();
        return view('users.index', compact('users'));
    }

    // 2. Affiche le formulaire de création
    public function create()
    {
        // On récupère toutes les lignes du tableau etats
        $etats = Etat::all();

        // On transmet $etats à la vue
        return view('users.create', compact('etats'));
    }

    // 3. Enregistre un nouvel utilisateur
    public function store(Request $request)
{
    $data = $request->validate([
        'nom'        => 'required|string|max:255',
        'prenom'     => 'required|string|max:255',
        'email'      => 'required|email|unique:users,email',
        'password'   => 'required|string|min:6|confirmed',  // تأكد من أن كلمة المرور متطابقة
        'code_barre' => 'required|string|unique:users,code_barre',
        'etat_id'    => 'required|exists:etats,id',
    ]);

    $data['password'] = Hash::make($data['password']);

    User::create($data);

    return redirect()->route('users.index')
                     ->with('success', 'Utilisateur créé avec succès.');
}


    public function edit(User $user)
    {
        // On récupère toutes les lignes du tableau etats
        $etats = Etat::all();

        // On transmet $etats et $user à la vue
        return view('users.edit', compact('user', 'etats'));
    }

    // 5. Met à jour un utilisateur existant
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'nom'        => 'required|string|max:255',
            'prenom'     => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email,' . $user->id,
            'password'   => 'nullable|string|min:6|confirmed',
            'code_barre' => 'required|string|unique:users,code_barre,' . $user->id,
            'etat_id'    => 'required|exists:etats,id',
        ]);

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']); // si pas de nouveau mot de passe
        }

        $user->update($data);

        return redirect()->route('users.index')
                         ->with('success', 'Utilisateur mis à jour avec succès.');
    }

    // 6. Supprime un utilisateur
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
        ->with('success', 'Utilisateur supprimé avec succès.');
}
}




