<?php
/**
 * Seed location + POI. Nilai ini adalah salinan terstruktur dari data real yang sebelumnya ada di ADDR, KOTA, KOTADATA, PROVDATA, dan POI pada katalog index.php.
 * GEO/ISLANDS tidak disimpan di database.
 */
return json_decode(<<<'JSON'
{
  "locations": {
    "Pulogebang - sudah": {
      "lahan_lokasi": "Pulogebang - sudah",
      "provinsi": "DKI Jakarta",
      "kota": "Kota Jakarta Timur",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": 5729876,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "UMP DKI Jakarta 2026",
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 3,
      "prov_development": "Pengembangan kawasan TOD & hunian vertikal terintegrasi transportasi massal",
      "prov_development_level": 3
    },
    "Sawojajar II (Amorf)": {
      "lahan_lokasi": "Sawojajar II (Amorf)",
      "provinsi": "Jawa Timur",
      "kota": "Kota Malang",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Martubung II": {
      "lahan_lokasi": "Martubung II",
      "provinsi": "Sumatera Utara",
      "kota": "Kota Medan",
      "alamat": "Jl. Samudra Indonesia, Tangkahan, Kec. Medan Labuhan, Kota Medan, Sumatera Utara 20251",
      "maps_link": "https://maps.app.goo.gl/csnQ9nrC5f521a3h7",
      "kota_populasi_juta": 2.435,
      "kota_umk": null,
      "kota_vp": 1,
      "kota_vu": 0,
      "kota_catatan": "Kota terbesar di luar Jawa",
      "prov_populasi_juta": 15.98,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Sei Mangkei; tol Trans-Sumatera & pengembangan kawasan industri baru Medan",
      "prov_development_level": 3
    },
    "S.Rejo Kemiling (BKP)": {
      "lahan_lokasi": "S.Rejo Kemiling (BKP)",
      "provinsi": "Lampung",
      "kota": "Kota Bandar Lampung",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 9.42,
      "prov_v": 1,
      "prov_tier": 2,
      "prov_development": "Simpul tol Trans-Sumatera & pelabuhan Bakauheni",
      "prov_development_level": 2
    },
    "Talang Kelapa": {
      "lahan_lokasi": "Talang Kelapa",
      "provinsi": "Sumatera Selatan",
      "kota": "Kota Palembang",
      "alamat": "Jl. Letjen Tni Dr. H. Ibnu Sutowo 1, Talang Klp., Kec. Alang-Alang Lebar, Kota Palembang, Sumatera Selatan 30961",
      "maps_link": "https://maps.app.goo.gl/SHCgREAQYMyr59Xm8",
      "kota_populasi_juta": 1.549,
      "kota_umk": null,
      "kota_vp": 1,
      "kota_vu": 0,
      "kota_catatan": "",
      "prov_populasi_juta": 8.84,
      "prov_v": 1,
      "prov_tier": 2,
      "prov_development": "Program 3 juta rumah aktif di koridor Palembang–Banyuasin",
      "prov_development_level": 2
    },
    "Driyorejo 26.5 ha": {
      "lahan_lokasi": "Driyorejo 26.5 ha",
      "provinsi": "Jawa Timur",
      "kota": "Kab. Gresik",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Menanggal": {
      "lahan_lokasi": "Menanggal",
      "provinsi": "Jawa Timur",
      "kota": "Kota Surabaya",
      "alamat": "Jl. Wisma Menanggal I 31-35, Menanggal, Kec. Gayungan, Surabaya, Jawa Timur 60234",
      "maps_link": "https://maps.app.goo.gl/F5MuQbBNSsBFnxsCA",
      "kota_populasi_juta": 3.0,
      "kota_umk": 5288796,
      "kota_vp": 1,
      "kota_vu": 1,
      "kota_catatan": "Kota terbesar kedua di Indonesia",
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Sei Ambawang - Pontianak": {
      "lahan_lokasi": "Sei Ambawang - Pontianak",
      "provinsi": "Kalimantan Barat",
      "kota": "Kab. Kubu Raya",
      "alamat": "Jl. Trans Kalimantan, Sungai Ambawang Kuala, Kec. Sungai Ambawang, Kabupaten Kubu Raya, Kalimantan Barat 78241",
      "maps_link": "https://maps.app.goo.gl/fiH69qvTJdMKV6s78",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "Jalan Trans-Kalimantan; pertumbuhan pariwisata Singkawang",
      "prov_development_level": 2
    },
    "Cirebon (Sendang)": {
      "lahan_lokasi": "Cirebon (Sendang)",
      "provinsi": "Jawa Barat",
      "kota": "Kota Cirebon",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Martubung I": {
      "lahan_lokasi": "Martubung I",
      "provinsi": "Sumatera Utara",
      "kota": "Kota Medan",
      "alamat": "Jl. Danau Laguna, Besar, Kec. Medan Labuhan, Kota Medan, Sumatera Utara 20251",
      "maps_link": "https://maps.app.goo.gl/h1hnUtZ61Vm1ECsK8",
      "kota_populasi_juta": 2.435,
      "kota_umk": null,
      "kota_vp": 1,
      "kota_vu": 0,
      "kota_catatan": "Kota terbesar di luar Jawa",
      "prov_populasi_juta": 15.98,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Sei Mangkei; tol Trans-Sumatera & pengembangan kawasan industri baru Medan",
      "prov_development_level": 3
    },
    "Trimulyo": {
      "lahan_lokasi": "Trimulyo",
      "provinsi": "Jawa Tengah",
      "kota": "Kab. Bantul",
      "alamat": "Jl. Abdi Negara II, Kembang Songo, Trimulyo, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55781",
      "maps_link": "https://maps.app.goo.gl/NZku1N4nrt7MDFNq6",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Blok C3 - Kemayoran": {
      "lahan_lokasi": "Blok C3 - Kemayoran",
      "provinsi": "DKI Jakarta",
      "kota": "Kota Jakarta Pusat",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": 5729876,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "UMP DKI Jakarta 2026",
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 3,
      "prov_development": "Pengembangan kawasan TOD & hunian vertikal terintegrasi transportasi massal",
      "prov_development_level": 3
    },
    "Sukabumi": {
      "lahan_lokasi": "Sukabumi",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Sukabumi",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Majalengka": {
      "lahan_lokasi": "Majalengka",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Majalengka",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Sukaramai": {
      "lahan_lokasi": "Sukaramai",
      "provinsi": "Sumatera Utara",
      "kota": "Kota Medan",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": 2.435,
      "kota_umk": null,
      "kota_vp": 1,
      "kota_vu": 0,
      "kota_catatan": "Kota terbesar di luar Jawa",
      "prov_populasi_juta": 15.98,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Sei Mangkei; tol Trans-Sumatera & pengembangan kawasan industri baru Medan",
      "prov_development_level": 3
    },
    "BTS V (Sertipikat)": {
      "lahan_lokasi": "BTS V (Sertipikat)",
      "provinsi": "Jawa Barat",
      "kota": "Jawa (perlu konfirmasi)",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Malaka - Jaktim": {
      "lahan_lokasi": "Malaka - Jaktim",
      "provinsi": "DKI Jakarta",
      "kota": "Kota Jakarta Timur",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": 5729876,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "UMP DKI Jakarta 2026",
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 3,
      "prov_development": "Pengembangan kawasan TOD & hunian vertikal terintegrasi transportasi massal",
      "prov_development_level": 3
    },
    "Slamaran II": {
      "lahan_lokasi": "Slamaran II",
      "provinsi": "Jawa Tengah",
      "kota": "Kota Pekalongan",
      "alamat": "Jl. Rasamala Raya 1, Krapyak Lor, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51149",
      "maps_link": "https://maps.app.goo.gl/qGm7VhpEbyccfYii6",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Kraton": {
      "lahan_lokasi": "Kraton",
      "provinsi": "Jawa Timur",
      "kota": "Kab. Pasuruan",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Ilir Barat": {
      "lahan_lokasi": "Ilir Barat",
      "provinsi": "Sumatera Selatan",
      "kota": "Kota Palembang",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": 1.549,
      "kota_umk": null,
      "kota_vp": 1,
      "kota_vu": 0,
      "kota_catatan": "",
      "prov_populasi_juta": 8.84,
      "prov_v": 1,
      "prov_tier": 2,
      "prov_development": "Program 3 juta rumah aktif di koridor Palembang–Banyuasin",
      "prov_development_level": 2
    },
    "Surodinawan": {
      "lahan_lokasi": "Surodinawan",
      "provinsi": "Jawa Timur",
      "kota": "Kota Mojokerto",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Klipang Green I": {
      "lahan_lokasi": "Klipang Green I",
      "provinsi": "Jawa Tengah",
      "kota": "Kota Semarang",
      "alamat": "Jl. Klipang Raya 18-3, Sendangmulyo, Kec. Tembalang, Kota Semarang, Jawa Tengah 50272",
      "maps_link": "https://maps.app.goo.gl/mZDXyYQKQ9VcW1qPA",
      "kota_populasi_juta": null,
      "kota_umk": 3701709,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "",
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Klipang Green II": {
      "lahan_lokasi": "Klipang Green II",
      "provinsi": "Jawa Tengah",
      "kota": "Kota Semarang",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": 3701709,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "",
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Talang Keramat": {
      "lahan_lokasi": "Talang Keramat",
      "provinsi": "Sumatera Selatan",
      "kota": "Kab. Banyuasin",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 8.84,
      "prov_v": 1,
      "prov_tier": 2,
      "prov_development": "Program 3 juta rumah aktif di koridor Palembang–Banyuasin",
      "prov_development_level": 2
    },
    "Martubung III": {
      "lahan_lokasi": "Martubung III",
      "provinsi": "Sumatera Utara",
      "kota": "Kota Medan",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": 2.435,
      "kota_umk": null,
      "kota_vp": 1,
      "kota_vu": 0,
      "kota_catatan": "Kota terbesar di luar Jawa",
      "prov_populasi_juta": 15.98,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Sei Mangkei; tol Trans-Sumatera & pengembangan kawasan industri baru Medan",
      "prov_development_level": 3
    },
    "Lumpang": {
      "lahan_lokasi": "Lumpang",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Bogor",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": 5161769,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "",
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Gadung Driyorejo": {
      "lahan_lokasi": "Gadung Driyorejo",
      "provinsi": "Jawa Timur",
      "kota": "Kab. Gresik",
      "alamat": "Jl. Raya Randegansari No.6, Paras, Mulung, Kec. Driyorejo, Kabupaten Gresik, Jawa Timur 61177",
      "maps_link": "https://maps.app.goo.gl/cQpZgnKU5ZQfqLWS7",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Jonggol": {
      "lahan_lokasi": "Jonggol",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Bogor",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": 5161769,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "",
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Ranomuut": {
      "lahan_lokasi": "Ranomuut",
      "provinsi": "Sulawesi Utara",
      "kota": "Kota Manado",
      "alamat": "Jl. Camar Raya 117, Malendeng, Kec. Tikala, Kota Manado, Sulawesi Utara",
      "maps_link": "https://maps.app.goo.gl/nddCKRCP12sg8Fwy6",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "KEK Bitung; ekspansi pengembang nasional ke Sulawesi Utara (2026)",
      "prov_development_level": 2
    },
    "Bumi Air Raja Tanjung Pinang": {
      "lahan_lokasi": "Bumi Air Raja Tanjung Pinang",
      "provinsi": "Kepulauan Riau",
      "kota": "Kota Tanjung Pinang",
      "alamat": "Pinang Kencana, Tanjungpinang Timur, Tanjung Pinang City, Riau Islands 29125",
      "maps_link": "https://maps.app.goo.gl/vCQtb1732fb6NM4a8",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "7 Proyek Strategis Nasional termasuk KEK Galang Batang; Nongsa Digital Park; rencana kawasan AI & Data Center Bintan; Integrated Terminal Pertamina Tanjung Uban",
      "prov_development_level": 3
    },
    "Cigelam": {
      "lahan_lokasi": "Cigelam",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Purwakarta",
      "alamat": "Cigelam, Kec. Babakancikao, Kabupaten Purwakarta, Jawa Barat 41151",
      "maps_link": "https://maps.app.goo.gl/pjcMYc2zovWmhUMi6",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Telukjambe": {
      "lahan_lokasi": "Telukjambe",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Karawang",
      "alamat": "Jl. Raya Perumnas, Sukaluyu, Telukjambe Timur, Karawang, Jawa Barat 41361",
      "maps_link": "https://maps.app.goo.gl/3hiiVw92VdpkytjB8",
      "kota_populasi_juta": null,
      "kota_umk": 5886853,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "Kawasan industri terbesar Asia Tenggara",
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Tanjung Uban - Bumi Tanjung Permai (HPL 1)": {
      "lahan_lokasi": "Tanjung Uban - Bumi Tanjung Permai (HPL 1)",
      "provinsi": "Kepulauan Riau",
      "kota": "Kab. Bintan",
      "alamat": "Tj. Permai, Kec. Seri Kuala Lobam, Kabupaten Bintan, Kepulauan Riau 29152",
      "maps_link": "https://maps.app.goo.gl/JD7zVLUT5pAKFCh36",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "7 Proyek Strategis Nasional termasuk KEK Galang Batang; Nongsa Digital Park; rencana kawasan AI & Data Center Bintan; Integrated Terminal Pertamina Tanjung Uban",
      "prov_development_level": 3
    },
    "Kalipuro": {
      "lahan_lokasi": "Kalipuro",
      "provinsi": "Jawa Timur",
      "kota": "Kab. Banyuwangi",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Pesawaran": {
      "lahan_lokasi": "Pesawaran",
      "provinsi": "Lampung",
      "kota": "Kab. Pesawaran",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 9.42,
      "prov_v": 1,
      "prov_tier": 2,
      "prov_development": "Simpul tol Trans-Sumatera & pelabuhan Bakauheni",
      "prov_development_level": 2
    },
    "Garut - Karangpawitan": {
      "lahan_lokasi": "Garut - Karangpawitan",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Garut",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Neuheun": {
      "lahan_lokasi": "Neuheun",
      "provinsi": "Aceh",
      "kota": "Kab. Aceh Besar",
      "alamat": "Jl. Sotong, Jl.Tongkol, Kec Mesjid Raya, Kabupaten Aceh Besar",
      "maps_link": "https://maps.app.goo.gl/RMopbJzHQDpFcsMZ8",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "KEK Arun Lhokseumawe",
      "prov_development_level": 2
    },
    "Sektor II": {
      "lahan_lokasi": "Sektor II",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Bogor",
      "alamat": "Jl. Jambu, Jl Delima, Parung Panjang, Bogor, Jawa Barat",
      "maps_link": "https://maps.app.goo.gl/L3aaJz5L6aSZnUoz8",
      "kota_populasi_juta": null,
      "kota_umk": 5161769,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "",
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Pondok Indah": {
      "lahan_lokasi": "Pondok Indah",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Bogor",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": 5161769,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "",
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Lhoksumawe - Jeulekat": {
      "lahan_lokasi": "Lhoksumawe - Jeulekat",
      "provinsi": "Aceh",
      "kota": "Kota Lhokseumawe",
      "alamat": "Jl. Line Pipa, Jeuleukat, Kec. Blang Mangat, Kota Lhokseumawe, Aceh 24355",
      "maps_link": "https://maps.app.goo.gl/bibkHrMs91UV2aKJA",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "KEK Arun Lhokseumawe",
      "prov_development_level": 2
    },
    "Mapanget": {
      "lahan_lokasi": "Mapanget",
      "provinsi": "Sulawesi Utara",
      "kota": "Kota Manado",
      "alamat": "Jl. Raya Tamara, Kima Atas, Kec. Mapanget, Kota Manado, Sulawesi Utara",
      "maps_link": "https://maps.app.goo.gl/rSRpSi63qWPqUNvN7",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "KEK Bitung; ekspansi pengembang nasional ke Sulawesi Utara (2026)",
      "prov_development_level": 2
    },
    "Soreang": {
      "lahan_lokasi": "Soreang",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Bandung",
      "alamat": "Ruko Bumi Parahyangan Kencana Blok N1 No.4-5, Jalan Bhayangkara, Soreang, Bandung, Kabupaten Bandung, Jawa Barat 40911",
      "maps_link": "https://maps.app.goo.gl/963HWFAEDy57San68",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "GSK": {
      "lahan_lokasi": "GSK",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Karawang",
      "alamat": "Jl. Raya Perumnas, Wadas, Telukjambe Timur, Karawang, Jawa Barat 41361",
      "maps_link": "https://maps.app.goo.gl/uva5ehttAFX8PEk88",
      "kota_populasi_juta": null,
      "kota_umk": 5886853,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "Kawasan industri terbesar Asia Tenggara",
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Jetis": {
      "lahan_lokasi": "Jetis",
      "provinsi": "Jawa Timur",
      "kota": "Kab. Mojokerto",
      "alamat": "Jl. Jetis Karya No.7, Wonorejo, Jetis, Kec. Jetis, Kabupaten Mojokerto, Jawa Timur 61352",
      "maps_link": "https://maps.app.goo.gl/YiJAZkJkd9DTnPrn7",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Green Nongsa": {
      "lahan_lokasi": "Green Nongsa",
      "provinsi": "Kepulauan Riau",
      "kota": "Kota Batam",
      "alamat": "Jl. Siliwangi, Sambau, Kecamatan Nongsa, Kota Batam, Kepulauan Riau 29465",
      "maps_link": "https://maps.app.goo.gl/VwrLEhfSkisJoczo6",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "7 Proyek Strategis Nasional termasuk KEK Galang Batang; Nongsa Digital Park; rencana kawasan AI & Data Center Bintan; Integrated Terminal Pertamina Tanjung Uban",
      "prov_development_level": 3
    },
    "Mojopurno II": {
      "lahan_lokasi": "Mojopurno II",
      "provinsi": "Jawa Timur",
      "kota": "Kab. Madiun",
      "alamat": "Jl. Bumi Mojopurno Indah II, Ngrayung, Mojopurno, Kec. Wungu, Kabupaten Madiun, Jawa Timur 63181",
      "maps_link": "https://maps.app.goo.gl/aYeYp1uyhPt5h5oy7",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Mojosongo": {
      "lahan_lokasi": "Mojosongo",
      "provinsi": "Jawa Tengah",
      "kota": "Kota Surakarta",
      "alamat": "Jl. Jaya Wijaya No.84, Mojosongo, Kec. Jebres, Kota Surakarta, Jawa Tengah 57127",
      "maps_link": "https://maps.app.goo.gl/3WFXGWY8bauuq8Xm9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Palir - Lampiran 2": {
      "lahan_lokasi": "Palir - Lampiran 2",
      "provinsi": "Jawa Tengah",
      "kota": "Kota Semarang",
      "alamat": "Jl. Palir Utama Dlm, Podorejo, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50187",
      "maps_link": "https://maps.app.goo.gl/su1KPTTXn38X82pA9",
      "kota_populasi_juta": null,
      "kota_umk": 3701709,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "",
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Permata Regency": {
      "lahan_lokasi": "Permata Regency",
      "provinsi": "Kalimantan Tengah",
      "kota": "Kalimantan (perlu konfirmasi)",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Koridor penyangga Ibu Kota Nusantara",
      "prov_development_level": 2
    },
    "Batam - Muka Kuning": {
      "lahan_lokasi": "Batam - Muka Kuning",
      "provinsi": "Kepulauan Riau",
      "kota": "Kota Batam",
      "alamat": "Jl. R. Suprapto No.1, Buliang, Kec. Batu Aji, Kota Batam, Kepulauan Riau 29438",
      "maps_link": "https://maps.app.goo.gl/16hgm3yzpE5QBDL17",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "7 Proyek Strategis Nasional termasuk KEK Galang Batang; Nongsa Digital Park; rencana kawasan AI & Data Center Bintan; Integrated Terminal Pertamina Tanjung Uban",
      "prov_development_level": 3
    },
    "Bengkulu - Betungan II": {
      "lahan_lokasi": "Bengkulu - Betungan II",
      "provinsi": "Bengkulu",
      "kota": "Kota Bengkulu",
      "alamat": "Air Sebakul - Betungan, Betungan, Kec. Selebar, Kota Bengkulu, Bengkulu",
      "maps_link": "https://maps.app.goo.gl/Ynj3DvyKKFqcmxLdA",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Pengembangan kawasan kota Bengkulu",
      "prov_development_level": 1
    },
    "Rawalumbu": {
      "lahan_lokasi": "Rawalumbu",
      "provinsi": "Jawa Barat",
      "kota": "Kota Bekasi",
      "alamat": "Jl. Siliwangi 12-79, RT.007/RW.003, Bojong Rawalumbu, Kec. Rawalumbu, Kota Bks, Jawa Barat 17116",
      "maps_link": "https://maps.app.goo.gl/wgHXPGLAknh6nPBb9",
      "kota_populasi_juta": null,
      "kota_umk": 5999443,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "UMK tertinggi di Indonesia 2026",
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Takalar (MOU)": {
      "lahan_lokasi": "Takalar (MOU)",
      "provinsi": "Sulawesi Selatan",
      "kota": "Kab. Takalar",
      "alamat": "Manongkoki, Kec. Polombangkeng Utara, Kabupaten Takalar, Sulawesi Selatan 90615",
      "maps_link": "https://maps.app.goo.gl/VDw39RkS8Fy6EUxV9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "Kota mandiri Tallasa City 700 Ha; ekspansi Kalla Land, Ciputra, dan Summarecon di Makassar",
      "prov_development_level": 3
    },
    "Bengkulu - Betungan III": {
      "lahan_lokasi": "Bengkulu - Betungan III",
      "provinsi": "Bengkulu",
      "kota": "Kota Bengkulu",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Pengembangan kawasan kota Bengkulu",
      "prov_development_level": 1
    },
    "Ciamis - Handapherang": {
      "lahan_lokasi": "Ciamis - Handapherang",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Ciamis",
      "alamat": "Jl. Rasamala 2, Handapherang, Kec. Cijeungjing, Kabupaten Ciamis, Jawa Barat 46271",
      "maps_link": "https://maps.app.goo.gl/QABmuo2cdEwnjpuw5",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Cilacap": {
      "lahan_lokasi": "Cilacap",
      "provinsi": "Jawa Tengah",
      "kota": "Kab. Cilacap",
      "alamat": "Jl. Baruna Tengah 1 No.perum, Griya Tegalsari, Tegal Asri, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53211",
      "maps_link": "https://maps.app.goo.gl/Pnq2HwbTSStQt6Ge6",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Salatiga - Lampiran 1": {
      "lahan_lokasi": "Salatiga - Lampiran 1",
      "provinsi": "Jawa Tengah",
      "kota": "Kota Salatiga",
      "alamat": "Antasena V, Dukuh, Kec. Sidomukti, Kota Salatiga, Jawa Tengah 50722",
      "maps_link": "https://maps.app.goo.gl/56G9MooF6wKfudcA9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Tanjung Uban - Bumi Tanjung Permai (HGB 74)": {
      "lahan_lokasi": "Tanjung Uban - Bumi Tanjung Permai (HGB 74)",
      "provinsi": "Kepulauan Riau",
      "kota": "Kab. Bintan",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "7 Proyek Strategis Nasional termasuk KEK Galang Batang; Nongsa Digital Park; rencana kawasan AI & Data Center Bintan; Integrated Terminal Pertamina Tanjung Uban",
      "prov_development_level": 3
    },
    "Indramayu (Pabeanudik)": {
      "lahan_lokasi": "Indramayu (Pabeanudik)",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Indramayu",
      "alamat": "Jl. Prasetya Raya, Pabeanudik, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45219",
      "maps_link": "https://maps.app.goo.gl/btFJHej1cqYRz58i9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Campaka": {
      "lahan_lokasi": "Campaka",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Purwakarta",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Sektor III": {
      "lahan_lokasi": "Sektor III",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Bogor",
      "alamat": "Parung Panjang, Kec. Parung Panjang, Kabupaten Bogor, Jawa Barat 16360",
      "maps_link": "https://maps.app.goo.gl/3S2CutWaFLm7RBGN8",
      "kota_populasi_juta": null,
      "kota_umk": 5161769,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "",
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Patrang": {
      "lahan_lokasi": "Patrang",
      "provinsi": "Jawa Timur",
      "kota": "Kab. Jember",
      "alamat": "Jl. Raya Langsep No.79, Krajan, Patrang, Kec. Patrang, Kabupaten Jember, Jawa Timur 68111",
      "maps_link": "https://maps.app.goo.gl/MgxM73DazKbecKcK7",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Cibungbulang": {
      "lahan_lokasi": "Cibungbulang",
      "provinsi": "Jawa Barat",
      "kota": "Kab. Bogor",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": 5161769,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "",
      "prov_populasi_juta": 51.16,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Kawasan Segitiga Rebana & Bandara Kertajati; 44 kawasan industri siap pakai ditawarkan Pemprov Jabar",
      "prov_development_level": 3
    },
    "Kembangarum": {
      "lahan_lokasi": "Kembangarum",
      "provinsi": "Jawa Tengah",
      "kota": "Kab. Demak",
      "alamat": "Kembangarum, Kec. Mranggen, Kabupaten Demak, Jawa Tengah 59567",
      "maps_link": "https://maps.app.goo.gl/ytgY1EZbJcvzvEFE6",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Palir - Lampiran 1": {
      "lahan_lokasi": "Palir - Lampiran 1",
      "provinsi": "Jawa Tengah",
      "kota": "Kota Semarang",
      "alamat": "Jl. Palir Lestari III 177, Podorejo, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50187",
      "maps_link": "https://maps.app.goo.gl/ouwetztwgnwZdh3r9",
      "kota_populasi_juta": null,
      "kota_umk": 3701709,
      "kota_vp": 0,
      "kota_vu": 1,
      "kota_catatan": "",
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Sumbar - Duri Bastan Baru": {
      "lahan_lokasi": "Sumbar - Duri Bastan Baru",
      "provinsi": "Riau",
      "kota": "Kab. Bengkalis",
      "alamat": "Balai Makam,Kec. Mandau, Kabupaten Bengkalis, Riau",
      "maps_link": "https://maps.app.goo.gl/n58UtK9A3oabk4zW9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 6.73,
      "prov_v": 1,
      "prov_tier": 2,
      "prov_development": "Kawasan Industri Buruk Bakul Bengkalis; Blok Rokan; investasi Rp20,23 T pada Q2-2026, tertinggi se-Sumatera",
      "prov_development_level": 3
    },
    "Sambinae": {
      "lahan_lokasi": "Sambinae",
      "provinsi": "Nusa Tenggara Barat",
      "kota": "Kab. Bima",
      "alamat": "Sambinae, Kec. Mpunda, Kab. Bima, Nusa Tenggara Bar. 84111",
      "maps_link": "https://maps.app.goo.gl/znEhhV2fsyLM1bVS6",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "KEK Mandalika",
      "prov_development_level": 2
    },
    "Pagutan 2": {
      "lahan_lokasi": "Pagutan 2",
      "provinsi": "Nusa Tenggara Barat",
      "kota": "Kota Mataram",
      "alamat": "Jl. Tj. Luar I No.14, Pagutan Bar., Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83117",
      "maps_link": "https://maps.app.goo.gl/BzC2Kh6uetrKeJM69",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "KEK Mandalika",
      "prov_development_level": 2
    },
    "Haluoleo": {
      "lahan_lokasi": "Haluoleo",
      "provinsi": "Sulawesi Tenggara",
      "kota": "Kab. Konawe Selatan",
      "alamat": "Jl. Bandara Haluoleo, Ambaipua, Kec. Ranomeeto, Kabupaten Konawe Selatan, Sulawesi Tenggara 93871",
      "maps_link": "https://maps.app.goo.gl/FeJmtVkujQXQghsa9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Hilirisasi nikel Kolaka & sekitarnya",
      "prov_development_level": 2
    },
    "Kalang Simbara - Sidikalang": {
      "lahan_lokasi": "Kalang Simbara - Sidikalang",
      "provinsi": "Sumatera Utara",
      "kota": "Kota Medan",
      "alamat": "Jl. Bougainville No.1 blok b, Simpang Selayang, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20135",
      "maps_link": "https://maps.app.goo.gl/mCP5XchJ1TgBAHbt7",
      "kota_populasi_juta": 2.435,
      "kota_umk": null,
      "kota_vp": 1,
      "kota_vu": 0,
      "kota_catatan": "Kota terbesar di luar Jawa",
      "prov_populasi_juta": 15.98,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Sei Mangkei; tol Trans-Sumatera & pengembangan kawasan industri baru Medan",
      "prov_development_level": 3
    },
    "Sidokerto - Lampiran 1": {
      "lahan_lokasi": "Sidokerto - Lampiran 1",
      "provinsi": "Jawa Tengah",
      "kota": "Kab. Pati",
      "alamat": "Jl. Jodipati Raya No.70, Jambean, Sidokerto, Kec. Pati, Kabupaten Pati, Jawa Tengah 59118",
      "maps_link": "https://maps.app.goo.gl/DwmLfJDGtsFqi4Pc9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 38.56,
      "prov_v": 1,
      "prov_tier": 3,
      "prov_development": "KEK Kendal; koridor industri & pergudangan Semarang–Demak",
      "prov_development_level": 3
    },
    "Sumbar - Duri": {
      "lahan_lokasi": "Sumbar - Duri",
      "provinsi": "Riau",
      "kota": "Kab. Bengkalis",
      "alamat": "Jl. Kualo Mudo, Balai Makam, Kec. Mandau, Kabupaten Bengkalis, Riau 28983",
      "maps_link": "https://maps.app.goo.gl/xRB35JWQKBqBTaVK6",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 6.73,
      "prov_v": 1,
      "prov_tier": 2,
      "prov_development": "Kawasan Industri Buruk Bakul Bengkalis; Blok Rokan; investasi Rp20,23 T pada Q2-2026, tertinggi se-Sumatera",
      "prov_development_level": 3
    },
    "Pagutan 1": {
      "lahan_lokasi": "Pagutan 1",
      "provinsi": "Nusa Tenggara Barat",
      "kota": "Kota Mataram",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "KEK Mandalika",
      "prov_development_level": 2
    },
    "Meulaboh - Aceh Besar": {
      "lahan_lokasi": "Meulaboh - Aceh Besar",
      "provinsi": "Aceh",
      "kota": "Kab. Aceh Barat",
      "alamat": "Jl. Alue Peunyareng, Ujong Tanoh Darat, Kec. Meureubo, Kabupaten Aceh Barat, Aceh 23681",
      "maps_link": "https://maps.app.goo.gl/U2LE5Dkzb4gLAKob7",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "KEK Arun Lhokseumawe",
      "prov_development_level": 2
    },
    "Jambi - Sungai Duren": {
      "lahan_lokasi": "Jambi - Sungai Duren",
      "provinsi": "Jambi",
      "kota": "Kab. Muaro Jambi",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "Koridor tol Trans-Sumatera",
      "prov_development_level": 1
    },
    "Jambi - Aurduri": {
      "lahan_lokasi": "Jambi - Aurduri",
      "provinsi": "Riau",
      "kota": "Kota Jambi",
      "alamat": null,
      "maps_link": null,
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 6.73,
      "prov_v": 1,
      "prov_tier": 2,
      "prov_development": "Kawasan Industri Buruk Bakul Bengkalis; Blok Rokan; investasi Rp20,23 T pada Q2-2026, tertinggi se-Sumatera",
      "prov_development_level": 3
    },
    "Labuapi": {
      "lahan_lokasi": "Labuapi",
      "provinsi": "Nusa Tenggara Barat",
      "kota": "Kota Mataram",
      "alamat": "Jl. Seruni, Pagutan Bar., Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83127",
      "maps_link": "https://maps.app.goo.gl/D4HJdmzTg1PW4hrq9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "KEK Mandalika",
      "prov_development_level": 2
    },
    "Karangasem": {
      "lahan_lokasi": "Karangasem",
      "provinsi": "Bali",
      "kota": "Kab. Karangasem",
      "alamat": "Ababi, Kec. Abang, Kabupaten Karangasem, Bali 80852",
      "maps_link": "https://maps.app.goo.gl/WXDY82HgCXsmy9yL7",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "Koridor pariwisata nasional",
      "prov_development_level": 2
    },
    "Raha": {
      "lahan_lokasi": "Raha",
      "provinsi": "Sulawesi Tenggara",
      "kota": "Kab. Muna",
      "alamat": "Jl. WR. Supratman, Bone Balano, Kec. Duruka, Kabupaten Muna, Sulawesi Tenggara 93611",
      "maps_link": "https://maps.app.goo.gl/WVDWoMxHzdamtaYn9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Hilirisasi nikel Kolaka & sekitarnya",
      "prov_development_level": 2
    },
    "Pamekasan": {
      "lahan_lokasi": "Pamekasan",
      "provinsi": "Jawa Timur",
      "kota": "Kab. Pamekasan",
      "alamat": "Samatan Timur, Samatan, Kec. Proppo, Kabupaten Pamekasan, Jawa Timur 69363",
      "maps_link": "https://maps.app.goo.gl/yTkT8uidbVe9SYueA",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": 42.35,
      "prov_v": 1,
      "prov_tier": 4,
      "prov_development": "Jalan Lingkar Luar Timur (OERR) Surabaya; koridor ruko & logistik Surabaya–Sidoarjo",
      "prov_development_level": 3
    },
    "Jambi - Muara Bulian": {
      "lahan_lokasi": "Jambi - Muara Bulian",
      "provinsi": "Jambi",
      "kota": "Kab. Batang Hari",
      "alamat": "Jl. Jawa, Muara Bulian, Kec. Muara Bulian, Kabupaten Batang Hari, Jambi 36613",
      "maps_link": "https://maps.app.goo.gl/XGNR5eqvLCyZ9VVg6",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 2,
      "prov_development": "Koridor tol Trans-Sumatera",
      "prov_development_level": 1
    },
    "Pangkalan Bun": {
      "lahan_lokasi": "Pangkalan Bun",
      "provinsi": "Kalimantan Tengah",
      "kota": "Kab. Kotawaringin Barat",
      "alamat": "Jl. Biduri Bulan 55, Batu Belaman, Kec. Kumai, Kabupaten Kotawaringin Barat, Kalimantan Tengah 74181",
      "maps_link": "https://maps.app.goo.gl/GpBSjdq8FgHE1wdeA",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Koridor penyangga Ibu Kota Nusantara",
      "prov_development_level": 2
    },
    "Maubi": {
      "lahan_lokasi": "Maubi",
      "provinsi": "Sulawesi Utara",
      "kota": "Kab. Minahasa Utara",
      "alamat": "Kalawat, Kec. Kalawat, Kabupaten Minahasa Utara, Sulawesi Utara",
      "maps_link": "https://maps.app.goo.gl/vdW6RDRWYwQGZKDK8",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "KEK Bitung; ekspansi pengembang nasional ke Sulawesi Utara (2026)",
      "prov_development_level": 2
    },
    "Poasia": {
      "lahan_lokasi": "Poasia",
      "provinsi": "Sulawesi Tenggara",
      "kota": "Kota Kendari",
      "alamat": "Jl. Kijang 124-78, Rahandouna, Kec. Poasia, Kota Kendari, Sulawesi Tenggara 93232",
      "maps_link": "https://maps.app.goo.gl/YrfYXuMmJC9DHRRaA",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Hilirisasi nikel Kolaka & sekitarnya",
      "prov_development_level": 2
    },
    "Kolaka": {
      "lahan_lokasi": "Kolaka",
      "provinsi": "Sulawesi Tenggara",
      "kota": "Kab. Kolaka",
      "alamat": "Jl. Planduk Perumnas, Lalombaa, Kec. Kolaka, Kabupaten Kolaka, Sulawesi Tenggara 93561",
      "maps_link": "https://maps.app.goo.gl/jXCNDr5LynQsNK3B9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Hilirisasi nikel Kolaka & sekitarnya",
      "prov_development_level": 2
    },
    "Pahandut III": {
      "lahan_lokasi": "Pahandut III",
      "provinsi": "Kalimantan Tengah",
      "kota": "Kota Palangka Raya",
      "alamat": "Jl. Jatayu XI 231, Bukit Tunggal, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 74874",
      "maps_link": "https://maps.app.goo.gl/pmvsGBpCMW8CZKae8",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Koridor penyangga Ibu Kota Nusantara",
      "prov_development_level": 2
    },
    "K.Kapuas-P.Telo": {
      "lahan_lokasi": "K.Kapuas-P.Telo",
      "provinsi": "Kalimantan Tengah",
      "kota": "Kab. Kapuas",
      "alamat": "Jl. Murai Raya Perumnas, Pulau Telo, Kec. Selat, Kabupaten Kapuas, Kalimantan Tengah 73516",
      "maps_link": "https://maps.app.goo.gl/TgvipAchUgCfczRF9",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Koridor penyangga Ibu Kota Nusantara",
      "prov_development_level": 2
    },
    "Pahandut II": {
      "lahan_lokasi": "Pahandut II",
      "provinsi": "Kalimantan Tengah",
      "kota": "Kota Palangka Raya",
      "alamat": "Jl. Manyar Raya 227-225, Bukit Tunggal, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 74874",
      "maps_link": "https://maps.app.goo.gl/j1o1MbeLZzPS5EwX7",
      "kota_populasi_juta": null,
      "kota_umk": null,
      "kota_vp": 0,
      "kota_vu": 0,
      "kota_catatan": null,
      "prov_populasi_juta": null,
      "prov_v": 0,
      "prov_tier": 1,
      "prov_development": "Koridor penyangga Ibu Kota Nusantara",
      "prov_development_level": 2
    }
  },
  "poi": {
    "Pulogebang - sudah": [
      {
        "n": "Terminal Terpadu Pulogebang",
        "c": "Transportasi",
        "m": "Terminal tipe A, simpul TOD Jakarta Timur",
        "p": "kawasan sama"
      },
      {
        "n": "Koridor Tol Lingkar Luar Jakarta (JORR)",
        "c": "Transportasi",
        "m": "Akses lintas Jabodetabek",
        "p": "koridor sama"
      },
      {
        "n": "Permukiman padat Cakung – Jakarta Timur",
        "c": "Permukiman",
        "m": "Basis pasar hunian vertikal",
        "p": "kawasan sama"
      }
    ],
    "Blok C3 - Kemayoran": [
      {
        "n": "Kawasan Kemayoran (ex Bandara Kemayoran)",
        "c": "Komersial",
        "m": "Kawasan komersial & perkantoran matang",
        "p": "kawasan sama"
      },
      {
        "n": "Pusat bisnis Jakarta Pusat",
        "c": "Komersial",
        "m": "Katchment kantor, hotel, klinik",
        "p": "kota sama"
      }
    ],
    "Malaka - Jaktim": [
      {
        "n": "Permukiman mapan Duren Sawit",
        "c": "Permukiman",
        "m": "Kepadatan tinggi, daya beli menengah",
        "p": "kawasan sama"
      },
      {
        "n": "Jaringan jalan kota Jakarta Timur",
        "c": "Transportasi",
        "m": "Akses harian warga",
        "p": "kawasan sama"
      }
    ],
    "Sektor II": [
      {
        "n": "Stasiun Parung Panjang (KRL Commuter Line)",
        "c": "Transportasi",
        "m": "Terhubung langsung ke Jakarta",
        "p": "kawasan sama"
      },
      {
        "n": "Kawasan Perumnas Parung Panjang eksisting",
        "c": "Permukiman",
        "m": "Warga eksisting = pasar terdekat",
        "p": "kawasan sama"
      },
      {
        "n": "Kota mandiri Telaga Kahuripan (750 Ha)",
        "c": "Permukiman",
        "m": "Pengembang aktif di kawasan yang sama",
        "p": "koridor sama"
      }
    ],
    "Sektor III": [
      {
        "n": "Stasiun Parung Panjang (KRL Commuter Line)",
        "c": "Transportasi",
        "m": "Terhubung langsung ke Jakarta",
        "p": "kawasan sama"
      },
      {
        "n": "Kawasan Perumnas Parung Panjang eksisting",
        "c": "Permukiman",
        "m": "Warga eksisting = pasar terdekat",
        "p": "kawasan sama"
      }
    ],
    "Lumpang": [
      {
        "n": "Stasiun Parung Panjang (KRL Commuter Line)",
        "c": "Transportasi",
        "m": "Pendorong utama pertumbuhan kawasan",
        "p": "koridor sama"
      },
      {
        "n": "Kota mandiri Millenium City",
        "c": "Permukiman",
        "m": "Pengembangan skala besar Bogor Barat",
        "p": "koridor sama"
      },
      {
        "n": "Klaster rumah subsidi Parung Panjang",
        "c": "Permukiman",
        "m": "Pasar FLPP aktif",
        "p": "koridor sama"
      }
    ],
    "GSK": [
      {
        "n": "Kawasan industri Karawang (KIIC, Suryacipta)",
        "c": "Industri & Logistik",
        "m": "Kawasan industri terbesar Asia Tenggara",
        "p": "koridor sama"
      },
      {
        "n": "Kawasan Perumnas Telukjambe eksisting",
        "c": "Permukiman",
        "m": "Basis penghuni & pekerja industri",
        "p": "kawasan sama"
      },
      {
        "n": "Kota Kertabumi (Agung Podomoro, 5,4 Ha)",
        "c": "Permukiman",
        "m": "Pengembangan hunian premium Karawang",
        "p": "kota sama"
      }
    ],
    "Telukjambe": [
      {
        "n": "Kawasan industri Telukjambe – Karawang",
        "c": "Industri & Logistik",
        "m": "Konsentrasi manufaktur & tenaga kerja",
        "p": "kawasan sama"
      },
      {
        "n": "Akses Tol Jakarta–Cikampek",
        "c": "Transportasi",
        "m": "Konektivitas logistik utama",
        "p": "koridor sama"
      }
    ],
    "Sukabumi": [
      {
        "n": "Kawasan Industri Cikembar (220 Ha)",
        "c": "Industri & Logistik",
        "m": "Investasi tertahan izin tata ruang — demand dapat dialihkan",
        "p": "koridor sama"
      },
      {
        "n": "Jalur wisata Cikidang – Pamuruyan",
        "c": "Wisata",
        "m": "Koridor pariwisata Sukabumi",
        "p": "kawasan sama"
      },
      {
        "n": "Kawasan industri siap pakai Jawa Barat (program SIBS)",
        "c": "Pemerintahan",
        "m": "Jabar menawarkan 44 kawasan industri siap pakai",
        "p": "provinsi sama"
      }
    ],
    "Jonggol": [
      {
        "n": "Koridor Bogor Timur – Cianjur",
        "c": "Transportasi",
        "m": "Jalur penghubung antar kabupaten",
        "p": "kawasan sama"
      },
      {
        "n": "Kawasan pengembangan timur Jabodetabek",
        "c": "Permukiman",
        "m": "Zona ekspansi hunian terjangkau",
        "p": "koridor sama"
      }
    ],
    "Cirebon (Sendang)": [
      {
        "n": "Simpul Tol Trans-Jawa Cirebon",
        "c": "Transportasi",
        "m": "Akses logistik Pantura",
        "p": "kota sama"
      },
      {
        "n": "Pelabuhan Cirebon",
        "c": "Industri & Logistik",
        "m": "Distribusi wilayah Ciayumajakuning",
        "p": "kota sama"
      }
    ],
    "Majalengka": [
      {
        "n": "Bandara Internasional Kertajati",
        "c": "Transportasi",
        "m": "Pendukung kawasan Segitiga Rebana",
        "p": "kabupaten sama"
      },
      {
        "n": "Kawasan pengembangan Rebana Jawa Barat",
        "c": "Pemerintahan",
        "m": "Kawasan prioritas investasi provinsi",
        "p": "kawasan sama"
      }
    ],
    "Cigelam": [
      {
        "n": "Kawasan industri Purwakarta",
        "c": "Industri & Logistik",
        "m": "Konsentrasi pabrik & pergudangan",
        "p": "kawasan sama"
      },
      {
        "n": "Akses Tol Cipularang",
        "c": "Transportasi",
        "m": "Jalur Jakarta–Bandung",
        "p": "koridor sama"
      }
    ],
    "Soreang": [
      {
        "n": "Pusat pemerintahan Kabupaten Bandung",
        "c": "Pemerintahan",
        "m": "Soreang sebagai ibukota kabupaten",
        "p": "kawasan sama"
      },
      {
        "n": "Tol Soroja (Soreang–Pasirkoja)",
        "c": "Transportasi",
        "m": "Akses langsung ke Kota Bandung",
        "p": "kawasan sama"
      },
      {
        "n": "Ruko Bumi Parahyangan Kencana",
        "c": "Komersial",
        "m": "Kawasan komersial eksisting",
        "p": "kawasan sama"
      }
    ],
    "Rawalumbu": [
      {
        "n": "Permukiman padat Bekasi Kota",
        "c": "Permukiman",
        "m": "Katchment ritel harian",
        "p": "kawasan sama"
      },
      {
        "n": "Jaringan jalan kota Bekasi",
        "c": "Transportasi",
        "m": "Jl. Siliwangi sebagai akses utama",
        "p": "kawasan sama"
      }
    ],
    "Menanggal": [
      {
        "n": "Pusat kota Surabaya Selatan",
        "c": "Komersial",
        "m": "Kawasan komersial & perkantoran",
        "p": "kawasan sama"
      },
      {
        "n": "Koridor Surabaya – Sidoarjo",
        "c": "Transportasi",
        "m": "Pusat pertumbuhan ruko & kantor satelit",
        "p": "koridor sama"
      }
    ],
    "Driyorejo 26.5 ha": [
      {
        "n": "Koridor industri Surabaya – Gresik",
        "c": "Industri & Logistik",
        "m": "Konsentrasi manufaktur Jawa Timur",
        "p": "kawasan sama"
      },
      {
        "n": "Kawasan industri Gresik (JIIPE, KIG)",
        "c": "Industri & Logistik",
        "m": "Kebutuhan gudang & hunian pekerja",
        "p": "kabupaten sama"
      }
    ],
    "Gadung Driyorejo": [
      {
        "n": "Koridor industri Surabaya – Gresik",
        "c": "Industri & Logistik",
        "m": "Jl. Raya Randegansari sebagai akses",
        "p": "kawasan sama"
      }
    ],
    "Sawojajar II (Amorf)": [
      {
        "n": "Permukiman mapan Sawojajar, Malang",
        "c": "Permukiman",
        "m": "Kawasan hunian padat & matang",
        "p": "kawasan sama"
      },
      {
        "n": "Ekosistem kampus Malang (UB, UMM)",
        "c": "Pendidikan",
        "m": "Pendorong pasar kos & hunian sewa",
        "p": "kota sama"
      }
    ],
    "Kraton": [
      {
        "n": "Kawasan industri PIER Pasuruan",
        "c": "Industri & Logistik",
        "m": "Pusat industri Pasuruan",
        "p": "kabupaten sama"
      },
      {
        "n": "Koridor Surabaya – Pasuruan – Probolinggo",
        "c": "Transportasi",
        "m": "Jalur logistik Jawa Timur",
        "p": "koridor sama"
      }
    ],
    "Kalipuro": [
      {
        "n": "Pelabuhan Ketapang Banyuwangi",
        "c": "Transportasi",
        "m": "Penyeberangan Jawa–Bali",
        "p": "kawasan sama"
      },
      {
        "n": "Koridor wisata Banyuwangi",
        "c": "Wisata",
        "m": "Destinasi wisata yang tumbuh pesat",
        "p": "kabupaten sama"
      }
    ],
    "Patrang": [
      {
        "n": "Kampus Universitas Jember (UNEJ)",
        "c": "Pendidikan",
        "m": "Basis pasar kos & hunian sewa",
        "p": "kota sama"
      },
      {
        "n": "Pusat kota Jember",
        "c": "Komersial",
        "m": "Kawasan perdagangan kabupaten",
        "p": "kawasan sama"
      }
    ],
    "Trimulyo": [
      {
        "n": "Koridor Yogyakarta – Bantul",
        "c": "Transportasi",
        "m": "Alamat internal: Kec. Jetis, Kab. Bantul",
        "p": "kawasan sama"
      },
      {
        "n": "Kawasan pengembangan selatan Yogyakarta",
        "c": "Permukiman",
        "m": "Zona ekspansi hunian",
        "p": "koridor sama"
      }
    ],
    "Slamaran II": [
      {
        "n": "Kawasan pesisir Pekalongan Utara",
        "c": "Permukiman",
        "m": "Zona pengembangan kota",
        "p": "kawasan sama"
      },
      {
        "n": "Pusat batik & UMKM Pekalongan",
        "c": "Komersial",
        "m": "Ekonomi lokal berbasis UMKM",
        "p": "kota sama"
      }
    ],
    "Klipang Green I": [
      {
        "n": "Kawasan hunian Klipang, Semarang Timur",
        "c": "Permukiman",
        "m": "Segmen menengah-atas",
        "p": "kawasan sama"
      },
      {
        "n": "Jl. Klipang Raya",
        "c": "Transportasi",
        "m": "Akses kolektor kawasan",
        "p": "kawasan sama"
      }
    ],
    "Klipang Green II": [
      {
        "n": "Kawasan hunian Klipang, Semarang Timur",
        "c": "Permukiman",
        "m": "Segmen menengah-atas",
        "p": "kawasan sama"
      },
      {
        "n": "Jl. Klipang Raya",
        "c": "Transportasi",
        "m": "Akses kolektor kawasan",
        "p": "kawasan sama"
      }
    ],
    "Mojosongo": [
      {
        "n": "Kampus UNS Surakarta",
        "c": "Pendidikan",
        "m": "Basis pasar kos mahasiswa",
        "p": "kota sama"
      },
      {
        "n": "Permukiman padat Jebres, Solo",
        "c": "Permukiman",
        "m": "Katchment ritel harian",
        "p": "kawasan sama"
      }
    ],
    "Cilacap": [
      {
        "n": "Kilang Pertamina RU IV Cilacap",
        "c": "Industri & Logistik",
        "m": "Ekosistem vendor & kontraktor migas",
        "p": "kota sama"
      },
      {
        "n": "Pelabuhan Tanjung Intan",
        "c": "Transportasi",
        "m": "Pelabuhan industri Jawa Tengah",
        "p": "kota sama"
      }
    ],
    "Indramayu (Pabeanudik)": [
      {
        "n": "Kilang Pertamina RU VI Balongan",
        "c": "Industri & Logistik",
        "m": "Ekosistem vendor & kontraktor",
        "p": "kabupaten sama"
      },
      {
        "n": "Jalur Pantura Indramayu",
        "c": "Transportasi",
        "m": "Koridor logistik utara Jawa",
        "p": "kawasan sama"
      }
    ],
    "Martubung II": [
      {
        "n": "Pelabuhan Belawan Medan",
        "c": "Transportasi",
        "m": "Pelabuhan utama Sumatera Utara",
        "p": "kawasan sama"
      },
      {
        "n": "Kawasan Perumnas Martubung eksisting",
        "c": "Permukiman",
        "m": "Basis penghuni & pasar terdekat",
        "p": "kawasan sama"
      },
      {
        "n": "Koridor industri Medan Labuhan",
        "c": "Industri & Logistik",
        "m": "Pergudangan & manufaktur",
        "p": "kawasan sama"
      }
    ],
    "Martubung I": [
      {
        "n": "Kawasan Perumnas Martubung eksisting",
        "c": "Permukiman",
        "m": "Jl. Danau Laguna sebagai akses",
        "p": "kawasan sama"
      },
      {
        "n": "Pelabuhan Belawan Medan",
        "c": "Transportasi",
        "m": "Pelabuhan utama Sumatera Utara",
        "p": "kawasan sama"
      }
    ],
    "Martubung III": [
      {
        "n": "Kawasan Perumnas Martubung eksisting",
        "c": "Permukiman",
        "m": "Hamparan lanjutan Martubung",
        "p": "kawasan sama"
      },
      {
        "n": "Koridor Medan Labuhan – Belawan",
        "c": "Industri & Logistik",
        "m": "Jalur distribusi pelabuhan",
        "p": "kawasan sama"
      }
    ],
    "Sukaramai": [
      {
        "n": "Pusat perdagangan Kota Medan",
        "c": "Komersial",
        "m": "Kawasan perdagangan inti",
        "p": "kawasan sama"
      },
      {
        "n": "Jaringan ritel & hotel bisnis Medan",
        "c": "Komersial",
        "m": "Katchment komersial padat",
        "p": "kota sama"
      }
    ],
    "S.Rejo Kemiling (BKP)": [
      {
        "n": "Kota Bandar Lampung",
        "c": "Komersial",
        "m": "Pusat ekonomi Provinsi Lampung",
        "p": "kota sama"
      },
      {
        "n": "Ekosistem kampus Lampung (Unila, ITERA)",
        "c": "Pendidikan",
        "m": "Pasar kos & hunian sewa",
        "p": "kota sama"
      }
    ],
    "Pesawaran": [
      {
        "n": "Kawasan penyangga Bandar Lampung",
        "c": "Permukiman",
        "m": "Zona ekspansi hunian",
        "p": "koridor sama"
      },
      {
        "n": "Pesisir wisata Pesawaran",
        "c": "Wisata",
        "m": "Destinasi wisata pantai Lampung",
        "p": "kabupaten sama"
      }
    ],
    "Talang Kelapa": [
      {
        "n": "Perumahan Airlangga (PT Zafir Permata Properti)",
        "c": "Permukiman",
        "m": "Pengembang aktif di Jl. Perumnas Talang Kelapa",
        "p": "kawasan sama"
      },
      {
        "n": "Cahaya Talang Kelapa (PT Sukses Saudara Bersama)",
        "c": "Permukiman",
        "m": "Pengembang aktif Alang-Alang Lebar",
        "p": "kawasan sama"
      },
      {
        "n": "Kota Palembang",
        "c": "Komersial",
        "m": "Pusat ekonomi Sumatera Selatan",
        "p": "kota sama"
      }
    ],
    "Talang Keramat": [
      {
        "n": "Kawasan Perumnas Talang Keramat eksisting",
        "c": "Permukiman",
        "m": "Perumnas sudah membangun di lokasi ini",
        "p": "kawasan sama"
      },
      {
        "n": "Koridor Palembang – Banyuasin",
        "c": "Transportasi",
        "m": "Jalur ekspansi kota Palembang",
        "p": "koridor sama"
      },
      {
        "n": "Klaster rumah subsidi Banyuasin",
        "c": "Permukiman",
        "m": "Pasar program 3 juta rumah aktif",
        "p": "kabupaten sama"
      }
    ],
    "Ilir Barat": [
      {
        "n": "Pusat komersial Kota Palembang",
        "c": "Komersial",
        "m": "Kawasan perdagangan inti kota",
        "p": "kawasan sama"
      }
    ],
    "Tanjung Uban - Bumi Tanjung Permai (HPL 1)": [
      {
        "n": "Integrated Terminal Pertamina Tanjung Uban",
        "c": "Industri & Logistik",
        "m": "Pusat Logistik Berikat; rencana trading hub BBM & LPG Asia Tenggara",
        "p": "kawasan sama"
      },
      {
        "n": "Treasure Bay Bintan (338 Ha)",
        "c": "Wisata",
        "m": "Kawasan wisata terpadu, didukung Gubernur Kepri (Jul 2026)",
        "p": "koridor sama"
      },
      {
        "n": "Rencana kawasan AI & Data Center Bintan",
        "c": "Industri & Logistik",
        "m": "Sektor prioritas investasi Pulau Bintan",
        "p": "kabupaten sama"
      },
      {
        "n": "Pelabuhan penyeberangan Tanjung Uban",
        "c": "Transportasi",
        "m": "Akses Batam–Bintan",
        "p": "kawasan sama"
      }
    ],
    "Tanjung Uban - Bumi Tanjung Permai (HGB 74)": [
      {
        "n": "Integrated Terminal Pertamina Tanjung Uban",
        "c": "Industri & Logistik",
        "m": "Pusat Logistik Berikat",
        "p": "kawasan sama"
      },
      {
        "n": "Treasure Bay Bintan (338 Ha)",
        "c": "Wisata",
        "m": "Kawasan wisata terpadu Bintan",
        "p": "koridor sama"
      }
    ],
    "Bumi Air Raja Tanjung Pinang": [
      {
        "n": "Pusat pemerintahan Provinsi Kepulauan Riau",
        "c": "Pemerintahan",
        "m": "Tanjungpinang sebagai ibukota provinsi",
        "p": "kota sama"
      },
      {
        "n": "Rencana skytrain Tanjungpinang",
        "c": "Transportasi",
        "m": "Sektor investasi yang diminati di Kepri",
        "p": "kota sama"
      }
    ],
    "Green Nongsa": [
      {
        "n": "Nongsa Digital Park",
        "c": "Industri & Logistik",
        "m": "Hub data center & digital Batam–Singapura",
        "p": "kawasan sama"
      },
      {
        "n": "Pelabuhan Nongsa Pura",
        "c": "Transportasi",
        "m": "Akses ferry ke Singapura",
        "p": "kawasan sama"
      },
      {
        "n": "Kawasan resort pesisir Nongsa",
        "c": "Wisata",
        "m": "Destinasi wisata Batam",
        "p": "kawasan sama"
      }
    ],
    "Batam - Muka Kuning": [
      {
        "n": "Kawasan Industri Batamindo Muka Kuning",
        "c": "Industri & Logistik",
        "m": "Konsentrasi pekerja manufaktur",
        "p": "kawasan sama"
      },
      {
        "n": "Permukiman pekerja industri Batu Aji",
        "c": "Permukiman",
        "m": "Katchment ritel & F&B",
        "p": "kawasan sama"
      }
    ],
    "Neuheun": [
      {
        "n": "Kota Banda Aceh",
        "c": "Komersial",
        "m": "Pusat ekonomi Provinsi Aceh",
        "p": "koridor sama"
      },
      {
        "n": "Kawasan permukiman Mesjid Raya, Aceh Besar",
        "c": "Permukiman",
        "m": "Zona pengembangan hunian",
        "p": "kawasan sama"
      }
    ],
    "Lhoksumawe - Jeulekat": [
      {
        "n": "KEK Arun Lhokseumawe",
        "c": "Industri & Logistik",
        "m": "Kawasan Ekonomi Khusus Aceh",
        "p": "kota sama"
      },
      {
        "n": "PT Pupuk Iskandar Muda",
        "c": "Industri & Logistik",
        "m": "Ekosistem vendor industri",
        "p": "kota sama"
      },
      {
        "n": "Jl. Line Pipa Jeulekat",
        "c": "Transportasi",
        "m": "Akses kawasan industri",
        "p": "kawasan sama"
      }
    ],
    "Meulaboh - Aceh Besar": [
      {
        "n": "Kawasan Meureubo, Aceh Barat",
        "c": "Permukiman",
        "m": "Alamat internal: Ujong Tanoh Darat",
        "p": "kawasan sama"
      },
      {
        "n": "Pusat kota Meulaboh",
        "c": "Komersial",
        "m": "Ibukota Kabupaten Aceh Barat",
        "p": "kabupaten sama"
      }
    ],
    "Sumbar - Duri": [
      {
        "n": "Lapangan minyak Blok Rokan (Pertamina Hulu Rokan)",
        "c": "Industri & Logistik",
        "m": "Ekosistem kontraktor & vendor migas",
        "p": "kawasan sama"
      },
      {
        "n": "Kawasan Industri Buruk Bakul, Bengkalis",
        "c": "Industri & Logistik",
        "m": "Proyek strategis kabupaten",
        "p": "kabupaten sama"
      },
      {
        "n": "Pusat kota Duri, Mandau",
        "c": "Komersial",
        "m": "Kota penunjang industri migas",
        "p": "kawasan sama"
      }
    ],
    "Sumbar - Duri Bastan Baru": [
      {
        "n": "Lapangan minyak Blok Rokan",
        "c": "Industri & Logistik",
        "m": "Ekosistem kontraktor migas Duri",
        "p": "kawasan sama"
      },
      {
        "n": "SMK Paramita Maitreya Duri",
        "c": "Pendidikan",
        "m": "Yayasan pendidikan aktif berinvestasi bangunan",
        "p": "kawasan sama"
      }
    ],
    "Bengkulu - Betungan II": [
      {
        "n": "Kawasan pengembangan Kota Bengkulu",
        "c": "Permukiman",
        "m": "Zona ekspansi hunian Selebar",
        "p": "kawasan sama"
      }
    ],
    "Bengkulu - Betungan III": [
      {
        "n": "Kawasan pengembangan Kota Bengkulu",
        "c": "Permukiman",
        "m": "Zona ekspansi hunian Selebar",
        "p": "kawasan sama"
      }
    ],
    "Jambi - Sungai Duren": [
      {
        "n": "Kampus Universitas Jambi (UNJA) Mendalo",
        "c": "Pendidikan",
        "m": "Basis pasar kos & hunian mahasiswa",
        "p": "koridor sama"
      },
      {
        "n": "Koridor Kota Jambi – Muaro Jambi",
        "c": "Transportasi",
        "m": "Jalur ekspansi kota",
        "p": "kawasan sama"
      }
    ],
    "Sei Ambawang - Pontianak": [
      {
        "n": "Jalan Trans Kalimantan",
        "c": "Transportasi",
        "m": "Jalur logistik utama lintas Kalimantan",
        "p": "kawasan sama"
      },
      {
        "n": "Kota Pontianak",
        "c": "Komersial",
        "m": "Pusat ekonomi Kalimantan Barat",
        "p": "koridor sama"
      },
      {
        "n": "Kawasan penyangga Kubu Raya",
        "c": "Permukiman",
        "m": "Zona ekspansi hunian Pontianak",
        "p": "kawasan sama"
      }
    ],
    "Pangkalan Bun": [
      {
        "n": "Sentra perkebunan sawit Kotawaringin Barat",
        "c": "Industri & Logistik",
        "m": "Ekosistem vendor & kontraktor sawit",
        "p": "kabupaten sama"
      },
      {
        "n": "Pelabuhan Kumai",
        "c": "Transportasi",
        "m": "Distribusi komoditas Kalteng",
        "p": "kawasan sama"
      }
    ],
    "Pahandut III": [
      {
        "n": "Kota Palangka Raya",
        "c": "Komersial",
        "m": "Ibukota Provinsi Kalimantan Tengah",
        "p": "kawasan sama"
      }
    ],
    "Pahandut II": [
      {
        "n": "Kota Palangka Raya",
        "c": "Komersial",
        "m": "Ibukota Provinsi Kalimantan Tengah",
        "p": "kawasan sama"
      }
    ],
    "K.Kapuas-P.Telo": [
      {
        "n": "Kawasan Perumnas Pulau Telo eksisting",
        "c": "Permukiman",
        "m": "Jl. Murai Raya Perumnas",
        "p": "kawasan sama"
      },
      {
        "n": "Pusat kota Kuala Kapuas",
        "c": "Komersial",
        "m": "Ibukota Kabupaten Kapuas",
        "p": "kawasan sama"
      }
    ],
    "Ranomuut": [
      {
        "n": "Kota Manado",
        "c": "Komersial",
        "m": "Pusat ekonomi Sulawesi Utara",
        "p": "kawasan sama"
      },
      {
        "n": "Rencana ekspansi Metland ke Sulawesi Utara",
        "c": "Permukiman",
        "m": "Pengembang nasional masuk pasar Sulut (Mei 2026)",
        "p": "provinsi sama"
      }
    ],
    "Mapanget": [
      {
        "n": "Bandara Internasional Sam Ratulangi",
        "c": "Transportasi",
        "m": "Bandara utama Sulawesi Utara",
        "p": "kawasan sama"
      },
      {
        "n": "Kawasan industri Kima Manado",
        "c": "Industri & Logistik",
        "m": "Alamat internal: Kima Atas, Mapanget",
        "p": "kawasan sama"
      }
    ],
    "Takalar (MOU)": [
      {
        "n": "Koridor selatan Makassar – Takalar",
        "c": "Transportasi",
        "m": "Jalur ekspansi metropolitan Mamminasata",
        "p": "koridor sama"
      },
      {
        "n": "Ekspansi pengembang Makassar (Kalla Land, Ciputra, Summarecon)",
        "c": "Permukiman",
        "m": "Pasar properti Sulsel aktif 2026",
        "p": "provinsi sama"
      }
    ],
    "Haluoleo": [
      {
        "n": "Bandara Haluoleo Kendari",
        "c": "Transportasi",
        "m": "Alamat internal: Jl. Bandara Haluoleo",
        "p": "kawasan sama"
      },
      {
        "n": "Universitas Halu Oleo",
        "c": "Pendidikan",
        "m": "Basis pasar hunian & kos mahasiswa",
        "p": "koridor sama"
      },
      {
        "n": "Kota Kendari",
        "c": "Komersial",
        "m": "Ibukota Provinsi Sulawesi Tenggara",
        "p": "koridor sama"
      }
    ],
    "Poasia": [
      {
        "n": "Kota Kendari",
        "c": "Komersial",
        "m": "Kawasan kota Poasia",
        "p": "kawasan sama"
      }
    ],
    "Kolaka": [
      {
        "n": "Sentra pertambangan nikel Kolaka",
        "c": "Industri & Logistik",
        "m": "Ekosistem vendor & kontraktor tambang",
        "p": "kabupaten sama"
      },
      {
        "n": "Kawasan Perumnas Lalombaa eksisting",
        "c": "Permukiman",
        "m": "Jl. Planduk Perumnas",
        "p": "kawasan sama"
      }
    ],
    "Raha": [
      {
        "n": "Pusat kota Raha",
        "c": "Komersial",
        "m": "Ibukota Kabupaten Muna",
        "p": "kawasan sama"
      },
      {
        "n": "Pelabuhan Raha",
        "c": "Transportasi",
        "m": "Konektivitas kepulauan Sultra",
        "p": "kawasan sama"
      }
    ],
    "Maubi": [
      {
        "n": "Kawasan Kalawat, Minahasa Utara",
        "c": "Permukiman",
        "m": "Penyangga Manado",
        "p": "kawasan sama"
      }
    ],
    "Sambinae": [
      {
        "n": "Pusat Kota Bima",
        "c": "Komersial",
        "m": "Kawasan Mpunda, Kota Bima",
        "p": "kawasan sama"
      }
    ],
    "Pagutan 1": [
      {
        "n": "Kota Mataram",
        "c": "Komersial",
        "m": "Ibukota Provinsi Nusa Tenggara Barat",
        "p": "kawasan sama"
      },
      {
        "n": "Ekosistem kampus Mataram (Unram)",
        "c": "Pendidikan",
        "m": "Pasar kos & hunian sewa",
        "p": "kota sama"
      }
    ],
    "Pagutan 2": [
      {
        "n": "Kota Mataram",
        "c": "Komersial",
        "m": "Kawasan Pagutan Barat",
        "p": "kawasan sama"
      },
      {
        "n": "Ekosistem kampus Mataram (Unram)",
        "c": "Pendidikan",
        "m": "Pasar kos & hunian sewa",
        "p": "kota sama"
      }
    ],
    "Labuapi": [
      {
        "n": "Kota Mataram",
        "c": "Komersial",
        "m": "Kawasan penyangga Mataram",
        "p": "koridor sama"
      }
    ],
    "Karangasem": [
      {
        "n": "Kawasan wisata Bali Timur",
        "c": "Wisata",
        "m": "Ababi, Kec. Abang, Karangasem",
        "p": "kawasan sama"
      },
      {
        "n": "Destinasi Tirta Gangga & Amed",
        "c": "Wisata",
        "m": "Koridor wisata Karangasem",
        "p": "kabupaten sama"
      }
    ]
  }
}
JSON
, true);
