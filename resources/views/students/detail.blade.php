@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" align="center"><b>{{ __('JURUSAN TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG') }}</b></div>

                <div class="card-body">
                        <b>{{ __('KARTU HASIL STUDI (KHS)') }}</b>
                        @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="card-body">
                        <b>Name</b> : {{ $student->name }} <br> 
                        <b>NIM</b>  : {{ $student->nim }} <br> 
                        <b>Class</b>: {{ $student->kelas->class_name }} <br><br>

                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Mata kuliah</th>
                                <th>SKS</th>
                                <th>Semester</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student->courses as $sc)
                            <tr>
                                <td>{{ $sc->course_name }}</td>
                                <td>{{ $sc->sks }}</td>
                                <td>{{ $sc->semester }}</td>
                                <td>{{ $sc->pivot->nilai }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/students/{{$student->id}}/report" class="btn btnprimary" target="_blank">PRINT PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  