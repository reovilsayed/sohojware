<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }
    public function bootstrapStatus()
    {
        switch ($this->task_complete_verification) {
            case 1:
                return 'On going';

            case 2:
                return 'Finished';

            default:
                return 'Pending';
        }
    }
}
