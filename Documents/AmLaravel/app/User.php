<?php namespace AmSimulador2;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'lastName','email', 'facebook_id','twitter_id','id','avatar','newsletter','tyc','string','youtuber','points', 'actions', 'created_at','updated_at','status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'token'];
    /**
     * scope for search
     *
     * @var array
     */
 
    public function scopeSearch($query, $search){
        $query->where('name',$search)->orWhere('email',$search)->orWhere('lastName',$search)->orWhere('youtuber',$search)->orWhere('admin',$search);
        
    }
}
