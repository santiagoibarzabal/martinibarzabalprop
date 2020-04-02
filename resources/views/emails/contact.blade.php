@component('mail::message')

# Gracias por contactarnos

Te estaremos llamando para iniciar la gestión. 

Hemos recibido la siguiente consulta:

- Nombre: {{$email->name}}
- Email: {{$email->email}}
- Telefono: {{$email->phone}}
- Mensaje: {{$email->question}}

¡Muchas gracias por tu interés! 

@component('mail::button', ['url' => 'https://ibarzabal.com'])
    Volver al sitio
@endcomponent

@endcomponent
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Recibiste un nuevo mensaje de Contacto de parte de {{$email->name}} </p>
    <ul>
        <li>
            Nombre: <br> {{$email->name}}
        </li>
        <li>
            Telefono: <br> {{$email->phone}}
        </li>
        <li>
            Email: <br> {{$email->email}}
        </li>
        <li>
            Consulta: <br> {{$email->question}}
        </li>
    </ul>
</body>
</html> --}}