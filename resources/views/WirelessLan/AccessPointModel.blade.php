<!-- resources/views/WirelessLan/AccessPointModel.blade.php -->

<!DOCTYPE html>
@auth
    <html lang="en">

    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>

            @extends('layouts.app')

            <table width="500" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td colspan="2"><b>Summary</b></td>
                </tr>
                <tr>
                    <td width="200">Topology :</td>
                    <td width="300" align="left">Infrastructure</td>
                </tr>
                <tr>
                    <td>Mobile Workstations:</td>
                    <td align="left">{{ session('accessPoint.mobileWorkstations') }}</td>
                </tr>
                <tr>
                    <td>PDAs :</td>
                    <td align="left">{{ session('accessPoint.pdas') }}</td>
                </tr>
                <tr>
                    <td>Printers :</td>
                    <td align="left">{{ session('accessPoint.printers') }}</td>
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
            connecting this network up, press the "F5" button or click <input type="button" value="Refresh" class="button2"
                onClick="refresh();">.
            <br /><br />
            Once you have finished viewing the model, click <input type="button" value="close" class="button2"
                onClick="javascript:window.close();">
            <br /><br />
            <table width="747" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td> </td>
                    <td colspan="4" rowspan="5" valign="bottom"><img
                            src="{{ asset('Images/Data/Dedicated Servers.png') }}" width="296" height="259" /></td>
                    <td> </td>
                    <td colspan="4" align="right" valign="bottom"><img src="{{ asset('Images/Data/BSS.png') }}"
                            alt="" width="311" height="27" /></td>
                    <td> </td>
                    <td width="96" rowspan="11" align="center" valign="middle"><img
                            src="{{ asset('Images/Data/ESS.png') }}" width="31" height="665" /></td>
                </tr>
                <tr>
                    <td width="39"> </td>
                    <td width="39"> </td>
                    <td width="78" align="right" valign="bottom">{!! $deviceLayout[11] !!}</td>
                    <td width="78" align="center" valign="bottom">{!! $deviceLayout[17] !!}</td>
                    <td width="78" align="center" valign="bottom">{!! $deviceLayout[2] !!}</td>
                    <td width="77" valign="bottom">{!! $deviceLayout[23] !!}</td>
                    <td width="12"> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td align="right">{!! $deviceLayout[26] !!}</td>
                    <td colspan="2" rowspan="3" align="center" valign="bottom">{!! $accessPoint3 !!}</td>
                    <td>{!! $deviceLayout[8] !!}</td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td align="right">{!! $deviceLayout[14] !!}</td>
                    <td>{!! $deviceLayout[20] !!}</td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td align="right">{!! $deviceLayout[5] !!}</td>
                    <td>{!! $deviceLayout[29] !!}</td>
                    <td> </td>
                </tr>
                <tr>
                    <td colspan="11"><img src="{{ asset('Images/Data/backbone_new.png') }}" alt="" width="692"
                            height="181" /></td>
                </tr>
                <tr>
                    <td> </td>
                    <td width="78" align="right">{!! $deviceLayout[9] !!}</td>
                    <td colspan="2" rowspan="3" align="center" valign="top">{!! $accessPoint1 !!}</td>
                    <td width="77" align="left">{!! $deviceLayout[21] !!}</td>
                    <td> </td>
                    <td align="right">{!! $deviceLayout[10] !!}</td>
                    <td colspan="2" rowspan="3" align="center" valign="top">{!! $accessPoint2 !!}</td>
                    <td align="left">{!! $deviceLayout[22] !!}</td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td align="right">{!! $deviceLayout[24] !!}</td>
                    <td align="left">{!! $deviceLayout[6] !!}</td>
                    <td> </td>
                    <td align="right">{!! $deviceLayout[25] !!}</td>
                    <td align="left">{!! $deviceLayout[7] !!}</td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td align="right">{!! $deviceLayout[12] !!}</td>
                    <td align="left">{!! $deviceLayout[18] !!}</td>
                    <td> </td>
                    <td align="right">{!! $deviceLayout[13] !!}</td>
                    <td align="left">{!! $deviceLayout[19] !!}</td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td align="right" valign="top">{!! $deviceLayout[3] !!}</td>
                    <td width="78" align="center" valign="top">{!! $deviceLayout[15] !!}</td>
                    <td width="78" align="center" valign="top">{!! $deviceLayout[0] !!}</td>
                    <td align="left" valign="top">{!! $deviceLayout[27] !!}</td>
                    <td> </td>
                    <td align="right" valign="top">{!! $deviceLayout[4] !!}</td>
                    <td align="center" valign="top">{!! $deviceLayout[16] !!}</td>
                    <td align="center" valign="top">{!! $deviceLayout[1] !!}</td>
                    <td align="left" valign="top">{!! $deviceLayout[28] !!}</td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td colspan="4" align="right" valign="top"><img src="{{ asset('Images/Data/BSS.png') }}"
                            width="311" height="27" /></td>
                    <td> </td>
                    <td colspan="4" align="right" valign="top"><img src="{{ asset('Images/Data/BSS.png') }}"
                            alt="" width="311" height="27" /></td>
                    <td> </td>
                </tr>
            </table>

        </div>
    </body>
    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
