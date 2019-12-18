<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Merk;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;

class ModifikasiController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */

     public function index()
     {
          // $items = Merk::all();
          // dd($item);

          return view('modifikasi.modif');
     }

     public function create()
     {
         return view('item.create');
     }

     public function store(Request $request)
     {
         $item = new Merk;
         $item->jenis = $request->jenis;
         $item->save();

         return redirect()->route('item')->withStatus(__('Jenis Surat successfully created.'));
     }

     public function edit(Merk $item)
     {
         return view('item.edit', compact('item'));
     }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Merk $item)
    {
        dd($item);
        // $item->update(
        //     $request->merge(['password' => Hash::make($request->get('password'))])
        //         ->except([$request->get('password') ? '' : 'password']
        // ));

        return redirect()->route('item')->withStatus(__('Jenis Surat successfully updated.'));
    }

    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withStatusPassword(__('Password successfully updated.'));
    }

    public function delete($id){
      Session::flash("notification","
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      ");
      return redirect()->back();
    }
}
