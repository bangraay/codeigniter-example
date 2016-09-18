# crud-multidropdown
Contoh CRUD dependent dan multiple dropdown menggunakan CodeIgniter 3.x dan AJAX

## Screenshots
### Homepage: <br>
![alt-text](https://github.com/satyakresna/codeigniter-example/blob/master/crud-multidropdown/screenshots/homepage.png "Homepage") <br>

### Dependent dropdown <br>
#### Homepage: <br>
![alt-text](https://github.com/satyakresna/codeigniter-example/blob/master/crud-multidropdown/screenshots/dependent%20dropdown.png "Dependent Dropdown homepage")<br>
#### Add: <br>
![alt-text](https://github.com/satyakresna/codeigniter-example/blob/master/crud-multidropdown/screenshots/dependent%20dropdown%20add.png "Dependent Dropdown Add")<br>
#### Edit: <br>
![alt-text](https://github.com/satyakresna/codeigniter-example/blob/master/crud-multidropdown/screenshots/dependent%20dropdown%20edit.png "Dependent Dropdown Edit")<br>
#### Delete: <br>
![alt-text](https://github.com/satyakresna/codeigniter-example/blob/master/crud-multidropdown/screenshots/dependent%20dropdown%20delete.png "Dependent Dropdown Delete")<br>

### Multidependent dropdown <br>
#### Homepage: <br>
![alt-text](https://github.com/satyakresna/codeigniter-example/blob/master/crud-multidropdown/screenshots/Multidependent%20dropdown.png "Multidependent dropdown homepage")<br>
#### Add: <br>
![alt-text](https://github.com/satyakresna/codeigniter-example/blob/master/crud-multidropdown/screenshots/Multidependent%20dropdown%20add.png "Dependent Dropdown Add")<br>
#### Edit: <br>
![alt-text](https://github.com/satyakresna/codeigniter-example/blob/master/crud-multidropdown/screenshots/Multidependent%20dropdown%20edit.png "Multidependent dropdown Edit")<br>
### Delete: <br>
![alt-text](https://github.com/satyakresna/codeigniter-example/blob/master/crud-multidropdown/screenshots/Multidependent%20dropdown%20delete.png "Multidependent dropdown Delete")<br>

## Penjelasan Singkat
Source code ini memuat Dependent Dropdown dan Multiple Dropdown. <br>
Controller `Mahasiswa` memuat Dependent Dropdown. <br>
Controller `SKKM` memuat Multiple Dropdown. <br>

## Alur menjalankan crud-multidropdown
1. Copy folder `system` dari [CodeIgniter](https://codeigniter.com/download) yang telah anda unduh dan masukkan ke dalam folder crud-multidropdown.
Tampilan struktur folder sebagai berikut:
```
crud-multidropdown
|__application
|__assets
|__sql
|__system
|__.gitignore
|__.htaccess
|__composer.json
|__index.php
|__README.md
```
2. Import file `cidropdown.sql` di dalam folder `sql/cidropdown.sql` ke phpmyadmin.
3. Ketik `localhost/crud-multidropdown` di browser lalu silahkan pilih salah satu opsi:

  * Dependent Dropdown (Mahasiswa)
  * Multiple Dropdown (SKKM)

4. Saya telah menyimpan file `jquery.min.js` di dalam folder `assets`. Fungsi inilah yang akan menjalankan AJAX.
