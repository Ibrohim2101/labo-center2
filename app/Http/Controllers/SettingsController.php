<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Exception;

class SettingsController
{
    public function index()
    {
        return view('dashboard.settings.index');
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $validated = $request->validated();
        if (!isset($validated['password']))
            unset($validated['password'], $validated['password_confirmation']);

        try {
            $user->update($validated);
        } catch (Exception $exception) {
            $request->session()->flash('error', $exception->getMessage());
            return redirect()->route('settings.index');
        }

        $request->session()->flash('success', "O'zgarishlar muvaffaqiyatli saqlandi!");
        return redirect()->route('settings.index');
    }
}