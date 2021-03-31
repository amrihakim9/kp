<html>

<head>
  <title>Cek Kehadiran</title>
</head>

<body>
  <h1>Daftar Absen Magang DISKOMINFO</h1>
  <h2>Hadir</h2>
  <ul>
    @foreach ($togo as $newplace)
    <li>{{ $newplace->name }}</li>
    @endforeach
  </ul>

  <h2>Tidak Hadir</h2>
  <ul>
    @foreach ($visited as $place)
    <li>{{ $place->name }}</li>
    @endforeach
  </ul>
</body>

</html>