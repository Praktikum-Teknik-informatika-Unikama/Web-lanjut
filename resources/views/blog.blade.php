<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>{{config('app.name')}}</title>
</head>

<body style="text-align: center; margin: 0 auto;">
  <h1>Prakikum Web lanjut</h1>
  <p>Praktikum ini di sponsori oleh program studi teknik informatika</p>
  <table style="text-align: left; margin-left: auto;
  margin-right: auto;" rules="none">
    <tr>
      <td>Nama </td>
      <td> : </td>
      <td>{{ $nama}} </td>
    </tr>
    <tr>
      <td>Umur </td>
      <td> : </td>
      <td>{{$umur}}</td>
    </tr>
    <tr>
      <td>Nim </td>
      <td> : </td>
      <td>{{$nim}}</td>
    </tr>
  </table>
  </div>
</body>

</html>