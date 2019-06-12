<form action="/student/save" method="post" >
    @csrf
    <table>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>电话</td>
            <td><input type="text" name="tel"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="提交"></td>
        </tr>
    </table>
</form>