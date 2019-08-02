@extends('home.index')
@section('content')
    <div class="panel-body">
        <table class="table table-bordered tb-bg">
            <thead>
            <tr>
                <td>商品名称</td>
                <td>商品图片</td>
                <td>商品库存</td>
                <td>商品价格</td>
                <td>添加时间</td>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            @if($data)
                @foreach($data as $v)
                    <tr>
                        <td>{{$v->g_name}}</td>
                        <td><img src="/{{$v->g_img}}" width="200" alt=""></td>
                        <td>{{$v->g_num}}</td>
                        <td>{{$v->g_price}}</td>
                        <td>{{date('Y-m-d H:i:s',$v->create_time)}}</td>
                        <td>
                            <a href="/home/goods/del/{{$v->g_id}}">删除</a>
                            <a href="/home/goods/edit/{{$v->g_id}}">修改</a>
                            <a href="/home/goods/add">添加</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        {{$data->links()}}
    </div>
@endsection