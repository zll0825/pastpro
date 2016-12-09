@extends('layouts.admin_comm')
@section('content')
<table class="table table-hover table-bordered" style="width:1000px; margin:0 auto">

   <thead>
      <tr>
         <th>学员编号</th>
         <th>教员编号</th>

         <th>教学科目</th>
         <th>结课时间</th>
         <th>教学心得</th>
         <th>查看教员案例</th>
         <th>查看学生案例</th>
      </tr>
   </thead>
   <tbody>
   @foreach($exams as $ex)
     <tr>
         <td>{{$ex->sid}}</td>
         <td>{{$ex->tid}}</td>
         <td>{{$ex->subject}}</td>
         <td>{{date('Y/m/d',$ex->pubtime) }}</td>
         <td>@if($ex->comment=='')
                                <a href="{{url('addcom',[$ex->eid])}}">添加</a>
                                    @else
                                    {{$ex->comment}}
                                    @endif</td>
         <td><a href="{{url('/teaexample',[$ex->tid])}}">查看该教员案例</a> </td>
         <td><a href="{{url('/stuexample',[$ex->sid])}}">查看该学生案例</a> </td>
     </tr>
     @endforeach 
   </tbody>
</table>
@endsection