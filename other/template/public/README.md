//ini untuk index
Penjelasan lengkap untuk kode di file `index.php` yang FG lampirkan:

---

## 📄 `index.php` – Sebagai Routing & Logic Login/Register/Logout

### Baris 1

```php
<?php
```

☑️ Awal dari kode PHP.

---

### Baris 2

```php
require_once 'controller/AuthController.php';
```

☑️ Mengimpor file `AuthController.php` hanya sekali.
📝 File itu harus berisi class `AuthController` dengan fungsi `register`, `login`, dan `logout`.

---

### Baris 4

```php
$action = $_GET['action'] ?? null;
```

☑️ Menyimpan action dari URL (misalnya: `index.php?action=login`).
Jika tidak ada, maka nilainya `null`.

---

### Baris 6–17: Routing Berdasarkan Action

#### Register

```php
if ($action === 'register' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new AuthController();
    $auth->register($_POST['username'], $_POST['password']);
}
```

☑️ Jalankan fungsi register jika action adalah `register` dan method POST.

---

#### Login

```php
} elseif ($action === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new AuthController();
    $auth->login($_POST['username'], $_POST['password']);
}
```

☑️ Jalankan login jika action adalah `login` dan method POST.

---

#### Logout

```php
} elseif ($action === 'logout') {
    $auth = new AuthController();
    $auth->logout();
}
```

☑️ Jalankan logout jika action `logout`.

---

#### Tampilan Default (GET, tanpa action)

```php
} else {
    echo '<a href="view/register.php">Register</a> | <a href="view/login.php">Login</a>';
}
```

☑️ Menampilkan link ke halaman `register` dan `login`.

---

## 🧠 Kesimpulan

| Aksi                     | Fungsi yang Dipanggil         |
| ------------------------ | ----------------------------- |
| `action=register` + POST | `$auth->register()`           |
| `action=login` + POST    | `$auth->login()`              |
| `action=logout`          | `$auth->logout()`             |
| Tidak ada action         | Tampilkan link login/register |

---

Kalau FG ingin, aku bisa bantu juga:

* 🧩 Tunjukkan struktur direktori folder (MVC) dari project ini
* 🛠️ Buatkan `AuthController.php` secara lengkap
* 🔐 Tambahkan validasi atau enkripsi password
* 💡 Tambahkan notifikasi berhasil/gagal login/logout

Mau lanjut ke bagian mana dulu, FG?
