<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Middleware;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Controller as BaseController;
use Response;
class SiteController extends BaseController {
	public function __construct() {
		// $this->middleware('auth.basic');
	}
	
	
	/* 1. Negara berdasar jenis pinjaman */
	public function getCountryIBD() {
		return $this->getCountryByLendingTypes('IBD');
	}
	
	public function getCountryIDB() {
		return $this->getCountryByLendingTypes('IDB');
	}
	
	public function getCountryIDX() {
		return $this->getCountryByLendingTypes('IDX');
	}
	
	public function getCountryNC() {
		return $this->getCountryByLendingTypes();
	}
	
	public function getCountryByLendingTypes($lendingType=null) {
		$json_url = "http://api.worldbank.org/countries?lendingType=".$lendingType."&format=json";
		return $this->readAPI($json_url);
	}
	
	/* 2. Negara berdasar level income */
	public function getCountryIncome(Request $request) {
		$path = $request->path();
		$path = explode('/', $path);
		$level_income = $path[1];
		$json_url = "http://api.worldbank.org/countries?incomeLevel=".$level_income."&format=json";
		return $this->readAPI($json_url);
	}
	
	/* 3. Pencarian Negara */
	public function getCountry($country=null) {
		$json_url = "http://api.worldbank.org/countries/".$country."?format=json";
		return $this->readAPI($json_url);
	}
	
	public function readAPI($json_url) {
		$ch = curl_init( $json_url );
		$options = array(
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
		);
		curl_setopt_array( $ch, $options ); 
		$result =  curl_exec($ch); 
		
		return $result;
		// return Response::json($result,200);
	}
}
?>