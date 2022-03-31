<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'products';

    protected $dates = [
        'date_purchased',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'invoice',
        'name',
        'price',
        'product_type_id',
        'date_purchased',
        'notes_history',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function manufacturers()
    {
        return $this->belongsToMany(ProductCategory::class);
    }

    public function product_type()
    {
        return $this->belongsTo(ProductTag::class, 'product_type_id');
    }

    public function getDatePurchasedAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setDatePurchasedAttribute($value)
    {
        $this->attributes['date_purchased'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
