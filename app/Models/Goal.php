<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'goals';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['require_amount', 'target_date', 'contribution_amount', 'contribution_occur_monthly_date', 'funding_source_account_id', 'note', 'user_id', 'deleted_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['target_date', 'contribution_occur_monthly_date', 'deleted_at'];

}