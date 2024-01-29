@extends('studentmenu.layoutstudentmenu')

@section('opsi')
    <!-- Profile content goes here -->
    <div class="container-fluid">
      <h1>Nilai Siswa</h1>
      <hr>
    </div>
    <div class="tablehead">
      <button class="btn btn-dark" id="mapel" type="button" data-toggle="collapse" data-target="#MapelCollapse" aria-expanded="false" aria-controls="MapelCollapse">#</button>
      <header class="text-body h4">Matematika</header>
      <br>
    </div>
    <div class="collapse" id="MapelCollapse" data-parent="#mapel">
      <div class="card card-body">
    </div>
  </div>
  <div>
    <table class="table table-responsive table-hover table-bordered table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>Komponen</th>
          <th>Waktu Submit</th>
          <th>Waktu Tenggat</th>
          <th>Nilai</th>
          <th>Bobot Nilai</th>
          <th>Catatan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Ulangan 1</td>
          <td>25/08/2023</td>
          <td>25/08/2023</td>
          <td>83</td>
          <td>10%</td>
          <td>Dicurigai mencontek</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Tugas 1</td>
          <td>05/09/2023</td>
          <td>07/09/2023</td>
          <td>93</td>
          <td>5%</td>
          <td>Dikerjakan dengan baik</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Ulangan 2</td>
          <td>09/09/2023</td>
          <td>09/09/2023</td>
          <td>83</td>
          <td>10%</td>
          <td>Dikerjakan dengan baik</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Tugas 2</td>
          <td>12/09/2023</td>
          <td>15/09/2023</td>
          <td>80</td>
          <td>5%</td>
          <td>Pengerjaan kurang lengkap</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Tugas Kelompok 1</td>
          <td>17/09/2023</td>
          <td>25/09/2023</td>
          <td>87</td>
          <td>10%</td>
          <td>Dikerjakan dengan baik</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Tugas Kelompok 2</td>
          <td>26/09/2023</td>
          <td>3/10/2023</td>
          <td>83</td>
          <td>10%</td>
          <td>Dikerjakan dengan baik</td>
        </tr>
        <tr>
          <td>7</td>
          <td>UTS</td>
          <td>4/10/2023</td>
          <td>4/10/2023</td>
          <td>75</td>
          <td>25%</td>
          <td>Dikerjakan dengan baik</td>
        </tr>
        <tr>
          <td>8</td>
          <td>UAS</td>
          <td>10/10/2023</td>
          <td>10/10/2023</td>
          <td>80</td>
          <td>25%</td>
          <td>Dikerjakan dengan baik</td>
        </tr>
      </tbody>
    </table>
  </div>
    </div>
    </div>
@endsection