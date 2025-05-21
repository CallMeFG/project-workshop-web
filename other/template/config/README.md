Berikut adalah penjelasan **baris demi baris** dari file `database.php` yang kamu tampilkan. File ini berfungsi sebagai koneksi ke database menggunakan **PDO (PHP Data Object)**.

---

## 🗄️ `config/database.php`

### Baris 1

```php
<?php
```

☑️ Awal file PHP.

---

### Baris 2

```php
class Database {
```

☑️ Membuat class bernama `Database`, yang akan mengatur koneksi ke MySQL.

---

### Baris 3

```php
private $host = "localhost";
```

☑️ Menyimpan host database.
📝 Biasanya tetap `"localhost"` saat development lokal.

---

### Baris 4

```php
private $db_name = "your_database_name";
```

☑️ Nama database yang akan digunakan.
📝 Harus diganti sesuai dengan nama database milikmu.

---

### Baris 5–6

```php
private $username = "root";
private $password = "";
```

☑️ Informasi login ke database.
📝 Default XAMPP/MAMP/Laragon biasanya `"root"` dan password kosong.

---

### Baris 7

```php
public $conn;
```

☑️ Property publik untuk menyimpan objek koneksi.

---

### Baris 9

```php
public function getConnection(): PDO {
```

☑️ Fungsi publik yang akan mengembalikan objek koneksi database bertipe **PDO**.

---

### Baris 10

```php
$this->conn = null;
```

☑️ Awali nilai koneksi dengan `null` untuk mencegah kesalahan saat error terjadi.

---

### Baris 11

```php
try {
```

☑️ Gunakan blok `try` untuk mencoba koneksi, agar bisa ditangani jika gagal.

---

### Baris 12–14

```php
$this->conn = new PDO(
  "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
  $this->username,
  $this->password
);
$this->conn->exec("set names utf8");
```

✅ Penjelasan:

* Membuat koneksi ke database MySQL menggunakan `PDO`.
* Format koneksi:
  `"mysql:host=localhost;dbname=nama_db"`
* Parameter kedua & ketiga: username dan password.
* `set names utf8`: memastikan koneksi pakai encoding UTF-8 (mendukung karakter non-ASCII).

---

### Baris 15–17

```php
} catch(PDOException $exception) {
    echo "Koneksi gagal: " . $exception->getMessage();
}
```

☑️ Tangani error jika koneksi gagal (misalnya: salah nama DB, MySQL mati).
📢 Menampilkan pesan error dari `PDOException`.

---

### Baris 18

```php
return $this->conn;
```

☑️ Kembalikan objek koneksi agar bisa dipakai oleh file lain (misalnya `User.php`).

---

### Baris 20

```php
?>
```

☑️ Penutup PHP.

---

## 🔍 Ringkasan Fungsi Utama

| Bagian            | Fungsi                                                      |
| ----------------- | ----------------------------------------------------------- |
| `class Database`  | Tempat menyimpan konfigurasi dan membuat koneksi            |
| `getConnection()` | Fungsi utama untuk mengembalikan objek koneksi              |
| `PDO`             | Menghubungkan ke MySQL secara aman dan fleksibel            |
| `try-catch`       | Menangani error agar program tidak crash saat koneksi gagal |

---

Kalau kamu mau, aku bisa bantu **menambahkan komentar `//` langsung ke setiap baris kode ini** agar mudah kamu pelajari.

Mau aku bantu buatkan file-nya sekalian versi dengan komentar dan file `.zip` untuk semua file yang tadi?
