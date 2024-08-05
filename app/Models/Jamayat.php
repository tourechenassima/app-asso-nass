<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamayat extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'baladia',
        'tasmia',
        'rakm-itimad',
        'tarikh-tassiss',
        'tarikh-motabaka',
        'rakm-itimad1',
        'tarikh-tajdid1',
        'tabaa',
        'kitaa',
        'prenom-president1',
        'nom-president1',
        'adresse',
        'phone',
        'nachta',
        'remarque',
        'email',
        'rakm-itimad2',
        'rakm-itimad3',
        'rakm-itimad4',
        'rakm-itimad5',
        'rakm-itimad6',
        'tarikh-tajdid2',
        'tarikh-tajdid3',
        'tarikh-tajdid4',
        'tarikh-tajdid5',
        'tarikh-tajdid6',
        'halat-elmilef',
        'nom-president2',
        'nom-president3',
        'nom-president4',
        'nom-president5',
        'nom-president6',
        'nom-president7',
        'prenom-president2',
        'prenom-president3',
        'prenom-president4',
        'prenom-president5',
        'prenom-president6',
        'prenom-president7',
        'description',
        'user_id',
        'slug',
        'akherTarikhTajdid',
        'created_at',
        'updated_at',
         
    ];
    
    protected $nullable = [
        'tasmia',
        'email',
        'rakm-itimad',
        'tarikh-tassiss',
        'halat-elmilef',
        'tarikh-tajdid1',
        'tarikh-tajdid2',
        'tarikh-tajdid3',
        'tarikh-tajdid4',
        'tarikh-tajdid5',
        'tarikh-tajdid6',
        'tabaa',
        'kitaa',
        'rakm-itimad',
        'rakm-itimad1',
        'rakm-itimad2',
        'rakm-itimad3',
        'rakm-itimad4',
        'rakm-itimad5',
        'rakm-itimad6',
        'nom-president1',
        'nom-president2',
        'nom-president3',
        'nom-president4',
        'nom-president5',
        'nom-president6',
        'nom-president7',
        'akherTarikhTajdid',
        'prenom-president1',
        'prenom-president2',
        'prenom-president3',
        'prenom-president4',
        'prenom-president5',
        'prenom-president6',
        'prenom-president7',

        'nachta',
        'adresse',
        'phone',
        'baladia',
        'description',
        'created_at',
        'updated_at',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

}
