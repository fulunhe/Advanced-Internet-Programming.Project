@extends('admin.app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">管理员</div>

        <div class="panel-body">
		<a href="{{ URL('admin/admins/create') }}" class="btn btn-lg btn-primary">新增</a>
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-4">用户名</th>
            <th class="col-lg-4">邮箱</th>
            <th class="col-lg-1">编辑</th>
            <th class="col-lg-1">删除</th>
          </tr>
          @foreach ($admins as $admin)
            <tr class="row">
              <td class="col-lg-4">
                    {{ $admin->name }}
              </td>
               <td class="col-lg-4">
                    {{ $admin->email }}
              </td>
              <td class="col-lg-1">
                <a href="{{ URL('admin/admins/'.$admin->id.'/edit') }}" class="btn btn-success">编辑</a>
              </td>
              <td class="col-lg-1">
                  <button onclick="deleteInfo({{$admin->id}});"   class="btn btn-danger">删除</button>
              </td>
            </tr>
          @endforeach
        </table>

<?php echo $admins->render(); ?>
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
				url: "{{ URL('admin/admins/delete/') }}", 
				type: "POST",
				data:{id:id,_token:'{{csrf_token()}}'},
				success: function(data){
					if(data==1) {
		        		alert('删除成功');
		        		location.href= "{{ URL('admin/admins/')}}";
					} else {
						alert('删除失败');
					}
		     }});
		}
	}
}
</script>

@endsection


