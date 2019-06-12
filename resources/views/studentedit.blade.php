<form action="/student/update" method="post" >
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <table>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name" value="{{$data->name}}"></td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="text" name="age" value="{{$data->age}}"></td>
        </tr>
        <tr>
            <td>电话</td>
            <td><input type="text" name="tel" value="{{$data->tel}}"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="提交"></td>
        </tr>
    </table>
</form>