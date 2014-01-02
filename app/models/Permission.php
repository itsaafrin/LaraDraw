<?php
use Searsaw\Drawbridge\Models\BridgePermission;
//class Permission extends Eloquent {
class Permission extends BridgePermission {

	protected $guarded = array();

	public static $rules = array();
}
