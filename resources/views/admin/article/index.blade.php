@extends('admin.app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">管理文章</div>

        <div class="panel-body">
		<a href="{{ URL('admin/articles/create') }}" class="btn btn-lg btn-primary">新增</a>
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-2">标题</th>
            <th class="col-lg-4">分类</th>
            <th class="col-lg-4">查看</th>
            <th class="col-lg-1">编辑</th>
            <th class="col-lg-1">删除</th>
          </tr>
          @foreach ($articles as $article)
            <tr class="row">
              <td class="col-lg-2">
                    {{ $article->title }}
              </td>
              <td class="col-lg-6">
                {{ App\Type::find($article->typeId)->name }}
              </td>
              <td class="col-lg-4">
                <a href="{{ URL('article/show/'.$article->id) }}" target="_blank">
                  {{ App\Article::find($article->id)->title }}
                </a>
              </td>
              <td class="col-lg-1">
                <a href="{{ URL('admin/articles/'.$article->id.'/edit') }}" class="btn btn-success">编辑</a>
              </td>
              <td class="col-lg-1">
                  <button onclick="deleteInfo({{$article->id}});"   class="btn btn-danger">删除</button>
              </td>
            </tr>
          @endforeach
        </table>

<?php echo $articles->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>  

<script>
function deleteInfo(id)
{
	if(id) {
		var r=confirm('确定要删除吗');
		if(r==true) {
			$.ajax({ 
				url: "{{ URL('admin/articles/delete/') }}", 
				type: "POST",
				data:{id:id,_token:'{{csrf_token()}}'},
				success: function(data){
					if(data==1) {
		        		alert('删除成功');
		        		location.href= "{{ URL('admin/articles/')}}";
					} else {
						alert('删除失败');
					}
		     }});
		}
	}
}
</script>

@endsection


