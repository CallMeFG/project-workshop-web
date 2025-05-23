//login
Terima kasih, FG! Sekarang mari kita bahas isi file **`login.php`** berdasarkan gambar yang kamu berikan.

---

## 📄 `login.php` – Form Login Sederhana

### Struktur HTML:

```php
<form method="POST" action="../index.php?action=login">
```

📝 Baris ini menunjukkan bahwa:

* Form akan dikirim menggunakan **metode POST**
* Tujuannya ke file `index.php` di folder atas (`../`)
* Dengan parameter GET `action=login`, sehingga nanti diproses oleh:

  ```php
  $auth->login($_POST['username'], $_POST['password']);
  ```

---

### Elemen Form:

```php
<h2>Form Login</h2>
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button type="submit">Masuk</button>
```

| Elemen           | Fungsi                                                      |
| ---------------- | ----------------------------------------------------------- |
| `input username` | Mengisi username                                            |
| `input password` | Mengisi password                                            |
| `required`       | Mewajibkan input diisi sebelum submit                       |
| `button submit`  | Tombol untuk mengirim data form ke `index.php?action=login` |

---

### 🔁 Alur Kerja Singkat:

1. User buka `login.php`, isi form.
2. Saat klik **Masuk**, data dikirim ke:

   ```
   ../index.php?action=login
   ```
3. File `index.php` membaca action `'login'`, lalu menjalankan:

   ```php
   $auth->login($_POST['username'], $_POST['password']);
   ```

---

//register
Siap, FG! Ini penjelasan **per baris** dari form HTML registrasi yang kamu buat:

---

```html
<form method="POST" action="../index.php?action=register">
```

➡️ **Baris ini membuat form HTML**:

* `method="POST"`: data dikirim secara tersembunyi melalui HTTP POST.
* `action="../index.php?action=register"`: saat tombol submit ditekan, data dikirim ke file `index.php` (di folder atas), dan `action=register` akan diproses oleh script PHP.

---

```html
<h2>Form Registrasi</h2>
```

➡️ Menampilkan judul form: **"Form Registrasi"**.

---

```html
<input type="text" name="username" placeholder="Username" required><br>
```

➡️ Ini adalah input untuk **username**:

* `type="text"`: pengguna dapat mengetik teks biasa.
* `name="username"`: nama field ini, yang akan diambil di PHP dengan `$_POST['username']`.
* `placeholder="Username"`: teks abu-abu yang muncul di dalam kolom sebagai petunjuk.
* `required`: pengguna wajib mengisi ini sebelum submit.
* `<br>`: pindah baris setelah input.

---

```html
<input type="password" name="password" placeholder="Password" required><br>
```

➡️ Ini adalah input untuk **password**:

* `type="password"`: karakter disembunyikan (bulatan atau bintang).
* `name="password"`: bisa diambil di PHP dengan `$_POST['password']`.
* `placeholder="Password"`: petunjuk dalam kolom.
* `required`: wajib diisi.
* `<br>`: pindah baris setelah input.

---

```html
<button type="submit">Daftar</button>
```

➡️ Ini tombol untuk mengirim data form.

* `type="submit"`: saat diklik, form akan dikirim ke tujuan `action`.
* Teks tombol adalah **"Daftar"**.

---

### 🔁 Alur Kerja Saat Dijalankan:

1. User buka `register.php`, isi username & password.
2. Klik tombol **Daftar**.
3. Data dikirim ke:

   ```
   ../index.php?action=register
   ```
4. Di file `index.php`, akan dijalankan:

   ```php
   $auth->register($_POST['username'], $_POST['password']);
   ```

---

//ini untuk dashboard
Berikut adalah penjelasan **baris demi baris** dari file `dashboard.php` yang kamu tunjukkan. File ini digunakan untuk halaman setelah pengguna berhasil login.

---

## 📄 `dashboard.php`

### Baris 1

```php
<?php
```

☑️ Awal dari skrip PHP.

---

### Baris 2

```php
session_start();
```

☑️ Memulai session.
📝 Wajib dipanggil sebelum kamu bisa akses `$_SESSION`.

---

### Baris 3–6

```php
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
```

☑️ **Cek apakah user sudah login**:

* Kalau belum login (variabel session `'user'` belum diset), arahkan ke halaman login (`index.php`).
* `exit()` menghentikan eksekusi halaman agar tidak lanjut ke HTML bawahnya.

---

### Baris 7

```php
?>
```

☑️ Menutup bagian PHP agar bisa menampilkan HTML.

---

### Baris 8

```php
<h2>Selamat datang, <?php echo $_SESSION['user']; ?>!</h2>
```

☑️ Menampilkan teks ucapan selamat datang + nama user dari session.

---

### Baris 9

```php
<a href="index.php?action=logout">Logout</a>
```

☑️ Link untuk logout. Akan mengarahkan user ke `index.php` dengan parameter `action=logout`.

📝 Biasanya akan dicek di `index.php` apakah `$_GET['action'] == 'logout'`, dan jika iya, maka dijalankan fungsi logout dari `AuthController`.

---

## 🧠 Kesimpulan

| Fitur                      | Penjelasan                                                |
| -------------------------- | --------------------------------------------------------- |
| `session_start()`          | Mulai session agar data login tersimpan                   |
| `isset($_SESSION['user'])` | Cek apakah user sudah login                               |
| `header("Location: ...")`  | Redirect ke halaman login jika belum login                |
| `$_SESSION['user']`        | Menyimpan data login user                                 |
| Logout link                | Mengarah ke `index.php?action=logout` untuk memicu logout |

---

Kalau FG ingin, aku bisa bantu:

* 🔁 Tambahkan komentar langsung di file PHP
* 🗂️ Buatkan struktur folder lengkap dari semua file yang sudah ada
* 💾 Siapkan dalam bentuk ZIP atau project siap deploy ke hosting (seperti InfinityFree)

Ingin aku bantu ke arah mana dulu?
