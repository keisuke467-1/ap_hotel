@extends('layouts.register')

@section('title','hoteluser.alluser')

@section('menubar')
    @parent
    【登録者一覧】
@endsection

@section('content')
    <table>
        <tr><th>ID</th><th>氏名</th><th>メールアドレス</th><th>電話番号</th></tr>
        <div>
            <ul>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->tel}}</td>
                    </tr>
                @endforeach
            </ul>
        </div>
    </table>
@endsection

@section('footer')
    copyright 2021 okeke
@endsection