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
                <h2 class="panel-title">当前位置<small> __用户审核中心</small></h2>
                </div>
            </div>
            
        </div>

        <div id="rightside">
            <h4>最新学员需求</h4>
       
                
            <table class="table table-hover table-bordered" style="font-size:16px;" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                     <thead> 
                        <tr>
                            <th style="font-size:26px;">用户姓名</th>
                            <th style="font-size:26px;">性别</th>
                            <th style="font-size:26px;">年龄</th>
                            <th style="font-size:26px;">电话号码</th>
                            <th style="font-size:26px;">审核状态</th>
                            <th style="font-size:26px;">注册时间</th>
                            <th style="font-size:26px;">用户审核</th>
                        </tr>
                     </thead> 
                     <tbody>
                         
                            @foreach($users as $user)
                            <tr class="active">
                                <td>{{$user->name}}</td>
                                <td>{{$user->gender}}</td>
                                <td>{{$user->age}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>
                                    @if($user->checkinfo==0)
                                    未审核
                                    @elseif($user->checkinfo==1)
                                    已审核
                                    @endif
                            </td>
                            <td>{{date('Y/m/d',$user->regtime)}}</td>
                                <td >
                                    <!-- <a href="{{  url('checkinfo',[$user->uid])  }}" >立即审核</a> -->
                                    <a href="{{  url('checkinfo',[$user->uid])  }}" >
                                        <button type="button" class="btn btn-success active" >
                                        <span class="glyphicon glyphicon-search" style="color: rgb(212, 106, 64);">
                                            
                                        </span style="color:white">
                                        立即审核
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                     </tbody>  
            </table>
         </div>

@endsection




