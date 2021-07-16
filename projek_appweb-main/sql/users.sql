- phpMyAdmin SQL Dump
- versi 4.9.1
- https://www.phpmyadmin.net/
-
- Tuan rumah: 127.0.0.1
- Waktu pembuatan: 16 Des 2020 pada 16.54
- Versi server: 10.4.8-MariaDB
- Versi PHP: 7.3.10

SET SQL_MODE =  " NO_AUTO_VALUE_ON_ZERO " ;
SET AUTOCOMMIT =  0 ;
MULAI TRANSAKSI ;
SET TIME_ZONE =  " 00: 00 " ;


/ * ! 40101 SET @OLD_CHARACTER_SET_CLIENT = @@ CHARACTER_SET_CLIENT * / ;
/ * ! 40101 SET @OLD_CHARACTER_SET_RESULTS = @@ CHARACTER_SET_RESULTS * / ;
/ * ! 40101 SET @OLD_COLLATION_CONNECTION = @@ COLLATION_CONNECTION * / ;
/ * ! 40101 SET NAMA utf8mb4 * / ;

-
- Basis data: `event_mande`
-

- ------------------------------------------------ --------

-
- Struktur dari tabel `users`
-

BUAT  TABEL ` pengguna` (
  ` Id `  int ( 11 ) NOT NULL ,
  ` Nama `  varchar ( 16 ) NOT NULL ,
  ` Sandi `  varchar ( 255 ) NOT NULL
) MESIN = CHARSET DEFAULT InnoDB = utf8mb4;

-
- Membuang data untuk tabel `users`
-

INSERT INTO  ` pengguna ` ( ` id ` , ` nama ` , ` kata sandi ` ) VALUES
( 1 , ' wawa ' , ' $ 2y $ 10 $ NlZcMjZ1r / uYoR7SVPpZQeHMyhovpzw.63tTz4hBSX4kHVjCA0Lri ' ),
( 5 , ' nisa ' , ' $ 2y $ 10 $ S0 / bKyTjIRX5jsPeZzeimOunUcbC4twKiY3pMtV8oLNw7JqCMuj9C ' ),
( 6 , ' raihan ' , ' $ 2y $ 10 $ foYdomzLN.p9nxs111TAw.IYzY2U / mmBdmocOUNZVXr87toh3xvMW ' ),
( 7 , ' wawe ' , ' $ 2y $ 10 $ 7mVYfPoCA9fatcb50kcTiuzLBPvcFTb10a / VtdCVNe7VowLx6O7qy ' );

-
- Indeks untuk tabel yang dibuang
-

-
- Indeks untuk tabel `users`
-
ALTER  TABLE  ` pengguna `
  ADD PRIMARY KEY ( ` id ` );

-
- AUTO_INCREMENT untuk tabel yang dibuang
-

-
- AUTO_INCREMENT untuk tabel `users`
-
ALTER  TABLE  ` pengguna `
  MENGUBAH ` id `  int ( 11 ) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 8 ;
KOMIT ;

/ * ! 40101 SET CHARACTER_SET_CLIENT = @ OLD_CHARACTER_SET_CLIENT * / ;
/ * ! 40101 SET CHARACTER_SET_RESULTS = @ OLD_CHARACTER_SET_RESULTS * / ;
/ * ! 40101 SET COLLATION_CONNECTION = @ OLD_COLLATION_CONNECTION * / ;
