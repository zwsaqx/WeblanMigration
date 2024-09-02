@extends('layouts.app')

@section('content')
    <div class="darkBlueTextJumbo" align="center">Wireless LAN Modelling</div>
    <br />
    <form id="wirelessLanForm" action="{{ route('generate.model') }}" method="post">
        @csrf
        <table align="center" cellpadding="3" class="NormalText" width="600">
            <tr>
                <td width="150">Topology</td>
                <td width="450">
                    <select name="selTopology">
                        <option value="2" {{ old('selTopology') == 2 ? 'selected' : '' }}>Ad Hoc</option>
                        <option value="1" {{ old('selTopology') == 1 ? 'selected' : '' }}>Infrastructure</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="150">Workstations</td>
                <td width="450">
                    <select name="selWorkstations">
                        @for ($i = 1; $i <= 15; $i++)
                            <option value="{{ $i }}" {{ old('selWorkstations') == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </select>
                </td>
            </tr>
            <tr>
                <td width="150">PDAs</td>
                <td width="450">
                    <select name="selPDAs">
                        @for ($i = 1; $i <= 15; $i++)
                            <option value="{{ $i }}" {{ old('selPDAs') == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </select>
                </td>
            </tr>
            <tr>
                <td width="150">Printers</td>
                <td width="450">
                    <select name="selPrinters">
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}" {{ old('selPrinters') == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="btnGenerate" value="Generate Model..."></td>
            </tr>
            <tr>
                <td colspan="2">The model will open in a new window, please enable JavaScript popup for this site.</td>
            </tr>
        </table>
    </form>

    <script>
        document.getElementById('wirelessLanForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    }
                })
                .then(response => response.json())
                .then(data => {
                    window.open(data.url, '_blank');
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
@endsection
