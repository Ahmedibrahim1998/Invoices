<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class invoices extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'invoice_number',
        "user_id",
        "user_address",
        'invoice_Date',
        'Due_date',
        'product',
        'section_id',
        'Amount_collection',
        'Amount_Commission',
        'Discount',
        'Value_VAT',
        'Rate_VAT',
        'Total',
        'Status',
        'Value_Status',
        'note',
        'Payment_Date',
    ];

    protected $dates = ['deleted_at'];

    public function section()
    {
        return $this->belongsTo('App\sections');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
