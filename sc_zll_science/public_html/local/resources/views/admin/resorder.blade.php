@extends('layouts.admin_comm')
@section('content')

<style>
    .pagination li{
    float:left;
    width:40px;
    height:20px;
    color:#856b31;
    border:1px solid transparent;
    text-align: center;
    font-size: 14px;
    background:white;
    }
    .pagination{
        margin:5px 5px 5px 200px;
    }
    .pagination .active{       
        font-weight: bolder;
        background:#ffebcd;
    }
    .pagination :hover{        
       
        font-weight: bold;
        background:burlywood;
    }

</style>
         <div id="leftside">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                        <h2 class="panel-title">当前位置<small> __订单跟踪</small></h2>
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
                            <th style="font-size:26px;">授课老师</th>
                            <th style="font-size:26px;">授课地址</th>
                            <th style="font-size:26px;">状态</th>
                            <th style="font-size:26px;">操作</th>
                        </tr>
                     </thead> 
                     <tbody>
                         
                            @foreach($res as $r)
                            <tr class="active">
                                <td>{{$r->oid }}</td>
                                <td>{{$r->sid}}</td>
                                <td>{{$r->subject}}</td>
                                <td>{{$r->tid}}</td>
                                <td>{{ $r->address }}</td>

                                
                                <td>
                                @if($r->status ==1)
                                已预定
                                @elseif($r->status ==2)
                                授课中
                                @endif
                                </td>
                                <td >
                                    <a href="{{ url('changeorder',[$r->oid]) }}" style="color:white;">
                                        <button type="button" class="btn btn-success active" style="color: rgb(212, 106, 64);">
                                            <span class="glyphicon glyphicon-search">
                                            </span>
                                            修改状态
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                     </tbody>  
            </table>
        </div>
@endsection

       