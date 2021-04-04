<?php

namespace App\Imports;

use App\User;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsError;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Validators\Failure;
use Illuminate\Support\Facades\Hash;
use Throwable;

class UsersImport implements ToModel, WithHeadingRow, SkipsOnError, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            //
            'name'  => $row['name'],
            'email'  => $row['email'],
            'password' => Hash::make(1),
            'phone'  => $row['phone'],
            'role' => 3,
            'status'  => 1,
            
        ]);
    }
    public function onError(Throwable $error){

    }
    public function rules(): array{
        return [
            // '*.email' => 'required|unique:users,email',
            // '*.phone' => 'required|unique:users,phone'
        ];
    }
    public function onFailure(Failure ...$failures)
    {
        
    }
}
