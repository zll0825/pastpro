@extends('muban')

@section('body')



        <!--右侧内容-->
        <div class="right" style="width: 750px;">
            <div class="atitle">
                个人信息 | <a href="{{url('/ucenter/infoedit/'.$data->uid)}}">修改</a></div>
               <div class="abox">
                <table width="100%" height="125" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr class="titlebg">
                            <td height="25" align="center">
                                <table width="100%" height="27" border="0" cellpadding="0" cellspacing="1" bgcolor="#BFD3F2">
                                    <tbody>
                                        <tr class="titlebg">
                                            <td height="25" align="center" valign="middle" bgcolor="#E5F3FA">
                                                <strong>个 人 信 息</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle" height="25" align="center">
                                <table width="100%" border="0" align="left" cellpadding="5" cellspacing="1" bordercolor="#ffffff" bgcolor="#BFD3F2">
                                    <tbody>
                                        <tr class="trbgc">
                                            <td width="150px;" height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                真实姓名：
                                            </td>
                                            <td height="25" colspan="3" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="zsxm">{{$data->name}}</span>
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                性别：
                                            </td>
                                            <td width="31%" height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="xb">{{$data->gender}}</span>
                                            </td>
                                            <td width="14%" align="right" valign="middle" bgcolor="#FFFFFF">
                                                身份证/护照:
                                            </td>
                                            <td width="42%" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="sfzh">{{$data->idnum}}</span>
                                            </td>
                                        </tr>

                                        
                                        <tr class="trbgc">
                                            <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">
                                                年龄：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="lzsf">{{$data->age}}</span>
                                                &nbsp;
                                            </td>
                                            <td align="right" valign="middle" bgcolor="#FFFFFF">
                                                学历：
                                            </td>
                                            <td align="left" valign="middle" bgcolor="#FFFFFF">
                                                <span id="mqsf">@if($data->edu == 1)
                                                    小学
                                                    @elseif($data->edu == 2)
                                                    初中
                                                    @elseif($data->edu == 3)
                                                    高中
                                                    @elseif($data->edu == 4)
                                                    本科
                                                    @elseif($data->edu == 5)
                                                    研究生
                                                    @elseif($data->edu == 6)
                                                    博士
                                                    @endif</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle" height="25" align="left">
                                
                                <table width="100%" border="0" cellpadding="5" cellspacing="1" bordercolor="#ffffff" bgcolor="#BFD3F2">
                                    <tbody>
                                      
                                        <tr class="trbgc1">
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                电 话/手 机：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                {{$data->mobile}}
                                            </td>
                                        </tr>
                                        <tr class="trbgc1">
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                E_mail：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                               {{$data->email}}
                                            </td>
                                        </tr>
                                        <tr class="trbgc">
                                            <td height="25" align="left" width=90 valign="middle" bgcolor="#FFFFFF">
                                                住址：
                                            </td>
                                            <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
                                                {{$data->address}}
                                            </td>
                                            
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        
                        <tr>
                            <td valign="top" height="25" align="left">
                                <table width="100%" border="0" cellpadding="5" cellspacing="1" bordercolor="#ffffff" bgcolor="#BFD3F2">
                                    <tbody> 
                                        @if($data->role==1)
                                        <tr class="trbgc">
                                            <td width="20%" height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                               可教授科目
                                            </td>
                                            <td colspan=3 width="34%" align="center" valign="middle" bgcolor="#FFFFFF">
                                                    {{$data->goodat}}
                                                <input type="hidden" name="first_subject">
                                            </td>
                                        </tr>
                                        @endif
                                        <tr class="trbgc1">
                                            <td width="20%" height="30" align="center" valign="middle" bgcolor="#FFFFFF">
                                                自我描述<br>
                                                特长展示
                                            </td>
                                            <td height="40" align="left" valign="middle" bgcolor="#FFFFFF">
                                                {{$data->intro}}
                                            </td>
                                        </tr>
                                        
                                       
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection('body')