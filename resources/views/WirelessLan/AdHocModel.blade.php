<!-- resources/views/WirelessLan/AdHocModel.blade.php -->
@extends('layouts.app')


@section('content')
    <table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="2"><b>Summary</b></td>
        </tr>
        <tr>
            <td width="200">Topology :</td>
            <td width="300" align="left">Ad Hoc</td>
        </tr>
        <tr>
            <td>Mobile Workstations:</td>
            <td align="left">{{ session('adHoc.mobileWorkstations') }}</td>
        </tr>
        <tr>
            <td>PDAs :</td>
            <td align="left">{{ session('adHoc.pdas') }}</td>
        </tr>
        <tr>
            <td>Printers :</td>
            <td align="left">{{ session('adHoc.printers') }}</td>
        </tr>
    </table>
    <br />
    <script>
        var sURL = unescape(window.location.pathname + "?fuseaction={{ request()->query('fuseaction') }}");

        function refresh() {
            window.location.href = sURL;
        }
    </script>
    There are many ways of connecting up a network. To see a different way of<br>
    connecting this network up, press the "F5" button or click <input type="button" value="Refresh" onClick="refresh();">.
    <br /><br />
    Once you have finished viewing the model, click <input type="button" value="Close"
        onClick="javascript:window.close();">
    <br /><br />
    <table border="0" spacing="0" padding="0">
        <tr>
            <td width="60">{!! $deviceLayout[0] !!}</td>
            <td width="60" align="center">
                @if ($totalDevices >= 2)
                    <img src="{{ asset('Images/Wireless/comm_horiz.gif') }}">
                @else
                @endif
            </td>
            <td width="60">{!! $deviceLayout[1] !!}</td>
            <td width="60" align="center">
                @if ($totalDevices >= 5)
                    <img src="{{ asset('Images/Wireless/comm_horiz.gif') }}">
                @else
                @endif
            </td>
            <td width="60">{!! $deviceLayout[4] !!}</td>
            <td width="60" align="center">
                @if ($totalDevices >= 13)
                    <img src="{{ asset('Images/Wireless/comm_horiz.gif') }}">
                @else
                @endif
            </td>
            <td width="60">{!! $deviceLayout[12] !!}</td>
            <td width="60" align="center">
                @if ($totalDevices >= 21)
                    <img src="{{ asset('Images/Wireless/comm_horiz.gif') }}">
                @else
                @endif
            </td>
            <td width="60">{!! $deviceLayout[20] !!}</td>
        </tr>
        <tr>
            <td width="60" align="center">
                @if ($totalDevices >= 3)
                    <img src="{{ asset('Images/Wireless/comm_vert.gif') }}">
                @else
                @endif
            </td>
            <td width="60">
                @if ($totalDevices >= 4)
                    <img src="{{ asset('Images/Wireless/comm_slash2.gif') }}">
                @elseif ($totalDevices >= 3)
                    <img src="{{ asset('Images/Wireless/comm_slash1.gif') }}">
                @else
                @endif
            </td>
            <td width="60" align="center">
                @if ($totalDevices >= 4)
                    <img src="{{ asset('Images/Wireless/comm_vert.gif') }}">
                @else
                @endif
            </td>
            <td width="60">
                @if ($totalDevices >= 6)
                    <img src="{{ asset('Images/Wireless/comm_slash2.gif') }}">
                @elseif ($totalDevices >= 5)
                    <img src="{{ asset('Images/Wireless/comm_slash1.gif') }}">
                @else
                @endif
            </td>
            <td width="60" align="center">
                @if ($totalDevices >= 6)
                    <img src="{{ asset('Images/Wireless/comm_vert.gif') }}">
                @else
                @endif
            </td>
            <td width="60">
                @if ($totalDevices >= 14)
                    <img src="{{ asset('Images/Wireless/comm_slash2.gif') }}">
                @elseif ($totalDevices >= 13)
                    <img src="{{ asset('Images/Wireless/comm_slash1.gif') }}">
                @else
                @endif
            </td>
            <td width="60" align="center">
                @if ($totalDevices >= 14)
                    <img src="{{ asset('Images/Wireless/comm_vert.gif') }}">
                @else
                @endif
            </td>
            <td width="60">
                @if ($totalDevices >= 22)
                    <img src="{{ asset('Images/Wireless/comm_slash2.gif') }}">
                @elseif ($totalDevices >= 21)
                    <img src="{{ asset('Images/Wireless/comm_slash1.gif') }}">
                @else
                @endif
            </td>
            <td width="60" align="center">
                @if ($totalDevices >= 22)
                    <img src="{{ asset('Images/Wireless/comm_vert.gif') }}">
                @else
                @endif
            </td>
        </tr>
        <tr>
            <td width="60">{!! $deviceLayout[2] !!}</td>
            <td width="60" align="center">
                @if ($totalDevices >= 4)
                    <img src="{{ asset('Images/Wireless/comm_horiz.gif') }}">
                @else
                @endif
            </td>
            <td width="60">{!! $deviceLayout[3] !!}</td>
            <td width="60" align="center">
                @if ($totalDevices >= 6)
                    <img src="{{ asset('Images/Wireless/comm_horiz.gif') }}">
                @else
                @endif
            </td>
            <td width="60">{!! $deviceLayout[5] !!}</td>
            <td width="60" align="center">
                @if ($totalDevices >= 14)
                    <img src="{{ asset('Images/Wireless/comm_horiz.gif') }}">
                @else
                @endif
            </td>
            <td width="60">{!! $deviceLayout[13] !!}</td>
            <td width="60" align="center">
                @if ($totalDevices >= 22)
                    <img src="{{ asset('Images/Wireless/comm_horiz.gif') }}">
                @else
                @endif
            </td>
            <td width="60">{!! $deviceLayout[21] !!}</td>
        </tr>
        <tr>
            <td align="center">
                @if ($totalDevices >= 7)
                    <img src="{{ asset('Images/Wireless/comm_vert.gif') }}">
                @else
                @endif
            </td>
            <td>
                @if ($totalDevices >= 8)
                    <img src="{{ asset('Images/Wireless/comm_slash2.gif') }}">
                @elseif ($totalDevices >= 7)
                    <img src="{{ asset('Images/Wireless/comm_slash1.gif') }}">
                @else
                @endif
            </td>
            <td align="center">
                @if ($totalDevices >= 8)
                    <img src="{{ asset('Images/Wireless/comm_vert.gif') }}">
                @else
                @endif
            </td>
            <td>
                @if ($totalDevices >= 9)
                    <img src="{{ asset('Images/Wireless/comm_slash2.gif') }}">
                @elseif ($totalDevices >= 8)
                    <img src="{{ asset('Images/Wireless/comm_slash1.gif') }}">
                @else
                @endif
            </td>
            <td align="center">
                @if ($totalDevices >= 9)
                    <img src="{{ asset('Images/Wireless/comm_vert.gif') }}">
                @else
                @endif
            </td>
            <td>
                @if ($totalDevices >= 15)
                    <img src="{{ asset('Images/Wireless/comm_slash2.gif') }}">
                @elseif ($totalDevices >= 14)
                    <img src="{{ asset('Images/Wireless/comm_slash1.gif') }}">
                @else
                @endif
            </td>
            <td align="center">
                @if ($totalDevices >= 15)
                    <img src="{{ asset('Images/Wireless/comm_vert.gif') }}">
                @else
                @endif
            </td>
            <td>
                @if ($totalDevices >= 23)
                    <img src="{{ asset('Images/Wireless/comm_slash2.gif') }}">
                @elseif ($totalDevices >= 22)
                    <img src="{{ asset('Images/Wireless/comm_slash1.gif') }}">
                @else
                @endif
            </td>
            <td align="center">
                @if ($totalDevices >= 23)
                    <img src="{{ asset('Images/Wireless/comm_vert.gif') }}">
                @else
                @endif
            </td>
        </tr>
