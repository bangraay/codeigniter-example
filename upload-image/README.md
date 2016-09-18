# Upload-Image
Upload Image using CodeIgniter 3.x and jQuery Upload Preview

## Penjelasan singkat
Ini merupakan contoh kode CRUD upload image menggunakan CodeIgniter 3.x dan
jQuery Upload Preview. <br>
Skenario pada saat update gambar: <br>
1. User memilih gambar yang akan diubah dan sistem mengarahkan user ke form
ubah gambar. <br>
2. Opsi 1: User mengganti gambar dan melakukan update gambar maka gambar yang
sebelumnya akan diganti dengan gambar yang baru mulai dari database dan di dalam
folder `images` menggunakan function [unlink()](http://php.net/manual/en/function.unlink.php)
yang telah disediakan oleh PHP.
  Opsi 2: Jika user tidak mengganti gambar dan tidak melakukan perubahan maka
gambar sebelumnya akan tetap tersimpan di dalam folder `images` dan di database.
3. Ketika user menghapus gambar maka data gambar juga akan terhapus di database dan folder images
berkat function [unlink()](http://php.net/manual/en/function.unlink.php)
yang telah disediakan oleh PHP.

## Apa yang diperlukan
Untuk membuat gambar terlihat (preview) ketika menambah atau mengedit, diperlukan plugin
jQuery Upload Preview yang tersedia di `asset/js/jquery.uploadPreview.min.js` dan beberapa konfigurasi yang berada di Controller Uploadimage.php. Untuk lebih detail mengenai jQuery uploadPreview anda bisa membacanya di [sini](http://opoloo.github.io/jquery_upload_preview/)

## Screenshots
