<form action="/login/doregister" method="post">
    @csrf
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="user"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="text" name="pwd"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit">
            </td>
        </tr>
    </table>
</form>