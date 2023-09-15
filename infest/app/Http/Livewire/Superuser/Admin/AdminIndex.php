<?php

namespace App\Http\Livewire\Superuser\Admin;

use App\Models\Auth\Admin;
use App\Models\Auth\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class AdminIndex extends Component{
    use WithPagination;
    use LivewireAlert;

    public $rules           = [
        'admin.name'            => 'nullable',
        'admin.email'           => 'nullable',
        'admin.type'            => 'nullable',
        // Password
        'password'              => 'nullable',
        'password_confirmation' => 'nullable'
    ];



    public $admin;
    public $password, $password_confirmation;

    public $filterAdmin;
    public $perPage         = 10;

    public $editMode        = FALSE;

    protected $listeners = [
        'confirmDelete',
    ];

    public function resetFilterAdmin(){
        $this->filterAdmin  = [];
    }

    public function create(){
        $this->admin        = new User();
        $this->editMode     = FALSE;
        $this->dispatchBrowserEvent('showModalAccountAdmin');
    }

    public function store(){
        $this->validate([
            'admin.name'            => 'required',
            'admin.email'           => 'required|unique:users,email',
            'admin.type'            => 'required',
            // Password
            'password'              => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8|required_with:password|same:password'
        ]);

        try {

            if ($this->password === $this->password_confirmation){
                $this->admin->password      = Hash::make($this->password);
            }else{
                return $this->alert('error', 'Konfirmasi password dan password tidak sama');
            }

            $this->admin->save();

            $this->dispatchBrowserEvent('hideModalAccountAdmin');
            return $this->alert('success', 'Akun berhasil dibuat');

        }catch (\Exception $exception){
            insert_errorlog('Store Admin Account', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function edit($id){
        $this->admin        = User::find($id);
        $this->editMode     = TRUE;
        $this->dispatchBrowserEvent('showModalAccountAdmin');
    }

    public function update(){
        $this->validate([
            'admin.name'            => 'required',
            'admin.email'           => 'required|unique:users,email,'. $this->admin->id,
            'admin.type'            => 'required',
            // Password
            'password'              => 'nullable|min:8|same:password_confirmation',
            'password_confirmation' => 'nullable|min:8|same:password'
        ]);

        try {

            if ($this->password){
                if ($this->password === $this->password_confirmation){
                    $this->admin->password      = Hash::make($this->password);
                }else{
                    return $this->alert('error', 'Konfirmasi password dan password tidak sama');
                }
            }

            $this->admin->save();

            $this->dispatchBrowserEvent('hideModalAccountAdmin');
            return $this->alert('success', 'Perubahan berhasil tersimpan');

        }catch (\Exception $exception){
            insert_errorlog('Update Admin Account', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function delete($id){
        $this->confirm('Apakah anda yakin menghapus akun ini?', [
            'onConfirmed' => 'confirmDelete',
        ]);
        $this->admin            = User::find($id);
    }

    public function confirmDelete(){
        try {

            $this->admin->delete();
            return $this->alert('success', 'Akun berhasil dihapus');

        }catch (\Exception $exception){
            insert_errorlog('Delete Admin Account', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function render(){
        $admins                 = User::query();

        if ($this->filterAdmin){

            if (array_key_exists("query", $this->filterAdmin)){
                $admins->orWhere('name','like', '%' . $this->filterAdmin['query'] . '%')
                    ->orWhere('email','like', '%' . $this->filterAdmin['query'] . '%');
            }

            if (array_key_exists("type", $this->filterAdmin) && $this->filterAdmin['type']){
                $admins->where('type','like', '%' . $this->filterAdmin['type'] . '%');
            }

        }else{
            $admins->orderBy('id', 'DESC');
        }

        $data['admins']     = $admins->paginate($this->perPage);

        return view('livewire.superuser.admin.admin-index', $data)
            ->extends('layouts.superuser.app')->section('content');
    }

}
