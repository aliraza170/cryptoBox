<?php

namespace App\Models;

use App\Mail\SendLoginOtp;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'phone',
        'phone_verified_at',
        'two_factor_code',
        'two_factor_expires_at',
        'two_factor_auth_type',
        'password',
        'remember_token',
        'date_of_birth',
        'address_line',
        'city',
        'state',
        'post_code',
        'country',
        'profile_picture',
        'id_card_front',
        'id_card_back',
        'nic_number',
        'timezone',
        'currency',
        'recieve_currency_notifications',
        'recieve_merchant_notifications',
        'recieve_recommendation_notifications',
        'verfication_level',
        'last_login_time',
        'last_login_ip',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'date_of_birth' => 'date',
        'profile_picture' => 'array',
        'id_card_front' => 'array',
        'id_card_back' => 'array',
        'two_factor_expires_at' => 'datetime',
    ];

    public static $two_factor_auth_types = [
        1 => 'email',
        2 => 'sms',
    ];

    /**
     * The attributes values that defines the statuses for the user
     *
     * @var array
     */
    public static $statuses = [
        'pending',
        'active',
        'rejected',
        'blocked',
    ];

    /**
     * The wallets that should be create on user register
     *
     * @var array
     */
    public static $wallets = [
        'currency_wallets' => ['PKR' => 'Pakistani Ruppe'],
        'crypto_wallets' => ['BTC' => 'Bitcoin'],
    ];


    public function generateTwoFactorCode()
    {
        $this->timestamps = false;
        $this->two_factor_code = rand(100000, 999999);
        $this->two_factor_expires_at = now()->addMinutes(10);
        $this->save();
    }

    public function resetTwoFactorCode()
    {
        $this->timestamps = false;
        $this->two_factor_code = null;
        $this->two_factor_expires_at = null;
        $this->save();
    }

    public function getTwoFactorAuthType()
    {
        return User::$two_factor_auth_types[$this->two_factor_auth_type];
    }

    public function sendTwoFactorCode()
    {
        switch ($this->two_factor_auth_type) {
            case 1:
                Mail::to($this)
                ->send(new SendLoginOtp($this->two_factor_code));
                break;

            default:
                throw new \Exception("2FA Error: No matching two-factor code sending system found. Available methods are ".implode(', ', User::$two_factor_auth_types).".");
                break;
        }
    }

    /**
     * Get the full address for the user
     */
    public function getAddressAttribute()
    {
        return $this->address_line.' , '.$this->city.' , '.$this->state.' , '.$this->zip_code;
    }

    /**
     * Get the status text for the user
     */
    public function getStatusText()
    {
        return User::$statuses[$this->status];
    }

    /**
     * Get the profile picture url
     */
    public function getProfilePictureUrl()
    {
        if(!$this->profile_picture){
            return 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=7F9CF5&background=EBF4FF&size=256';
        }
        return Storage::url($this->profile_picture);
    }

    /**
     * Get the profile picture url
     */
    public function getIdCardUrl()
    {
        return null;
    }

    /**
     * Generate all required wallets
     */
    public function generate_wallets()
    {
        foreach (User::$wallets as $type => $currencies) {
            foreach($currencies as $currency => $name){
                $this->{$type}()->create(['name' => $name, 'currency' => $currency]);
            }
        }
    }

    public function get_wallets()
    {
        return collect($this->currency_wallets)->merge($this->crypto_wallets);
    }

    /**
     * Real Currency Wallets
     */
    public function currency_wallets()
    {
        return $this->hasMany(CurrencyWallet::class, 'user_id', 'id');
    }

    /**
     * Crypto Currency Wallets
     */
    public function crypto_wallets()
    {
        return $this->hasMany(CryptoWallet::class, 'user_id', 'id');
    }
}
