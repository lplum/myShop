<form action="{{url('/train/index')}}" method="get">
    货物名称：<input type="text" name="cha" id="" >
    <input type="submit" value="搜索">
</form>
	<table border="2">
		<tr>
			<td>车次</td>
			<td>出发及到达</td>
			<td>出发时间及抵达时间</td>
			<td>用时</td>
			<td>特等座</td>
			<td>一等座</td>
			<td>二等座</td>
			<td>备注</td>
		</tr>
		@if($data)
		@foreach($data as $v)
		<tr>
			<td>{{$v->car}}</td>
			<td>{{$v->saddress}}~{{$v->oaddress}}</td>
			<td>{{$v->stime}}~{{$v->otime}}</td>
			<td>{{$v->utime}}</td>
			<td><input type="radio" name="zuoci">{{$v->tedengzuo}}</td>
			<td><input type="radio" name="zuoci">{{$v->yidengzuo}}</td>
			<td><input type="radio" name="zuoci">{{$v->erdengzuo}}</td>
			<td>
				<a class="yd">预定</a>
			</td>
		</tr>
		@endforeach
		@endif
	</table>
	{{$data->links()}}
	<script type="text/javascript" src=""></script>