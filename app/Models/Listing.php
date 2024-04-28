<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Listing extends Model
{
    use HasFactory;


    protected $table = 'job_listings';

    //gaurded
    protected $fillable = ['title', 'salary', 'employer_id'];


    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey:'job_listing_id');
    }



}