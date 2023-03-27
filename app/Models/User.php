<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    class User extends Model{
        protected $table = 'members';
        // column sa table
        protected $fillable = [
            'member_lastname', 'member_firstname', 'member_number'
    ];
}