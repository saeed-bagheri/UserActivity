<?php


namespace Saeed\UserActivity;

use App\UserActivity as UserActivityModel;


trait UserActivity
{

    public function UserActivitys()
    {
        return $this->hasMany(UserActivityModel::class)->latest('date');
    }


    public function Activity($count=null)
    {
       if($count) return $this->UserActivitys()->take($count)->get();

       return $this->UserActivitys()->get();
    }

    public function lastActivity()
    {
        return $this->UserActivitys()->first();
    }

    public function storeActivity($subject, $description = null)
    {
        $this->UserActivitys()->create(['subject' => $subject, 'date' => now(), 'description' => $description]);
    }


    public function deleteActivity()
    {
    $this->UserActivitys()->delete();
    }


}