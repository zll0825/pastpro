@extends('layouts.admin_comm')
@section('content')


<form class="form-horizontal" role="form" method="post">
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">联系方式</label>
   </div>
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">联系人:</label>
      <div class="col-sm-5">
         <input type="text" class="form-control"  name="customername"id="firstname" 
            value="{{$order->customername }}">
      </div>
   </div>
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">移动电话:</label>
      <div class="col-sm-5">
         <input type="text" class="form-control"  name="cunstomermobile"id="firstname" 
            value="{{$order->customermobile}}">
      </div>
   </div>
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">授课地区详细描述</label>
      <div class="col-sm-5">
         <textarea name="address" id="" class="form-control" cols="30" rows="4">
           {{$order->address}}
         </textarea>
      </div>
   </div>
<div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">学员基本信息</label>

   </div>
<div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">学员年级:</label>
      <div class="col-sm-5">
            <select name="style" id="xynj" class="form-control">
                                <option selected="selected" value="">请选择</option>
                                <option 
                                @if( $order->style==1 )  
                                selected 
                                @endif 
                                value="1">小学 </option>
                                <option 
                                @if( $order->style==2 )  
                                selected 
                                @endif 
                                value="2">中学 </option>
                                <option 
                                @if( $order->style==3)  
                                selected 
                                @endif 
                                value="3">高中 </option>
                                
            </select>
         
      </div>
   </div>
<div class="form-group">
      <div></div>
      <label for="firstname" class="col-sm-2 control-label">辅导科目:</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" name="subject"  id="firstname" 
            value="{{$order->subject}}">
      </div>
      
   </div>

<div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">需求:</label>
      <div class="col-sm-5">
         <textarea name="requirement" id="" class="form-control" cols="30" rows="4">
           {{$order->requirement}}
         </textarea>
      </div>
   </div>
<div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">审核:</label>
      <div class="col-sm-5">
         <select name="checkstate" id="" class="form-control">
                             <option value="0" selected >未审核</option>
                             <option value="1">已审核</option>
                             <option value="2">审核不通过</option>
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