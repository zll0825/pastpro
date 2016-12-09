@extends('layouts.admin_comm')
<style>
  /*  .pagination{height:30px;line-height:30px;text-align:right;padding-right:20px}.pagination span,.pagination a{display:inline-block;height:28px;line-height:28px;padding:0 10px;margin:0 2px;border:1px solid #ccc;border-radius:2px;vertical-align:middle}.pagination a:hover{color:#2980b9;border:1px solid #2980b9}.pagination span i,.pagination a i{display:inline-block;width:7px;height:12px;line-height:12px;font-size:0;vertical-align:middle;background:url(../image/pagination.gif) no-repeat}.pagination span.first i,.pagination a.first i{background-position:0 0;margin-right:5px}.pagination a.first:hover i{background-position:0 -13px}.pagination span.last i,.pagination a.last i{background-position:-8px 0;margin-left:5px}.pagination a.last:hover i{background-position:-8px -13px}.pagination .active{background-color:#2980b9;color:#fff;border:1px solid #2980b9}.pagination span.first,.pagination span.last{color:#999}*/
#pag{
    width: 340px;
    margin: 0 auto;
}
.pagination>li>a, .pagination>li>span{
    font-size:22px;

}


</style>
@section('content')
<div id="leftside">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h2 class="panel-title">当前位置<small> __所有用户</small></h2>
                        </div>
                    </div>
                    
        </div>

        <div id="rightside">    
            <table class="table table-hover table-bordered" style="font-size:16px;" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                     <thead> 
                        <tr>
                            <th style="font-size:26px;">用户编号</th>
                            <th style="font-size:26px;">用户名</th>
                            <th style="font-size:26px;">联系方式</th>
                            <th style="font-size:26px;">用户状态</th>
                            <th style="font-size:26px;">角色</th>
                            <th style="font-size:26px;">注册时间</th>
                           
                        </tr>
                     </thead> 
                     <tbody>
                         
                            @foreach($allusers as $all)
                            <tr class="active">
                                <td>{{$all->uid}}</td>
                                <td>{{$all->name}}</td>
                                <td>{{$all->mobile}}</td>
                              
                                <td>
                                    @if($all->role==2)
                                    学生无需审核
                                    @elseif($all->role==1 && $all->checkinfo==0)
                                    未审核
                                    @elseif($all->role==1 && $all->checkinfo==1)
                                    已审核
                                    @endif
                                </td> 
                                <td>
                                    @if($all->role==2)
                                       学生
                                       @elseif($all->role==1)
                                       教师
                                       @endif
                                </td>
                                <td>{{date('Y/m/d',$all->regtime) }}</td>
                            </tr>
                            @endforeach
                     </tbody>  
                    
                    
            </table>
                      <div id="pag" >
                   
                      </div> 
        </div>
                          
@endsection
