<?php

namespace App;
use App\Traits\CommonEventObserver;
use App\Traits\CommonScopes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model {
	use CommonEventObserver, CommonScopes, SoftDeletes;

	public function accountType() {
		return $this->belongsTo('App\AccountType');
	}
	public function accountTaxType() {
		return $this->belongsTo('App\AccountTaxType');

	}
	public function accountSubtype() {
		return $this->belongsTo('App\AccountSubtype');
	}
	public function accountCashFlowType() {
		return $this->belongsTo('App\AccountCashFlowType');
	}
	public function accountYearBalances() {
		return $this->hasMany('App\AccountYearBalance');
	}
}
