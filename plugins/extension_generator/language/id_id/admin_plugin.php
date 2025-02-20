<?php
/**
 * Admin Plugin
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminPlugin.features.type'] = 'Jenis';
$lang['AdminPlugin.features.confirm'] = 'Berikutnya - Konfirmasi';
$lang['AdminPlugin.features.text_remove'] = 'Menghapus';
$lang['AdminPlugin.features.text_options'] = 'Pilihan';
$lang['AdminPlugin.features.cron_task_row_add'] = 'Tambahkan Tugas Cron';
$lang['AdminPlugin.features.service_tab_row_add'] = 'Tambahkan Tab Manajemen Layanan';
$lang['AdminPlugin.features.placeholder_time'] = 'misalnya 14:25 atau 60';
$lang['AdminPlugin.features.placeholder_cron_label'] = 'Contoh: Contoh Tugas Cron';
$lang['AdminPlugin.features.placeholder_name'] = 'contoh: cron_task_example';
$lang['AdminPlugin.features.placeholder_tab_label'] = 'misalnya Ubah Kata Sandi';
$lang['AdminPlugin.features.placeholder_method_name'] = 'contoh: tabUbahKataPassword';
$lang['AdminPlugin.features.tooltip_time'] = 'Waktu 24 jam harian saat tugas ini harus dijalankan (misalnya "14:25") ATAU Interval, dalam menit, saat tugas cron ini harus dijalankan';
$lang['AdminPlugin.features.tooltip_type'] = 'Jenis pengaturan waktu yang digunakan untuk tugas cron (waktu atau interval)';
$lang['AdminPlugin.features.tooltip_description'] = 'Deskripsi yang ditampilkan pada halaman daftar tugas cron';
$lang['AdminPlugin.features.tooltip_cron_label'] = 'Nama tampilan dari tugas cron';
$lang['AdminPlugin.features.tooltip_name'] = 'Nama tugas cron dalam basis kode dalam kasus snake (yaitu cron_task_example)';
$lang['AdminPlugin.features.tooltip_level'] = 'Tingkat antarmuka untuk menampilkan tab (staf atau klien)';
$lang['AdminPlugin.features.tooltip_tab_label'] = 'Nama tampilan tab layanan';
$lang['AdminPlugin.features.tooltip_method_name'] = 'Nama metode yang akan dibuat untuk tab ini di basis kode (dalam bentuk camelCaseMethodName)';
$lang['AdminPlugin.features.time'] = 'Waktu Mulai/Interval';
$lang['AdminPlugin.features.description'] = 'Deskripsi';
$lang['AdminPlugin.features.name'] = 'Nama';
$lang['AdminPlugin.features.level'] = 'Tingkat';
$lang['AdminPlugin.features.label'] = 'Label';
$lang['AdminPlugin.features.method_name'] = 'Nama Metode';
$lang['AdminPlugin.features.heading_optional_functions'] = 'Fungsi Opsional';
$lang['AdminPlugin.features.heading_cron_tasks'] = 'Tugas Cron';
$lang['AdminPlugin.features.heading_service_tabs'] = 'Tab Manajemen Layanan';
$lang['AdminPlugin.features.heading_features'] = 'Fitur Tambahan';
$lang['AdminPlugin.integrations.features'] = 'Berikutnya - Fitur Tambahan';
$lang['AdminPlugin.integrations.placeholder_link'] = 'misalnya plugin/support_manager/client_tickets/';
$lang['AdminPlugin.integrations.placeholder_label'] = 'misalnya Tiket';
$lang['AdminPlugin.integrations.placeholder_card_callback'] = 'Contoh: getClientTickets';
$lang['AdminPlugin.integrations.placeholder_event_callback'] = 'Contoh: myClientAddHandlerMethod';
$lang['AdminPlugin.integrations.placeholder_event'] = 'misalnya Klien.Tambah';
$lang['AdminPlugin.integrations.placeholder_name'] = 'misalnya Generator Ekstensi';
$lang['AdminPlugin.integrations.placeholder_action'] = 'misalnya indeks';
$lang['AdminPlugin.integrations.placeholder_controller'] = 'Contoh: admin_main';
$lang['AdminPlugin.integrations.tooltip_link'] = 'URI yang akan ditautkan ketika kartu klien diklik';
$lang['AdminPlugin.integrations.tooltip_card_callback'] = 'Nama metode yang akan dibuat di kelas plugin utama untuk mengambil nilai kartu';
$lang['AdminPlugin.integrations.tooltip_level'] = 'Tingkat antarmuka untuk menampilkan kartu klien';
$lang['AdminPlugin.integrations.tooltip_label'] = 'String yang muncul di bawah nilai sebagai label';
$lang['AdminPlugin.integrations.tooltip_event_callback'] = 'Nama metode penangan peristiwa yang akan dibuat di kelas plugin utama';
$lang['AdminPlugin.integrations.tooltip_event'] = 'Peristiwa yang akan ditambahkan penanganannya (misalnya Klien.add). Untuk daftar event inti yang didaftarkan oleh blesta, lihat https://docs.blesta.com/display/dev/Event+Handler';
$lang['AdminPlugin.integrations.tooltip_name'] = 'Nama tampilan tindakan ini (teks navigasi, tajuk widget, atau teks tautan, tergantung lokasi tindakan)';
$lang['AdminPlugin.integrations.tooltip_action'] = 'Tindakan untuk URI yang digunakan untuk menarik konten untuk tindakan tersebut (misalnya indeks)';
$lang['AdminPlugin.integrations.tooltip_controller'] = 'Pengontrol untuk URI yang digunakan untuk menarik konten untuk tindakan (misalnya admin_main)';
$lang['AdminPlugin.integrations.tooltip_location'] = 'Lokasi di antarmuka untuk menampilkan tindakan';
$lang['AdminPlugin.integrations.text_remove'] = 'Menghapus';
$lang['AdminPlugin.integrations.text_options'] = 'Pilihan';
$lang['AdminPlugin.integrations.text_cards_more_info'] = 'Kartu klien adalah kotak kecil yang ditampilkan pada profil klien (di area klien atau admin) dan terutama digunakan untuk menampilkan berbagai statistik (misalnya jumlah layanan, tiket, atau pesanan). Kartu ini terdiri dari nilai, label, latar belakang, dan tautan.  Label ditampilkan di bawah nilai yang diambil dari fungsi callback.';
$lang['AdminPlugin.integrations.text_events_more_info'] = 'Ini adalah sistem pengait di Blesta.  Event didaftarkan oleh core atau oleh plugin, kemudian plugin mendengarkan event tersebut dan mendefinisikan metode handler untuk event tersebut.  Karena setiap plugin dapat mendaftarkan event, maka jumlah event bisa berapa saja, namun daftar event inti yang didefinisikan oleh blesta dapat ditemukan di sini https://docs.blesta.com/display/dev/Event+Handlers.';
$lang['AdminPlugin.integrations.text_actions_more_info'] = '"Actions" mewakili halaman-halaman plugin yang dapat diakses melalui antarmuka inti. Ini termasuk tautan navigasi di area admin dan klien, widget di area admin, dan tautan di bilah sisi profil klien. Pengontrol dan tindakan yang dimasukkan di sini akan digunakan untuk menghasilkan file pengontrol sederhana. Selain itu, file tampilan sampel akan dibuat untuk setiap tindakan.';
$lang['AdminPlugin.integrations.link'] = 'Tautan';
$lang['AdminPlugin.integrations.card_callback'] = 'Metode Panggilan Balik';
$lang['AdminPlugin.integrations.level'] = 'Tingkat';
$lang['AdminPlugin.integrations.label'] = 'Label';
$lang['AdminPlugin.integrations.event_callback'] = 'Metode Panggilan Balik';
$lang['AdminPlugin.integrations.event'] = 'Acara';
$lang['AdminPlugin.integrations.name'] = 'Nama';
$lang['AdminPlugin.integrations.action'] = 'Tindakan';
$lang['AdminPlugin.integrations.controller'] = 'Pengontrol';
$lang['AdminPlugin.integrations.location'] = 'Lokasi';
$lang['AdminPlugin.integrations.heading_more_info'] = 'Info Lebih Lanjut';
$lang['AdminPlugin.integrations.heading_cards'] = 'Kartu Klien';
$lang['AdminPlugin.integrations.heading_events'] = 'Penanggung Jawab Acara';
$lang['AdminPlugin.integrations.heading_actions'] = 'Tindakan';
$lang['AdminPlugin.integrations.card_row_add'] = 'Tambahkan Kartu Klien';
$lang['AdminPlugin.integrations.event_row_add'] = 'Menambahkan Penangan Peristiwa';
$lang['AdminPlugin.integrations.action_row_add'] = 'Tambahkan Tindakan';
$lang['AdminPlugin.integrations.heading_integrations'] = 'Integrasi Inti';
$lang['AdminPlugin.database.integrations'] = 'Berikutnya - Integrasi Inti';
$lang['AdminPlugin.database.text_remove'] = 'Menghapus';
$lang['AdminPlugin.database.text_options'] = 'Pilihan';
$lang['AdminPlugin.database.text_more_info'] = 'Halaman ini digunakan untuk membuat skema untuk tabel basis data yang dihasilkan dan dikelola oleh plugin ini. Kode akan dibuat untuk menambah dan menghapus tabel-tabel ini pada saat instalasi dan penghapusan. Selain itu, file model akan dibuat untuk tabel-tabel ini dengan beberapa fungsi dasar.';
$lang['AdminPlugin.database.placeholder_length'] = 'misalnya 64 atau \'a\',\'b\',\'c\'';
$lang['AdminPlugin.database.placeholder_column_name'] = 'contoh: nama_kolom';
$lang['AdminPlugin.database.tooltip_primary'] = 'Menandai kolom ini sebagai kunci utama untuk kolom tersebut. Kunci komposit saat ini tidak didukung. Jika Anda ingin memiliki kunci komposit atau tanpa kunci utama, lihat metode install() dari berkas ***_plugin.php yang dihasilkan.';
$lang['AdminPlugin.database.tooltip_nullable'] = 'Apakah akan mengizinkan nilai nol untuk kolom ini atau tidak.';
$lang['AdminPlugin.database.tooltip_default'] = 'Nilai default yang akan disisipkan untuk kolom ini. Kolom yang dapat dinolkan dengan nilai default kosong akan menjadi NULL.';
$lang['AdminPlugin.database.tooltip_length'] = 'Mengatur jumlah karakter maksimal dalam sebuah bidang. Jika tipe kolom adalah "enum", masukkan nilai menggunakan format ini: \'a\',\'b\',\'c\'...';
$lang['AdminPlugin.database.tooltip_type'] = 'Jenis kolom dalam database.';
$lang['AdminPlugin.database.tooltip_column_name'] = 'Nama kolom dalam database (misal: nama_kolom).';
$lang['AdminPlugin.database.primary'] = 'Kunci Utama';
$lang['AdminPlugin.database.nullable'] = 'Dapat dibatalkan';
$lang['AdminPlugin.database.default'] = 'Default';
$lang['AdminPlugin.database.length'] = 'Panjang / Nilai';
$lang['AdminPlugin.database.type'] = 'Jenis';
$lang['AdminPlugin.database.column_name'] = 'Nama Kolom';
$lang['AdminPlugin.database.placeholder_table_name'] = 'contoh: nama_tabel_ekstensi';
$lang['AdminPlugin.database.tooltip_table_name'] = 'Nama tabel dalam database (misal: extention_table_name)';
$lang['AdminPlugin.database.table_name'] = 'Nama Tabel';
$lang['AdminPlugin.database.column_row_add'] = 'Tambahkan Kolom';
$lang['AdminPlugin.database.table_row_add'] = 'Menambahkan Tabel Basis Data';
$lang['AdminPlugin.database.heading_more_info'] = 'Info Lebih Lanjut';
$lang['AdminPlugin.database.heading_database'] = 'Tabel Basis Data';
$lang['AdminPlugin.basic.confirm'] = 'Berikutnya - Konfirmasi';
$lang['AdminPlugin.basic.database'] = 'Berikutnya - Info Basis Data';
$lang['AdminPlugin.basic.placeholder_author_url'] = 'misalnya https://blesta.com/';
$lang['AdminPlugin.basic.placeholder_author_name'] = 'misalnya Blesta';
$lang['AdminPlugin.basic.tooltip_logo'] = 'Logo yang ditampilkan dalam daftar plugin. Gambar tidak diubah ukurannya, jadi dimensi yang ideal adalah 150x70';
$lang['AdminPlugin.basic.tooltip_description'] = 'Deskripsi yang ditampilkan dalam daftar plugin';
$lang['AdminPlugin.basic.text_remove'] = 'Menghapus';
$lang['AdminPlugin.basic.author_row_add'] = 'Tambahkan Penulis';
$lang['AdminPlugin.basic.text_options'] = 'Pilihan';
$lang['AdminPlugin.basic.author_url'] = 'URL Penulis';
$lang['AdminPlugin.basic.author_name'] = 'Nama Penulis';
$lang['AdminPlugin.basic.logo'] = 'Logo';
$lang['AdminPlugin.basic.description'] = 'Deskripsi';
$lang['AdminPlugin.basic.heading_authors'] = 'Penulis';
$lang['AdminPlugin.basic.heading_basic'] = 'Informasi Dasar';
$lang['AdminPlugin.index.boxtitle_extension_generator'] = 'Generator Ekstensi - Plugin';
$lang['AdminPlugin.index.page_title'] = 'Generator Ekstensi - %1$s';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissionGroups'] = 'Mengembalikan semua grup izin yang akan dikonfigurasi untuk plugin ini (dipanggil setelah install(), upgrade(), dan uninstall(), menimpa semua grup izin yang ada)';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissions'] = 'Mengembalikan semua izin yang akan dikonfigurasi untuk plugin ini (dipanggil setelah install(), upgrade(), dan uninstall(), menimpa semua izin yang ada)';
$lang['AdminPlugin.getoptionalfunctions.tooltip_upgrade'] = 'Melakukan migrasi data dari $current_version (versi saat ini yang terinstal) ke versi kumpulan file yang diberikan. Menetapkan kesalahan input pada kegagalan, mencegah modul untuk diupgrade.';
$lang['AdminPlugin.getcardlevels.staff'] = 'Staf';
$lang['AdminPlugin.getcardlevels.client'] = 'Klien';
$lang['AdminPlugin.getactionlocations.widget_staff_billing'] = 'Widget - Ikhtisar Penagihan (Staf)';
$lang['AdminPlugin.getactionlocations.widget_client_home'] = 'Widget - Profil Klien (Klien)';
$lang['AdminPlugin.getactionlocations.widget_staff_client'] = 'Widget - Profil Klien (Staf)';
$lang['AdminPlugin.getactionlocations.widget_staff_home'] = 'Widget - Dasbor (Staf)';
$lang['AdminPlugin.getactionlocations.action_staff_client'] = 'Bilah Sisi Profil Klien (Staf)';
$lang['AdminPlugin.getactionlocations.nav_secondary_staff'] = 'Sub-Menu Nav (Staf)';
$lang['AdminPlugin.getactionlocations.nav_primary_staff'] = 'Navigasi Utama (Staf)';
$lang['AdminPlugin.getactionlocations.nav_primary_client'] = 'Navigasi Utama (Klien)';

