<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    class User extends Model{
        public $timestamps = false;
        protected $table = 'members';
        // column sa table
        protected $fillable = [
            'member_lastname', 'member_firstname', 'member_number'
    ];
}