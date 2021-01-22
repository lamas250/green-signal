<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'product_code' => $row['produto'],
            'EAN' => $row['ean'],
            'description' => $row['descricao'],
            'provider' => $row['fornecedor'],
            'jan' => $row['12020'],
            'fev' => $row['22020'],
            'mar' => $row['32020'],
            'abr' => $row['42020'],
            'mai' => $row['52020'],
            'jun' => $row['62020'],
            'jul' => $row['72020'],
            'ags' => $row['82020'],
            'set' => $row['92020'],
            'out' => $row['102020'],
            'nov' => $row['112020'],
            'dez' => $row['122020'],
        ]);
    }
}
