<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
class MyExampleTest extends TestCase {
    public function getContent($callPage) {
		$result = $callPage->getContent(); //mengambil semua konten yang muncul
		return json_decode($result);
	}
	
	public function testCountryLendingExample() {
        $callPage = $this->call('GET', '/country-lending-ibd');
		$json = $this->getContent($callPage);
		
		$this->assertEquals('AGO', $json[1][0]->id);
		$this->assertEquals('AO', $json[1][0]->iso2Code);
		$this->assertEquals('Angola', $json[1][0]->name);
		$this->assertEquals('SSF', $json[1][0]->region->id);
		$this->assertEquals('Sub-Saharan Africa ', $json[1][0]->region->value);
    }
	
	public function testCountrySearchExample() {
        $callPage = $this->call('GET', '/search-country/BR');
		$json = $this->getContent($callPage);
		
		$this->assertEquals('BRA', $json[1][0]->id);
		$this->assertEquals('BR', $json[1][0]->iso2Code);
		$this->assertEquals('Brazil', $json[1][0]->name);
		$this->assertEquals('LCN', $json[1][0]->region->id);
		$this->assertEquals('Latin America & Caribbean ', $json[1][0]->region->value);
    }
	
	public function testCountryIncomeExample() {
        $callPage = $this->call('GET', '/country-income/HIC');
		$json = $this->getContent($callPage);
		
		$this->assertEquals('ABW', $json[1][0]->id);
		$this->assertEquals('AW', $json[1][0]->iso2Code);
		$this->assertEquals('Aruba', $json[1][0]->name);
		$this->assertEquals('LCN', $json[1][0]->region->id);
		$this->assertEquals('Latin America & Caribbean ', $json[1][0]->region->value);
    }
}
