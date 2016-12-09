@extends('layouts.admin_comm')

   
@section('content')

    
     <div id="leftside">
            <div class="panel panel-success">
                <div class="panel-heading">
                <h2 class="panel-title">当前位置<small> __未审核订单列表</small></h2>
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
                            <th style="font-size:26px;">操作</th>
                        </tr>
                </thead> 
                <tbody>
                         
                            @foreach($orders as $ord)
                            <tr >
                                <td>{{$ord->onum}}</td>
                                <td>{{$ord->oid}}</td>
                                <td>{{$ord->subject}}</td>
                                <td>{{$ord->address}}</td>
                                <td>{{date('Y/m/d',$ord->pubtime)}}</td>
                                <td >
                                    <a href="{{  url('checkorder',[$ord->oid])  }}" >
                                        <button type="submit" class="btn btn-success active" style="">
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                               审核
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                </tbody>  
        </table>
    </div>

@endsection




