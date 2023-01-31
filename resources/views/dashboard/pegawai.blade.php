@extends('layouts.main')
@section('content')
<x-content :title="[
    'name'=>'Dashboard',
    'icon'=>'fas fa-home'
]">
<x-box :data-box="[
    'label'=>'Peminjaman',
    'background'=>'bg-success',
    'value'=>$peminjaman->jumlah,
    'icon'=>'fas fa-hand-holding',
    'href'=>route('peminjaman.index')
]"/>
</x-content>
@endsection