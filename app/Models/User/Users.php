<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'Users';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id', 'date', 'username', 'permission_level',
        'password', 'manager_id', 'name', 'surnames',
        'company_name', 'days', 'cif', 'parents', 'city',
        'province', 'address', 'postal code', 'phone',
        'phone2', 'email', 'email2', 'locked', 'state',
        'billing_state', 'percentage_completed', 'manager_remarks',
        'contract_date', 'contract_compliance_days', 'end_date',
        'language', 'contract_amount', 'fractional_payment', 'data_profile',
        'data_profile', 'contract_compliance_days', 'end_date',
        'profile_links', 'profile_documentation', 'billing_profile', 'contract_paid',
        'demo', 'contact_id', 'client_type', 'seg_monthly_import', 'seg_payment_date',
        'payment_form_sec', 'date_rescision', 'commercial_id', 'completion_folder', 'state_seo',
        'search_parameters', 'subscribed_notifications', 'id_partner'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];
}
