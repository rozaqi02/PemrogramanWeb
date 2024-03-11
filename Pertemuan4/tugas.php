<?php

$siswaIdol = [
    [
        'Nama' => 'Zee',
        'Gambar' => "<img src='foto1UntukTugas.png' height=auto width=auto>",
        'Nama Lengkap' => 'Azizi Putih',
        'Alamat' => 'Jl.Tuban',
        'Nomor Telepon' => '023764332234',
        'Jurusan' => 'Tari',
        'Golongan Darah' => 'A',
        'Tempat Tanggal Lahir' => 'Surabaya, 5 Januari 2000',
        'Status Perkawinan' => 'Belum Menikah'
    ],
    [
        'Nama' => 'Freya',
        'Gambar' => "<img src='foto2UntukTugas.png' height=auto width=auto>",
        'Nama Lengkap' => 'Freya Hitam',
        'Alamat' => 'Jl.Mergan',
        'Nomor Telepon' => '08338765323',
        'Jurusan' => 'Industri',
        'Golongan Darah' => 'B',
        'Tempat Tanggal Lahir' => 'Jakarta, 12 Mei 1999',
        'Status Perkawinan' => 'Menikah'
    ]
];

echo "<style>
        table {
        width: 50%;
        }
        img {
            width: 290px;
            height: 290px;
        }
        </style>";

echo "<h2>Data Siswa Idol</h2><table>";
foreach($siswaIdol as $data){
    echo "<tr>
              <td>{$data['Gambar']}</td>
              <td>
                  <strong>Nama:</strong> {$data['Nama Lengkap']}<br>
                  <strong>Alamat:</strong> {$data['Alamat']}<br>
                  <strong>Nomor Telepon:</strong> {$data['Nomor Telepon']}<br>
                  <strong>Jurusan:</strong> {$data['Jurusan']}<br>
                  <strong>Golongan Darah:</strong> {$data['Golongan Darah']}<br>
                  <strong>Tempat Tanggal Lahir:</strong> {$data['Tempat Tanggal Lahir']}<br>
                  <strong>Status Perkawinan:</strong> {$data['Status Perkawinan']}
              </td>
          </tr>";
}
?>
