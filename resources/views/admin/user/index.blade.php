@extends('admin.app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">管理用户</div>

        <div class="panel-body">
		<a href="{{ URL('admin/users/create') }}" class="btn btn-lg btn-primary">新增</a>
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-4">用户名</th>
            <th class="col-lg-4">邮箱</th>
            <th class="col-lg-1">编辑</th>
            <th class="col-lg-1">删除</th>
          </tr>
          @foreach ($users as $user)
            <tr class="row">
              <td class="col-lg-4">
                    {{ $user->name }}
              </td>
               <td class="col-lg-4">
                    {{ $user->email }}
              </td>
              <td class="col-lg-1">
                <a href="{{ URL('admin/users/'.$user->id.'/edit') }}" class="btn btn-success">编辑</a>
              </td>
              <td class="col-lg-1">
                  <button onclick="deleteInfo({{$user->id}});"   class="btn btn-danger">删除</button>
              </td>
            </tr>
          @endforeach
        </table>

<?php echo $users->render(); ?>
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
				url: "{{ URL('admin/users/delete/') }}", 
				type: "POST",
				data:{id:id,_token:'{{csrf_token()}}'},
				success: function(data){
					if(data==1) {
		        		alert('删除成功');
		        		location.href= "{{ URL('admin/users/')}}";
					} else {
						alert('删除失败');
					}
		     }});
		}
	}
}
</script>

@endsection


