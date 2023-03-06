<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function getMessage() {
        $myMessage = "This is model message";
        return $myMessage;
    }

    public function getDetails() {
        $details = ['50% coton', '30% laine', '20% Polyester'];
        return $details;
    }
}
