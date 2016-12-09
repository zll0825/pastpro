@extends('layouts.admin_comm')
@section('content')

        <div id="leftside">
                <div class="panel panel-success">
                    <div class="panel-heading">
                    <h2 class="panel-title">当前位置<small>后台管理中心</small></h2>
                    </div>
                </div>
                
        </div>
    			
 
        
        
  <form action="" method ='post'>
        <table class="table table-default">
            {!!csrf_field() !!}
          
            <thead>
                <tr>
                    <th>当前身份</th>
                </tr>
                <tr>
                    <td>
                       
                     超级管理员</td>
                </tr>
                <tr>
                    <td>添加新用户</td>
                </tr>
                <tr>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>新用户密码</td>
                </tr>
                <tr>
                    <td><input  name="password" id ="password" type="password"></td>
                </tr>
                <tr>
                    <td>选择角色</td>
                </tr>
                <tr>
                    <td>
                        <select name="role_id" id="">
                            <option value="0">请选择角色</option>
                            <option value="1">管理员</option>
                            <option value="2">经理</option>
                            <option value="3">员工</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit"  value ="提交"></td>
                </tr>
            </thead>

        </table>
 </form>
@endsection
          

 