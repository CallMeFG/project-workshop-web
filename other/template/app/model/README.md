Berikut penjelasan baris demi baris dari kode `User.php` yang kamu tampilkan di gambar, lengkap dengan fungsi dan alasannya:

---

### Baris 1

```php
<?php
```

☑️ **Pembuka tag PHP** — Wajib untuk memulai skrip PHP.

---

### Baris 2

```php
require_once 'config/database.php';
```

☑️ **Mengimpor file koneksi database**
🔧 Supaya class `User` bisa menggunakan class `Database` yang mendefinisikan koneksi ke database.

---

### Baris 4

```php
class User
```

☑️ **Mendefinisikan class `User`** — OOP class yang mewakili entitas User dalam sistem.

---

### Baris 5–6

```php
private $conn;
private $table = "users";
```

☑️ **Properti class**:

* `$conn`: Menyimpan koneksi database yang akan digunakan di seluruh method class.
* `$table`: Nama tabel di database, agar mudah diganti hanya dari satu tempat.

---

### Baris 8–11

```php
public function __construct() {
    $database = new Database();
    $this->conn = $database->getConnection();
}
```

☑️ **Konstruktor class** — Otomatis dipanggil saat objek `User` dibuat.

🔹 `new Database()` — Membuat objek dari class `Database`
🔹 `getConnection()` — Memanggil method yang mengembalikan objek koneksi (`PDO`)

🔗 Ini menjaga agar koneksi database hanya dibuat sekali dan bisa digunakan ulang di seluruh fungsi lain.

---

### Baris 13–18

```php
public function register($username, $password): bool {
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $query = "INSERT INTO " . $this->table . " (username, password) VALUES (?, ?)";
    $stmt = $this->conn->prepare($query);
    return $stmt->execute([$username, $hash]);
}
```

#### Penjelasan:

* 🔐 `password_hash()` — Mengenkripsi password dengan algoritma `BCRYPT`. Sangat penting agar password **tidak disimpan dalam bentuk asli** di database.
* 🧾 Query SQL `INSERT` untuk menambah user baru.
* 🛡️ `prepare()` + `?` + `execute([])` — Mencegah **SQL Injection** (keamanan).
* 🔁 Return `true` jika berhasil insert.

---

### Baris 20–28

```php
public function login($username, $password): mixed {
    $query = "SELECT * FROM " . $this->table . " WHERE username = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
    return false;
}
```

#### Penjelasan:

* 🎯 `SELECT` — Mencari user berdasarkan username.
* 🔐 `password_verify()` — Membandingkan password input user dengan hash dari database.
* ✅ Jika cocok, return data user.
* ❌ Jika tidak cocok atau tidak ditemukan, return `false`.

---

### Kesimpulan

| Fitur                                     | Alasan                             |
| ----------------------------------------- | ---------------------------------- |
| `prepare` dan `execute`                   | Mencegah SQL injection             |
| `password_hash()` dan `password_verify()` | Keamanan password                  |
| Pemisahan koneksi di `__construct`        | Reusabilitas dan efisiensi         |
| Properti `$table`                         | Mempermudah penggantian nama tabel |

Kalau kamu mau, saya bisa bantu tambahkan komentar langsung ke dalam kodenya juga. Mau?
