Berikut penjelasan **baris demi baris** dari file `AuthController.php` yang kamu tunjukkan, lengkap dengan fungsinya dan **kenapa ditulis seperti itu**:

---

## 🔐 `AuthController.php`

### Baris 1

```php
<?php
```

☑️ **Awalan skrip PHP**

---

### Baris 2

```php
require_once 'model/User.php';
```

☑️ **Mengimpor file model `User.php`**
🔗 Ini agar controller bisa menggunakan class `User` untuk akses database (register, login, dll).

---

### Baris 4

```php
class AuthController
```

☑️ **Membuat class controller otentikasi**
🧠 Bertanggung jawab menangani proses login, register, dan logout.

---

### Baris 5

```php
private $userModel;
```

☑️ **Property untuk menyimpan instance dari class User**
🧩 Ini digunakan supaya bisa akses fungsi `register()` dan `login()` dari model `User`.

---

### Baris 7–9

```php
public function __construct() {
    $this->userModel = new User();
}
```

☑️ **Constructor**
📌 Saat objek `AuthController` dibuat, otomatis buat objek `User` dan simpan di `$userModel`.

---

## ✅ FUNGSI REGISTER

### Baris 11–16

```php
public function register($username, $password): void {
    if ($this->userModel->register($username, $password)) {
        echo "Registrasi berhasil.";
    } else {
        echo "Gagal registrasi.";
    }
}
```

☑️ **Memanggil fungsi `register()` dari model `User`**
🔐 Jika berhasil, tampilkan pesan "Registrasi berhasil."
🛑 Jika gagal (biasanya karena username sudah ada, koneksi gagal, dll), tampilkan "Gagal registrasi."

---

## 🔐 FUNGSI LOGIN

### Baris 19–29

```php
public function login($username, $password): void {
    $user = $this->userModel->login($username, $password);
    if ($user) {
        session_start();
        $_SESSION['user'] = $user['username'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Login gagal. Username atau password salah.";
    }
}
```

#### Penjelasan:

* ✅ `login()` memanggil method model dan verifikasi login.
* 🧠 Jika berhasil:

  * `session_start()` untuk mulai session.
  * Menyimpan username ke session `$_SESSION['user']` agar bisa digunakan di halaman lain.
  * `header("Location: dashboard.php")` untuk redirect user ke halaman dashboard.
  * `exit()` menghentikan eksekusi PHP setelah redirect (baik untuk mencegah script lanjutan dijalankan).
* ❌ Jika gagal: Tampilkan pesan login gagal.

---

## 🚪 FUNGSI LOGOUT

### Baris 31–37

```php
public function logout(): void {
    session_start();
    session_destroy();
    header("Location: index.php");
    exit();
}
```

#### Penjelasan:

* 🔄 `session_start()` — untuk mulai session sebelum bisa menghapusnya.
* ❌ `session_destroy()` — menghapus semua data session.
* 🌍 Redirect ke halaman utama (`index.php`) agar user tahu dia sudah logout.

---

## Kenapa semua ini penting?

| Fitur                           | Kenapa diperlukan?                               |
| ------------------------------- | ------------------------------------------------ |
| `require_once`                  | Menghindari error `class already declared`       |
| OOP (User & Controller)         | Pisahkan logika database dan kontrol flow        |
| `session_start()` & `$_SESSION` | Untuk menyimpan status login user                |
| `header()` redirect             | UX baik: pindah otomatis ke halaman berikutnya   |
| `exit()` setelah header         | Hindari eksekusi baris setelah redirect (safety) |

---

Kalau kamu mau, aku bisa bantu **tambahkan komentar langsung dalam kode ini** agar kamu bisa tempel ke file dan belajar dari sana. Mau aku bantu bikinkan yang full pakai komentar `//` per baris?
