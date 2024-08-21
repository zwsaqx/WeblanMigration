<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WirelesslanController extends Controller
{
    public function generateModel(Request $request)
    {
        $request->validate([
            'selTopology' => 'required|integer',
            'selWorkstations' => 'required|integer',
            'selPDAs' => 'required|integer',
            'selPrinters' => 'required|integer',
        ]);

        switch ($request->input('selTopology')) {
            case 1:
                session()->forget('accessPoint');
                session([
                    'accessPoint.mobileWorkstations' => (int) $request->input('selWorkstations'),
                    'accessPoint.pdas' => (int) $request->input('selPDAs'),
                    'accessPoint.printers' => (int) $request->input('selPrinters'),
                ]);
                $url = route('wireless.access.point.model');
                break;
            case 2:
                session()->forget('adHoc');
                session([
                    'adHoc.mobileWorkstations' => (int) $request->input('selWorkstations'),
                    'adHoc.pdas' => (int) $request->input('selPDAs'),
                    'adHoc.printers' => (int) $request->input('selPrinters'),
                ]);
                $url = route('wireless.ad.hoc.model');
                break;
        }

        return response()->json(['url' => $url]);
    }

    public function showAccessPointModel()
    {
        $deviceLayout = array_fill(0, 34, "<img src='" . asset('Images/Wireless/spacer.gif') . "'>");
        $totalDevices = 0;
        $accessPoint1 = "none";
        $accessPoint2 = "none";
        $accessPoint3 = "none";

        if (session()->has('accessPoint')) {
            $workstation = "<img src='" . asset('Images/Wireless/laptop.gif') . "'>";
            $pda = "<img src='" . asset('Images/Wireless/pda.gif') . "'>";
            $printer = "<img src='" . asset('Images/Wireless/printer.gif') . "'>";

            $devices = [];
            $totalDevices = session('accessPoint.mobileWorkstations', 0) + session('accessPoint.pdas', 0) + session('accessPoint.printers', 0);

            if (session('accessPoint.mobileWorkstations') > 0) {
                $devices[1] = session('accessPoint.mobileWorkstations');
            }
            if (session('accessPoint.pdas') > 0) {
                $devices[2] = session('accessPoint.pdas');
            }
            if (session('accessPoint.printers') > 0) {
                $devices[3] = session('accessPoint.printers');
            }

            for ($i = 0; $i < $totalDevices; $i++) {
                $index = array_rand($devices);
                switch ($index) {
                    case 1:
                        $devices[$index]--;
                        if ($devices[$index] == 0) {
                            unset($devices[$index]);
                        }
                        $deviceLayout[$i] = $workstation;
                        break;
                    case 2:
                        $devices[$index]--;
                        if ($devices[$index] == 0) {
                            unset($devices[$index]);
                        }
                        $deviceLayout[$i] = $pda;
                        break;
                    case 3:
                        $devices[$index]--;
                        if ($devices[$index] == 0) {
                            unset($devices[$index]);
                        }
                        $deviceLayout[$i] = $printer;
                        break;
                }
            }

            if ($totalDevices % 3 == 0) {
                $accessPoint1 = "<img src='" . asset('Images/Data/AP_Up_' . $totalDevices / 3 . '.png') . "'>";
                $accessPoint2 = "<img src='" . asset('Images/Data/AP_Up_' . $totalDevices / 3 . '.png') . "'>";
                $accessPoint3 = "<img src='" . asset('Images/Data/AP_Down_' . (int)($totalDevices / 3) . '.png') . "'>";
            } elseif ($totalDevices % 3 == 1) {
                $accessPoint1 = "<img src='" . asset('Images/Data/AP_Up_' . (int)($totalDevices / 3 + 1) . '.png') . "'>";
                $accessPoint2 = "<img src='" . asset('Images/Data/AP_Up_' . (int)($totalDevices / 3) . '.png') . "'>";
                $accessPoint3 = "<img src='" . asset('Images/Data/AP_Down_' . (int)($totalDevices / 3) . '.png') . "'>";
            } elseif ($totalDevices % 3 == 2) {
                $accessPoint1 = "<img src='" . asset('Images/Data/AP_Up_' . (int)($totalDevices / 3 + 1) . '.png') . "'>";
                $accessPoint2 = "<img src='" . asset('Images/Data/AP_Up_' . (int)($totalDevices / 3 + 1) . '.png') . "'>";
                $accessPoint3 = "<img src='" . asset('Images/Data/AP_Down_' . (int)($totalDevices / 3) . '.png') . "'>";
            }
        }

        return view('WirelessLan.AccessPointModel', compact('deviceLayout', 'totalDevices', 'accessPoint1', 'accessPoint2', 'accessPoint3'));
    }

    public function showAdHocModel()
    {
        $deviceLayout = array_fill(0, 30, " ");
        $totalDevices = 0;
        $accessPoint1 = "none";
        $accessPoint2 = "none";

        if (session()->has('adHoc')) {
            $workstation = "<img src='" . asset('Images/Wireless/laptop.gif') . "'>";
            $pda = "<img src='" . asset('Images/Wireless/pda.gif') . "'>";
            $printer = "<img src='" . asset('Images/Wireless/printer.gif') . "'>";

            $devices = [];
            $totalDevices = session('adHoc.mobileWorkstations', 0) + session('adHoc.pdas', 0) + session('adHoc.printers', 0);

            if (session('adHoc.mobileWorkstations') > 0) {
                $devices[1] = session('adHoc.mobileWorkstations');
            }
            if (session('adHoc.pdas') > 0) {
                $devices[2] = session('adHoc.pdas');
            }
            if (session('adHoc.printers') > 0) {
                $devices[3] = session('adHoc.printers');
            }

            for ($i = 0; $i < $totalDevices; $i++) {
                $index = array_rand($devices);
                switch ($index) {
                    case 1:
                        $devices[$index]--;
                        if ($devices[$index] == 0) {
                            unset($devices[$index]);
                        }
                        $deviceLayout[$i] = $workstation;
                        break;
                    case 2:
                        $devices[$index]--;
                        if ($devices[$index] == 0) {
                            unset($devices[$index]);
                        }
                        $deviceLayout[$i] = $pda;
                        break;
                    case 3:
                        $devices[$index]--;
                        if ($devices[$index] == 0) {
                            unset($devices[$index]);
                        }
                        $deviceLayout[$i] = $printer;
                        break;
                }
            }

            if ($totalDevices <= 11) {
                $accessPoint1 = "AP1";
            } else {
                $accessPoint1 = "AP1";
                $accessPoint2 = "AP2";
            }
        }

        return view('WirelessLan.AdHocModel', compact('deviceLayout', 'totalDevices', 'accessPoint1', 'accessPoint2'));
    }
}
