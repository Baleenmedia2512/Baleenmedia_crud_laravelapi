<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function getData()
    {
        // Implement the logic to retrieve and return the data
        // For example, you can return an array of data or format it as needed
        return [
            'id' => $this->id,
            'name' => $this->name,
            'value'=> $this->value,
            'quantity'=> $this->quantity,
            // ... other attributes ...
        ];
    }
}
