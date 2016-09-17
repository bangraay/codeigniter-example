# ci-dropdown
Contoh kode CRUD dependent dan multiple dropdown menggunakan CodeIgniter 3.x dan AJAX

## Penjelasan Singkat
Source code ini memuat Dependent Dropdown dan Multiple Dropdown. <br>
Controller `Mahasiswa` memuat Dependent Dropdown. <br>
Controller `SKKM` memuat Multiple Dropdown. <br>

## Alur menjalankan ci-dropdown
1. Copy folder `system` dari [CodeIgniter](https://codeigniter.com/download) yang telah anda unduh ke dalam project ci-dropdown.
2. Ketik `localhost/ci-dropdown` lalu silahkan pilih salah satu opsi:

  * Dependent Dropdown (Mahasiswa)
  * Multiple Dropdown (SKKM)

Saya telah men-setting base-url menjadi dinamis pada file `application/config.php`. Sehingga anda hanya perlu fokus pada import file `cidropdown.sql` di dalam folder `sql/cidropdown.sql` di root project.

Saya telah menyimpan file `jquery.min.js` pada folder `assets`. Fungsi inilah yang akan menjalankan AJAX.

## Ada kendala atau mau berkontribusi?
Jika ada kendala silahkan anda kirimkan pesan ke bagian `issues` atau `pull request`

###### Salam
[Satya Kresna](https://linkedin.com/satyakresna)
