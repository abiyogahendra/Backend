--Keterangan --

	project ini diberi nama Motor Bike 
	Motor bike adalah salah satu rancangan untuk penjulan motor Gede dalam keadaan Second dalam lingkup yogyakarta.
	Ketika ada salah satu orang ingin menjual motornya maka bisa menghubungi admin

	dalam project ini, pembuat membagi menjadi user login (Frontend Login) dan Admin Login(Backend Login).
		ini bertujuan agar membedakan antara table user dengan admin sehingga tidak perlu yang namanya menggunakan rule.
	
	A. Tampilan user, terdapat beberapa menu yaitu
		1) motor
		2) Onderdil
		3) Promo
		4) Pesanan
		5) Login
	B. Tampilan Admin, terdapat beberapa menu yaitu 
		1) beranda
		2) data Pelanggan
		3) Promo
		4) onderdil
		5) Transaksi
		

-- Cara menjalankan web --
	
	Dikarenakan dalam melakukan pengerjaan project dengan menggunakan framework laravel maka perlulah menggunakan
	php dan untuk lebih mudahnya kami menggunakan XAMPP
	- install terlebih dahulu xampp di komputer anda
	- setelah terinstall, letakkan project user dan backend ke dalam file document root kalian, biasanya document root defaultnya ada di dalam file xampp/apache/htdoc
	- lalu buka browser..  
	- untuk membuka Project user dengan 'http://localhost/User/Motor-BIKE/'
	- untuk membuka project Admin dengan 'http://localhost/Backend/admin'

	NB : 	untuk membuka project user dan admin, diusahakan dijalankan dengan browser yang berbeda. Ini dikarenakan
		ketika Pelanggan login dan ketika membuka admin, maka akan bentrok karna sama session tersimpan di server yang sama

	
	1. User (Frontend Login)
		
		- pelanggan dapat melakukan registrasi dengan menggunakan link yang berada di tengah halam beranda
		- Ketika anda  sudah memiliki akun maka anda dapat login dengan menggunakan link yang ada di nav bar maupun yang berada di sebelah link registrasi
		- ketika anda sudah melakukan login maka anda bisa melakukan pemesanan motor
		- untuk onderdil belum bisa melakukan pemesanan
	2. Admin (Backend Login)
		- Login admin dengan menggunakan email="abiyogakhusus@gmail.com" dan passwordnya="1234567890"
		- admin dapat melakukan CRUD untuk penawaran,

--- Teknis ---
	
	1. Semua data asset baik projet user maupun admin sudah disimpan jadi satu pada project admin
	2. ketika admin melakukan upload file image penawaran maupun onderdil maka akan langsung tersimpan di assets milik admin


ketika ada pertanyaan bisa menghubungi wa 088224192413 (abiyoga)
		
