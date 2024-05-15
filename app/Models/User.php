<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static whereIn(string $string, int[] $array)
 * @method static find($id)
 * @method static paginate(int $int)
 * @method static create(array $array)
 * @method static orderBy(string $string, string $string1)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

//    public mixed $name;
//    public mixed $email;
//    public mixed $phone;
//    /**
//     * @var mixed|string
//     */
//    public mixed $password;
//    public mixed $address;
//    /**
//     * @var mixed|string
//     */
//    public mixed $avatar;
//
//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array<int, string>
//     */

    //  protected $table = 'transports';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //thiết lập mối quan hệ với yêu thích sản phẩm
    public function favoriteproducts(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'favoriteproduct','id_product','id_user');
    }


    ///thiết lập mối quan hệ giữa người mua và sản phẩm qua bảng đánh giá sản phẩm

    public function readProduct(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'reviewproducts');
    }

    //thiết lập mối quan hệ giữa người mua và đặt hàng 1-n

    public function oders(): HasMany
    {
        return $this->hasMany(Oder::class,'id_user');
    }

    //thiết lập mối quan hệ giữa khách hàng và lịch sử mua hàng 1-n

    public function purchadeHistory(): HasMany
    {
        return $this->hasMany(PurchaseHistory::class,'id_user');
    }


    //thiết lập mối quan hệ giữa xếp hạng người dùng và người dùng 1-n

    public function levelUser(): HasMany
    {
        return $this->hasMany(LevelUser::class,'id_user');
    }

    //thiết lập mối quan hệ người dùng và hoá đơn 1-n

    public function invoice(): HasMany
    {
        return $this->hasMany(Invoice::class,'id_user');
    }

}
