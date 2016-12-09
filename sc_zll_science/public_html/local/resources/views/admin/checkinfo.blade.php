@extends('layouts.admin_comm')
@section('content')


<form class="form-horizontal" role="form" method="post">
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">基本信息</label>
   </div>
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">名字</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="firstname"  name="realname"
            value="{{$user->realname}}">
      </div>
   </div>
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">性别:</label>
      <div class="col-sm-5">
         <input type="text"  name="gender" class="form-control" id="firstname" 
            value="{{$user->gender}}">
      </div>
   </div>
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">身份证/护照</label>
      <div class="col-sm-5">
         <input type="text"  name="idnum"class="form-control" id="firstname" 
            value="{{$user->idnum}}">
      </div>
   </div>
<div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">个人简历:</label>
      <div class="col-sm-5">
         <input type="text"  name="intro" class="form-control" id="firstname" 
            value="{{$user->intro}}">
      </div>
   </div>
<div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">目前身份</label>
      <div class="col-sm-5">
            @if($user->edu==0)
                大专毕业
                 @elseif($user->edu==1)
                本科毕业
                @elseif($user->edu==2)
                研究生毕业
                @elseif($user->edu==3)
                博士毕业
                @elseif($user->edu==4)
                博士导师
            @endif
         
      </div>
   </div>
<div class="form-group">
      <div></div>
      <label for="firstname" class="col-sm-2 control-label">联系方式</label>
   </div>

<div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">手机:</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" name="mobile" id="firstname" 
            value="{{$user->mobile}}">
      </div>
   </div>
<div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">email:</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="firstname"  name="email"
            value="{{$user->email}}">
      </div>
   </div>


   <div class="form-group">
      <label for="lastname" class="col-sm-2 control-label">审核:</label>
      <div class="col-sm-5">
            <select name="checkinfo" class="form-control">
                <option selected="selected" value=0 >未审核</option>
                <option value=1>审核通过</option>
                <option value=2 >审核拒绝</option>
            </select>
      </div>
   </div>
  {!! csrf_field() !!}
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
       
         <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> 提交</button>
      </div>
   </div>
</form>
@endsection