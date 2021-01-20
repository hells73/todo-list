<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
$user = App\User::find(1);

foreach ($user->tasks as $task) {
    echo $task->name;
}
class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
      public function user()
    {
        return $this->belongsTo(User::class);
    }

}
