# UAS_SBD

Nama  : Didi Kumaedi

NIM   : 312010002

Kelas : TI.20.D.1

Matkul  : Sistem Basis Data

Ujian Akhir Semester

Modul data pasien

![image](https://user-images.githubusercontent.com/101849655/179358721-299eefc5-a02b-40be-83bd-560525a1a53e.png)

Dalam tabel pasien saya bisa menambahkan, menghapus dan mengedit data. Contohnya sebagai berikut :

Edit

![image](https://user-images.githubusercontent.com/101849655/179359043-7dc5fc37-a682-4e06-8735-946b5c638974.png)

Saya merubah data pasien Ratna menjadi Kumaedi

![image](https://user-images.githubusercontent.com/101849655/179359115-301aed78-93a5-4d4a-8223-211f47aacfbc.png)

Tambah Saya juga bisa Menambah data pasien sebagai berikut :

![image](https://user-images.githubusercontent.com/101849655/179359198-6bbdc79d-e41c-4e20-9c1a-973c063af471.png)

![image](https://user-images.githubusercontent.com/101849655/179359209-fc8dc7b8-a39c-46b6-a0c7-3d3e6faccfdb.png)

Modul data Dokter Seperti data pasien data dokter bisa di berikan perintah tambah, hapus dan juga edit.

![image](https://user-images.githubusercontent.com/101849655/179359314-5c3c2a04-fbd5-454b-9944-720258fc58ee.png)

Modul data Obat Di dalam modul data obat saya menambahkan Triger

// IMPLEMENTASI TRIGGER

// table untuk trigger

create table log_obat(id_log int(100) auto_increment primary key, id_obat int(10), nobat_lama varchar(100), obat_baru varchar(100), waktu date not null) // trigger

create trigger update_nama_obat before update on obat for each row insert into log_obat set id_obat=old.id_obat, obat_lama = old.nama_obat, obat_baru=new.nama_obat, waktu = now();

// END IMPLEMENTASI TRIGGER

![image](https://user-images.githubusercontent.com/101849655/179359365-c7023763-2d36-4e22-8dbb-95c265d2ceef.png)


Modul data user dibuat untuk melakukan proses login

![image](https://user-images.githubusercontent.com/101849655/179359561-915fac08-10a3-4e76-a853-b71fa924272f.png)

![image](https://user-images.githubusercontent.com/101849655/179359600-0159bae0-ff54-44bd-9f64-83f977bfb05f.png)

Tampilan dashboard yang menampilkan informasi total data. Untuk menampikan total data tersebut saya mengimplementasikan fungsi sebagai berikut :

CREATE FUNCTION fn_totalUsers() RETURNS INT(11) UNSIGNED NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER RETURN (SELECT COUNT(id_pasien) FROM pasien)

![image](https://user-images.githubusercontent.com/101849655/179359667-1a6ca49b-6bed-452d-8b95-a5897d652687.png)


