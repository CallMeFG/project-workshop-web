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

## 🧠 Saran Peningkatan

Kalau FG mau, kita bisa tambahkan fitur berikut ke `login.php`:

* ✅ Tampilkan pesan error kalau login gagal
* 👁️ Tombol "Lihat Password"
* 🎨 Sedikit CSS biar lebih cantik

---

Mau lanjut bahas file `AuthController.php` sekarang, FG? Biasanya file itu yang penting untuk proses autentikasi user login/logout/register.

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

Kalau kamu sudah punya file `AuthController.php`, aku bisa bantu jelaskan juga bagaimana proses `register()` bekerja secara backend. Mau lanjut ke situ?
