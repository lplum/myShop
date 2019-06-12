<form action="/login/dologin" method="post">
    @csrf
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="user" id="user"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="text" name="pwd" id="pwd"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" id="sub">
            </td>
        </tr>
    </table>
</form>
<script src="/js/jquery-3.3.1.js"></script>
<script>
    $(function(){
        $('#sub').click(function(){
            var name=$('#user').val();
            var pwd=$('#pwd').val();
            $.post(
                "/login/dologin",
                {name:name,pwd:pwd},
                function(msg){
                    if(msg.code==1){
                        alert('登陆成功');
                        location.href="/student/add"
                    }else{
                        alert('登陆失败');
                    }

                }
            )
            return false;
        });

    })
</script>