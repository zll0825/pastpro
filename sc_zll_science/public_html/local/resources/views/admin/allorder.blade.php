@extends('layouts.admin_comm')
<style>
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
                        <h2 class="panel-title">当前位置<small> __所有订单</small></h2>
                        </div>
                    </div>
                    
        </div>

        <div id="rightside">    
            <table class="table table-hover table-bordered" style="font-size:16px;" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                     <thead> 
                        <tr>
                            <th style="font-size:26px;">订单号</th>
                            <th style="font-size:26px;">学员编号</th>
                            <th style="font-size:26px;">求教科目</th>
                            <th style="font-size:26px;">授课区域</th>
                            <th style="font-size:26px;">发布时间</th>
                            <th style="font-size:26px;">审核状态</th>
                            <th style="font-size:26px;">成交状态</th>
                        </tr>
                     </thead> 
                     <tbody>
                         
                            @foreach($allorders as $ord)
                            <tr class="active">
                                <td>{{$ord->onum}}</td>
                                <td>{{$ord->oid}}</td>
                                <td>{{$ord->subject}}</td>
                                <td>{{$ord->address}}</td>
                                <td>{{date('Y/m/d',$ord->pubtime) }}</td>
                                <td>
                                    @if($ord->checkstate==0)
                                        未审核
                                    @elseif($ord->checkstate==1)
                                        已审核
                                    @elseif($ord->checkstate==2)
                                        订单不合格
                                    @endif
                                </td>
                                <td id="orderstate">
                                    @if($ord->status==0)
                                        未预定
                                        @elseif($ord->status==1)
                                        已预定
                                        @elseif($ord->status==2)
                                        授课中
                                        @elseif($ord->status==3)
                                        已结课
                                        @endif
                                </td>
                            </tr>
                            @endforeach
                     </tbody>  
            </table>
            <div id="pag" >
                    
             </div> 
        </div>
@endsection
<script>
    
</script>
       