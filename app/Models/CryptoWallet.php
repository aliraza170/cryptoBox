<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoWallet extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'currency',
        'wallet_address',
        'balance',
        'escrow_balance',
        'daily_send_limit',
        'daily_recieve_limit',
        'monthly_send_limit',
        'monthly_recieve_limit',
        'yearly_send_limit',
        'yearly_recieve_limit',
    ];

    /**
     * User that the wallet belongs to
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
