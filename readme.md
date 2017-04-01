FORMAT: 1A
HOST: http://polls.apiblueprint.org/

# api-laravel

API ini adalah REST API berformat keluaran JSON yang mengambil data dari  https://datahelpdesk.worldbank.org/knowledgebase/topics/125589

## Daftar REST url 
**Method** `GET`<br>
**Auth** Not Required

**Nama Negara Berdasarkan Jenis Pinjaman** <br>
**url:** <br> 
- `localhost/laravel/public/country-lending-ibd`
- `localhost/laravel/public/country-lending-idb`
- `localhost/laravel/public/country-lending-idx`
- `localhost/laravel/public/country-lending-nc`

**Nama Negara Berdasarkan Level Income** <br>
**url:** <br> 
- `localhost/laravel/public/search-country/{country}`<br>
Contoh parameter untuk country: AW, AF, BR, dll (lihat di http://api.worldbank.org/countries)

**Pencarian Negara** <br>
**url:** <br> 
- `localhost/laravel/public/country-income/HIC`
- `localhost/laravel/public/country-income/LIC`
- `localhost/laravel/public/country-income/LMC`
- `localhost/laravel/public/country-income/LMY`
- `localhost/laravel/public/country-income/MIC`
- `localhost/laravel/public/country-income/NOC`
- `localhost/laravel/public/country-income/OEC`
- `localhost/laravel/public/country-income/UMC`

## Testing REST url 
Unit testing ada di : `laravel/tests/MyExampleTest.php` <br>
Running test dengan cara jalankan perintah `phpunit` di terminal
