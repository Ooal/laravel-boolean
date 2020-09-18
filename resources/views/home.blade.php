@extends('layouts.layout1')
@section('content')

  <div>
    <h2>LE LUNGHE</h2>
    @foreach ($data as $k)
      @if ($k['tipo'] == 'lunga')
        <img src="{{$k['src']}}" alt="">
      @endif
    @endforeach
  </div>
  <div>
    <h2>LE CORTE</h2>
    @foreach ($data as $k)
      @if ($k['tipo'] == 'corta')
        <img src="{{$k['src']}}" alt="">
      @endif
    @endforeach
  </div>
  <div>
    <h2>LE CORTISSIME</h2>
    @foreach ($data as $k)
      @if ($k['tipo'] == 'cortissima')
        <img src="{{$k['src']}}" alt="">
      @endif
    @endforeach
  </div>
@endsection
