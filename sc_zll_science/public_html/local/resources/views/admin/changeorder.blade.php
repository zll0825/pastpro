@extends('layouts.admin_comm')
@section('content')

<form class="form-horizontal" role="form" method="post">
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">订单信息</label>
   </div>
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">联系人</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="firstname" 
            value="{{$change->customername}}">
      </div>
   </div>
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">联系人电话:</label>
      <div class="col-sm-5">
         <input type="text" name="customermobile" class="form-control" id="firstname" 
            value="{{$change->customermobile}}">
      </div>
   </div>
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">订单号</label>
      <div class="col-sm-5">
         <input type="text"  name="oid" class="form-control" id="firstname" 
            value="{{$change->oid}}">
      </div>
   </div>
<div class="form-group">
      <label for="firstname"  name="address"class="col-sm-2 control-label">上课地址:</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="firstname" 
            value="{{$change->address}}">
      </div>
   </div>
<div class="form-group">
      <label for="firstname"  class="col-sm-2 control-label">辅导科目:</label>
      <div class="col-sm-5">
         <input type="text"  name="subject" class="form-control" id="firstname" 
            value="{{$change->subject}}">
      </div>
   </div>
<div class="form-group">
      <div></div>
      <label for="firstname" class="col-sm-2 control-label">教师编号</label>
      <div class="col-sm-5">
         <input type="text"  name="tid"class="form-control" id="firstname" 
            value="{{$change->tid}}">
      </div>
   </div>

<div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">订单状态:</label>
      <div class="col-sm-5">
         <select name="status" id="" class="form-control">
                                <option value="1" selected > 已预定</option>
                                <option value="2">授课中</option>
                                <option value="3">已接客</option>
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