<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

        $usersCollection = User::latest();
        $roles = Role::latest()->get();

        if (request('search')) {
            $usersCollection = $usersCollection
                ->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('email', 'like', '%' . request('search') . '%');
        }

        $users = $usersCollection->paginate(10);

        return view('backend.users.index', [
            'users' => $users,
            'roles' => $roles
        ]);
    }

    public function show(User $user)
    {
        return view('backend.users.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        $roles = Role::latest()->get();
        return view('backend.users.edit-role', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function update(Request $request, User $user)
    {
        try {

            $requestData = [
                'name' => $request->name,
                'role_id' => $request->role_id
            ];

            $user->update($requestData);

            return redirect()->route('users.index')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->route('users.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    // Softdelete
    public function trash()
    {
        $users = User::onlyTrashed()->get();

        return view('backend.users.trashed', [
            'users' => $users
        ]);
    }

    public function restore($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();
        return redirect()->route('users.trashed')->withMessage('Successfully Restored!');
    }

    public function delete($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->forceDelete();
        return redirect()->route('users.trashed')->withMessage('Successfully Deleted Permanently!');
    }

    // public function uploadImage($file)
    // {        
    //     $fileName = time().'.'.$file->getClientOriginalExtension();
    //     Image::make($file)
    //             ->resize(200, 200)
    //             ->save(storage_path().'/app/public/images/'.$fileName);
    //     return $fileName;
    // }
}
