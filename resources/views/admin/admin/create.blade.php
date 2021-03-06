@extends('admin.app')
		
@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">新增管理员</div>

        <div class="panel-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ URL('admin/admins') }}" enctype="multipart/form-data" method="POST">
         
      
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            用户名：<input type="text" name="name" class="form-control" required="required">
            <br>
            邮箱：<input type="text" name="email" class="form-control" required="required">
            <br>
            密码：<input type="password" name="password" class="form-control" required="required">
            <br>
             确认密码：<input type="password" name="password_confirmation" class="form-control" required="required">
            <button class="btn btn-lg btn-info">新增管理员</button>
      
          </form>

        </div>
      </div>
    </div>
  </div>
</div>  
@endsection

 