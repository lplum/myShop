<table border="2">
    <tr>
        <td>ID</td>
        <td>姓名</td>
        <td>电话</td>
        <td>年龄</td>
        <td>操作</td>
    </tr>
    @if($data)
        @foreach($data as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->name}}</td>
                <td>{{$v->tel}}</td>
                <td>{{$v->age}}</td>
                <td>
                    <a href="/student/add">添加</a>
                    <a href="/student/del/{{$v->id}}">删除</a>
                    <a href="/student/edit/{{$v->id}}">修改</a>
                </td>
            </tr>
        @endforeach
    @endif
</table>
{{$data->links()}}