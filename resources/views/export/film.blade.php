<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  <h1>Ini pdf film</h1>
  <img src="{{ $film->poster }}" style="border-radius: 100px; height:250px; width:250px" >
  <table border="1">
    <thead>
      <tr>
        <th>Judul Film</th>
        <th>Genre Film</th>
        <th>Tahun</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $film->judul }}</td>
        <td>{{ $film->genre[0]->nama }}</td>
        <td>{{ $film->tahun }}</td>
      </tr>
    </tbody>
  </table>
</body>
</html>