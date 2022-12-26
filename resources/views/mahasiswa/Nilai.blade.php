@extends('mahasiswa.layout')
@section('content')
<div class="container mt-3">
    <h3 class="text-center mb-5">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h3>
    <h2 class="text-center mb-5">KARTU HASIL STUDI (KHS)</h2>

    <br><br><br>

    <b>Nama :</b> {{$mhs->mahasiswa->Nama}} <br>
    <b>NIM  :</b> {{$mhs->mahasiswa->Nim}}  <br>
    <b>Kelas:</b> {{$mhs->mahasiswa->kelas->nama_kelas}}  <br>

    <br>
    <table class="table table_borderes">
        <tr>
            <th>Matakuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Nilai</th>
        </tr>
        @foreach ($mhs -> matakuliah as $nilai)
        <tr>
            <td>{{$nilai->matakuliah->nama_matkul}}</td>
            <td>{{$nilai->matakuliah->sks}}</td>
            <td>{{$nilai->matakuliah->semester}}</td>
            <td>{{$nilai->pivot->nilai}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection