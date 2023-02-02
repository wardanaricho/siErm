<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>no rm</th>
            <th>nama</th>
        </tr>
        @foreach ($pasiens as $pasien)
            <tr>
                <td>
                    <a href="/dummyPasien/{{ $pasien->no_rkm_medik }}">
                        {{ $pasien->no_rkm_medik }}
                    </a>
                </td>
                <td>{{ $pasien->nama }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
