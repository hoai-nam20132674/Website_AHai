<?php

namespace App\Imports;

use App\Card;
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

use Throwable;

class CardImport implements ToModel, WithHeadingRow, SkipsOnError, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Card([
            'name'  => $row['hang_san_xuat'],
            'type'  => $row['ten_sp'],
            'code'  => $row['ma_sp'],
            'dental'=> $row['ngay_san_xuat'],
            'time'  => $row['ngay_het_han'],
            'tooth' => $row['khuyen_mai_thong_tin_them'],
            'labo'  => $row['labo'],
        ]);

        
    }
    public function onError(Throwable $error){

    }
    public function rules(): array{
        return [
            '*.ma_sp' => 'required|unique:cards,code'
        ];
    }
    public function onFailure(Failure ...$failures)
    {
        
    }
}
