<form action="/home/goods/update" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="g_id" value="{{$data->g_id}}">
    <table>
        <tr>
            <td>商品名称</td>
            <td><input type="text" name="g_name" value="{{$data->g_name}}"></td>
        </tr>
        <tr>
            <td>商品图片</td>
            <td>
                <input type="file" name="g_img" id="" value="{{$data->g_img}}">
            </td>
        </tr>
        <tr>
            <td>商品库存</td>
            <td><input type="text" name="g_num" value="{{$data->g_num}}"></td>
        </tr>
        <tr>
            <td>商品价格</td>
            <td><input type="text" name="g_price" value="{{$data->g_price}}"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="修改">
            </td>
        </tr>
    </table>
</form>