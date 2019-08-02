@extends('home.index')
@section('content')
        <div class="col-md-6">
            <div class="panel panel-default ">
                <div class="panel-heading">商品添加</div>
                <div class="panel-body">
                    <form action="/home/goods/save"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">商品名称：</label>
                            <input type="text" class="form-control" name="g_name" placeholder="请输入商品名称" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">商品价格：</label>
                            <input type="text" class="form-control" name="g_price" placeholder="请输入商品价格" />
                        </div>
                         <div class="form-group">
                            <label for="exampleInputPassword1">商品库存：</label>
                            <input type="text" class="form-control" name="g_num" placeholder="请输入商品数量" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">商品图片：</label>
                            <input type="file" name="g_img" accept='image/*'>
                        </div>
                        <button type="submit" class="btn btn-default">提交</button>
                    </form>
                </div>
            </div>
        </div>
@endsection