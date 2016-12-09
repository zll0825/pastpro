@extends('muban')

@section('body')



        <!--右侧内容-->
        <div class="right" style="width: 750px;">
            <div class="atitle">
                欢迎登录</div>
            <div class="abox">
                <table border="0" cellpadding="0" cellspacing="0" height="176" width="100%">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" width="173">
                                <table border="0" cellpadding="0" cellspacing="0" height="144" width="127">
                                    <tbody>
                                        <tr>
                                            <td align="center" valign="middle">
                                                <img src="{{$data->photo}}" id="zp" height="145" width="115">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td align="left" valign="middle" width="410">
                                <table border="0" cellpadding="1" cellspacing="1" width="431">
                                    <tbody>
                                        <tr>
                                            <td width="83" height="25" align="left" valign="middle" class="color_orage">
                                                登录名：
                                            </td>
                                            <td align="left" height="25" valign="middle" width="320">
                                                <span id="Label1">{{$data->name}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" height="24" valign="middle">
                                                用户ID：
                                            </td>
                                            <td align="left" height="24" valign="middle">
                                                <span id="Label2">{{$data->uid}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25" align="left" valign="middle" class="color_green">
                                                用户姓名：
                                            </td>
                                            <td align="left" height="25" valign="middle">
                                                <span id="Label3">{{$data->realname}}</span>
                                            </td>
                                        </tr>
                                        @if($data->edu != 0)
                                        <tr>
                                            <td align="left" height="25" valign="middle">
                                                用户学历：
                                            </td>
                                            <td align="left" height="25" valign="middle">
                                                <span id="Label4">
                                                    @if($data->edu == 1)
                                                    大专
                                                    @elseif($data->edu == 2)
                                                    本科
                                                    @elseif($data->edu == 3)
                                                    研究生
                                                    @elseif($data->edu == 4)
                                                    博士
                                                    @endif
                                                </span>
                                            </td>
                                        </tr>
                                                    @endif

                                                    @if($data->role == 1)
                                        <tr>
                                            <td align="left" height="25" valign="middle">
                                                身份验证：
                                            </td>
                                            <td align="left" height="25" valign="middle">
                                                <span id="Label5"><?php 
                                                    if($data->checkinfo == 0){
                                                        echo '未审核';
                                                    }elseif($data->checkinfo == 1 && $data->checkmail ==0){
                                                        echo '已审核';
                                                    }elseif($data->checkinfo == 1 && $data->checkmail ==1){
                                                        echo '已审核';
                                                    }
                                                ?>
                                                </span>
                                            </td>
                                        </tr>

                                        @endif
                                       
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="abox">
                <ul class="list">
                    
                            <li>VIP教员规则（必看）</li>
                        
                            <li>尚才家教网迁址公告！！</li>
                        
                            <li>在线付款使用指南！</li>
                        
                            <li>尚才家教教员交流QQ群！</li>
                        
                            <li>尚才家教网恭祝您2012年新年快乐！</li>
                        
                            <li>请教员更新自己的住址！！</li>
                        
                            <li>《《 教员接单流程 》》</li>
                        
                            <li>汇款接单手续</li>
                        
                            <li>做家教收费标准</li>
                        
                            <li>普通预约学员</li>
                        
                            <li>●寒假不回家的教员看这里！！</li>
                        
                            <li>享有优先权规则（必看）</li>
                        
                            <li>家教试讲成功后注意事项！</li>
                        
                            <li>北京市中小学介绍（参考）</li>
                        
                            <li>做星级教员，你也可以！</li>
                        
                            <li>尚才家教教员管理系统使用帮助！</li>
                        
                </ul>
            </div>
        </div>
    </div>
@endsection('body')