@extends('doctor.layouts.main')
@section('content')

<div class="content-wrapper">
  <table class="col-md-12 ml-2 table table-striped">

    <div class="row">
        <div class="col-md-8 offset-md-2 pt-7">
            <form action="{{ route('patient_card') }}" method="GET" class="mt-2">
                <div class="input-group input-group-lg">
                    <input name="search_patient" @if(isset($_GET['search_patient'])) value="{{ $_GET['search_patient'] }}" @endif type="text" class="form-control form-control-lg" placeholder="Введите ФИО пациента или номер телефона">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default">
                        <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

  <a href="{{ route('create-card') }}"><button type="button" class="mt-4 mb-4 btn btn-secondary">Открыть карточку</button></a>
    <thead>
        <tr>
            <td>ФИО</td>
            <td>Адрес</td>
            <td>Номер телефона</td>
            <td>Дата открытия карточки</td>
            <td>Обновить</td>
            <td>Удалить</td>
        </tr>
    </thead>
    <tbody>
        @foreach($card as $row)
            <tr>
                <td><a href="{{ route('show-card', $row->id) }}">{{ $row->name }}</a></td>
                <td>{{ $row->address }}</td>
                <td>{{ $row->phone }}</td>
                <td>{{ $row->created_at->format('d-m-Y')}}</td>                
                <td><a href="{{ route('edit-accountings', $row->id) }}">Обновить</a></td>
                <td>
                    <form action="{{ route('destroy-accountings', $row->id) }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button type="submit" class="btn btn-outline-primary">Удалить</button>
                    </form>
                </td>             </tr>
        @endforeach
    </tbody>
</table>


</div>
@endsection